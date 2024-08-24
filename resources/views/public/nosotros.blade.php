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
    <main>
        <section class="pt-52">
            <div class="w-11/12 mx-auto flex flex-col gap-10 md:gap-20">
                <div class="w-full mx-auto md:max-w-[1064px] flex flex-col gap-1" data-aos="fade-up" data-aos-offset="150">
                    <h3 class="text-[#0C4AC3] font-roboto font-normal text-text18 text-center">Sobre HYDROTECH PERÚ IMPORT
                        E.I.R.L</h3>
                    <h2 class="text-[#082252] font-roboto font-bold text-text48 md:text-text56 text-center leading-tight">
                        Conócenos: Expertos en Soluciones de Tratamiento de Agua</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-4 gap-10" data-aos="fade-up" data-aos-offset="150">
                    <div class="w-full md:max-w-[600px] order-1 md:order-1 col-span-1 md:col-span-2 md:row-span-1">
                        <div class="flex flex-col gap-2">
                            <h3 class="text-[#FF5E14] font-roboto font-normal text-text16">Sobre HYDROTECH PERÚ IMPORT
                                E.I.R.L</h3>
                            <h2 class="text-[#082252] font-roboto font-bold text-text48 leading-tight">Químicos y
                                tratamiento de agua</h2>
                        </div>
                    </div>

                    <div class="flex flex-col justify-end gap-3 order-3 md:order-3 col-span-1 md:col-span-2 md:row-span-1">
                        <h3 class="text-[#082252] font-roboto font-bold text-text24">Agua Pura, Vida Segura</h3>
                        <p class="text-[#082252] font-roboto font-normal text-text18">¡Contáctanos hoy y transforma la
                            calidad de tu agua!</p>
                        <div class="flex justify-start items-center">
                            <a href="{{ route('contacto') }}"
                                class="text-white py-3 px-6 bg-[#FF5E14] rounded-xl font-roboto font-semibold text-center w-full md:w-auto">Trabajemos
                                juntos</a>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 order-2 md:order-2 col-span-1 md:col-span-2 md:row-span-2">
                        <div class="text-[#082252] font-roboto font-normal text-text18">
                            {!! $general->aboutus !!}
                        </div>

                    </div>
                </div>
            </div>


            <div class="flex justify-center items-center w-11/12 mx-auto my-10 md:my-16 " data-aos="fade-up"
                data-aos-offset="150">
                <img src="{{ asset('images/img/terminada.jpg') }}" alt="HPI" class="w-full rounded-xl object-cover">
            </div>

            @if ($nosotros->isEmpty())
                
            @else
                <div class="w-11/12 mx-auto flex flex-col gap-8 my-5 lg:my-16 ">
                    @foreach ($nosotros as $item)
                    <div>
                        <h2 class="text-[#082252] font-roboto font-bold text-text40 lg:text-text48 leading-none">{{$item->titulo}}</h2>
                        <div class="text-[#082252] font-roboto font-normal text-text18 mt-3">
                                {!!$item->descripcion!!}
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif

        </section>

        @if ($staff->isEmpty())
        @else
        <section>
            <div class="flex flex-col gap-8 w-11/12 mx-auto pb-20 mt-12">
                <div class="flex flex-col gap-2" data-aos="fade-up" data-aos-offset="150">
                    <h3 class="text-[#FF5E14] font-roboto font-normal text-text16">PROFESIONALES</h3>
                    <h2 class="text-[#082252] font-roboto font-bold text-text48 leading-tight">Nuestro Equipo de Expertos
                    </h2>
                    <p class="text-[#082252] font-roboto font-normal text-text18">Nuestro equipo está compuesto por
                        ingenieros y técnicos especializados en tratamiento de agua, dedicados a ofrecer soluciones
                        eficientes y de alta calidad para satisfacer tus necesidades industriales y residenciales.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    @foreach ($staff as $equipo)
                        <div class="flex flex-col gap-3" data-aos="fade-up" data-aos-offset="150">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset($equipo->url_image . $equipo->name_image) }}" alt="profesionales"
                                    class="w-full rounded-xl object-cover">
                            </div>

                            <div>
                                <div class="flex justify-between items-center">
                                    <p class="text-[#082252] font-roboto font-semibold text-text20">{{ $equipo->nombre }}
                                    </p>
                                    <div class="flex justify-between gap-2 items-center">
                                        @if (!empty($equipo->facebook))
                                            <a href="{{ $equipo->facebook }}" target="_blank">
                                                <img src="{{ asset('images/img/facebook.png') }}" alt="facebook">
                                            </a>
                                        @endif
                                        @if (!empty($equipo->instagram))
                                            <a href="{{ $equipo->instagram }}" target="_blank">
                                                <img src="{{ asset('images/img/instagram.png') }}" alt="instagram">
                                            </a>
                                        @endif
                                        @if (!empty($equipo->youtube))
                                            <a href="{{ $equipo->youtube }}" target="_blank">
                                                <img src="{{ asset('images/img/linkedin.png') }}" alt="youtube">
                                            </a>
                                        @endif
                                        {{-- @if (!empty($equipo->twitter))
                                            <a  href="mailto:{{ $equipo->mail }}">
                                                <img src="{{ asset('images/img/twitter.png') }}" alt="twitter">
                                            </a>
                                        @endif --}}
                                    </div>
                                </div>
                                <p class=" text-[#082252] font-roboto font-normal text-base">
                                    {{ $equipo->twitter }}
                                </p>
                                <p class="uppercase text-[#FF5E14] font-roboto font-normal text-text14">
                                    {{ $equipo->cargo }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif


        @if ($clientes->isEmpty())
        @else
            <section class="py-12">
                <div class="max-w-[700px] mx-auto pb-10 w-11/12">
                    <h2 class="text-[#082252] font-roboto font-bold text-text32 leading-tight text-center">
                        Confiaron en nosotros
                    </h2>
                </div>

                <div class="w-full mx-auto">
                    <div class="swiper clientes">
                        <div class="swiper-wrapper items-center">
                            @foreach ($clientes as $cliente)
                                <div class="swiper-slide">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset($cliente->url_image . $cliente->name_image) }}" alt="logo" class="h-32 object-contain"/>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if ($certificados->isEmpty())
        @else
            <section class="pt-44 pb-20">
                <div class="w-11/12 mx-auto">
                    <div class="w-full md:max-w-[1000px] mx-auto flex flex-col gap-16 py-20">
                        <div class="flex flex-col gap-2">
                            <h2
                                class="text-[#082252] font-roboto font-bold text-text48 md:text-text56 text-center leading-tight">
                                Nuestras certificaciones</h2>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-20">
                        @foreach ($certificados as $descargable)
                            <div class="flex justify-start items-center gap-8 h-[150px] md:h-[250px]">
                                <div class="bg-[#F5F4F5] rounded-xl flex justify-center items-center w-2/5 h-full">
                                    <img src="{{ asset($descargable->url_image.$descargable->name_image ) }}" alt="catalogo"
                                        class="w-[80px] h-[115px] md:w-[150px] md:h-[190px]">
                                </div>
                                <div class="flex flex-col gap-4 w-3/5">
                                    <div class="flex flex-col gap-2">
                                        <h2 class="text-[#082252] font-roboto font-bold text-text18 md:text-text24 leading-tight">
                                            {{$descargable->title}}</h2>
                                        <p class="text-[#082252] font-roboto font-normal text-text10 md:text-text16">{{$descargable->description}}</p>
                                    </div>

                                    <a href="{{ asset('storage/archives/'.$descargable->name_archive) }}" target="_blank" 
                                        class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                        <span>Descargar</span>
                                        <div>
                                            <img src="{{ asset('images/svg/image_42.svg') }}" alt="download"
                                                class="w-[8px] h-[9px] md:w-[auto] md:h-auto">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        {{-- @if ($testimonie->isEmpty())
        @else
            <section class="bg-white md:pt-10 md:mt-10 pb-32 md:pb-32">
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
