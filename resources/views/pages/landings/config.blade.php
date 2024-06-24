<x-app-layout title="Configuracion de landing">
  <div class="p-4">
    <div class="grid gap-4 gap-y-2 text-sm grid-cols-12 md:grid-cols-12">
      <div class="md:col-span-3">
        <div class="block max-w-sm p-6 bg-white rounded-lg shadow dark:bg-gray-800">
          <div class="flex items-center justify-between mb-2">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Configuración
            </h5>
            <div>
              <button id="btn-save" class="btn bg-blue-500 text-white"
                data-loading-text="<i class='fa fa-spin fa-spinner'></i>" title="Guardar cambios" tippy>
                <i class="fa fa-save"></i>
              </button>
              <button id="btn-refresh" class="btn bg-green-500 text-white" title="Refrescar previsualizacion" tippy>
                <i class="fa fa-refresh"></i>
              </button>
            </div>
          </div>

          <p class="font-normal text-gray-700 dark:text-gray-400">
            Variables de <a class="text-blue-500" href="/landing/{{ $landing->page }}" target="_blank"
              title="Ver {{ $landing->name }} en una nueva ventana" tippy>
              <i class="fa fa-link"></i>
              {{ $landing->name }}
            </a>
          </p>
          <hr class="my-2">
          <div id="variables-container" style="height: calc(100vh - 225px); overflow-y: auto">
            <div role="status" class="max-w-sm animate-pulse mt-1">
              <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-1"></div>
              <div class="h-12 bg-gray-200 rounded-lg dark:bg-gray-700 max-w-[100%] mb-2"></div>
              <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-1"></div>
              <div class="h-12 bg-gray-200 rounded-lg dark:bg-gray-700 max-w-[100%] mb-2"></div>
              <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-1"></div>
              <div class="h-12 bg-gray-200 rounded-lg dark:bg-gray-700 max-w-[100%] mb-2"></div>
              <div class="h-4 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-1"></div>
              <div class="h-12 bg-gray-200 rounded-lg dark:bg-gray-700 max-w-[100%] mb-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="md:col-span-9 relative">
        <iframe id="previewer" src="" class="block w-full bg-white rounded-lg shadow"
          style="height: calc(100vh - 100px)"></iframe>
      </div>
    </div>
  </div>
  <x-modal.button id="btn-modal-container" ref="container-modal" is-hidden></x-modal.button>
  <x-modal.content id="container-modal" title="Modificar variables del contenedor" btn-submit-text="Aceptar"
    style="max-width: 900px">
    <x-button.alternative id="btn-add-row">
      <i class="fa fa-plus"></i>
      Agregar fila
    </x-button.alternative>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400" id="table-container">
    </table>
  </x-modal.content>

</x-app-layout>

