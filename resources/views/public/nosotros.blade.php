@extends('components.public.matrix', ['pagina'=>'nosotros'])
@section('titulo', 'Nosotros')
@section('css_importados')
    <style>
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
    <main class="bg-cover bg-center pt-16 xl:pt-5"  style="background-image:url({{asset('images/img/texturanosotros.png')}})">

       
        <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16" 
          style="background-image: url('{{asset('images/img/textura3.svg')}}');">
           
          <div class="px-[5%]  flex flex-col items-center justify-center gap-5">
            <div class="flex flex-col gap-1 max-w-3xl text-center">
                <h3 class="font-gotham_bold text-white text-lg ">Nosotros</h3>
                <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl leading-none">Conexión que <span class="text-[#E29720]">Te Impulsa</span></h2>
                <p class="text-white text-base font-gotham_book"> 
                    Ofrecemos internet rápido y confiable para hogares y empresas, con planes flexibles y soporte dedicado. Mejora tu conexión con velocidades que se adaptan a tus necesidades y disfruta de una experiencia sin interrupciones.
                </p>
            </div>
          </div>

          <div class="px-[5%] md:pl-[8%] md:pr-0 py-5 flex md:flex-row gap-5 md:gap-10">
                <div class="w-full">
                 
                </div>
            </div>  
        </section>


       {{-- <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mx-auto py-10 lg:py-20">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-10">
                       
                            <div class="flex flex-col justify-center gap-5 rounded-xl">
                                <h2 class="leading-tight font-gotham_medium  text-4xl lg:text-5xl xl:text-6xl text-[#0181AA] ">
                                    {{$textosnosotros->title1section ?? "Ingrese un texto"}}</h2>
                                <div class="h-[3px] bg-[#0181AA] w-32 rounded-full -mt-2"> </div>   
                                <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                    {{$textosnosotros->description1section ?? "Ingrese un texto"}}
                                </p>
                               
                            </div>
                             
                            <div class="flex flex-col items-center justify-center">
                                <img class="h-[450px] md:h-[500px] object-contain lg:h-[650px] w-full"  src="{{asset('images/img/cadmonosotros.png')}}" />
                            </div>
                     
                    </div>
            </div>
       </section> --}}


        {{-- <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pb-10 lg:pb-20 ">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-10">
                            
                            <div class="flex flex-col items-start justify-center order-2 lg:order-1 gap-0 lg:gap-5">
                                <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                    {{$textosnosotros->title3section ?? "Ingrese un texto"}}</h2>    
                                <img class="h-[350px] md:h-[400px] object-contain object-left lg:h-[450px] w-full"  src="{{asset('images/img/oficinacadmo.png')}}" />
                            </div>
                     
                            <div class="flex flex-col justify-center gap-8 xl:gap-16 order-1 lg:order-2">
                                <div class="flex flex-col gap-3">
                                    <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                        {{$textosnosotros->title3secondsection ?? "Ingrese un texto"}}</h2>
                                    <div class="h-[3px] bg-[#0181AA] w-28 rounded-full -mt-4"> </div>   
                                    <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                        {{$textosnosotros->description3secondsection ?? "Ingrese un texto"}}
                                    </p>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                        {{$textosnosotros->title4section ?? "Ingrese un texto"}}</h2>
                                    <div class="h-[3px] bg-[#0181AA] w-28 rounded-full -mt-4"> </div>   
                                    <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                        {{$textosnosotros->description4section ?? "Ingrese un texto"}}
                                    </p>
                                </div>
                            </div>
                             
                           
                    </div>
            </div>
        </section> --}}
    
       
        {{-- @if ($benefit->isEmpty())
        @else
            <section>
                <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pt-20 pb-10 lg:pb-20 ">
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
        @endif --}}
       
    
    </main>

@section('scripts_importados')

    <script>
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

         var swiper = new Swiper(".clientes", {
            slidesPerView: 6,
            spaceBetween: 30,
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
                    slidesPerView: 6,
                    centeredSlides: false,
                },
            },
        });
    </script>
@stop

@stop
