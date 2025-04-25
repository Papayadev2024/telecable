@extends('components.public.matrix', ['pagina' => 'Inicio'])
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

        .slider-pagination {
           
            margin-bottom: 30px;
        }
        
        /* Estilo de los puntos de paginación */
        .slider-pagination .swiper-pagination-bullet {
            width: 16px; /* Ancho personalizado */
            height: 9px; /* Alto personalizado */
            border-radius: 6px; /* Bordes redondeados */
            background-color: #F07407 !important; /* Color base */
            transition: background-color 0.3s, transform 0.3s; /* Transiciones suaves */
        }
        
        /* Estilo de los puntos que no están activos */
        .slider-pagination .swiper-pagination-bullet:not(.swiper-pagination-bullet-active) {
            background-color: white !important; /* Color más tenue */
            opacity: 0.8; /* Opacidad constante */
        }

        #imagen-zona {
            transition: opacity 0.3s ease-in-out;
        }
        .blocker{
            z-index: 50!important;
        }
    </style>

@stop


@section('content')
    <main>
        
    <div
        x-data="{
            selected: 1,
            categories: {{ json_encode($category) }},
            products: {{ json_encode($productos) }},
            general: {{ json_encode($general[0]) }},
            get filteredProducts() {
                const selectedCategory = this.categories[this.selected];
                return this.products.filter(product => product.categoria_id === selectedCategory.id);
            }
        }"
    >    
        <section class="bg-center h-svh bg-cover bg-no-repeat flex flex-col justify-center relative" style="background-image: url({{asset('images/img/tc_banner.png')}})">
            {{--  --}}
            {{-- <img class="object-cover absolute top-0 left-0 h-full object-left w-full" src="{{asset('images/img/tc_textura.svg')}}" /> --}}
            <img class="object-cover border-0 absolute top-0 left-0 h-full object-left w-full bg-[linear-gradient(to_right,#00388cc2_20%,transparent_80%)]"/>
            <img class="object-cover absolute bottom-0 right-0 h-full object-bottom w-full" src="{{asset('images/img/tc_textura2.svg')}}" />
            <div class="flex flex-col lg:flex-row px-[5%]  py-[5%]  lg:px-[5%]  gap-5 justify-center items-start lg:items-end">
                <div class="z-20 w-full lg:w-3/4 2xl:w-2/3 flex flex-col gap-4 2xl:gap-10 justify-center">
                    
                    <div class="flex flex-col gap-1">
                            <h3 class="font-gilroy_regular text-white text-xl line-clamp-1 flex flex-row gap-3 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M16.3334 3.5H11.6667C7.26693 3.5 5.06705 3.5 3.70021 4.86683C2.33337 6.23367 2.33337 8.43355 2.33337 12.8333C2.33337 17.2331 2.33337 19.4331 3.70021 20.7998C5.06705 22.1667 7.26693 22.1667 11.6667 22.1667H16.3334C20.7331 22.1667 22.9331 22.1667 24.2998 20.7998C25.6667 19.4331 25.6667 17.2331 25.6667 12.8333C25.6667 8.43355 25.6667 6.23367 24.2998 4.86683C22.9331 3.5 20.7331 3.5 16.3334 3.5Z" stroke="white" stroke-width="1.75" stroke-linecap="round"/>
                                    <path d="M19.7167 18.0833C19.7167 17.0524 20.5524 16.2167 21.5833 16.2167M15.9833 18.0833C15.9833 14.9905 18.4905 12.4833 21.5833 12.4833M12.25 18.0833C12.25 12.9287 16.4287 8.75 21.5833 8.75" stroke="white" stroke-width="1.75" stroke-linecap="round"/>
                                    <path d="M21 22.167L22.1667 24.5003" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.00004 22.167L5.83337 24.5003" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                {{$textoshome->title1section ?? 'Ingrese texto'}}
                            </h3>
                            <h2 class="font-gilroy_bold text-white text-4xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl line-clamp-3">{{$textoshome->description1section ?? 'Ingrese texto'}}</h2>
                    </div>
   
                    <div class="font-gotham_bold w-full rounded-2xl bg-[#5599FF] mt-5 relative">
                        <div class="categorias_carrusel w-full overflow-hidden rounded-2xl bg-[#5599FF]">
                            <div class="swiper-wrapper">
                                {{-- <template x-for="(cat, index) in categories" :key="index">
                                    <div    
                                        @click="selected = index" 
                                        :class="selected === index 
                                            ? 'bg-[#004FC6]' 
                                            : ''" 
                                        class="flex flex-row gap-5 md:gap-0 md:flex-col items-center justify-start md:justify-center md:items-center px-6 py-7 cursor-pointer">
                                        <img class="w-12 h-12 object-contain" :src="cat.url_image + cat.name_image"  onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"  />
                                        <div class="flex flex-col">
                                            <h3 class="text-white text-lg xl:text-xl font-gilroy_semibold md:mt-5 text-center" x-text="cat.name"></h3>
                                            <h2 class="text-white text-base font-gilroy_regular" x-text="cat.description"></h2>
                                        </div>
                                    </div>
                                </template> --}}
                                <template x-for="(cat, index) in categories" :key="index">
                                    <div class="swiper-slide">
                                        <div class="flex flex-col gap-5 md:gap-0 md:flex-col items-center justify-start md:justify-center md:items-center px-6 py-7 cursor-pointer"
                                         @click="selected = index" 
                                         :class="selected === index ? 'bg-[#004FC6]' : ''">
                                            <img class="w-12 h-12 object-contain mx-auto" :src="cat.url_image + cat.name_image" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            <div class="flex flex-col">
                                                <h3 class="text-white text-lg xl:text-xl font-gilroy_semibold md:mt-3 text-center" x-text="cat.name"></h3>
                                                <h2 class="text-white text-base font-gilroy_regular text-center" x-text="cat.description"></h2>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                        <div class="swiper-cat-prev absolute top-1/2 -translate-y-1/2 -left-2 lg:-left-5 z-20 aspect-square">
                            <div class="bg-white rounded-full flex flex-col relative -m-1">
                                <i class="fa-solid fa-circle-chevron-left text-3xl md:text-4xl text-[#004FC6]"></i>
                            </div>
                        </div>
                        <div class="swiper-cat-next absolute top-1/2 -translate-y-1/2 -right-2 lg:-right-5 z-20 aspect-square">
                            <div class="bg-white rounded-full flex flex-col relative -m-1">
                                <i class="fa-solid fa-circle-chevron-right text-3xl md:text-4xl text-[#004FC6]"></i>
                            </div>
                        </div>

                    </div>
                    
                </div>
                <div class="z-20 w-full lg:w-1/4 2xl:w-1/3 flex flex-col justify-end items-start lg:items-end">
                    
                </div>
            </div> 
        </section>
        <script>
            // Inicializar Swiper después de que Alpine.js haya renderizado los elementos
            document.addEventListener('alpine:init', () => {
                Alpine.nextTick(() => {
                    new Swiper('.categorias_carrusel', {
                        // Opciones de configuración
                        slidesPerView: 1, // Muestra 1 slide por vista en móvil
                        spaceBetween: 0,
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-cat-next',
                            prevEl: '.swiper-cat-prev',
                        },
                        breakpoints: {
                            0: {
                                slidesPerView: 1, 
                            },
                            460: {
                                slidesPerView: 2, 
                            },
                            768: {
                                slidesPerView: 3, 
                            }
                        }
                    });
                });
            });

            
        </script>
        <section  class="bg-cover bg-opacity-100 relative pb-10 lg:pb-16 flex flex-col gap-10"  style="background-image: url('{{asset('images/img/tc_textura3.svg')}}');">
                
                <div class="px-[5%] md:px-[8%]  py-5 flex md:flex-row gap-5 md:gap-10 lg:-mt-10">
                    <div class="w-full">
                        <div class="swiper planes w-full">
                            <div class="swiper-wrapper">   
                                <template x-for="producto in filteredProducts" :key="producto.id">
                                    <div class="swiper-slide">
                                        <div class="flex flex-col gap-5 max-w-[390px] bg-white hover:bg-[#1EA7A2] bg-opacity-10 p-6 rounded-3xl mx-auto">
                                            
                                            <!-- Título y precio -->
                                            <div class="flex flex-wrap justify-between items-center w-full">
                                                <h2 class="py-2 text-white text-lg font-gilroy_medium text-left w-auto line-clamp-1">
                                                    <span x-text="producto.producto"></span>
                                                </h2>
                                                <h3 class="font-gilroy_bold text-white text-2xl">
                                                    S/ <span x-text="producto.precio"></span>
                                                    <span class="font-gilroy_regular tracking-wide text-white text-base">/Mes</span>
                                                </h3>
                                            </div>
                                            
                                            <!-- Etiqueta adicional -->
                                            <div class="flex flex-wrap gap-2 font-gilroy_regular justify-start items-start">
                                                <template x-for="tag in producto.tags" :key="tag.id">
                                                    <div class="bg-[#59C402] px-3 py-2 rounded-full tracking-normal" :style="'background-color: ' + tag.color">
                                                        <p class="leading-none text-white text-sm" x-text="tag.name"></p>
                                                    </div>
                                                </template>
                                            </div>
                                
                                            <!-- Extracto y descripción -->
                                            <div class="flex flex-col">
                                                <div class="flex flex-row gap-2 items-center">
                                                    <h2 class="font-gilroy_extrabold text-white text-5xl line-clamp-3" x-text="producto.extract"></h2>
                                                </div>
                                                <h2 class="-mt-2 font-gilroy_regular text-white text-sm line-clamp-2" x-text="producto.name_fichatecnica"></h2>
                                            </div>

                                            
                                            <!-- Equipamiento -->
                                            <div class="flex flex-col" x-show="producto.meta_title && producto.categoria_id === 1" >
                                                <div class="flex flex-col gap-2 items-start p-3 rounded-xl" style="background-color: rgba(238, 249, 230, 0.16)">
                                                    <h2 class="font-gilroy_medium text-white text-xl">Equipamiento y accesos TV</h2>
                                                    <p class="font-gilroy_regular text-white text-sm -mt-2" x-text="producto.meta_title"></p>
                                                </div>
                                                
                                            </div>

                                            <!-- Canales -->
                                            <div class="flex flex-row gap-3" x-show="producto.canals && producto.categoria_id === 3">
                                                <template x-for="canal in producto.canals.slice(-3)" :key="canal.id">
                                                    <div><img class="w-12 h-12 object-contain rounded-full" :src="canal.imagen ? canal.imagen : '{{ asset('images/img/noimagen.jpg') }}'" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" /></div>
                                                </template>
                                                <div :data-id="producto.id" class="cursor-pointer botoncanales"><img class="w-12 h-12 object-contain rounded-full" src="{{ asset('images/img/canalmas.png') }}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" /></div>
                                            </div>
                                            
                                            
                                        
                                            <!-- Información adicional -->
                                            <div class="flex flex-col justify-center items-start font-gilroy_semibold group">

                                                <div class="flex flex-row gap-2">
                                                <h3 class="font-gilroy_light font-semibold tracking-wider text-white text-sm line-clamp-1 flex flex-row gap-1 items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                        <path d="M7.86755 4.82665L8.85795 3.83627C9.97309 2.72113 11.433 2.25857 12.9781 2.18299C13.5791 2.15359 13.8796 2.13889 14.1205 2.37985C14.3615 2.6208 14.3468 2.92128 14.3174 3.52225C14.2418 5.06733 13.7792 6.52727 12.6641 7.64239L11.6737 8.63279C10.8581 9.44839 10.6262 9.68033 10.7974 10.565C10.9664 11.2408 11.13 11.8952 10.6386 12.3866C10.0425 12.9827 9.49875 12.9827 8.90269 12.3866L4.11374 7.59766C3.51768 7.00158 3.51766 6.45786 4.11374 5.86179C4.60513 5.37039 5.25955 5.53395 5.93533 5.70292C6.82002 5.87415 7.05195 5.64225 7.86755 4.82665Z" stroke="white" stroke-linejoin="round"/>
                                                        <path d="M11.3306 5.16699H11.3366" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M1.66669 14.8333L5.00002 11.5" stroke="white" stroke-linecap="round"/>
                                                        <path d="M5.66669 14.8333L7.00002 13.5" stroke="white" stroke-linecap="round"/>
                                                        <path d="M1.66669 10.8333L3.00002 9.5" stroke="white" stroke-linecap="round"/>
                                                    </svg>
                                                    <span x-text="producto.categoria_id === 8 ? 'Canales:' : (producto.categoria_id === 6 ? 'Deco:' : 'Velocidad:')"></span>
                                                </h3>
                                                <h2 class="font-gilroy_regular text-white text-sm" x-text="producto.description" ></h2>
                                                </div>

                                                <div class="bg-white h-[1px] w-full mx-auto my-3"></div>

                                                <div class="flex flex-row gap-2">
                                                    <h3 class="font-gilroy_light font-semibold tracking-wider text-white text-sm line-clamp-1 flex flex-row gap-1 items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                        <path d="M7.86755 4.82665L8.85795 3.83627C9.97309 2.72113 11.433 2.25857 12.9781 2.18299C13.5791 2.15359 13.8796 2.13889 14.1205 2.37985C14.3615 2.6208 14.3468 2.92128 14.3174 3.52225C14.2418 5.06733 13.7792 6.52727 12.6641 7.64239L11.6737 8.63279C10.8581 9.44839 10.6262 9.68033 10.7974 10.565C10.9664 11.2408 11.13 11.8952 10.6386 12.3866C10.0425 12.9827 9.49875 12.9827 8.90269 12.3866L4.11374 7.59766C3.51768 7.00158 3.51766 6.45786 4.11374 5.86179C4.60513 5.37039 5.25955 5.53395 5.93533 5.70292C6.82002 5.87415 7.05195 5.64225 7.86755 4.82665Z" stroke="white" stroke-linejoin="round"/>
                                                        <path d="M11.3306 5.16699H11.3366" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M1.66669 14.8333L5.00002 11.5" stroke="white" stroke-linecap="round"/>
                                                        <path d="M5.66669 14.8333L7.00002 13.5" stroke="white" stroke-linecap="round"/>
                                                        <path d="M1.66669 10.8333L3.00002 9.5" stroke="white" stroke-linecap="round"/>
                                                    </svg>
                                                        Instalacion:
                                                    </h3>
                                                    <h2 class="font-gilroy_regular text-white text-sm"  x-text="producto.especificacion"></h2>
                                                </div>

                                                <div class="bg-white h-[1px] w-full mx-auto my-3"></div>

                                                <div class="flex flex-row gap-2">
                                                    <h3 class="font-gilroy_light font-semibold tracking-wider text-white text-sm line-clamp-1 flex flex-row gap-1 items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                                        <path d="M7.86755 4.82665L8.85795 3.83627C9.97309 2.72113 11.433 2.25857 12.9781 2.18299C13.5791 2.15359 13.8796 2.13889 14.1205 2.37985C14.3615 2.6208 14.3468 2.92128 14.3174 3.52225C14.2418 5.06733 13.7792 6.52727 12.6641 7.64239L11.6737 8.63279C10.8581 9.44839 10.6262 9.68033 10.7974 10.565C10.9664 11.2408 11.13 11.8952 10.6386 12.3866C10.0425 12.9827 9.49875 12.9827 8.90269 12.3866L4.11374 7.59766C3.51768 7.00158 3.51766 6.45786 4.11374 5.86179C4.60513 5.37039 5.25955 5.53395 5.93533 5.70292C6.82002 5.87415 7.05195 5.64225 7.86755 4.82665Z" stroke="white" stroke-linejoin="round"/>
                                                        <path d="M11.3306 5.16699H11.3366" stroke="white" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                                        <path d="M1.66669 14.8333L5.00002 11.5" stroke="white" stroke-linecap="round"/>
                                                        <path d="M5.66669 14.8333L7.00002 13.5" stroke="white" stroke-linecap="round"/>
                                                        <path d="M1.66669 10.8333L3.00002 9.5" stroke="white" stroke-linecap="round"/>
                                                    </svg>
                                                    Soporte:
                                                    </h3>
                                                    <h2 class="font-gilroy_regular text-white text-sm" x-text="producto.sku"></h2>
                                                </div>
                                            </div>   

                                            <!-- Botón de WhatsApp -->
                                            <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                                                <a class="w-full" target="_blank"
                                                    :href="`https://api.whatsapp.com/send?phone=${general?.whatsapp || ''}&text=${encodeURIComponent('Me interesa el servicio: ' + (producto.producto || '') + ' - ' + (producto.extract || '') + ' - S/ ' + (producto.precio || ''))}`">
                                                    <div class="bg-[#0066FF] w-full px-3 text-center py-3 rounded-3xl tracking-normal">
                                                        <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                                                    </div>
                                                </a>
                                            </div>
                                            
                                        </div>
                                </template> 
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="font-gilroy_semibold text-sm text-center text-white">{{$textoshome->description2section2 ?? 'Ingrese texto'}}</div>
            
        </section>
        
    </div>

        <section class="flex flex-col lg:flex-row px-[5%] lg:px-[5%] py-10 lg:py-16 gap-8 md:gap-16 justify-center items-start lg:items-end">
          <div class="w-full lg:w-1/2 flex flex-col gap-4">
            <h3 class="font-gilroy_regular text-[#001F4F] text-xl line-clamp-1 flex flex-row gap-3 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                    <path d="M16.3334 3.5H11.6667C7.26693 3.5 5.06705 3.5 3.70021 4.86683C2.33337 6.23367 2.33337 8.43355 2.33337 12.8333C2.33337 17.2331 2.33337 19.4331 3.70021 20.7998C5.06705 22.1667 7.26693 22.1667 11.6667 22.1667H16.3334C20.7331 22.1667 22.9331 22.1667 24.2998 20.7998C25.6667 19.4331 25.6667 17.2331 25.6667 12.8333C25.6667 8.43355 25.6667 6.23367 24.2998 4.86683C22.9331 3.5 20.7331 3.5 16.3334 3.5Z" stroke="#001F4F" stroke-width="1.75" stroke-linecap="round"/>
                    <path d="M19.7167 18.0833C19.7167 17.0524 20.5524 16.2167 21.5833 16.2167M15.9833 18.0833C15.9833 14.9905 18.4905 12.4833 21.5833 12.4833M12.25 18.0833C12.25 12.9287 16.4287 8.75 21.5833 8.75" stroke="#001F4F" stroke-width="1.75" stroke-linecap="round"/>
                    <path d="M21 22.167L22.1667 24.5003" stroke="#001F4F" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7.00004 22.167L5.83337 24.5003" stroke="#001F4F" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                {{$textoshome->title3section ?? 'Ingrese texto'}}
            </h3>
            @php
                $texto = $textoshome->description3section ?? "Ingrese un texto";
                $texto_formateado = preg_replace('/\*(.*?)\*/', '<span class="text-[#59C402] font-gilroy_bold">$1</span>', e($texto));
            @endphp
            
            <h2 class="font-gilroy_medium text-[#001F4F] text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl line-clamp-2">
                {!! $texto_formateado !!}
            </h2>
            
            <div class="flex flex-col gap-2 text-[#001637] font-gilroy_regular text-lg">
                {!! $textoshome->description3section3 ?? "Ingrese texto" !!}
            </div>

            <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                <a href="{{route('nosotros')}}">
                    <div class="bg-[#0066FF] w-auto px-6 text-center py-3 rounded-3xl tracking-normal">
                        <p class="leading-none text-white text-lg">Sobre nosotros</p>
                    </div>
                </a>
            </div>

          </div>

          <div class="w-full lg:w-1/2 flex flex-col justify-center items-center">
             <img src="{{asset('images/img/tc_nosotros.png')}}" class="aspect-[590/439] w-[590px] object-contain" />
          </div>
        </section>


        <section class="flex flex-col lg:flex-row px-[5%] lg:px-[5%] pb-10 lg:pb-16 gap-5 md:gap-16 justify-center items-start lg:items-end">
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 font-gotham_bold w-full rounded-2xl overflow-hidden  mt-5">
            
            @foreach ($benefit as $benef)
                @php
                    $texto = $benef->titulo;
                    $textoFormateado = preg_replace('/\*(.*?)\*/', '<span class="font-gilroy_bold">$1</span>', e($texto));
                @endphp
                <div class="flex flex-col justify-center items-center px-6 py-7 bg-[#59C4021A] group hover:bg-[#004FC6]">
                    <img class="w-12 h-12 object-contain group-hover:invert" src="{{asset($benef->icono)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"/>
                    <h3 class="text-[#001637] group-hover:text-white text-lg xl:text-xl font-gilroy_regular mt-5 text-center line-clamp-2">{!!$textoFormateado!!}</h3>
                    <h2 class="mt-2 text-[#001637] group-hover:text-white text-base font-gilroy_regular text-center h-24 line-clamp-4 flex flex-col justify-start">{{$benef->descripcion}}</h2>
                </div>
            @endforeach
          </div>
        </section>

        
        <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16 flex flex-col gap-10 w-full"  style="background-image: url('{{asset('images/img/tc_home.png')}}');">
           
            <div class="flex flex-col lg:flex-row lg:justify-between px-[5%] gap-5 md:gap-16">
                
                <div class="flex flex-col gap-2">
                   <h3 class="font-gilroy_regular text-white text-xl line-clamp-1 flex flex-row gap-3 items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                        <path d="M16.3334 3.5H11.6667C7.26693 3.5 5.06705 3.5 3.70021 4.86683C2.33337 6.23367 2.33337 8.43355 2.33337 12.8333C2.33337 17.2331 2.33337 19.4331 3.70021 20.7998C5.06705 22.1667 7.26693 22.1667 11.6667 22.1667H16.3334C20.7331 22.1667 22.9331 22.1667 24.2998 20.7998C25.6667 19.4331 25.6667 17.2331 25.6667 12.8333C25.6667 8.43355 25.6667 6.23367 24.2998 4.86683C22.9331 3.5 20.7331 3.5 16.3334 3.5Z" stroke="#FFFFFF" stroke-width="1.75" stroke-linecap="round"/>
                        <path d="M19.7167 18.0833C19.7167 17.0524 20.5524 16.2167 21.5833 16.2167M15.9833 18.0833C15.9833 14.9905 18.4905 12.4833 21.5833 12.4833M12.25 18.0833C12.25 12.9287 16.4287 8.75 21.5833 8.75" stroke="#FFFFFF" stroke-width="1.75" stroke-linecap="round"/>
                        <path d="M21 22.167L22.1667 24.5003" stroke="#FFFFFF" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M7.00004 22.167L5.83337 24.5003" stroke="#FFFFFF" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    {{$textoshome->title4section ?? 'Ingrese texto'}}
                   </h3>
                    @php
                        $texto2 = $textoshome->description4section ?? "Ingrese un texto";
                        $texto_formateado2 = preg_replace('/\*(.*?)\*/', '<span class="text-[#59C402] font-gilroy_bold">$1</span>', e($texto2));
                    @endphp
                   <h2 class="font-gilroy_medium text-white text-4xl lg:text-5xl 2xl:text-7xl lg:line-clamp-2 max-w-xl 2xl:max-w-3xl">{!! $texto_formateado2 !!}</h2>
                </div>

                <div class="flex flex-col gap-2 max-w-xs bg-black bg-opacity-50 rounded-2xl p-6">
                    <h2 class="font-gilroy_bold text-white text-2xl line-clamp-1 ">{{$textoshome->titlebenefit1 ?? 'Ingrese texto'}}</h2>
                    <p class="font-gilroy_regular text-white text-lg line-clamp-5">{{$textoshome->descriptionbenefit1 ?? 'Ingrese texto'}}</p>
                    <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                        <a href="{{route('contacto')}}"><div class="bg-[#0066FF] w-auto px-6 text-center py-3 rounded-3xl tracking-normal">
                            <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                        </div></a>
                    </div>
                </div>

            </div>


            <div class="flex flex-col lg:flex-row lg:justify-between px-[5%] gap-5 md:gap-16">
                
                <div class="flex flex-col gap-2 max-w-xs bg-black bg-opacity-50 rounded-2xl p-6">
                    <h2 class="font-gilroy_bold text-white text-2xl line-clamp-1 ">{{$textoshome->titlebenefit2 ?? 'Ingrese texto'}}</h2>
                    <p class="font-gilroy_regular text-white text-lg line-clamp-5">{{$textoshome->descriptionbenefit2 ?? 'Ingrese texto'}}</p>
                    <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                        <a href="{{route('contacto')}}"><div class="bg-[#0066FF] w-auto px-6 text-center py-3 rounded-3xl tracking-normal">
                            <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                        </div></a>
                    </div>
                </div>

                <div class="flex flex-col gap-2 max-w-xs bg-black bg-opacity-50 rounded-2xl p-6">
                    <h2 class="font-gilroy_bold text-white text-2xl line-clamp-1 ">{{$textoshome->titlebenefit3 ?? 'Ingrese texto'}}</h2>
                    <p class="font-gilroy_regular text-white text-lg line-clamp-5">{{$textoshome->descriptionbenefit3 ?? 'Ingrese texto'}}</p>
                    <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                        <a href="{{route('contacto')}}"><div class="bg-[#0066FF] w-auto px-6 text-center py-3 rounded-3xl tracking-normal">
                            <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                        </div></a>
                    </div>
                </div>

            </div>
        
        </section>


    </main>

    @foreach ($productos as $producto)
        
        <!-- Modal Detalle -->
        <div id="modaldetalleplan-{{$producto->id}}" class="modal !bg-white !p-0 !z-50" style="display: none; max-width: 750px !important; width: 100% !important;">
            <div class="w-full flex flex-col rounded-2xl overflow-hidden">
                <div class="bg-[#EEF9E6] py-4 px-6">
                    <img
                        src="{{ asset('images/img/tc_logotelecable.svg') }}"
                        alt="Telecable"
                        class="max-w-56"
                    />

                </div>
                <div class="bg-white py-4 px-6 gap-5 flex flex-col">
                    <div class="flex flex-col">
                        <div class="flex flex-row gap-2 items-center">
                            <h2 class="font-gilroy_extrabold text-[#001637] text-4xl line-clamp-3">{{$producto->extract}}</h2>
                        </div>
                        <h2 class="-mt-2 font-gilroy_regular text-[#001637] text-sm line-clamp-2">{{$producto->name_fichatecnica}}</h2>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-7 gap-2">
                        @foreach ($producto->canals as $canal)
                            <div class="flex flex-col gap-2 justify-start items-center">
                                <img class="h-12 w-12 rounded-full" src="{{asset($canal->imagen)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                <h2 class="font-gilroy_regular text-[#001637] text-xs line-clamp-2 uppercase text-center">{{$canal->name}}</h2>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@section('scripts_importados')
    
    <script>   
        $('#modalformcotizar').submit(function(event) {
            event.preventDefault();
            let formDataArray = $(this).serializeArray();

            if (!validarTelefono($('#phone').val())) {
                return;
            };

            Swal.fire({

                title: 'Procesando información',
                html: `Enviando...
                    <p class=" text-text12">Revise su correo de Span</p>
                            <div class="max-w-2xl mx-auto overflow-hidden flex justify-center items-center mt-4 ">
                                <div role="status">
                                    <svg aria-hidden="true" class="w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                    </svg>
                                    
                                </div>
                                
                            </div>

            `,
                allowOutsideClick: false,
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });

           
            $.ajax({
                url: '{{ route('cotizar') }}',
                method: 'POST',
                data: formDataArray,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').val() // Incluye el token CSRF
                },
                success: function(response) {
                
                    Swal.close();

                    Swal.fire({
                        title: response.message,
                        icon: "success",
                    });

                    $('#modalformcotizar')[0].reset();
                },
                error: function(error) {
                    Swal.close();
                    const obj = error.responseJSON.message;
                    const keys = Object.keys(error.responseJSON.message);
                    let flag = false;
                    keys.forEach(key => {
                        if (!flag) {
                            const e = obj[key];
                            Swal.fire({
                                title: error.message,
                                text: "Ha ocurrido un error",
                                icon: "warning",
                            });
                            flag = true; 
                        }
                    });
                }
            });
        })
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.btn-cotizar', function () {
                const id = $(this).data('id');

                $.ajax({
                    url: '{{ route('obtenerdata') }}',
                    method: 'POST',
                    data: {
                        id: id, 
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                    },
                    success: function(response) {
                        $('#nombreplan').text(response.producto.producto);
                        $('#caracteristicas').text(response.producto.extract);
                        $('#name').val(response.producto.producto);
                        $('#extract').val(response.producto.extract);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });


                $(`#modalcotizar`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });

            $(document).on('click', '.botoncanales', function () {
                const id = $(this).data('id');
                $(`#modaldetalleplan-${id}`).modal({
                    show: true,
                    fadeDuration: 400,
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.swiper-slide .flex');
            const mainImage = document.getElementById('imagen-zona');

            items.forEach(item => {
                item.addEventListener('click', function () {
                    const newImageSrc = this.getAttribute('data-image');
                    
                    // Aplicar efecto fade-out
                    mainImage.style.opacity = 0;

                    // Cambiar la imagen después del fade-out
                    setTimeout(() => {
                        mainImage.src = newImageSrc;

                        // Aplicar efecto fade-in
                        mainImage.style.opacity = 1;
                    }, 300); // Coincide con la duración de la transición CSS
                });
            });
        });

        var swiper = new Swiper(".slider", {
            slidesPerView: 1,
            spaceBetween: 0,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
            },
            pagination: {
                el: ".slider-pagination",
                clickable: true,
            },
        });



        var swiper = new Swiper(".ofertas", {
            slidesPerView: 2.2,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 1.2,

                  
                },
                850: {
                    slidesPerView: 1.3,

                  
                },
                920: {
                    slidesPerView: 1.4,

                  
                },
                1024: {
                    slidesPerView: 1.6,
                  
                },
                1280: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1300: {
                    slidesPerView: 2.2,
                    spaceBetween: 20,
                  
                },
                1500: {
                    slidesPerView: 2.4,
                    spaceBetween: 20,
                  
                },
                1600: {
                    slidesPerView: 2.9,
                    spaceBetween: 20,
                  
                },
            },
        });

        var swiper = new Swiper(".planes", {
            slidesPerView: 3,
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                  
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1600: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                  
                },
            },
        });

        var swiper = new Swiper(".lugares", {
            slidesPerView: 3,
            direction: 'vertical',
            spaceBetween: 10,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
        });

        var swiper = new Swiper(".slider_blog", {
            slidesPerView: 3,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            grabCursor: true,
            loop: true,
             autoplay: {
                delay: 2500, 
                disableOnInteraction: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                750: {
                    slidesPerView: 2,
                   
                },
                1250: {
                    slidesPerView: 3,
                   
                },
            },
            pagination: {
                el: ".swiper-pagination_productos",
                clickable: true,
            },
        });

        var swiper = new Swiper(".categorias", {
            slidesPerView: 4,
            spaceBetween: 15,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 2,
                  
                },
                1024: {
                    slidesPerView: 3,
                  
                },
                1224: {
                    slidesPerView: 4,
                  
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
            spaceBetween: 15,
            loop: true,
            centeredSlides: false,
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
