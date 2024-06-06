<x-app-layout title="Configuracion de landing">
  <div class="p-4">
    <div class="grid gap-4 gap-y-2 text-sm grid-cols-12 md:grid-cols-12">
      <div class="md:col-span-3">
        <div class="block max-w-sm p-6 bg-white rounded-lg shadow dark:bg-gray-800">
          <div class="flex items-center justify-between mb-2">
            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
              Configuración
            </h5>
            <button id="btn-save" class="btn bg-blue-500 text-white" title="Guardar cambios" tippy>
              <i class="fa fa-save"></i>
            </button>
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
            @foreach ($finalVariables as $i => $variable)
              <x-form.input-icon id="variable-{{ $i }}" data-id="{{ $variable->id }}"
                data-name="{{ $variable->name }}" label="{{ $variable->name }}" icon="fas fa-hashtag"
                value="{{ $variable->value }}" />
            @endforeach
          </div>
        </div>
      </div>
      <div class="md:col-span-9 relative">
        <iframe id="previewer" src="" class="block w-full bg-white rounded-lg shadow"
          style="height: calc(100vh - 100px)"></iframe>
      </div>
    </div>
  </div>
</x-app-layout>


<script src="{{ asset('js/cookies.extend.js') }}"></script>
<script src="{{ asset('js/file.extend.js') }}"></script>
<script type="text/javascript">
  const token = decodeURIComponent(Cookies.get('XSRF-TOKEN'))
  let template = ''

  const drawReplacing = async () => {
    const data = {};
    $('#variables-container input').each(function() {
      const input = $(this)
      const key = input.attr('data-name')
      const value = input.val()
      data[key] = value
    })
    let newTemplate = structuredClone(template)
    for (const key in data) {
      if (!data[key]) continue
      const regex = new RegExp(`{{ $regex }}`, 'g')
      newTemplate = newTemplate.replace(regex, data[key])
    }
    const blob = new Blob([newTemplate], {
      type: 'text/html'
    });
    const url = await File.toURL(blob)
    $('#previewer').attr('src', url)
  }

  $(document).ready(async () => {
    const resTemplate = await fetch(
      `{{ route('templates.get', $landing->template_id) }}?v=${crypto.randomUUID()}`, {
        headers: {
          'X-Xsrf-Token': token
        }
      })
    template = await resTemplate.text()
    drawReplacing()
  })

  $('[id^="variable"]').on('keyup', drawReplacing)

  tippy('[tippy]', {
    arrow: true
  })

  $('#btn-save').on('click', async () => {
    const request = [...$('#variables-container input')].map(e => {
      const input = $(e)
      return {
        landing_id: {{ $landing->id }},
        id: Number(input.attr('data-id')) || null,
        name: input.attr('data-name'),
        value: input.val()
      }
    })

    const res = await fetch("{{ route('landingSettings.massive') }}", {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-Xsrf-Token': token
      },
      body: JSON.stringify(request),
    })

    const data = await res.json()
  })
</script>
