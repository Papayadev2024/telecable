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
                                
            <img class="object-cover absolute top-0 left-0 h-full object-left w-full bg-gradient-to-r from-[#00388C] to-transparent" src="{{asset('images/img/tc_textura.svg')}}" />
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
   
                    <div class="grid grid-cols-2 md:grid-cols-3 font-gotham_bold w-full overflow-hidden rounded-2xl bg-[#5599FF] mt-5">
                        {{-- @foreach ($category as $categoria) --}}
                        <template x-for="(cat, index) in categories" :key="index">
                            <div    
                                @click="selected = index" 
                                :class="selected === index 
                                    ? 'bg-[#004FC6]' 
                                    : ''" 
                                 class="flex flex-col justify-center items-center px-6 py-7 cursor-pointer">
                                <img class="w-12 h-12 object-contain" :src="cat.url_image + cat.name_image"  onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"  />
                                <h3 class="text-white text-lg xl:text-xl font-gilroy_semibold mt-5" x-text="cat.name"></h3>
                                <h2 class="text-white text-base font-gilroy_regular" x-text="cat.description"></h2>
                            </div>
                        </template>
                        {{-- @endforeach --}}
                    </div>
                    
                </div>
                <div class="z-20 w-full lg:w-1/4 2xl:w-1/3 flex flex-col justify-end items-start lg:items-end">
                    
                </div>
            </div> 
        </section>


        @if (count($productos) > 0)    
            <section class="bg-cover bg-opacity-100 relative pb-10 lg:pb-16 flex flex-col gap-10"  style="background-image: url('{{asset('images/img/tc_textura3.svg')}}');">
            
            <div class="px-[5%]  flex flex-col items-center justify-center gap-5">
                <div class="flex flex-col gap-1 max-w-3xl text-center items-center justify-center" data-aos="fade-down">
                    <h3 class="font-gilroy_regular text-white text-xl line-clamp-1 flex flex-row gap-3 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M32.882 19.833C33.3505 16.5991 33.5663 14.9364 32.9705 13.4571C32.3552 11.9297 30.9902 10.8847 28.26 8.79461L26.2203 7.23301C22.8242 4.63301 21.126 3.33301 19.1667 3.33301C17.2073 3.33301 15.5092 4.63301 12.1131 7.23301L10.0733 8.79461C7.3432 10.8847 5.97817 11.9297 5.3629 13.4571C4.74763 14.9845 4.9977 16.7073 5.4978 20.1532L5.92427 23.0917C6.63323 27.9763 6.98772 30.4188 8.64225 31.8758C10.2968 33.333 12.7156 33.333 17.5533 33.333H18.3333" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.6666 27.463C23.5813 25.9052 25.8681 25 28.3243 25C30.7881 25 33.0816 25.911 35 27.4777M31.9571 31.6667C30.8636 30.9848 29.6298 30.6012 28.3243 30.6012C27.0253 30.6012 25.7973 30.981 24.708 31.6563" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M28.3334 36.667H28.344" stroke="white" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        {{$textoshome->title2section ?? 'Ingrese texto'}}
                    </h3>
                    <h2 class="font-gilroy_bold text-white text-4xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl line-clamp-3">{{$textoshome->description2section ?? 'Ingrese texto'}}</h2>
                </div>
            </div>

            <div class="px-[5%] md:pl-[8%] md:pr-0 py-5 flex md:flex-row gap-5 md:gap-10">
                    <div class="w-full">
                        <div class="swiper planes w-full">
                            <div class="swiper-wrapper">   
                            {{-- @foreach ($productos as $producto)--}}
                                {{-- <div class="swiper-slide my-auto">
                                    <div class="flex flex-col gap-5 max-w-[390px] bg-white hover:bg-[#1EA7A2] bg-opacity-10 p-6 rounded-3xl mx-auto">
                                        
                                            <div class="flex flex-wrap justify-between items-center w-full">
                                                <h2 class="py-2 text-white text-lg font-gilroy_medium text-left w-auto line-clamp-1"><span>{{$producto->producto}}</span></h2>
                                                <h3 class="font-gilroy_bold text-white text-2xl">S/ {{$producto->precio}} <span class="font-gilroy_regular tracking-wide text-white text-base">/Mes</span></h3>
                                            </div>

                                            <div class="flex flex-col justify-center items-start font-gilroy_regular group">
                                                <div class="bg-[#59C402] px-2 py-1.5 rounded-full tracking-normal">
                                                    <p class="leading-none text-white text-sm">80% más velocidad</p>
                                                </div>
                                            </div>

                                            <div class="flex flex-col">
                                                <div class="flex flex-row gap-2 items-center">
                                                    <h2 class="font-gilroy_extrabold text-white text-5xl line-clamp-3">{{$producto->extract}}</h2>
                                                </div>

                                                <h2 class="-mt-2 font-gilroy_regular text-white text-sm line-clamp-2">{{$producto->name_fichatecnica}}</h2>
                                            </div>

                                            <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                                                <a class="w-full" href="https://api.whatsapp.com/send?phone={{ $general[0]->whatsapp }}&text=Me interesa el servicio: {{$producto->producto}} - {{$producto->extract}} - S/ {{$producto->precio}}">
                                                    <div class="bg-[#0066FF] w-full px-3 text-center py-3 rounded-3xl tracking-normal">
                                                        <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                                                    </div>
                                                </a>
                                            </div>

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
                                                    Velocidad:
                                                </h3>
                                                <h2 class="font-gilroy_regular text-white text-sm">{{$producto->description ?? 'Ingrese texto'}}</h2>
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
                                                    Instalación:
                                                    </h3>
                                                    <h2 class="font-gilroy_regular text-white text-sm">{{$producto->especificacion ?? 'Ingrese texto'}}</h2>
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
                                                    <h2 class="font-gilroy_regular text-white text-sm">{{$producto->sku ?? 'Ingrese texto'}}</h2>
                                                </div>
                                            </div>   
                                    </div>
                                </div> --}}
                            {{-- @endforeach --}}
                                <template x-for="producto in filteredProducts" :key="producto.id">
                                    <div class="swiper-slide my-auto">
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
                                            <div class="flex flex-col justify-center items-start font-gilroy_regular group">
                                                <div class="bg-[#59C402] px-2 py-1.5 rounded-full tracking-normal">
                                                    <p class="leading-none text-white text-sm">80% más velocidad</p>
                                                </div>
                                            </div>
                                
                                            <!-- Extracto y descripción -->
                                            <div class="flex flex-col">
                                                <div class="flex flex-row gap-2 items-center">
                                                    <h2 class="font-gilroy_extrabold text-white text-5xl line-clamp-3" x-text="producto.extract"></h2>
                                                </div>
                                                <h2 class="-mt-2 font-gilroy_regular text-white text-sm line-clamp-2" x-text="producto.name_fichatecnica"></h2>
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
                                                    Velocidad:
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
                                                    Instalación:
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

                                        </div>
                                </template> 
                            </div>
                        </div>
                    </div>
                </div> 
                
                <div class="font-gilroy_semibold text-sm text-center text-white">{{$textoshome->description2section2 ?? 'Ingrese texto'}}</div>
            </section>
        @endif
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
            
            <h2 class="font-gilroy_medium text-[#001F4F] text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl line-clamp-2"> {{$textoshome->description3section ?? "Ingrese un texto"}} <span class="text-[#59C402] font-gilroy_bold">{{$textoshome->description3section2}}</span></h2>
            
            <div class="flex flex-col gap-2 text-[#001637] font-gilroy_regular text-lg">
              <p>
                En Telecable, somos expertos en conectar a las personas con tecnología de última generación. Ofrecemos soluciones de internet de fibra óptica diseñadas para brindar velocidad, estabilidad y confiabilidad, siempre adaptándonos a las necesidades de nuestros clientes.
              </p>
              <p>
                Nuestra misión es garantizar una experiencia de conectividad excepcional, respaldada por un equipo comprometido y atención personalizada. Creemos que el internet no solo conecta dispositivos, sino también personas, sueños e ideas.
              </p>
              <p>
                Descubre cómo nuestro servicio puede transformar tu forma de navegar y conectar con el mundo.
              </p>
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
          <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 font-gotham_bold w-full rounded-2xl overflow-hidden bg-[#59C4021A] mt-5">
            
            <div class="flex flex-col justify-center items-center px-6 py-7 group hover:bg-[#004FC6]">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path class="group-hover:stroke-white" d="M23.3333 5H16.6666C10.3812 5 7.23856 5 5.28593 6.95262C3.33331 8.90525 3.33331 12.0479 3.33331 18.3333C3.33331 24.6187 3.33331 27.7615 5.28593 29.714C7.23856 31.6667 10.3812 31.6667 16.6666 31.6667H23.3333C29.6186 31.6667 32.7615 31.6667 34.714 29.714C36.6666 27.7615 36.6666 24.6187 36.6666 18.3333C36.6666 12.0479 36.6666 8.90525 34.714 6.95262C32.7615 5 29.6186 5 23.3333 5Z" stroke="#001637" stroke-width="2.5" stroke-linecap="round"/>
                    <path class="group-hover:stroke-white" d="M28.1667 25.8333C28.1667 24.3605 29.3605 23.1667 30.8333 23.1667M22.8333 25.8333C22.8333 21.415 26.415 17.8333 30.8333 17.8333M17.5 25.8333C17.5 18.4695 23.4695 12.5 30.8333 12.5" stroke="#001637" stroke-width="2.5" stroke-linecap="round"/>
                    <path class="group-hover:stroke-white" d="M30 31.667L31.6667 35.0003" stroke="#001637" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M9.99998 31.667L8.33331 35.0003" stroke="#001637" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <h3 class="text-[#001637] group-hover:text-white text-lg xl:text-xl font-gilroy_regular mt-5 text-center line-clamp-2">Compromiso con  <br><span class="font-gilroy_bold"> la Calidad</span></h3>
                <h2 class="mt-2 text-[#001637] group-hover:text-white text-base font-gilroy_regular text-center h-24 line-clamp-4 flex flex-col justify-start">Ofrecemos un servicio diseñado para garantizar velocidad, estabilidad y confianza en cada conexión.</h2>
            </div>

            <div class="flex flex-col justify-center items-center px-6 py-7 group hover:bg-[#004FC6]">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path class="group-hover:stroke-white" d="M32.882 19.833C33.3505 16.5991 33.5663 14.9364 32.9705 13.4571C32.3552 11.9297 30.9902 10.8847 28.26 8.79461L26.2203 7.23301C22.8242 4.63301 21.126 3.33301 19.1667 3.33301C17.2073 3.33301 15.5092 4.63301 12.1131 7.23301L10.0733 8.79461C7.3432 10.8847 5.97817 11.9297 5.3629 13.4571C4.74763 14.9845 4.9977 16.7073 5.4978 20.1532L5.92427 23.0917C6.63323 27.9763 6.98772 30.4188 8.64225 31.8758C10.2968 33.333 12.7156 33.333 17.5533 33.333H18.3333" stroke="#001637" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M21.6666 27.463C23.5813 25.9052 25.8681 25 28.3243 25C30.7881 25 33.0816 25.911 35 27.4777M31.9571 31.6667C30.8636 30.9848 29.6298 30.6012 28.3243 30.6012C27.0253 30.6012 25.7973 30.981 24.708 31.6563" stroke="#001637" stroke-width="2.5" stroke-linecap="round"/>
                    <path class="group-hover:stroke-white" d="M28.3334 36.667H28.344" stroke="#001637" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                <h3 class="text-[#001637] group-hover:text-white text-lg xl:text-xl font-gilroy_regular mt-5 text-center line-clamp-2">Compromiso con  <br><span class="font-gilroy_bold"> la Calidad</span></h3>
                <h2 class="mt-2 text-[#001637] group-hover:text-white text-base font-gilroy_regular text-center h-24 line-clamp-4 flex flex-col justify-start">Implementamos tecnología de última generación para mantenernos a la vanguardia del mercado.</h2>
            </div>

            <div class="flex flex-col justify-center items-center px-6 py-7 group hover:bg-[#004FC6]">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path class="group-hover:stroke-white" d="M32.882 19.833C33.3505 16.5991 33.5663 14.9364 32.9705 13.4571C32.3552 11.9297 30.9902 10.8847 28.26 8.79461L26.2203 7.23301C22.8242 4.63301 21.126 3.33301 19.1667 3.33301C17.2073 3.33301 15.5092 4.63301 12.1131 7.23301L10.0733 8.79461C7.3432 10.8847 5.97817 11.9297 5.3629 13.4571C4.74763 14.9845 4.9977 16.7073 5.4978 20.1532L5.92427 23.0917C6.63323 27.9763 6.98772 30.4188 8.64225 31.8758C10.2968 33.333 12.7156 33.333 17.5533 33.333H18.3333" stroke="#001637" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path class="group-hover:stroke-white" d="M21.6666 27.463C23.5813 25.9052 25.8681 25 28.3243 25C30.7881 25 33.0816 25.911 35 27.4777M31.9571 31.6667C30.8636 30.9848 29.6298 30.6012 28.3243 30.6012C27.0253 30.6012 25.7973 30.981 24.708 31.6563" stroke="#001637" stroke-width="2.5" stroke-linecap="round"/>
                    <path class="group-hover:stroke-white" d="M28.3334 36.667H28.344" stroke="#001637" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                <h3 class="text-[#001637] group-hover:text-white text-lg xl:text-xl font-gilroy_regular mt-5 text-center line-clamp-2">Atención  <br><span class="font-gilroy_bold"> Personalizada</span></h3>
                <h2 class="mt-2 text-[#001637] group-hover:text-white text-base font-gilroy_regular text-center h-24 line-clamp-4 flex flex-col justify-start">Nos enfocamos en entender y satisfacer las necesidades únicas de cada cliente.</h2>

            </div>

            <div class="flex flex-col justify-center items-center px-6 py-7 group hover:bg-[#004FC6]">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <path class="group-hover:stroke-white" d="M17.5 11.667V16.667M17.5 16.667V21.667M17.5 16.667H14.1667C12.5954 16.667 11.8097 16.667 11.3215 16.1788C10.8334 15.6907 10.8334 14.905 10.8334 13.3337V11.667M22.5 21.667V16.667M22.5 16.667V11.667M22.5 16.667L29.1667 11.667M22.5 16.667L29.1667 21.667" stroke="#001637" stroke-width="2.5" stroke-linecap="round"/>
                    <path class="group-hover:stroke-white" d="M3.33337 16.6663C3.33337 10.3809 3.33337 7.23826 5.28599 5.28562C7.23862 3.33301 10.3813 3.33301 16.6667 3.33301H23.3334C29.6187 3.33301 32.7615 3.33301 34.714 5.28562C36.6667 7.23826 36.6667 10.3809 36.6667 16.6663C36.6667 22.9517 36.6667 26.0945 34.714 28.047C32.7615 29.9997 29.6187 29.9997 23.3334 29.9997H16.6667C10.3813 29.9997 7.23862 29.9997 5.28599 28.047C3.33337 26.0945 3.33337 22.9517 3.33337 16.6663Z" stroke="#001637" stroke-width="2.5" stroke-linecap="round"/>
                    <path class="group-hover:stroke-white" d="M26.6667 36.6667C24.7055 35.6067 22.4285 35 20 35C17.5715 35 15.2945 35.6067 13.3334 36.6667" stroke="#001637" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
                <h3 class="text-[#001637] group-hover:text-white text-lg xl:text-xl font-gilroy_regular mt-5 text-center line-clamp-2">Conexión con las <br><span class="font-gilroy_bold">  Personas</span></h3>
                <h2 class="mt-2 text-[#001637] group-hover:text-white text-base font-gilroy_regular text-center h-24 line-clamp-4 flex flex-col justify-start">Más que internet, creamos puentes entre sueños, ideas y experiencias.</h2>

            </div>
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
                    Conexión veloz y confiable
                   </h3>
                
                   <h2 class="font-gilroy_medium text-white text-4xl lg:text-5xl 2xl:text-7xl line-clamp-2 max-w-xl">¿Por qué elegir <span class="text-[#59C402] font-gilroy_bold">Internet de Fibra Óptica? </span></h2>
                </div>

                <div class="flex flex-col gap-2 max-w-xs bg-black bg-opacity-50 rounded-2xl p-6">
                    <h2 class="font-gilroy_bold text-white text-2xl line-clamp-1 ">Conexión Estable</h2>
                    <p class="font-gilroy_regular text-white text-lg line-clamp-5">Resiste interferencias externas, garantizando un servicio confiable incluso en horarios pico.</p>
                    <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                        <div class="bg-[#0066FF] w-auto px-6 text-center py-3 rounded-3xl tracking-normal">
                            <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                        </div>
                    </div>
                </div>

            </div>


            <div class="flex flex-col lg:flex-row lg:justify-between px-[5%] gap-5 md:gap-16">
                
                <div class="flex flex-col gap-2 max-w-xs bg-black bg-opacity-50 rounded-2xl p-6">
                    <h2 class="font-gilroy_bold text-white text-2xl line-clamp-1 ">Velocidad Superior</h2>
                    <p class="font-gilroy_regular text-white text-lg line-clamp-5">La fibra óptica ofrece mayor rapidez para descargas, streaming y videollamadas sin interrupciones.</p>
                    <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                        <div class="bg-[#0066FF] w-auto px-6 text-center py-3 rounded-3xl tracking-normal">
                            <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col gap-2 max-w-xs bg-black bg-opacity-50 rounded-2xl p-6">
                    <h2 class="font-gilroy_bold text-white text-2xl line-clamp-1 ">Alta Capacidad</h2>
                    <p class="font-gilroy_regular text-white text-lg line-clamp-5">Soporta múltiples dispositivos conectados sin pérdida de calidad.</p>
                    <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                        <div class="bg-[#0066FF] w-auto px-6 text-center py-3 rounded-3xl tracking-normal">
                            <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                        </div>
                    </div>
                </div>

            </div>
        
        </section>





        {{-- @if (count($zonas) > 0)   
            <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16" style="background-image: url('{{asset('images/img/textura4.png')}}');">
                <div class="px-[5%] md:px-[8%]  flex flex-col  lg:flex-row gap-5 md:gap-10">
                    <div class="w-full sm:w-full lg:w-1/3  flex flex-col justify-center">
                        <div class="swiper lugares w-full mt-1 h-[350px]  md:h-[360px]">
                            <div class="swiper-wrapper "  data-aos="fade-down">
                                @foreach ($zonas as $zona)
                                    <div class="swiper-slide">
                                        <div 
                                            class="flex cursor-pointer flex-row gap-3 items-center max-w-xs mx-auto p-3 bg-white group hover:bg-[#E29720] bg-opacity-10 rounded-2xl"
                                            data-image="{{ asset($zona->url_image . $zona->name_image) }}"
                                        >
                                            <img class="w-20 h-20 rounded-xl object-cover" src="{{asset($zona->url_image . $zona->name_image)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                            <h3 class="font-gotham_bold text-white text-lg group-hover:text-[#21149E]">{{$zona->title}}</h3>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="w-full sm:w-full lg:w-2/3 flex flex-col justify-center gap-5 md:gap-10">
                        <div class="flex flex-col gap-1 max-w-2xl text-center mx-auto" data-aos="fade-down">
                            <h3 class="font-gotham_bold text-white text-lg ">Zonas de Cobertura</h3>
                            <h2 class="font-gotham_bold text-white text-4xl xl:text-5xl">Conoce las <span class="text-[#E29720]">áreas con nuestra conexión</span>  de alta velocidad.</h2>
                        </div> 
                        <div>
                            <img id="imagen-zona" data-aos="fade-down" class="rounded-2xl overflow-hidden h-52 md:h-96 w-full object-cover transition-opacity duration-300 opacity-100" src="{{asset($zona->url_image . $zona->name_image)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                        </div>
                    </div>
                </div>  
            </section>
        @endif --}}


        {{-- @if (count($testimonie) > 0)
            <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16"  style="background-image: url('{{asset('images/img/textura5.png')}}');">
                <div class="px-[5%] md:px-[10%] flex flex-col  lg:flex-row gap-5 md:gap-10 lg:items-center">
                    
                    <div class="w-full sm:w-full lg:w-1/2  flex flex-col justify-center">
                        <div class="flex flex-col gap-3 max-w-2xl text-left mx-auto" data-aos="fade-down">
                            <h3 class="font-gotham_bold text-white text-lg ">Sobre Nosotros</h3>
                            <h2 class="font-gotham_bold text-white text-4xl xl:text-5xl">¡Conéctate al Futuro con<span class="text-[#21149E]"> Red Conex.</span> La Mejor Velocidad en Internet que Puedes Imaginar!</h2>
                            <p class="font-gotham_book text-white text-base ">¡Bienvenido a Red Conex, tu mejor aliado para una conexión de internet inigualable! Con más de [número de años en el mercado] años de experiencia, estamos aquí para transformar tu experiencia digital con planes de internet de alta velocidad que se adaptan a ti.</p>
                        </div>   
                    </div>

                    <div class="w-full lg:w-1/2">
                        <div>
                            <div class="swiper testimonios h-[500px]" data-aos="fade-down">
                                <div class="swiper-wrapper ">   
                                    @foreach ($testimonie as $testimonio)
                                        <div class="swiper-slide">
                                            <div class="flex flex-col justify-center">
                                                <div class="relative max-w-md mx-auto  xl:ml-auto mt-6 lg:mt-12">
                                                    <img class="rounded-3xl overflow-hidden h-[400px] w-72 object-cover " src="{{asset($testimonio->ocupation)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                                    <div class="bg-[#21149E] p-4 rounded-2xl max-w-[300px] md:max-w-[370px] absolute -bottom-12 left-5 -right-14 md:-right-1/2">
                                                        <p class="font-gotham_book text-white text-base line-clamp-[7]">{{$testimonio->testimonie}}</p>
                                                        <h3 class="font-gotham_bold text-white text-base text-right mt-1">{{$testimonio->name}}</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>  
            </section>
        @endif --}}

        {{-- <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16 flex flex-col gap-10" 
          style="background-image: url('{{asset('images/img/textura3.svg')}}');">
           
          <div class="px-[5%] flex flex-col items-center justify-center gap-5">
            <div class="flex flex-col gap-1 max-w-3xl text-center" data-aos="fade-down">
                <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl">¡Los Mejores <span class="text-[#E29720]">Planes de Internet</span> para Tu Hogar Te Esperan!</h2>
            </div>  
          </div>

          <div class="px-[5%] md:px-[10%] grid grid-cols-1 lg:grid-cols-2 gap-5 md:gap-10">
            @foreach ($benefit as $benefi)   
                <div class="flex flex-col gap-5 w-full bg-black bg-opacity-10 p-6 rounded-3xl text-center" data-aos="fade-down">
                    <div class="flex flex-row justify-center">
                        <div class="bg-[#1EA7A2] p-0 rounded-full overflow-hidden">
                            <img class="object-contain w-20" src="{{asset($benefi->icono)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                        </div>
                    </div>
                    <h2 class="font-gotham_bold text-white text-3xl max-w-sm mx-auto  lg:line-clamp-2">{{$benefi->titulo}}</h2>
                    <p class="font-gotham_book text-white text-base  lg:line-clamp-3">{{$benefi->descripcion}}</p>
                    <div class="flex flex-row w-full">
                        <a class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Quiero más velocidad</span></a>
                    </div>
                </div>
            @endforeach    
          </div> 

            <div class="px-[5%] md:px-[10%]">
                <div class="bg-[#1EA7A2]  rounded-3xl overflow-hidden flex flex-col lg:flex-row lg:justify-between gap-0 md:gap-10" data-aos="zoom-in-up">
                    <div class="flex flex-col gap-3 w-full lg:w-1/2 p-6 2xl:p-8 lg:max-w-xl  order-2 lg:order-1">
                        <div class="flex flex-col gap-1 text-left">
                            <h3 class="font-gotham_bold text-white text-lg ">¡Se parte de la experiencia Red Conex!</h3>
                            <h2 class="font-gotham_bold text-white text-3xl leading-none">¡Déjanos tu correo y recibe la mejor info!</h2>
                        </div> 
                        <form id="footerBlog_Catalogo">
                            @csrf
                            <div class="flex flex-col gap-2 justify-center items-center">
                    
                                <div class="flex flex-col gap-2 w-full">
                                    <div class=" py-3 rounded-xl overflow-hidden  w-full flex flex-col gap-3">
                                        <label class="font-gotham_bold text-base text-white">EMAIL</label>
                                        <input type="email" name="email" id="emailFooter2" required
                                            class="text-[#21149E]  font-gotham_bold text-base rounded-xl py-3 ring-0 border-0 focus:ring-0 focus:border-0 border-transparent ring-transparent" 
                                            placeholder="Introduce tu email"
                                        />
                                        <input type="hidden" id="nameFooter" name="full_name" value="Usuario suscrito" />
                                        
                                        <button type="submit" class="text-white bg-[#21149E] w-full px-3 py-3 rounded-3xl font-gotham_bold text-base">
                                            Regístrate
                                        </button>
                                    </div>
                                    <p class="text-white text-sm font-latoregular w-full leading-tight text-left">
                                        Al enviar mis datos, acepto los Términos y Condiciones.
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="flex flex-row justify-end items-end w-full lg:w-1/2 order-1 lg:order-2">
                        <img class="w-full h-full object-right object-cover" src="{{asset('images/img/imagensus.png')}}" />
                    </div>
                </div>
            </div>
        </section> --}}

        {{-- @if (count($faqs) > 0 || count($posts) > 0)
            <section class="bg-cover bg-opacity-100 relative py-10 lg:py-16" 
                style="background-image: url('{{asset('images/img/textura6.png')}}');">
                <div class="px-[5%] md:px-[10%] flex flex-col gap-5 md:gap-10">
                    @if (count($posts) > 0)
                        <div class="flex flex-col justify-start gap-3 md:flex-row md:justify-between w-full md:items-center" data-aos="fade-down">
                            <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl">Nuestras últimas <br><span class="text-[#21149E]"> publicaciones</span></h2>
                            <div class="flex flex-row">
                                <a href="{{ route('blog.all') }}">
                                    <div class="bg-[#E29720] text-[#110B79] rounded-3xl px-6 py-2 text-lg font-gotham_bold">
                                        Ver más noticias
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                        <div class="w-full">
                            <div class="swiper slider_blog h-max" data-aos="fade-down">
                                <div class="swiper-wrapper">
                                    @foreach ($posts as $post)
                                        <div class="swiper-slide">
                                            <a href="{{ route('detalleBlog', $post->id) }}">
                                                <div class="flex flex-col w-full bg-[#21149E] overflow-hidden rounded-3xl text-left">
                                                    <div class="flex flex-row justify-center">
                                                    <img class="w-full h-52 object-cover" src="{{ asset($post->url_image . $post->name_image) }}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"/>
                                                    </div>
                                                    <div class="p-6 flex flex-col gap-3">
                                                        <h2 class="font-gotham_bold text-white text-2xl xl:text-[21px] line-clamp-3">{{$post->title}}</h2>
                                                        <div class="font-gotham_book text-white text-base text-justify line-clamp-3">{!!$post->extract ?? $post->description!!}</div>
                                                        <div class="flex flex-row w-full">
                                                            <a href="{{ route('detalleBlog', $post->id) }}" class="bg-[#E29720] px-4 py-3 rounded-full text-[#21149E] text-center font-gotham_bold w-full"><span>Leer más</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>   
                                        </div>
                                    @endforeach  
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (count($faqs) > 0)
                        <div class="flex flex-col items-center justify-center gap-5">
                            <div class="flex flex-col gap-1 max-w-3xl text-center" data-aos="fade-down">
                                <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl leading-none"> Todo lo que debes saber de <span class="text-[#21149E]">nuestros planes</span></h2>
                            </div> 
                            
                            <div class="grid w-full divide-y divide-neutral-200 bg-[#21149E] px-6 py-2 rounded-2xl" data-aos="fade-down">
                            @foreach ($faqs as $faq)
                                <div class="py-3">
                                    <details class="group">
                                    <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                        <span class="font-bold text-[20px] text-white font-gotham_bold">
                                            {{$faq->pregunta ?? "Ingrese la pregunta"}}</span>
                                        <span class="transition group-open:rotate-180 bg-[#E29720] rounded-full p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none">
                                                <path d="M17 10L11.9992 14.58L7 10" stroke="#21149E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </span>
                                    </summary>
                                    <p class="text-base mt-3 text-white font-gotham_book">
                                        {!! $faq->respuesta ?? "Ingrese la respuesta" !!}
                                    </p>
                                    </details>
                                </div>
                            @endforeach  
                            </div>
                        </div>
                    @endif    
                </div>  
            </section>
        @endif --}}


        {{-- <section class="flex flex-col justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-[#F1EBE3] gap-12 relative">

            <div class="flex flex-col justify-start gap-3 md:flex-row md:justify-between w-full md:items-center">
                <h2 class="text-[#54340E] font-bignoodle text-5xl">Nuestra Carta</h2>
                <div class="flex flex-row">
                    <a href="{{route('catalogo.all')}}"><div class="bg-[#F07407] text-white rounded-lg px-3 py-1.5 text-base font-latoregular">
                    Ver toda la carta
                    </div>
                    </a>
                </div>
            </div>

            <div class="swiper categorias w-full h-max">
                <div class="swiper-wrapper">                 
                   @foreach ($category as $categoria)
                        <div class="swiper-slide">
                            <div class="group flex flex-col rounded-lg border border-[#DDCCBA] overflow-hidden hover:bg-[#F07407]">
                                <a href="{{route('catalogo', $categoria->id )}}" class="botonopciones">
                                    <img class="w-full h-full aspect-[3/2] object-cover" src="{{asset($categoria->url_image . $categoria->name_image)}}" />
                                    
                                    <div class="text-[#54340E] font-latoregular font-semibold text-lg px-3 py-3.5 w-full flex flex-col gap-1">
                                        <div>
                                            <h2 class="line-clamp-2 group-hover:text-white leading-none">{{$categoria->name}}</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        </div>
                    @endforeach
                </div>
            </div>

        </section> --}}

        {{-- @if ($destacados->isEmpty())
        @else
            <section class="flex flex-col justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-white gap-12 relative">

                <div class="flex flex-col justify-start gap-3 md:flex-row md:justify-between w-full md:items-center">
                    <h2 class="text-[#54340E] font-bignoodle text-5xl">Nuestros recomendados</h2>
                    <div class="flex flex-row">
                        <a href="{{route('catalogo.all')}}">
                            <div class="bg-[#F07407] text-white rounded-lg px-3 py-1.5 text-base font-latoregular">Ver todos los recomendados</div>
                        </a>
                    </div>
                </div>

                <div class="w-full">
                    <div class="swiper slider_productos h-max">
                        <div class="swiper-wrapper">
                            @foreach ($destacados as $destacado)
                                <div class="swiper-slide">
                                    <div class="flex flex-col rounded-lg border border-[#DDCCBA] overflow-hidden group cursor-pointer">
                                        <img
                                            class="w-full h-full aspect-[3/2] object-cover"
                                            src="{{asset($destacado->imagen)}}"
                                        />
                                        
                                        <div class="text-[#54340E] font-latobold text-xl px-3 pt-2 pb-3 w-full flex flex-col gap-1">
                                            <div class="flex flex-col">
                                                <h2 class="line-clamp-1">{{$destacado->producto}}</h2>
                                                <div class="line-clamp-2 font-latoregular text-sm h-9 leading-tight flex flex-col justify-center">
                                                    {!! $destacado->extract ?? $destacado->description !!}
                                                </div>
                                                <div class="flex flex-row justify-start items-center gap-2 font-latobold mt-1">
                                                    @if ($destacado->descuento == 0)
                                                        <span class="text-lg">S/ {{$destacado->precio}}</span>   
                                                    @else
                                                        <span class="text-lg">S/ {{$destacado->descuento}}</span>
                                                        <span class="text-sm line-through">S/ {{$destacado->precio}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                
                                            <a href="{{route('producto', $destacado->id)}}" class="botonopciones">
                                                <div class="bg-[#54340E] rounded-lg pt-1 pb-2 text-center ">
                                                    <span
                                                        class="bg-[#54340E] text-white font-latoregular text-base text-center w-full"
                                                        href="{{route('producto', $destacado->id)}}"
                                                    >
                                                        Ordena aqui
                                                    </span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>        
                            @endforeach
                        </div>
                    </div>
                </div>

            </section>
        @endif --}}

        {{-- <section class="flex flex-col md:flex-row justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-[#F1EBE3] gap-12 relative">
            
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
      
        </section> --}}

    </main>

    @foreach ($productos as $producto)
        
        <!-- Modal Detalle -->
        <div id="modaldetalleplan-{{$producto->id}}" class="modal !bg-[#1EA7A2] !p-0 !z-50" style="display: none; max-width: 650px !important; width: 100% !important;">
            <div class="w-full flex flex-col md:flex-row rounded-xl overflow-hidden">
                <div class="w-full md:w-1/2 p-4 flex flex-col gap-1">
                    <div class="flex flex-row w-full">
                        <a class="bg-[#E29720] px-4 py-2 rounded-xl text-base text-[#21149E] text-center font-gotham_bold w-auto line-clamp-2">
                            {{$producto->producto}}
                        </a>
                    </div>

                    <h2 class="font-gotham_bold text-white text-2xl line-clamp-2">{{$producto->extract}}</h2>
        
                    <div class="flex flex-col w-full">
                        <span class="font-gotham_book font-semibold tracking-wide text-white text-sm">Desde</span>
                        <h2 class="font-gotham_bold text-white text-2xl">
                            S/ {{$producto->precio}}
                            <span class="font-gotham_book tracking-wide text-white text-base">/mes</span>
                        </h2>
                    </div>

                    <div class="font-gotham_book text-white text-sm line-clamp-5">{!!$producto->description!!}</div>
        
                    <img class="w-full h-36 object-contain mx-auto my-2" 
                        src="{{ asset($producto->imagen) }}" 
                        onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"
                        alt="{{$producto->producto}}" 
                    />
                    @php
                        $html  = $producto->especificacion;
                        preg_match_all('/<p>(.*?)<\/p>/', $html, $matches);
                        $texts = $matches[1];
                    @endphp
                    
                    @if (count($texts) > 0)    
                        <div class="bg-[#E29720] p-2 rounded-xl">
                            @foreach ($texts as $text)
                                
                                <div class="text-[#21149E] font-gotham_light font-semibold text-sm flex flex-row gap-1">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.6673 7.9987C14.6673 4.3168 11.6825 1.33203 8.00065 1.33203C4.31875 1.33203 1.33398 4.3168 1.33398 7.9987C1.33398 11.6806 4.31875 14.6654 8.00065 14.6654C11.6825 14.6654 14.6673 11.6806 14.6673 7.9987Z" stroke="#21149E"/>
                                            <path d="M5.33398 8.33333L7.00065 10L10.6673 6" stroke="#21149E" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                    <p>{!! $text !!}</p>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="w-full md:w-1/2 ">
                    <div class="bg-cover bg-center min-h-[500px] h-full w-full" style="background-image: url('{{asset('images/img/popimg.png')}}');" onerror="this.onerror=null;this.src='{{ asset('images/img/popimg.png') }}';" ></div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Modal Cotizar -->
    <div id="modalcotizar" class="modal !bg-[#1EA7A2] !px-[15px] !z-50" style="display: none; max-width: 500px !important; width: 100% !important;">
        <div class="p-4 !bg-[#1EA7A2] flex flex-col gap-3">
            <div class="flex flex-col">
                <h2 class="font-gotham_bold leading-none text-white text-2xl md:text-3xl" id="nombreplan">nombreplan</h2>  
                <span class="text-[#21149E] text-base font-gotham_bold" id="caracteristicas"> caracteristica </span>
            </div>

            <h3 class="font-gotham_book text-base  text-white text-left ">
                ¡Se parte de la experiencia Red Conex, déjanos tus datos y te llamamos pronto!
            </h3>

            <h2 class="font-gotham_bold leading-none text-white text-2xl md:text-3xl">¡Olvídate de lo común, disfruta el <span class="text-[#21149E]"> 100% de fibra óptica </span> real!</h2>
            
            <form id="modalformcotizar">
                @csrf
                <div class="flex flex-col gap-2 justify-center items-center">
                    
                    <div class="flex flex-col gap-2 w-full">
                        <div class="w-full flex flex-col gap-3">
                            <input type="text" name="phone" id="phone" required
                                class="text-[#21149E] placeholder:text-[#21149E] font-gotham_medium px-2 text-base rounded-xl py-2 ring-0 border-0 focus:ring-0 focus:border-0 border-transparent ring-transparent" 
                                placeholder="Número de teléfono"
                            />

                            <input type="text" name="number_document" id="number_document" required
                                class="text-[#21149E] placeholder:text-[#21149E]  font-gotham_medium  px-2 text-base rounded-xl py-2 ring-0 border-0 focus:ring-0 focus:border-0 border-transparent ring-transparent" 
                                placeholder="DNI/RUC/CEX"
                            />
                            <input type="hidden" id="name" name="name" value="" />
                            <input type="hidden" id="extract" name="extract" value="" />
                           
                            <button type="submit" class="text-white bg-[#21149E] w-full px-3 py-2 rounded-3xl font-gotham_medium text-base">
                                Descubre tu Plan Ideal
                            </button>
                        </div>
                        <p class="text-white text-sm font-latoregular w-full leading-tight text-left">
                            Al enviar mis datos, acepto los Términos y Condiciones.
                        </p>
                    </div>
                </div>
            </form>
           
        </div>
    </div>

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

            $(document).on('click', '.btn-detalle', function () {
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
            slidesPerView: 3.5,
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
                    slidesPerView: 1.5,

                  
                },
                850: {
                    slidesPerView: 2,

                  
                },
                920: {
                    slidesPerView: 2.5,

                  
                },
                1024: {
                    slidesPerView: 2.5,
                  
                },
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                  
                },
                1300: {
                    slidesPerView: 3.5,
                    spaceBetween: 20,
                  
                },
                1500: {
                    slidesPerView: 3.5,
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
