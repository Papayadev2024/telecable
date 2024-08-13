<header>
  <div class="absolute left-0 right-0 z-[200]">
    <div class=" bg-[#0C4AC3] z-[1000] relative">
      <div class="flex justify-end md:justify-between items-center py-4 w-11/12 mx-auto ">
        <div class="hidden md:flex justify-center items-center gap-5">
          <div class="flex justify-start items-center gap-2">
            <div class="flex justify-center items-center">
              <img src="{{ asset('images/svg/image_18.svg') }}" alt="telefono">
            </div>
            @if (!is_null($general[0]->cellphone) && !is_null($general[0]->office_phone))
              <p class="font-roboto font-normal text-text16 text-white">{{ $general[0]->cellphone }} -
                {{ $general[0]->office_phone }}</p>
            @elseif(!is_null($general[0]->cellphone))
              <p class="font-roboto font-normal text-text16 text-white">{{ $general[0]->cellphone }}</p>
            @elseif(!is_null($general[0]->office_phone))
              <p class="font-roboto font-normal text-text16 text-white">{{ $general[0]->office_phone }}</p>
            @else
            @endif

          </div>
          @if (is_null($general[0]->email))
          @else
            <div class="flex justify-start items-center gap-2">
              <div class="flex justify-center items-center">
                <img src="{{ asset('images/svg/image_19.svg') }}" alt="telefono">
              </div>
              <p class="font-roboto font-normal text-text16 text-white">{{ $general[0]->email }}</p>
            </div>
          @endif

        </div>
        <div class="flex justify-center items-center gap-3">
          @if ($general[0]->facebook)
            <a href="{{ $general[0]->facebook }}" target="_blank"><img src="{{ asset('images/svg/image_20.svg') }}"
                alt="facebook"></a>
          @endif
          @if ($general[0]->instagram)
            <a href="{{ $general[0]->instagram }}" target="_blank"><img src="{{ asset('images/svg/image_21.svg') }}"
                alt="instagram"></a>
          @endif
          @if ($general[0]->twitter)
            <a href="{{ $general[0]->twitter }}" target="_blank"><img src="{{ asset('images/svg/image_22.svg') }}"
                alt="twitter"></a>
          @endif
          @if ($general[0]->linkedin)
            <a href="{{ $general[0]->linkedin }}" target="_blank"><img src="{{ asset('images/svg/image_23.svg') }}"
                alt="linkedin"></a>
          @endif
          @if ($general[0]->youtube)
            <a href="{{ $general[0]->youtube }}" target="_blank"><img src="{{ asset('images/svg/image_24.svg') }}"
                alt="youtube"></a>
          @endif
          @if ($general[0]->tiktok)
            <a href="{{ $general[0]->tiktok }}" target="_blank"><img src="{{ asset('images/svg/image_tiktok.svg') }}"
                alt="tiktok"></a>
          @endif
        </div>
      </div>
    </div>

    <div class="flex justify-between w-11/12 mx-auto">

      <nav class="flex h-24 items-center justify-between gap-10 w-full">
        <input type="checkbox" id="menu" class="peer/menu menu hidden" />
        <label for="menu"
          class="transition-all flex flex-col gap-1 z-40 lg:hidden hamburguesa justify-center items-center order-3 lg:order-3">
          <p class="w-7 h-1 bg-[#082252] transition-transform duration-500"></p>
          <p class="w-7 h-1 bg-[#082252] transition-transform duration-500"></p>
          <p class="w-7 h-1 bg-[#082252] transition-transform duration-500"></p>
        </label>

        <div class="flex justify-center items-center z-40">
          <a href="{{ route('index') }}">
            {{-- <img src="./images/svg/image_27.svg" alt="HPI" /> --}}
            <img src="{{ asset('images/img/image_27.png') }}" alt="HPI">
          </a>
        </div>

        <ul
          class="fixed inset-0 bg-white px-[5%] flex flex-col lg:flex-row lg:items-center pt-40 clip-circle-0 peer-checked/menu:clip-circle-full transition-[clip-path] duration-500 gap-5 lg:gap-10 lg:clip-circle-full lg:relative lg:flex lg:justify-items-center lg:p-0 lg:bg-transparent font-roboto font-bold lg:font-normal text-lg lg:text-[19px] text-[#082252] flex-1">

          <div class="flex flex-col lg:flex-row order-2 lg:order-1 lg:w-[80%] lg:justify-center gap-5 lg:gap-10 xl:gap-14">
            <li class="flex flex-col">
              <a href="{{ route('index') }}"
                class="{{ isset($pagina) && $pagina == 'index' ? 'text-[#FF5E14] font-semibold' : '' }}">Inicio</a>
              @if (isset($pagina) && $pagina == 'index')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('nosotros') }}"
                class="{{ isset($pagina) && $pagina == 'nosotros' ? 'text-[#FF5E14] font-semibold' : '' }}">Nosotros</a>
              @if (isset($pagina) && $pagina == 'nosotros')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('catalogo', 0) }}"
                class="{{ isset($pagina) && $pagina == 'catalogo' ? 'text-[#FF5E14] font-semibold' : '' }}">Productos</a>
              @if (isset($pagina) && $pagina == 'catalogo')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('descargables', 0) }}"
                class="{{ isset($pagina) && $pagina == 'descargables' ? 'text-[#FF5E14] font-semibold' : '' }}">Catálogo</a>
              @if (isset($pagina) && $pagina == 'descargables')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('blog', 0) }}"
                class="{{ isset($pagina) && $pagina == 'blog' ? 'text-[#FF5E14] font-semibold' : '' }}">Blog</a>
              @if (isset($pagina) && $pagina == 'blog')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif
            </li>
            <li class="flex flex-col">
              <a href="{{ route('contacto') }}"
                class="{{ isset($pagina) && $pagina == 'contacto' ? 'text-[#FF5E14] font-semibold' : '' }}">Contacto</a>
              @if (isset($pagina) && $pagina == 'contacto')
                <p
                  class="hidden lg:block lg:after:content-[''] lg:after:w-full lg:after:h-[2px] lg:after:bg-[#FF5E14] lg:after:block">
                </p>
              @endif

            </li>
          </div>

          <div
            class="relative w-full order-1 lg:order-2  lg:w-[20%] pb-8 lg:py-0 border-b lg:border-0 border-[#082252]">
            <input id="buscarproducto" type="text" placeholder="Buscar..."
              class="w-full pl-8 pr-10 py-2 border border-[#082252] lg:border-[#E6E4E5] rounded-lg focus:outline-none focus:ring-0 text-[#082252] placeholder:text-[#082252] lg:placeholder:text-[#E6E4E5]">
            
            <span class="absolute inset-y-0 left-0 flex items-start lg:items-center px-2 pb-2 pt-[9px] lg:p-2">
              <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M14.6851 13.6011C14.3544 13.2811 13.8268 13.2898 13.5068 13.6206C13.1868 13.9514 13.1955 14.4789 13.5263 14.7989L14.6851 13.6011ZM16.4206 17.5989C16.7514 17.9189 17.2789 17.9102 17.5989 17.5794C17.9189 17.2486 17.9102 16.7211 17.5794 16.4011L16.4206 17.5989ZM15.2333 9.53333C15.2333 12.6814 12.6814 15.2333 9.53333 15.2333V16.9C13.6018 16.9 16.9 13.6018 16.9 9.53333H15.2333ZM9.53333 15.2333C6.38531 15.2333 3.83333 12.6814 3.83333 9.53333H2.16667C2.16667 13.6018 5.46484 16.9 9.53333 16.9V15.2333ZM3.83333 9.53333C3.83333 6.38531 6.38531 3.83333 9.53333 3.83333V2.16667C5.46484 2.16667 2.16667 5.46484 2.16667 9.53333H3.83333ZM9.53333 3.83333C12.6814 3.83333 15.2333 6.38531 15.2333 9.53333H16.9C16.9 5.46484 13.6018 2.16667 9.53333 2.16667V3.83333ZM13.5263 14.7989L16.4206 17.5989L17.5794 16.4011L14.6851 13.6011L13.5263 14.7989Z"
                  fill="#E6E4E5" class="fill-fillAzulPetroleo lg:fill-fillPink" />
              </svg>
            </span>

            <div class="bg-white z-60 shadow-2xl top-12 w-full absolute overflow-y-auto max-h-[200px]" id="resultados"></div>  
          </div>
          
        </ul>
      </nav>
    </div>
  </div>

  {{-- whatssapp --}}
  <div class="flex justify-end w-11/12 mx-auto z-[100] relative">
    <div class="fixed bottom-6 sm:bottom-[2rem] lg:bottom-[4rem] z-20 cursor-pointer">
      <a target="_blank" id="whatsapp-toggle" 
        {{-- href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}" --}}
         >
        <img src="{{ asset('images/svg/image_31.svg') }}" alt="whatsapp" class="w-16 h-16 md:w-24 md:h-24">
      </a>
    </div>
  </div>

  <div class="fixed bottom-24 right-6 lg:bottom-40 z-[99] shadow-xl hidden animate-once animate-duration-1000" id="whatsapp-chat">
    <div class="w-72 h-auto rounded-xl">
      <div class="bg-green-500 font-roboto text-white text-center py-3 rounded-t-xl"> Whatsapp Chat </div>
      <div class="bg-white shadow-xl hover:bg-slate-100 cursor-pointer">
          <div class="flex flex-row p-3">
              <div class="flex flex-col justify-center items-center"><img class="w-10" src="{{asset('images/img/asistente.png')}}"/></div>
              <div class="px-2">
                <a target="_blank" href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text={{ $general[0]->mensaje_whatsapp }}">
                  <p class="text-slate-400 font-roboto text-text14 ">Ventas de Productos Químicos</p>
                  <h3 class="text-slate-700 font-roboto text-text16 font-semibold">{{$general[0]->support_one}}</h3>
                  <div class="flex flex-row items-center "><p class="text-slate-400 font-roboto text-text12">En Línea </p><div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div></div>
                </a>
              </div>
          </div>
      </div>
      <div class="bg-white shadow-xl rounded-b-xl hover:bg-slate-100 cursor-pointer">
        <div class="flex flex-row p-3">
          <div class="flex flex-col justify-center items-center"><img class="w-10" src="{{asset('images/img/asistente.png')}}"/></div>
            <div class="px-2">
              <a target="_blank" href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp2 }}&text={{ $general[0]->mensaje_whatsapp }}">
                <p class="text-slate-400 font-roboto text-text14 ">Ventas de Tratamiento de Agua</p>
                <h3 class="text-slate-700 font-roboto text-text16 font-semibold ">{{$general[0]->support_two }}</h3>
                <div class="flex flex-row items-center "><p class="text-slate-400 font-roboto text-text12">En Línea </p><div class="w-2 h-2 bg-green-400 rounded-full ml-1"></div></div>
              </a>
            </div>
        </div>
    </div>
    </div>
