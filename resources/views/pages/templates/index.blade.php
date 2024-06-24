<x-app-layout title="Plantillas">
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <section class="py-4 border-b border-slate-100 dark:border-slate-700">
      <x-modal.button id="btn-modal" ref="templates-modal" id-hidden>
        Agregar plantilla
      </x-modal.button>
    </section>

    <x-card>
      <x-card.header>
        Lista de plantillas
      </x-card.header>
      <x-card.body>
        <table id="tabladatos" class="display text-lg" style="width:100%">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Visible</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody></tbody>
          <tfoot>
            <tr>
              <th>Nombre</th>
              <th>Descripción</th>
              <th>Visible</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
        </table>
      </x-card.body>
    </x-card>
  </div>

  <x-modal.content id="templates-modal" title="Nueva plantilla" btn-submit-text="Guardar">
    <x-form.input id="txt-id" type="hidden" />
    <x-form.input id="txt-name" label="Nombre de plantilla" required />
    <x-form.textarea id="txt-description" label="Descripcion de la plantilla" />
  </x-modal.content>

  <x-modal.button id="btn-modal-variables" ref="variables-modal" is-hidden></x-modal.button>
  <x-modal.content id="variables-modal" title="Variables y tipos" btn-submit-text="Guardar">
    <x-form.input id="txt-id3" type="hidden" />
    <x-table>
      <x-slot name="thead">
        <tr>
          <x-table.th>Variable</x-table.th>
          <x-table.th>Tipo</x-table.th>
        </tr>
      </x-slot>
      <x-slot name="tbody"></x-slot>
    </x-table>
  </x-modal.content>

  <x-modal.button id="btn-modal-content" ref="content-modal" is-hidden></x-modal.button>
  <x-modal.content id="content-modal" title="Cargar contenido" btn-submit-text="Guardar">
    <x-form.input id="txt-id2" type="hidden" />
    <x-form.input id="txt-data_type" type="hidden" />
    <x-form.file id="file" label="Contenido HTML" required />
  </x-modal.content>

  <x-modal.button id="btn-modal-preview" ref="preview-modal" is-hidden></x-modal.button>
  <x-modal.content id="preview-modal" title="Previsualizar plantilla" btn-submit-text="Aceptar" size="xxl"
    no-padding>
    <iframe id="previewer" src="/" style="width: 100%; height: calc(100vh - 175px); border: none"></iframe>
  </x-modal.content>
</x-app-layout>


