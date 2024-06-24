<x-app-layout title="Landings">
  <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
    <section class="py-4 border-b border-slate-100 dark:border-slate-700">
      <x-modal.button id="btn-modal" ref="landings-modal" id-hidden>
        Agregar landing
      </x-modal.button>
    </section>

    <x-card>
      <x-card.header>
        Lista de Landings
      </x-card.header>
      <x-card.body>
        <table id="tabladatos" class="display text-lg" style="width:100%">
          <thead>
            <tr>
              <th>Nombre de landing</th>
              <th>Plantilla base</th>
              <th>Landing</th>
              <th>Descripción</th>
              <th>Publico</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody></tbody>
          <tfoot>
            <tr>
              <th>Nombre de landing</th>
              <th>Plantilla base</th>
              <th>Landing</th>
              <th>Descripción</th>
              <th>Publico</th>
              <th>Acciones</th>
            </tr>
          </tfoot>
        </table>
      </x-card.body>
    </x-card>
  </div>

  <x-modal.content id="landings-modal" title="Nueva landing" btn-submit-text="Guardar" size="xl">
    <div class="grid gap-4 grid-cols-1">
      <div>
        <x-form.input id="txt-id" type="hidden" />
        <x-form.select id="cbo-template" label="Plantilla base" required>
          @foreach ($templates as $template)
            <option value="{{ $template->id }}">{{ $template->name }}</option>
          @endforeach
        </x-form.select>
        <x-form.input id="txt-name" label="Nombre de la landing" required />
        <x-form.input id="txt-page" label="Path de la landing" required />
        <x-form.textarea id="txt-description" label="Descripcion de la landing" />
      </div>
      {{-- <div>
        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          Previsualizacion
        </label>
        <iframe class="shadow rounded-md" id="modal-previewer" src=""
          style="width: 100%; height: 330px; border: none;"></iframe>
      </div> --}}
    </div>
  </x-modal.content>

  <x-modal.button id="btn-modal-preview" ref="preview-modal" is-hidden></x-modal.button>
  <x-modal.content id="preview-modal" title="Previsualizar landing" btn-submit-text="Aceptar" size="xxl" no-padding>
    <iframe id="previewer" src="/" style="width: 100%; height: calc(100vh - 175px); border: none"></iframe>
  </x-modal.content>
</x-app-layout>

<script src="{{ asset('js/cookies.extend.js') }}"></script>
<script src="{{ asset('js/file.extend.js') }}"></script>
<script src="{{ asset('js/clipboard.extend.js') }}"></script>