<script src="{{ asset('js/cookies.extend.js') }}"></script>
<script src="{{ asset('js/file.extend.js') }}"></script>
<script type="text/javascript">
  const token = decodeURIComponent(Cookies.get('XSRF-TOKEN'))
  let template = ''

  // Pinta la plantilla con las variables reemplazadas
  const drawReplacing = async () => {
    const data = {};
    $('#variables-container [id^="variable"]').each(function() {
      const input = $(this)
      const key = input.attr('data-name')
      const type = input.attr('data-type')

      const value = input.val()
      switch (type) {
        case 'image':
          data[key] = `${location.origin}/api/landing-settings/file/download?path=${encodeURIComponent(value)}`
          break;
        case 'container':
          const types = JSON.parse(input.attr('data-types'))
          const values = JSON.parse(value || '[]')
          if (values.length == 0) return key
          data[key] = values.map(x => {
            let base = structuredClone(key)
            for (const key in x) {
              const regex = new RegExp(`{{ $regex }}`, 'g')
              if (types[key] == 'image') {
                base = base.replace(regex,
                  `${location.origin}/api/landing-settings/file/download?path=${encodeURIComponent(x[key])}`
                )
              } else {
                base = base.replace(regex, x[key])
              }
            }
            return base
          })
          break;
        default:
          data[key] = value
          break;
      }
    })
    let newTemplate = structuredClone(template)
    for (const key in data) {
      if (!data[key]) continue
      if (Array.isArray(data[key])) {
        newTemplate = newTemplate.replace(`{[${key}]}`, data[key].join(''))
      } else {
        const regex = new RegExp(`{{ $regex }}`, 'g')
        newTemplate = newTemplate.replace(regex, data[key])
      }
    }
    const blob = new Blob([newTemplate
      .replaceAll('{[', '')
      .replaceAll(']}', '')
    ], {
      type: 'text/html'
    });
    const url = await File.toURL(blob)
    $('#previewer').attr('src', url)
  }

  const getFormElement = (setting, prefixId = 'variable', showLabel = true) => {
    switch (setting.data_type) {
      case 'longtext':
        return `<x-form.textarea id="${prefixId}-${setting.id}" data-id="${setting.id}" data-name="${setting.name}" data-type="${setting.data_type}" label="{{ '${showLabel ? setting.name : ``}' }}" rows="3">
              ${setting.value}
          </x-form.textarea>`
        break;
      case 'image':
        return `<x-form.file id="image-${prefixId}-${setting.id}" data-id="${setting.id}" data-name="${setting.name}"
            data-type="${setting.data_type}" label="{{ '${showLabel ? setting.name : ``}' }}">
            </x-form.file>
            <x-form.input type="hidden" id="${prefixId}-${setting.id}" data-id="${setting.id}"
            data-name="${setting.name}" data-type="${setting.data_type}" value="${setting.value}"/>`
        break;
      default:
        return `<x-form.input id="${prefixId}-${setting.id}" data-id="${setting.id}" data-name="${setting.name}" data-type="${setting.data_type}" label="{{ '${showLabel ? setting.name : ``}' }}" icon="fas fa-hashtag" value="${setting.value}" />`
        break;
    }
  }

  const drawForm = (settings) => {
    const container = $('#variables-container')
    container.empty()
    const parentsId = settings.filter((x) => x.parent).map((x) => x.parent);

    const filtered = settings.filter((x) => x.data_type != 'container' && !x.parent && !parentsId.includes(x.id))

    filtered.forEach(setting => {
      container.append(getFormElement(setting))
    })
    const containers = settings.filter(x => parentsId.includes(x.id))

    console.log(containers)

    if (containers.length > 0) {
      container.append('<hr class="mb-2"><p class="mb-2"><b>Contenedores</b></p>')
      containers.forEach((setting, i) => {
        const variables = settings.filter(x => x.parent == setting.id)
        const card = $(`<div id="btn-container" class="block max-w-sm p-2 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 cursor-pointer" title="Editar variables" tippy>
          <h5 class="mb-1 text-lg font-bold tracking-tight text-gray-900 dark:text-white">Contenedor ${i + 1}</h5>
          <p class="mb-1 font-normal text-gray-700 dark:text-gray-400"><span class="font-bold">Variables contenidas</span>: ${variables.map(x => x.name).join(', ')}</p>
        </div>`);

        const types = {}
        settings.filter(x => x.parent == setting.id).map(x => {
          types[x.name] = x.data_type
        })

        const input = $('<input>', {
          id: `variable-${setting.id}`,
          type: 'hidden',
          value: setting.value,
          'data-id': setting.id,
          'data-name': setting.name,
          'data-type': setting.data_type,
          'data-types': JSON.stringify(types)
        })
        card.append(input)
        card.attr('data-container', JSON.stringify(setting))
        card.attr('data-children', JSON.stringify(variables))
        card.attr('data-children', JSON.stringify(variables))

        container.append(card)
      })
    }

    tippy('[tippy]', {
      arrow: true
    })
  }

  // Obtiene la plantilla y define las variabels
  $(document).ready(async () => {
    const resTemplate = await fetch(
      `{{ route('templates.get', $landing->template_id) }}?v=${crypto.randomUUID()}`, {
        headers: {
          'X-Xsrf-Token': token
        }
      })
    template = await resTemplate.text()

    if (!resTemplate.ok) {
      location.reload()
      return
    }

    const containers = [...new Set((template.match({{ $regexContainers }}) ?? []).map(x => x
      .replaceAll('{[', '')
      .replaceAll(']}', '')
    ))]

    const variables = [...new Set((template.match({{ $regexVariables }}) ?? []).map(x => x
      .replaceAll('{{ $llavesBegin }}', '').replaceAll('{{ $llavesEnd }}', '')
    ))].filter(x => !x.startsWith('landing.') && !x.startsWith('generals.') && x != 'csrf_token')

    const settingsRes = await fetch("{{ route('landingSettings.regulate', $landing->id) }}", {
      method: 'PATCH',
      headers: {
        'Content-Type': 'application/json',
        'X-Xsrf-Token': token
      },
      body: JSON.stringify({
        containers,
        variables
      })
    })

    const {
      data: settingsData
    } = await settingsRes.json()

    drawForm(settingsData)
    drawReplacing()
  })

  // $(document).on('keyup', '[id^="variable"]', drawReplacing)
  $(document).on('change', '[id^="variable"]', drawReplacing)

  $(document).on('change', '[id^="image-variable"]', async function() {
    try {
      const file = this.files[0]
      this.value = null
      const id = $(this).attr('data-id')
      const request = new FormData()
      request.append('id', id)
      request.append('file', file)

      const res = await fetch("{{ route('landingSettings.file') }}", {
        method: 'POST',
        headers: {
          'X-Xsrf-Token': token
        },
        body: request
      })
      const data = await res.json()
      if (!res.ok) throw new Error(data?.message ?? 'Ocurrio un error al cargar el archivo')

      $(`#variable-${id}`).val(data.data.value)
      $(`#variable-${id}`).trigger('change')

      $('#btn-save').trigger('click')

      Swal.fire({
        icon: "success",
        title: "El archivo se ha cargado correctamente",
        showConfirmButton: false,
        timer: 2000
      });
    } catch (error) {
      Swal.fire({
        icon: "error",
        title: `Ocurrio un error al cargar el archivo: ${error.message}`,
        showConfirmButton: true
      });
    }
  })

  tippy('[tippy]', {
    arrow: true
  })

  $('#btn-save').on('click', async () => {
    const button = $('#btn-save')
    button.button('loading')
    try {
      const request = [...$('#variables-container [id^="variable"]')].map(e => {
        const input = $(e)
        if (!input.val()) return
        return {
          landing_id: {{ $landing->id }},
          id: Number(input.attr('data-id')) || null,
          name: input.attr('data-name'),
          value: input.val(),
          data_type: input.attr('data-type') || 'text'
        }
      }).filter(Boolean)

      const res = await fetch("{{ route('landingSettings.massive') }}", {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-Xsrf-Token': token
        },
        body: JSON.stringify(request),
      })

      const data = await res.json()

      if (!res.ok) throw new Error(data.message ?? 'Error inesperado')

      Swal.fire({
        icon: "success",
        title: "Las variables se han guardado correctamente",
        showConfirmButton: false,
        timer: 2000
      });
    } catch (error) {
      Swal.fire({
        icon: "error",
        title: `Ocurrio un error al guardar las variables de la landing: ${error.message}`,
        showConfirmButton: true
      });
    } finally {
      button.button('reset')
    }
  })

  $('#btn-refresh').on('click', drawReplacing)

  $(document).on('click', '#btn-container', function() {
    const container = JSON.parse($(this).attr('data-container'))
    const variables = JSON.parse($(this).attr('data-children'))

    const table = $('#table-container')
    table.empty()

    const values = JSON.parse($(`#variable-${container.id}`).val() || '[]')

    const thead = $('<thead>', {
      class: 'text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400'
    })
    const tbody = $('<tbody>', {
      'data-container': $(this).attr('data-container'),
      'data-children': $(this).attr('data-children')
    })

    const trHead = $('<tr>')
    variables.forEach(variable => {
      const th = $('<th>', {
        scope: 'col',
        class: 'border  px-4 py-2',
        'text': variable.name
      })
      trHead.append(th)
    })
    trHead.append('<th class="border"></th>')
    thead.html(trHead);

    ([...values, {}]).forEach(value => {
      const tr = $('<tr>', {
        class: 'bg-white border-b dark:bg-gray-800 dark:border-gray-700'
      })

      const idRelativo = crypto.randomUUID()

      variables.forEach(variable => {
        const td = $('<td>', {
          class: 'border',
          'data-name': variable.name
        }).html(getFormElement({
          ...variable,
          id: idRelativo,
          value: value?.[variable.name] ?? ''
        }, 'container-variable', false))
        tr.append(td)
      })
      const td = $('<td class="border">').append($('<button>', {
        class: 'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-md text-sm px-2 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'
      }).html('<i class="fa fa-times"></i>').on('click', () => {
        tr.remove()
      }))
      tr.append(td)
      tbody.append(tr)
    })
    table.append(thead)
    table.append(tbody)
    $('#btn-modal-container').trigger('click')
  })

  $('#btn-add-row').on('click', () => {
    const tbody = $('#table-container tbody')
    const variables = JSON.parse(tbody.attr('data-children'))

    const tr = $('<tr>', {
      class: 'bg-white border-b dark:bg-gray-800 dark:border-gray-700'
    })
    const idRelativo = crypto.randomUUID()
    variables.forEach(variable => {
      const td = $('<td>', {
        class: 'border',
        'data-name': variable.name
      }).html(getFormElement({
        ...variable,
        id: idRelativo,
        value: ''
      }, 'container-variable', false))
      tr.append(td)
    })
    const td = $('<td class="border">').append($('<button>', {
      class: 'focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-md text-sm px-2 py-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900'
    }).html('<i class="fa fa-times"></i>').on('click', () => {
      tr.remove()
    }))
    tr.append(td)
    tbody.append(tr)
  })

  $('#container-modal').on('submit', async function(e) {
    e.preventDefault()
    const container = JSON.parse($('#table-container tbody').attr('data-container'))
    const button = $(this).find('button[type="submit"]')

    try {
      const children = [...$('#table-container tbody tr')].map(e => {
        const obj = {}
        $(e).find('[id^="container-variable"]').each(function() {
          const name = $(this).attr('data-name')
          const value = $(this).val()
          obj[name] = value
        })
        let filled = false
        for (const key in obj) {
          if (obj[key]) filled = true
        }
        if (!filled) return
        return obj
      }).filter(Boolean)

      const res = await fetch("{{ route('landingSettings.update') }}", {
        method: 'PATCH',
        headers: {
          'Content-Type': 'application/json',
          'X-Xsrf-Token': token
        },
        body: JSON.stringify({
          id: container.id,
          value: JSON.stringify(children)
        })
      })

      const data = await res.json()

      $(`#variable-${container.id}`).val(JSON.stringify(children))
      $(`#variable-${container.id}`).trigger('change')
      $('#container-modal .btn-close').trigger('click');

      Swal.fire({
        icon: "success",
        title: "Las variables del contenedor se han guardado correctamente",
        showConfirmButton: false,
        timer: 2000
      });
    } catch (error) {
      Swal.fire({
        icon: "error",
        title: `Ocurrio un error al guardar las variables del contenedor de la landing: ${error.message}`,
        showConfirmButton: true
      });
    }

  })

  $(document).on('change', '[id^="image-container-variable"]', async function() {
    try {
      const file = this.files[0]
      this.value = null
      const id = $(this).attr('data-id')
      const request = new FormData()
      request.append('id', id)
      request.append('file', file)

      const parentId = $(this).attr('data-id')

      const res = await fetch("{{ route('landingSettings.file') }}", {
        method: 'POST',
        headers: {
          'X-Xsrf-Token': token
        },
        body: request
      })
      const data = await res.json()
      if (!res.ok) throw new Error(data?.message ?? 'Ocurrio un error al cargar el archivo')

      $(`#container-variable-${id}[data-type="image"]`).val(data.data.value)

      Swal.fire({
        icon: "success",
        title: "El archivo se ha cargado correctamente",
        showConfirmButton: false,
        timer: 2000
      });
    } catch (error) {
      Swal.fire({
        icon: "error",
        title: `Ocurrio un error al cargar el archivo: ${error.message}`,
        showConfirmButton: true
      });
    }
  })
</script>