<script src="{{ asset('js/cookies.extend.js') }}"></script>
<script src="{{ asset('js/file.extend.js') }}"></script>
<script type="text/javascript">
  const token = decodeURIComponent(Cookies.get('XSRF-TOKEN'))

  // DONE: Si la plantilla no esta visible debe marcarse como no visible
  const dataTable = new DataTable('#tabladatos', {
    responsive: true,
    language: {
      url: "/libs/datatables/es-ES.json"
    },
    ajax: {
      url: "{{ route('templates.list') }}",
      headers: {
        'Content-Type': 'application/json',
        'X-Xsrf-Token': token
      }
    },
    columns: [{
        data: 'name'
      },
      {
        data: 'description',
        render: (value, type, data, params) => {
          if (!data.description) return '<i class="text-gray-500">- Sin descripcion -</i>'
          else return data.description
        }
      },
      {
        data: 'visible',
        render: (value, type, data, params) => {
          const div = $('<div>')
          const input = $('<input>', {
            id: 'ck-visible',
            type: 'checkbox',
            checked: Boolean(data.visible),
            class: `check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6 before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200`,
            'data-field': 'visible',
            'data-id': data.id,
            title: 'Cambiar visibilidad',
            tippy: ''
          })
          const label = $('<label for="ck-visible">')
          div.append(input)
          div.append(label)
          return div.html()
        }
      },
      {
        data: null,
        render: (value, type, data, params) => {
          const div = $('<div>')

          const btnEdit = $('<button>', {
            id: 'btn-edit',
            class: 'bg-yellow-400 px-3 py-2 rounded text-white cursor-pointer me-1',
            'data-template': JSON.stringify(data),
            title: 'Editar plantilla',
            tippy: ''
          }).html('<i class="fa-regular fa-pen-to-square"></i>')

          const btnLoad = $('<button>', {
            id: 'btn-upload',
            class: 'bg-blue-400 px-3 py-2 rounded text-white cursor-pointer me-1',
            'data-template': JSON.stringify(data),
            title: 'Cargar contenido',
            tippy: ''
          }).html('<i class="fa fa-upload"></i>')

          const btnVariables = $('<button>', {
            id: 'btn-variables',
            class: 'bg-black px-3 py-2 rounded text-white cursor-pointer me-1',
            'data-template': JSON.stringify(data),
            title: 'Editar tipos de variables',
            tippy: ''
          }).html('<i class="fas fa-asterisk"></i>')

          const btnPreview = $('<button>', {
            id: 'btn-preview',
            class: 'bg-green-400 px-3 py-2 rounded text-white cursor-pointer me-1',
            'data-template': JSON.stringify(data),
            title: 'Previsualizar contenido',
            tippy: ''
          }).html('<i class="fa fa-eye"></i>')

          const btnDelete = $('<button>', {
            id: 'btn-delete',
            class: 'bg-red-600 px-3 py-2 rounded text-white cursor-pointer',
            'data-id': data.id,
            'title': 'Eliminar plantilla',
            tippy: ''
          }).html('<i class="fa-regular fa-trash-can"></i>')

          div.append(btnEdit)
          div.append(btnLoad)
          div.append(btnVariables)
          div.append(btnPreview)
          div.append(btnDelete)

          return div.html()
        }
      }
    ],
    rowCallback: () => {
      setTimeout(() => {
        tippy('[tippy]', {
          arrow: true
        })
      }, 125)
    }
  })

  // DONE
  $('#btn-modal').on('click', () => {
    document.getElementById('templates-modal').reset()
    $('#templates-modal [data-title]').text('Nueva plantila')
  })

  // DONE
  $('#btn-modal-content').on('click', () => {
    document.getElementById('content-modal').reset()
    console.log('hola')
  })

  // DONE: Agregar logica de cambio de estado de visibilidad
  $(document).on("change", '#ck-visible', async function() {

    const input = $(this)

    const id = input.data('id')
    const visible = input.prop('checked')

    const res = await fetch("{{ route('templates.visible') }}", {
      method: 'PATCH',
      headers: {
        'Content-Type': 'application/json',
        'X-Xsrf-Token': token
      },
      body: JSON.stringify({
        id,
        visible
      })
    })
    const data = await res.json()
    if (!res.ok) {
      Swal.fire({
        icon: "error",
        title: `Ocurrio un error al actualizar la visibilidad de la plantilla: ${data?.message ?? 'Error inesperado'}`,
        showConfirmButton: true
      });
      return
    }

    dataTable.ajax.reload();
  });

  // DONE
  $(document).on('click', '#btn-edit', function() {
    $('#btn-modal').trigger('click');

    const button = $(this)
    const data = button.data('template')

    $('#templates-modal [data-title]').text('Modificar plantila')

    $('#txt-id').val(data.id)
    $('#txt-name').val(data.name)
    $('#txt-description').val(data.description)
  })

  // DONE: logica para la editar el contenido de la plantilla
  $(document).on('click', '#btn-variables', async function() {
    const button = $(this)
    const data = button.data('template')

    const data_type = JSON.parse(data.data_type || '{}')

    const container = $('#variables-modal tbody')
    container.empty()

    for (const variable in data_type) {
      const type = data_type[variable]

      container.append(`<x-table.tr>
        <x-table.th>${variable}</x-table.th>
        <x-table.td no-padding>
          <x-form.select id="variable-${variable}" data-id="${variable}" value="${type}">
            <option value="text">Texto simple</option>
            <option value="longtext">Texto largo</option>
            <option value="image">Imagen</option>
          </x-form.select>
        </x-table.td>
      </x-table.tr>`)

      $(`[data-id="${variable}"]`).val(type)
    }

    $('#txt-id3').val(data.id)
    $('#btn-modal-variables').trigger('click');

    $('#variables-modal [data-title]').html(`Variables de ${data.name}`)
  })

  $('#variables-modal').on('submit', async (e) => {
    e.preventDefault()
    const id = $('#txt-id3').val()
    const data_type = {}
    $('#variables-modal tbody select').each(function() {
      const name = $(this).attr('data-id')
      const type = $(this).val()
      data_type[name] = type
    })

    const res = await fetch("{{ route('templates.regulate') }}", {
      method: 'PATCH',
      headers: {
        'Content-Type': 'application/json',
        'X-Xsrf-Token': token
      },
      body: JSON.stringify({
        id,
        data_type
      })
    })

    const data = await res.json()
    if (!res.ok) {
      Swal.fire({
        icon: "error",
        title: `Ocurrio un error al actualizar los tipos de la plantilla: ${data?.message ?? 'Error inesperado'}`,
        showConfirmButton: true
      });
      return
    }

    Swal.fire({
      icon: "success",
      title: "Tipos guardados correctamente",
      showConfirmButton: false,
      timer: 2000
    });

    $('#variables-modal .btn-close').trigger('click');
    dataTable.ajax.reload();
  })

  // DONE: logica para la previsualizacion
  $(document).on('click', '#btn-preview', async function() {
    const button = $(this)
    const data = button.data('template')

    // DONE: Logica para obtener la plantilla
    const res = await fetch(`/api/admin/templates/${data.id}`, {
      headers: {
        'X-Xsrf-Token': token
      }
    })
    const blob = await res.blob()
    const url = File.toURL(blob)
    $('#previewer').attr('src', url)

    $('#btn-modal-preview').trigger('click');

    $('#preview-modal [data-title]').html(`${data.name} <span class="text-gray-500">${data.description}</span>`)
  })

  // DONE
  $(document).on('click', '#btn-upload', function() {
    $('#btn-modal-content').trigger('click');

    const button = $(this)
    const data = button.data('template')

    $('#content-modal [data-title]').text(`Cargar contenido de ${data.name}`)
    $('#txt-id2').val(data.id)
    $('#txt-data_type').val(data.data_type ?? '{}')
  })

  // DONE:
  $(document).on("click", '#btn-delete', async function(e) {
    e.preventDefault()

    let id = $(this).attr('data-id');



    const {
      isConfirmed
    } = await Swal.fire({
      title: "Seguro que deseas eliminar la plantilla?",
      text: "Esta accion es irreversible",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminar!",
      cancelButtonText: "No, cancelar!"
    })

    if (isConfirmed) {
      const res = await fetch(`/api/admin/templates/${id}`, {
        method: 'DELETE',
        headers: {
          'X-Xsrf-Token': token
        }
      })
      const data = await res.json()

      if (!res.ok) {
        Swal.fire({
          icon: "error",
          title: `Ocurrio un error al eliminar la plantilla: ${data?.message ?? 'Error inesperado'}`,
          showConfirmButton: true
        });
        return
      }

      Swal.fire({
        icon: "success",
        title: "Registro eliminado correctamente",
        showConfirmButton: false,
        timer: 2000
      });
      dataTable.ajax.reload();
    }
  });

  // DONE
  $('#templates-modal').on('submit', async (e) => {
    e.preventDefault()

    const request = {
      id: $('#txt-id').val() || undefined,
      name: $('#txt-name').val(),
      description: $('#txt-description').val(),
    }

    const res = await fetch("{{ route('templates.save') }}", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-Xsrf-Token': token
      },
      body: JSON.stringify(request)
    })

    const data = await res.json()
    if (!res.ok) {
      Swal.fire({
        icon: "error",
        title: `Ocurrio un error al actualizar la plantilla: ${data?.message ?? 'Error inesperado'}`,
        showConfirmButton: true
      });
      return
    }

    Swal.fire({
      icon: "success",
      title: "Registro guardado correctamente",
      showConfirmButton: false,
      timer: 2000
    });

    $('#templates-modal .btn-close').trigger('click');
    dataTable.ajax.reload();
  })

  // DONE: Evento submit de upload
  $('#content-modal').on('submit', async (e) => {
    e.preventDefault()

    const file = $('#file').prop('files')[0]
    const url = await File.toURL(file)

    const fileRes = await fetch(url)
    const html = await fileRes.text();
    const data_type = JSON.parse($('#txt-data_type').val());
    const newDataType = {};
    [...new Set((html.match({{ $regex }}) ?? []).map(x => x
      .replaceAll('{{ $llavesBegin }}', '').replaceAll('{{ $llavesEnd }}', '')
    ))].filter(x => !x.startsWith('landing.') && !x.startsWith('generals.') && x != 'csrf_token').forEach(x => {
      const found = data_type[x]
      if (!found) {
        newDataType[x] = 'text'
      } else {
        newDataType[x] = data_type[x] || 'text'
      }
    })

    const request = {
      id: $('#txt-id2').val(),
      content: html,
      data_type: JSON.stringify(newDataType)
    }

    const res = await fetch("{{ route('templates.upload') }}", {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json',
        'X-Xsrf-Token': token
      },
      body: JSON.stringify(request)
    })

    const data = await res.json()
    if (!res.ok) {
      Swal.fire({
        icon: "error",
        title: `Ocurrio un error al cargar el contenido de la plantilla: ${data?.message ?? 'Error inesperado'}`,
        showConfirmButton: true
      });
      return
    }

    Swal.fire({
      icon: "success",
      title: "Contenido guardado correctamente",
      showConfirmButton: false,
      timer: 2000
    });

    $('#content-modal .btn-close').trigger('click');
    dataTable.ajax.reload();
  })
</script>