<script type="text/javascript">
  const token = decodeURIComponent(Cookies.get('XSRF-TOKEN'))

  // DONE: Si la plantilla no esta visible debe marcarse como no visible
  const dataTable = new DataTable('#tabladatos', {
    responsive: true,
    language: {
      url: "/libs/datatables/es-ES.json"
    },
    ajax: {
      url: "{{ route('landings.list') }}",
      headers: {
        'Content-Type': 'application/json',
        'X-Xsrf-Token': token
      }
    },
    columns: [{
        data: 'page',
        render: (value, type, data, params) => {
          const a = $('<a>', {
            class: 'text-blue-500 hover:underline',
            href: `//${location.host}/landing/${data.page}`,
            target: '_blank',
            title: `Ver ${data.name} en una nueva ventana`,
            tippy: ''
          }).text(data.page)
          return a.prop('outerHTML')
        }
      },
      {
        data: 'template.name',
        render: (value, type, data, params) => {
          const div = $('<div>')

          const btnPreview = $('<span>', {
            id: 'btn-preview',
            class: 'text-blue-500 cursor-pointer',
            'data-template': JSON.stringify(data.template),
            title: 'Previsualizar plantilla base',
            tippy: ''
          }).html(data.template.name)

          div.append(btnPreview)

          return div.html()
        }
      },
      {
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
        data: 'publico',
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
            title: 'Editar landing',
            tippy: ''
          }).html('<i class="fa-regular fa-pen-to-square"></i>')

          const btnConfig = $('<a>', {
            href: `/admin/landings/config/${data.id}`,
            class: 'bg-blue-400 px-3 py-2 rounded text-white cursor-pointer me-1',
            'data-template': JSON.stringify(data),
            title: 'Configurar landing',
            tippy: ''
          }).html('<i class="fa fa-cog"></i>')

          const btnCopy = $('<button>', {
            id: 'btn-copy',
            class: 'bg-green-600 px-3 py-2 rounded text-white cursor-pointer me-1',
            'data-landing': JSON.stringify(data),
            'title': 'Copiar URL',
            tippy: ''
          }).html('<i class="fa-regular fa-copy"></i>')

          const btnDelete = $('<button>', {
            id: 'btn-delete',
            class: 'bg-red-600 px-3 py-2 rounded text-white cursor-pointer',
            'data-id': data.id,
            'title': 'Eliminar landing',
            tippy: ''
          }).html('<i class="fa-regular fa-trash-can"></i>')

          div.append(btnEdit)
          div.append(btnConfig)
          div.append(btnCopy)
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

  $('#txt-name').on('keyup', () => {
    const name = $('#txt-name').val()
    const page = String(name).toLowerCase().split(' ').filter(Boolean).join('-')
    $('#txt-page').val(page)
  })

  // DONE
  $('#btn-modal').on('click', () => {
    document.getElementById('landings-modal').reset()
    $('#cbo-template').val(null)
    $('#landings-modal [data-title]').text('Nueva plantila')
    $('#modal-previewer').attr('src', null)
  })

  // DONE: Agregar logica de cambio de estado de visibilidad
  $(document).on("change", '#ck-visible', async function() {

    const input = $(this)

    const id = input.data('id')
    const visible = input.prop('checked')

    const res = await fetch("{{ route('landings.visible') }}", {
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
        title: `Ocurrio un error al actualizar la visibilidad de la landing: ${data?.message ?? 'Error inesperado'}`,
        showConfirmButton: true
      });
      return
    }

    dataTable.ajax.reload();
  });

  $('#cbo-template').on('change', async () => {
    const template = $('#cbo-template').val()
    // DONE: Logica para obtener la plantilla
    const res = await fetch(`/api/admin/templates/${template}`, {
      headers: {
        'X-Xsrf-Token': token
      }
    })
    const blob = await res.blob()
    const url = File.toURL(blob)
    $('#modal-previewer').attr('src', url)
  })

  // DONE
  $(document).on('click', '#btn-edit', function() {
    $('#btn-modal').trigger('click');

    const button = $(this)
    const data = button.data('template')

    $('#landings-modal [data-title]').text('Modificar plantila')

    $('#txt-id').val(data.id)
    $('#cbo-template').val(data.template_id)
    $('#cbo-template').trigger('change')
    $('#txt-name').val(data.name)
    $('#txt-page').val(data.page)
    $('#txt-description').val(data.description)
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
  })

  $(document).on('click', '#btn-copy', function() {
    const data = JSON.parse($(this).attr('data-landing'))
    const url = `${location.host}/landing/${data.page}`
    Clipboard.copy(url, () => {
      Swal.fire({
        icon: "success",
        title: "La URl se ha copiado en el portapapeles",
        showConfirmButton: false,
        timer: 2000
      });
    })
  })

  // DONE:
  $(document).on("click", '#btn-delete', async function(e) {
    e.preventDefault()

    let id = $(this).attr('data-id');



    const {
      isConfirmed
    } = await Swal.fire({
      title: "Seguro que deseas eliminar la landing?",
      text: "Esta accion es irreversible",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Si, eliminar!",
      cancelButtonText: "No, cancelar!"
    })

    if (isConfirmed) {
      const res = await fetch(`/api/admin/landings/${id}`, {
        method: 'DELETE',
        headers: {
          'X-Xsrf-Token': token
        }
      })
      const data = await res.json()

      if (!res.ok) {
        Swal.fire({
          icon: "error",
          title: `Ocurrio un error al eliminar la landing: ${data?.message ?? 'Error inesperado'}`,
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
  $('#landings-modal').on('submit', async (e) => {
    e.preventDefault()

    const request = {
      id: $('#txt-id').val() || undefined,
      template_id: $('#cbo-template').val(),
      name: $('#txt-name').val(),
      page: $('#txt-page').val(),
      description: $('#txt-description').val(),
    }

    const res = await fetch("{{ route('landings.save') }}", {
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
        title: `Ocurrio un error al actualizar la landing: ${data?.message ?? 'Error inesperado'}`,
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

    $('#landings-modal .btn-close').trigger('click');
    dataTable.ajax.reload();
  })
</script>
