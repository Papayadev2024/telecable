@extends('components.public.matrix', ['pagina' => 'contacto'])
@section('titulo', 'Contacto')
@section('css_importados')

@stop


@section('content')
    <main>

        <section class="flex flex-col md:flex-row justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-[#F1EBE3] gap-12 relative">
            
            <form id="formContactos" class="w-full md:w-1/2 flex flex-col gap-3">
                @csrf
                <h2 class="text-[#54340E] font-bignoodle text-5xl">Nuestra Carta</h2>
                <p class="text-[#54340E] text-lg font-latoregular w-full leading-tight">
                  Recetas tradicionales peruanas, frescas y deliciosas, directo a tu puerta.
                </p>
      
                <div class="flex flex-col gap-1">
                  <label class="text-[#54340E] text-base font-latoregular font-semibold w-full leading-tight">Nombre completo</label>
                  <input id="name" type="text" required name="full_name" placeholder="Nombre y apellido" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"/>
                </div>
      
                <div class="flex flex-col gap-1">
                  <label class="text-[#54340E] text-base font-latoregular font-semibold w-full leading-tight">Email</label>
                  <input required name="email" id="emailContacto" type="email" placeholder="hola@mail.com" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"/>
                </div>

                <div class="flex flex-col gap-1">
                    <label class="text-[#54340E] text-base font-latoregular font-semibold w-full leading-tight">Telefono</label>
                    <input required name="phone" id="telefonoContacto" type="text" placeholder="+51 123456789" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"/>
                  </div>
      
                <div class="flex flex-col gap-1">
                  <label class="text-[#54340E] text-base font-latoregular font-semibold w-full leading-tight">Mensaje</label>
                  <textarea name="message" id="mensaje" rows="3" type="text" placeholder="Escribe tu mensaje" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"></textarea>
                </div>

                <input required name="source" id="telefonoContacto" type="hidden" value="Inicio" class="placeholder:text-[#54340E] text-[#54340E] placeholder:text-opacity-50 bg-white font-latoregular font-semibold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0"/>
      
                <div class="flex flex-col gap-1">  
                  <button type="submit" class="bg-[#F07407] flex flex-row items-center justify-center gap-2 text-white font-latobold rounded-xl px-3 py-2.5 ring-0 focus:ring-0 border-0" >Enviar
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                      <path d="M18.8327 10.4141C18.8327 10.0046 18.8283 9.1784 18.8195 8.76773C18.7651 6.21311 18.7378 4.93581 17.7953 3.98961C16.8526 3.04342 15.5408 3.01046 12.917 2.94454C11.2999 2.90391 9.69877 2.90391 8.0817 2.94453C5.45796 3.01045 4.14608 3.04341 3.20347 3.98961C2.26087 4.9358 2.23363 6.2131 2.17915 8.76773C2.16163 9.58915 2.16164 10.4056 2.17916 11.2271C2.23363 13.7817 2.26087 15.059 3.20348 16.0052C4.14608 16.9514 5.45796 16.9843 8.08171 17.0502C8.75067 17.0671 9.41693 17.0769 10.0827 17.0798" stroke="#F9F6F3" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M2.16602 5L7.92687 8.27052C10.0316 9.46542 10.9671 9.46542 13.0718 8.27052L18.8327 5" stroke="#F9F6F3" stroke-width="1.25" stroke-linejoin="round"/>
                      <path d="M18.8327 14.5833H12.166M18.8327 14.5833C18.8327 13.9998 17.1708 12.9096 16.7493 12.5M18.8327 14.5833C18.8327 15.1668 17.1708 16.2571 16.7493 16.6667" stroke="#F9F6F3" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </button>
                </div>
      
            </form>
      
            
            <div class="w-full md:w-1/2 ">
                <div class="flex flex-col justify-center items-start md:items-end gap-4">
                  <div class="group cursor-pointer hover:bg-[#F07407] border p-3 flex flex-col gap-0.5 border-[#DDCCBA] rounded-xl max-w-sm w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M1.66602 4.16797L7.42687 7.43849C9.5316 8.63339 10.4671 8.63339 12.5718 7.43849L18.3327 4.16797" stroke="#F07407" class="group-hover:stroke-white" stroke-width="1.25" stroke-linejoin="round"/>
                      <path d="M8.74935 16.2487C8.36077 16.2436 7.9717 16.2362 7.58171 16.2264C4.95796 16.1604 3.64608 16.1274 2.70348 15.1807C1.76087 14.2339 1.73363 12.9559 1.67916 10.3999C1.66164 9.57795 1.66163 8.76095 1.67915 7.93906C1.73363 5.38297 1.76087 4.10493 2.70347 3.15819C3.64608 2.21145 4.95796 2.17847 7.5817 2.11251C9.19877 2.07186 10.7999 2.07187 12.417 2.11252C15.0408 2.17848 16.3526 2.21146 17.2952 3.15821C18.2378 4.10494 18.2651 5.38298 18.3195 7.93907C18.3276 8.31746 18.3319 8.49578 18.3326 8.7487" class="group-hover:stroke-white" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M15.834 14.168C15.834 14.8583 15.2743 15.418 14.584 15.418C13.8937 15.418 13.334 14.8583 13.334 14.168C13.334 13.4776 13.8937 12.918 14.584 12.918C15.2743 12.918 15.834 13.4776 15.834 14.168ZM15.834 14.168V14.5846C15.834 15.275 16.3937 15.8346 17.084 15.8346C17.7743 15.8346 18.334 15.275 18.334 14.5846V14.168C18.334 12.0969 16.6551 10.418 14.584 10.418C12.5129 10.418 10.834 12.0969 10.834 14.168C10.834 16.2391 12.5129 17.918 14.584 17.918" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" class="group-hover:stroke-white" stroke-linejoin="round"/>
                    </svg>
                    <h2 class="text-[#54340E] group-hover:text-white font-latoregular font-semibold text-base">E-mail</h2>
                    <p class="text-[#54340E] group-hover:text-white text-base font-latoregular w-full leading-tight">
                        @foreach ($general as $item)
                            {{ $item->email ?? "Ingrese un email"}}
                        @endforeach
                    </p>
                  </div>
      
                  <div class="group cursor-pointer hover:bg-[#F07407] border p-3 flex flex-col gap-0.5 border-[#DDCCBA] rounded-xl max-w-sm w-full">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path class="group-hover:stroke-white" d="M4.16602 7.5013C4.16602 4.75144 4.16602 3.37651 5.02029 2.52224C5.87456 1.66797 7.24949 1.66797 9.99935 1.66797C12.7492 1.66797 14.1241 1.66797 14.9784 2.52224C15.8327 3.37651 15.8327 4.75144 15.8327 7.5013V12.5013C15.8327 15.2511 15.8327 16.6261 14.9784 17.4804C14.1241 18.3346 12.7492 18.3346 9.99935 18.3346C7.24949 18.3346 5.87456 18.3346 5.02029 17.4804C4.16602 16.6261 4.16602 15.2511 4.16602 12.5013V7.5013Z" stroke="#F07407" stroke-width="1.25" stroke-linecap="round"/>
                    <path class="group-hover:stroke-white" d="M9.16602 15.832H10.8327" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M7.5 1.66797L7.57417 2.11299C7.7349 3.07738 7.81527 3.55958 8.14599 3.853C8.491 4.15909 8.98008 4.16797 10 4.16797C11.0199 4.16797 11.509 4.15909 11.854 3.853C12.1847 3.55958 12.2651 3.07738 12.4258 2.11299L12.5 1.66797" stroke="#F07407" stroke-width="1.25" stroke-linejoin="round"/>
                  </svg>
                    <h2 class="text-[#54340E] group-hover:text-white font-latoregular font-semibold text-base">Teléfono</h2>
                    <p class="text-[#54340E] group-hover:text-white text-base font-latoregular w-full leading-tight">
                        @foreach ($general as $item)
                            @if ($item->cellphone && $item->office_phone)
                                {{ $item->cellphone ?? "Ingrese nro. celular" }} / {{ $item->office_phone ?? "Ingrese nro. telefónico" }}
                            @elseif($item->cellphone && empty($item->office_phone))
                                {{ $item->cellphone ?? "Ingrese nro. celular" }}
                            @elseif($item->office_phone && empty($item->cellphone))
                                {{ $item->office_phone ?? "Ingrese nro. telefónico" }}
                            @else
                                <p>No hay información disponible para este ítem.</p>
                            @endif
                        @endforeach
                    </p>
                  </div>
      
                  <div class="group cursor-pointer hover:bg-[#F07407] border p-3 flex flex-col gap-0.5 border-[#DDCCBA] rounded-xl max-w-sm w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path class="group-hover:stroke-white" d="M5.83203 15C4.30792 15.3431 3.33203 15.8703 3.33203 16.4614C3.33203 17.4953 6.3168 18.3333 9.9987 18.3333C13.6806 18.3333 16.6654 17.4953 16.6654 16.4614C16.6654 15.8703 15.6894 15.3431 14.1654 15" stroke="#F07407" stroke-width="1.25" stroke-linecap="round"/>
                      <path class="group-hover:stroke-white" d="M12.0827 7.4974C12.0827 8.64798 11.1499 9.58073 9.99935 9.58073C8.84877 9.58073 7.91602 8.64798 7.91602 7.4974C7.91602 6.3468 8.84877 5.41406 9.99935 5.41406C11.1499 5.41406 12.0827 6.3468 12.0827 7.4974Z" stroke="#F07407" stroke-width="1.25"/>
                      <path class="group-hover:stroke-white" d="M11.0472 14.5754C10.7661 14.8461 10.3904 14.9974 9.99952 14.9974C9.60852 14.9974 9.23285 14.8461 8.95177 14.5754C6.37793 12.0814 2.92867 9.29531 4.61077 5.2505C5.52027 3.0635 7.70347 1.66406 9.99952 1.66406C12.2955 1.66406 14.4787 3.0635 15.3882 5.2505C17.0682 9.29023 13.6273 12.09 11.0472 14.5754Z" stroke="#F07407" stroke-width="1.25"/>
                    </svg>
                    <h2 class="text-[#54340E] group-hover:text-white font-latoregular font-semibold text-base">Dirección</h2>
                    <p class="text-[#54340E] group-hover:text-white text-base font-latoregular w-full leading-tight">
                        @foreach ($general as $item)
                            {{$item->address}} - {{ $item->district }} - {{ $item->city }}
                        @endforeach
                    </p>
                  </div>
      
                  <div class="group cursor-pointer hover:bg-[#F07407] border p-3 flex flex-col gap-0.5 border-[#DDCCBA] rounded-xl max-w-sm w-full">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path class="group-hover:stroke-white" d="M15 1.66797V3.33464M5 1.66797V3.33464" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M2.08398 10.2027C2.08398 6.57162 2.08398 4.75607 3.12742 3.62803C4.17085 2.5 5.85023 2.5 9.20898 2.5H10.7923C14.1511 2.5 15.8305 2.5 16.8739 3.62803C17.9173 4.75607 17.9173 6.57162 17.9173 10.2027V10.6307C17.9173 14.2617 17.9173 16.0773 16.8739 17.2053C15.8305 18.3333 14.1511 18.3333 10.7923 18.3333H9.20898C5.85023 18.3333 4.17085 18.3333 3.12742 17.2053C2.08398 16.0773 2.08398 14.2617 2.08398 10.6307V10.2027Z" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M2.5 6.66797H17.5" stroke="#F07407" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                    <h2 class="text-[#54340E] group-hover:text-white font-latoregular font-semibold text-base">Horario de atendimiento</h2>
                    <p class="text-[#54340E] group-hover:text-white text-base font-latoregular w-full leading-tight">
                        @foreach ($general as $item)
                            {!! str_replace(',', '<br>', $item->schedule) !!}
                        @endforeach
                    </p>
                  </div>
                </div>
            </div>
      
        </section>

       

        <div class="w-full bg-[#F5F7F9] py-10 lg:py-16 px-0 lg:px-[5%]">
            <img class="w-full object-cover object-center h-60 sm:h-96 lg:h-[450px]" src="{{asset('images/img/bannercontacto.png')}}" />
        </div>

      
        <section class="bg-[#54340E] bg-cover bg-opacity-100 relative flex flex-col gap-2">
            <div 
                class="bg-cover bg-center w-full" 
                style="background-image: url({{asset('images/img/2textura.png')}});" 
            >
                <div class="w-full h-full absolute opacity-60 bg-white"></div>

                <form id="footerBlog_Catalogo">
                    @csrf
                    <div class="flex flex-col gap-2 justify-center items-center py-10 lg:py-16 px-[5%]">
                        <h2 class="text-[#54340E] font-bignoodle text-5xl z-10 text-center">Suscríbete a nuestro blog</h2>
                        <p class="text-[#54340E] text-base font-latoregular w-full leading-tight text-center z-10">
                            Recetas tradicionales peruanas, frescas y deliciosas, directo a tu puerta.
                        </p>
                        <div class="z-10 mt-8 flex flex-col gap-2">
                            <div class="md:space-x-2 bg-white px-5 py-3 rounded-xl overflow-hidden min-w-[250px] w-full flex flex-col md:flex-row gap-3">
                                <input type="email" name="email" id="emailFooter2" required
                                    class="text-[#54340E] placeholder:text-[#54340E] min-w-[300px] font-latoregular ring-0 border-0 focus:ring-0 focus:border-0 border-transparent ring-transparent" 
                                    placeholder="Introduce tu email"
                                />
                                <input type="hidden" id="nameFooter" name="full_name" value="Usuario suscrito" />
                                
                                <button type="submit" class="text-white bg-[#F07407] w-full px-3 py-2 rounded-lg font-latoregular">
                                    Suscribir
                                </button>
                            </div>
                            <p class="text-[#54340E] text-sm font-latoregular w-full leading-tight text-center z-10">
                                Nos preocupamos por tus datos en nuestra política de privacidad
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>


@section('scripts_importados')
    <script>
        // Obtener información del navegador y del sistema operativo
        const platform = navigator.platform;
        document.getElementById('sistema').value = platform;

        // Obtener la geolocalización del usuario (si se permite)
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                document.getElementById('latitud').value = position.coords.latitude;
                document.getElementById('longitud').value = position.coords.longitude;
            });
        }

        // Obtener la página de referencia
        const referrer = document.referrer;
        document.getElementById('llegade').value = referrer;


        // Obtener la resolución de la pantalla
        const screenWidth = window.screen.width;
        const screenHeight = window.screen.height;
        document.getElementById('anchodispositivo').value = screenWidth;
        document.getElementById('largodispositivo').value = screenHeight;
    </script>

@stop

@stop