</div>

</header>

<script>
  const menu = document.querySelector(".menu");
  const body = document.body;
  menu.addEventListener("click", (e) => {
    body.classList.toggle("overflow-hidden");
  });
</script>

<script>
  document.getElementById('whatsapp-toggle').addEventListener('click', function() {
      var chatBox = document.getElementById('whatsapp-chat');
      if (chatBox.classList.contains('hidden')) {
          chatBox.classList.remove('hidden');
          chatBox.classList.add('animate-fade-up');
      } else {
          chatBox.classList.add('hidden');
          chatBox.classList.remove('animate-fade-up');
      }
  });
</script>

<script>
  
  $(document).ready(function() {
    $('#buscarproducto').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados').html(resultsHtml);
          }
        });
      } else {
        $('#resultados').empty();
      }
    });
  });


  $(document).ready(function() {
    $('#buscarproducto2').keyup(function() {

      var query = $(this).val().trim();

      if (query !== '') {
        $.ajax({
          url: '{{ route('buscar') }}',
          method: 'GET',
          data: {
            query: query
          },
          success: function(data) {
            var resultsHtml = '';
            var url = '{{ asset('') }}';
            data.forEach(function(result) {
              resultsHtml +=
                '<a class="bg-white z-50" href="/producto/' + result.id +
                '"> <div class="bg-white z-50 w-full flex flex-row py-3 px-3 hover:bg-slate-200"> ' +
                ' <div class="w-[20%]"><img class="w-14 rounded-md" src="' +
                url + result.imagen + '" /></div>' +
                ' <div class="flex flex-col justify-center w-[80%] pl-3"> ' +
                ' <h2 class="text-left line-clamp-1">' + result.producto +
                '</h2> ' +
                '<p class="text-text12 text-left line-clamp-1">' + result.categoria.name + '</p></div> ' +
                '</div></a>';
            });

            $('#resultados2').html(resultsHtml);
          }
        });
      } else {
        $('#resultados2').empty();
      }
    });
  });
</script>

<script>
  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto');
      var resultados = document.getElementById('resultados');
      var isClickInsideInput = input.contains(event.target);
      var isClickInsideResultados = resultados.contains(event.target);

      if (!isClickInsideInput && !isClickInsideResultados) {
          input.value = '';
          $('#resultados').empty();
      }
  });

  document.addEventListener('click', function(event) {
      var input = document.getElementById('buscarproducto2');
      var resultados = document.getElementById('resultados2');
      var isClickInsideInput = input.contains(event.target);
      var isClickInsideResultados = resultados.contains(event.target);

      if (!isClickInsideInput && !isClickInsideResultados) {
          input.value = '';
          $('#resultados2').empty();
      }
  });
</script>