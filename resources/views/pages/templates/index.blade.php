<x-app-layout>
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
          <tbody>

            {{-- @foreach ($templates as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->description }}</td>
                  <td>
                    <form method="POST" action="">
                      @csrf
                      <input type="checkbox" id="hs-basic-usage"
                        class="check_v btn_swithc relative w-[3.25rem] h-7 p-px bg-gray-100 border-transparent text-transparent 
                              rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:ring-transparent disabled:opacity-50 disabled:pointer-events-none 
                              checked:bg-none checked:text-blue-600 checked:border-blue-600 focus:checked:border-blue-600 dark:bg-gray-800 dark:border-gray-700 
                              dark:checked:bg-blue-500 dark:checked:border-blue-500 dark:focus:ring-offset-gray-600 before:inline-block before:size-6
                              before:bg-white checked:before:bg-blue-200 before:translate-x-0 checked:before:translate-x-full before:rounded-full before:shadow 
                              before:transform before:ring-0 before:transition before:ease-in-out before:duration-200 dark:before:bg-gray-400 dark:checked:before:bg-blue-200"
                        id='{{ 'v_' . $item->id }}' data-field='visible' data-idService='{{ $item->id }}'
                        data-titleService='{{ $item->name }}' {{ $item->status == 1 ? 'checked' : '' }}>
                      <label for="{{ 'v_' . $item->id }}"></label>
                    </form>
                  </td>

                  <td class="flex flex-row justify-end items-center gap-5">

                    <a href="{{ route('attributes.edit', $item->id) }}"
                      class="bg-yellow-400 px-3 py-2 rounded text-white  "><i
                        class="fa-regular fa-pen-to-square"></i></a>

                    <form action="" method="POST">
                      @csrf
                      <a data-idService='{{ $item->id }}'
                        class="btn_delete bg-red-600 px-3 py-2 rounded text-white cursor-pointer"><i
                          class="fa-regular fa-trash-can"></i></a>
                    </form>

                  </td>
                </tr>
              @endforeach --}}

          </tbody>
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

  <x-modal.button id="btn-modal-content" ref="content-modal" is-hidden></x-modal.button>

  <x-modal.content id="content-modal" title="Cargar contenido" btn-submit-text="Guardar">
    <x-form.input id="txt-id2" type="hidden" />
    <x-form.input id="file" label="Contenido HTML" type="file" required />
  </x-modal.content>
</x-app-layout>


<script src="{{ asset('js/cookies.extend.js') }}"></script>
<script src="{{ asset('js/file.extend.js') }}"></script>
<script type="text/javascript">
  const token = decodeURIComponent(Cookies.get('XSRF-TOKEN'))

  // FIXME: Si la plantilla no esta visible debe marcarse como no visible
  const dataTable = new DataTable('#tabladatos', {
    responsive: true,
    language: {
      url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
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
          if (!data.description) return '<i class="text-muted">- Sin descripcion -</i>'
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
  $(document).on('click', '#btn-upload', function() {
    $('#btn-modal-content').trigger('click');

    const button = $(this)
    const data = button.data('template')

    $('#content-modal [data-title]').text(`Cargar contenido de ${data.name}`)
    $('#txt-id2').val(data.id)
  })

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
    const html = await fileRes.text()

    const request = {
      id: $('#txt-id2').val(),
      content: html
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
