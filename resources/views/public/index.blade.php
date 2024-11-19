@extends('components.public.matrix', ['pagina' => 'index'])
@section('titulo', 'Inicio')
@section('css_importados')

    <style>
        .swiper-pagination_productos>.swiper-pagination-bullet-active {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 20px;
            height: 20px;
            opacity: 1;
            background-image: url({{ asset('images/svg/image_29.svg') }});
        }

        .swiper-pagination_productos .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: transparent;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            width: 20px;
            height: 20px;
            opacity: 1;
            background-image: url({{ asset('images/svg/image_30.svg') }});
        }

        .swiper-button-next {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_43.svg') }})
        }

        .swiper-button-next:hover {
            background-color: #FF5E14;
            opacity: 1;
        }

        .swiper-button-prev {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in;
            background-image: url({{ asset('images/svg/image_44.svg') }})
        }

        .swiper-button-prev:hover {
            background-color: #FF5E14;
            opacity: 1;
        }
    </style>

@stop


@section('content')
    <main>

    <section class="flex flex-col lg:flex-row gap-10 lg:gap-10 justify-center items-center px-[5%] lg:pl-0 lg:pr-0 -mt-24 bg-cover bg-top pt-32" style="background-image:url({{asset('images/img/portadaimagen.png')}})">
        <!-- Primer div -->
        <div class="w-full lg:w-[55%] text-[#151515] flex flex-col justify-center items-center gap-2 md:gap-10 pb-5 xl:pb-20">
            <div class="w-full flex flex-col gap-5 px-0 lg:px-[5%] pt-8 lg:pt-0 xl:max-w-3xl">
              <h1 class="text-[#F8FCFF] font-gotham_medium text-5xl xl:text-6xl line-clamp-4 xl:line-clamp-3">
                {{$textoshome->title1section ?? "Ingrese un texto"}}
              </h1>
              <div class="cursor-pointer py-3 rounded-3xl bg-[#11355A] flex flex-row w-56 justify-center items-center gap-2">
                <a href="{{$textoshome->url_image1section ?? "/catalogo"}}" class=" text-white font-gotham_medium tracking-wider text-center">{{$textoshome->title2section ?? "Ingrese un texto"}}</a>
                <img src="{{asset('images/svg/flechaderecha.svg')}}"/>
              </div>
              <p class="text-[#F8FCFF] text-lg font-gotham_book line-clamp-3">
                {{$textoshome->description1section ?? "Ingrese un texto"}}
              </p>
            </div>
            <div class="w-full flex flex-col gap-2 px-0 lg:px-[5%] pt-5 lg:pt-0 xl:max-w-3xl">
                <p class="text-[#F8FCFF] text-base font-gotham_medium line-clamp-1">
                    {{$textoshome->description2section ?? "Ingrese un texto"}}
                </p>
                <div class="flex flex-wrap gap-10 mt-3">
                    <img class="h-8 object-contain" src="{{asset('images/img/logosatec.png')}}" />
                    <img class="h-8 object-contain" src="{{asset('images/img/metrycon.png')}}" />
                    <img class="h-8 object-contain" src="{{asset('images/img/eaton.png')}}" />
                    <img class="h-8 object-contain" src="{{asset('images/img/metcon.png')}}" />
                </div>
            </div>  
        </div>

        <!-- Segundo div -->
        <div class="w-full lg:w-[45%] ">
          <div class="w-full h-full -mb-20 flex flex-row items-center justify-center">
              <img src="{{ asset('images/img/productocadmo.png') }}" class="min-h-[500px] object-contain xl:h-[600px]" />
          </div>
        </div>

    </section>


    



        {{-- <section class="pt-[155px]">
            <div class="swiper slider_productos">
                <div class="swiper-wrapper">
                    @foreach ($slider as $slide)
                        <div class="swiper-slide">
                            <div class="bg-[#E6E4E5] pt-10">
                                <div class="flex flex-col items-center gap-8 w-11/12 mx-auto md:max-w-[900px] lg:min-h-28">
                                    <h2
                                        class="text-[#082252] font-roboto font-bold text-text28 sm:text-text40 leading-tight text-center">
                                        {{ $slide->title }}</h2>
                                </div>
                                <div class="flex justify-center items-center pt-10">
                                    <img src="{{ asset($slide->url_image . $slide->name_image) }}" alt="producto"
                                        class="w-full h-full object-contain bg-top">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination_productos !flex justify-center py-5 lg:py-10 mt-3"></div>
            </div>
        </section> --}}

        @if ($benefit->isEmpty())
        @else
            <section>
                <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pt-20 pb-10 lg:pb-20 bg-[#F5F7F9]">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                        @foreach ($benefit as $beneficios)
                            <div class="flex flex-col gap-5 bg-[#F5F7F9] p-4 rounded-xl">
                                <div class="flex justify-start items-center">
                                    <img class="h-10 w-10 object-contain" src="{{ asset($beneficios->icono) }}"
                                        alt="{{ $beneficios->titulo }}">
                                </div>
                                <div class="flex flex-col gap-2">
                                    <h2 class="leading-none font-gotham_medium text-4xl text-[#0181AA] ">
                                        {{ $beneficios->titulo }}</h2>
                                    <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                        {{ $beneficios->descripcion }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif



        @if ($estadisticas->isEmpty())
        @else    
            <section>
                <div class="flex flex-col gap-10 w-full px-[5%] mx-auto py-10 lg:py-20 bg-[#FBFBFB]">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                       
                            <div class="flex flex-col justify-center gap-5 rounded-xl">
                                <h2 class="leading-tight font-gotham_medium  text-4xl xl:text-5xl text-[#0181AA] ">
                                    {{$textoshome->title3section ?? "Ingrese un texto"}}</h2>
                                <div class="h-[3px] bg-[#0181AA] w-32 rounded-full -mt-2"> </div>   
                                <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                    {{$textoshome->description3section ?? "Ingrese un texto"}}</p>
                                <div class="py-3 rounded-3xl bg-[#11355A] flex flex-row w-48 justify-center items-center gap-2 mt-5">
                                    <a href="{{route('nosotros')}}" class="cursor-pointer text-white font-gotham_medium tracking-wider text-center">Nosotros</a>
                                    <img src="{{asset('images/svg/flechaderecha.svg')}}"/>
                                </div>

                                <div class="grid grid-cols-2 sm:grid-cols-3 gap-5 mt-4">
                                  @foreach ($estadisticas as $estadistica)
                                    <div class="flex flex-col">
                                        <h2 class="leading-tight font-gotham_medium text-5xl text-[#0181AA] ">
                                            {{$estadistica->title}}</h2>
                                        <p class="text-[#02324A] font-gotham_book font-normal text-base">
                                            {{$estadistica->link1}}</p>
                                    </div>
                                  @endforeach  
                                </div>
                            </div>
                             

                            <div class="flex flex-col items-center justify-center">
                                <img class="h-[450px] md:h-[500px] object-contain lg:h-[650px] w-full"  src="{{asset('images/img/imagennosotros.png')}}" />
                            </div>
                     
                    </div>
                </div>
            </section>
        @endif    

            <section>
                <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pt-10 lg:pt-20 bg-[#F5F7F9]">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-0">
                       
                            <div class="flex flex-col justify-start gap-5 w-full lg:max-w-lg pb-10 lg:pb-20 order-1">
                                <h2 class="leading-tight font-gotham_medium  text-4xl  text-[#0181AA] ">
                                    {{$textoshome->title4section ?? "Ingrese un texto"}}</h2>
                                <div class="h-[3px] bg-[#0181AA] w-32 rounded-full -mt-2"> </div>   
                                <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                    {{$textoshome->description4section ?? "Ingrese un texto"}}</p>
                                <div class="py-3 rounded-3xl bg-[#11355A] flex flex-row w-48 justify-center items-center gap-2 mt-5">
                                    <a href="{{route('innovaciones')}}" class="cursor-pointer text-white font-gotham_medium tracking-wider text-center">Conoce más</a>
                                    <img src="{{asset('images/svg/flechaderecha.svg')}}"/>
                                </div> 
                            </div>

                            <div class="relative flex flex-col justify-end order-3 lg:order-2">
                                <img class="h-96 sm:h-[500px] object-cover sm:object-contain object-bottom" src="{{asset('images/img/secretaria.png')}}"/>
                            </div>
                             
                            <div class="flex flex-col justify-start gap-5 w-full lg:max-w-lg pb-10 lg:pb-20 order-2 lg:order-3">
                                <h2 class="leading-tight font-gotham_medium  text-4xl  text-[#0181AA] ">
                                    {{$textoshome->title5section ?? "Ingrese un texto"}}</h2>
                                <div class="h-[3px] bg-[#0181AA] w-32 rounded-full -mt-2"> </div>   
                                <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                    {{$textoshome->description5section ?? "Ingrese un texto"}}</p>
                            </div>
                            
                    </div>
                </div>
            </section>

        @if ($destacados->isEmpty())
        @else     
            <section>
                <div class="flex flex-col gap-10 w-full px-[5%] mx-auto py-10 lg:py-20 bg-[#FBFBFB]">
                    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center"> 
                        <div class="flex flex-col gap-3 items-start justify-center max-w-2xl">
                             <h2 class="leading-tight font-gotham_medium  text-4xl  text-[#0181AA] ">
                                {{$textoshome->footer5section ?? "Ingrese un texto"}}</h2>  
                            <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                {{$textoshome->description7section ?? "Ingrese un texto"}}</p>  
                        </div>
                         <div class="py-3 rounded-3xl bg-[#11355A] flex flex-row w-48 justify-center items-center gap-2 mt-5">
                                <a href="{{route('catalogo', 0)}}" class="text-white font-gotham_medium tracking-wider text-center">Conoce más</a>
                                <img src="{{asset('images/svg/flechaderecha.svg')}}"/>
                        </div> 
                    </div>

                    <div class="w-full">
                         <div class="swiper slider_productos">
                            <div class="swiper-wrapper">
                              @foreach ($destacados as $destacado)
                                    <div class="swiper-slide">   
                                        <div class="flex flex-col gap-4 max-w-[300px] mx-auto" data-aos="fade-up" data-aos-offset="150">
                                            <div class="flex justify-center items-center bg-white p-1 sm:p-2 relative">
                                                <div class="absolute left-2 top-2 flex flex-wrap gap-2">
                                                    <span class="bg-[#11355A] text-white px-3 py-0.5 rounded-2xl font-gotham_book text-sm">Satec</span>
                                                </div>   
                                                <a href="#" class="">
                                                    <img src="{{ asset($destacado->imagen) }}" alt="aa"
                                                        class="w-full h-full object-contain aspect-square" />
                                                </a>
                                            </div>
                                            
                                            <div class="flex flex-col gap-1 justify-start">
                                                <a href="#">
                                                    <h2 class="leading-tight font-gotham_medium text-lg md:text-2xl  text-[#0181AA] line-clamp-1">
                                                   {{$destacado->producto}}</h2>  
                                                </a>
                                                <p class="leading-tight font-gotham_book text-base font-semibold text-[#7080A0] ">
                                                    Por pedido</p>   
                                            </div>
                                        </div>
                                    </div> 
                              @endforeach   
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif      



        @if ($mismarcas->isEmpty())
        @else
            <section class="py-12 bg-[#F5F7F9]">
                <div class="w-full mx-auto">
                    <div class="swiper marcas">
                        <div class="swiper-wrapper items-center">
                            @foreach ($mismarcas as $marca)
                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <img class="h-16 object-contain" src="{{ asset($marca->url_image . $marca->name_image) }}" alt="logo" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif
        



        @if ($logos->isEmpty())
        @else
            <section class="py-12 bg-cover" style="background-image:url({{asset('images/img/bannernombres.png')}})">
                <div class="max-w-4xl mx-auto">
                    <div class="swiper logos">
                        <div class="swiper-wrapper items-center">
                            @foreach ($logos as $logo)
                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <h2 class="font-gotham_medium text-white text-3xl">{{$logo->title}}</h2>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif



        {{-- @if ($testimonie->isEmpty())
        @else
            <section class="bg-white pt-10 mt-10 pb-32 ">
                <div class="w-11/12 mx-auto flex flex-col gap-3 items-center">
                    <h2 class="font-roboto font-bold text-text32 md:text-text40 text-center">Reconocimiento de nuestros
                        clientes</h2>
                </div>


                <div class="mt-16 w-11/12 lg:w-9/12 mx-auto  relative">
                    <div class="swiper testimonios rounded-2xl">
                        <div class="swiper-wrapper">
                            @foreach ($testimonie as $testimonios)
                                <div class="swiper-slide">
                                    <div class="flex flex-col gap-10 bg-[#F7F8F8] p-8">
                                        <p class="text-[#082252] font-roboto font-normal text-text20 text-center">
                                            {{ $testimonios->testimonie }}
                                        </p>

                                        <div class="flex flex-col gap-2 items-center">
                                            <p class="text-[#082252] font-roboto font-bold text-text20 text-center">
                                                {{ $testimonios->name }}</p>
                                            <p
                                                class="uppercase text-[#0C4AC3] font-roboto font-medium text-text12 text-center">
                                                {{ $testimonios->ocupation }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="custom-swiper-buttons lg:flex lg:absolute block ">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>

            </section>
        @endif --}}

        <section class="w-full bg-[#F5F7F9] py-10 lg:py-20 px-[5%]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16 w-full ">
                <div class="flex flex-col justify-between">

                    <div class="flex flex-col gap-2">
                        <h2 class="leading-tight font-gotham_medium  text-4xl xl:text-5xl text-[#0181AA]">
                            {{$textoshome->title6section ?? "Ingrese un texto"}}</h2>
                        <div class="h-[3px] bg-[#0181AA] w-32 rounded-full"> </div>   
                        <p class="text-[#02324A] font-gotham_book font-normal text-lg mt-5">
                            {{$textoshome->description6section ?? "Ingrese un texto"}}
                        </p>
                    </div>

                    <div class="flex flex-col gap-2">
                        <div class="flex flex-col gap-1">
                            <p class="font-gotham_medium  text-2xl text-[#0181AA] ">Horario
                            </p>
                            <p class="font-gotham_book text-base text-[#11355a] font-normal">
                               @foreach (explode(',', $general[0]->schedule) as $item)
                                    {{ $item }}<br>
                               @endforeach
                            </p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <p class="font-gotham_medium  text-2xl text-[#0181AA] ">Dirección
                            </p>
                            <p class="font-gotham_book text-base text-[#11355a] font-normal">
                               {{ $general[0]->address }}, {{ $general[0]->inside }},
                               {{ $general[0]->district }} - {{ $general[0]->city }}
                            </p>
                        </div>
                        <div class="flex flex-col gap-1">
                           <p class="font-gotham_medium  text-2xl text-[#0181AA] ">Ponerse en contacto
                            </p>
                            <p class="font-gotham_book text-base text-[#11355a] font-normal">
                                {{ $general[0]->cellphone }}<br>
                                {{ $general[0]->office_phone }}
                            </p>
                        </div>       
                    </div>

                </div>
                
                <div class="flex flex-col gap-10 w-full sm:px-[5%] md:px-[10%]  "> 
                   
                        <div class="flex flex-col gap-10 bg-white rounded-xl p-6">
                                <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA]">
                                    {{$textoshome->title7section ?? "Ingrese un texto"}}
                                </h2>
                                <form id="formContactos" class="grid grid-cols-1 gap-4">
                                    @csrf
                                        <div class="relative w-full">
                                            <label for="fullNameContacto" class="font-gotham_book font-semibold text-sm text-[#11355a]">Nombre completo</label>
                                            <input required name="full_name" id="fullNameContacto" type="text"
                                                placeholder="Nombre completo"
                                                class="mt-1 w-full py-3 px-4 focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-xl" />
                                        </div>

                                        <div class="relative w-full">
                                            <label for="telefonoContacto" class="font-gotham_book font-semibold text-sm text-[#11355a]">Número de Teléfono</label>
                                            <input id="telefonoContacto" name="phone" placeholder="Teléfono" type="tel"
                                                maxlength="12" required
                                                class="mt-1 w-full py-3 px-4 focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-xl" />
                                        </div>

                                        <div class="relative w-full">
                                            <label for="emailContacto" class="font-gotham_book font-semibold text-sm text-[#11355a]">E-Mail</label>
                                            <input type="email" name="email" placeholder="E-mail" required
                                                id="emailContacto"
                                                class="mt-1 w-full py-3 px-4 focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-xl" />
                                        </div>

                                        <input type="hidden" id="tipo" placeholder="tipo" name="source"
                                            value="Inicio" />

                                        <div class="relative w-full">
                                            <label for="message" class="font-gotham_book font-semibold text-sm text-[#11355a]">Escribe un mensaje</label>
                                            <textarea name="message" id="message" rows="3" cols="30"
                                                class="mt-1 w-full py-3 px-4 focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-xl"
                                                placeholder="Mensaje"></textarea>
                                        </div>

                                        <div class="relative w-full flex flex-row items-center gap-3">
                                            
                                            <input type="checkbox" required
                                                id="polytic"
                                                class="w-6 h-6  focus:outline-none font-gotham_book text-base text-[#11355a] focus:ring-0 placeholder:text-[#11355a]  border-[#d7dee6] border transition-all focus:outline-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#d7dee6] rounded-lg" />
                                            <label for="polytic" class="font-gotham_book font-semibold text-sm text-[#11355a]">Usted acepta nuestra amigable política de privacidad.</label>    
                                        </div>

                                        <input type="hidden" name="client_width" id="anchodispositivo">
                                        <input type="hidden" name="client_height" id="largodispositivo">
                                        <input type="hidden" name="client_latitude" id="latitud">
                                        <input type="hidden" name="client_longitude" id="longitud">
                                        <input type="hidden" name="client_system" id="sistema">
                                        <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Inicio" />
                                        <div class="flex justify-center items-center py-5">
                                            <button type="submit"
                                                class="flex flex-row justify-center gap-3 items-center text-lg font-gotham_book font-semibold text-white bg-[#11355a] py-3 px-6 w-full text-center rounded-3xl">Enviar
                                                solicitud
                                                 <span><img src="{{asset('images/svg/flechaderecha.svg')}}"/></span>   
                                                </button>

                                               
                                        </div>
                                    
                                </form>

                        </div>
                </div>
            </div>
        </section>    

    </main>


@section('scripts_importados')
    <script>
        var swiper = new Swiper(".logos", {
            slidesPerView: 5,
            spaceBetween: 60,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 3,
                    centeredSlides: false,
                },
                1024: {
                    slidesPerView: 5,
                    centeredSlides: false,
                },
            },
        });


        var swiper = new Swiper(".marcas", {
            slidesPerView: 4,
            spaceBetween: 70,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                    centeredSlides: true,
                },
                768: {
                    slidesPerView: 3,
                    centeredSlides: false,
                },
                1024: {
                    slidesPerView: 5,
                    centeredSlides: false,
                },
            },
        });


        var swiper = new Swiper(".slider_productos", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            grabCursor: true,
            loop: true,
             autoplay: {
                delay: 2000, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                600: {
                    slidesPerView: 2,
                   
                },
                950: {
                    slidesPerView: 3,
                   
                },
                1200: {
                    slidesPerView: 4,
                   
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });


        var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            grabCursor: true,
            centeredSlides: false,
            initialSlide: 0,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                }
            },

        });
    </script>
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
