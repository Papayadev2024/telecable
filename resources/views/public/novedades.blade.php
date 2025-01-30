@extends('components.public.matrix', ['pagina' => 'Servicios'])
@section('titulo', 'Servicios')
@section('css_importados')

@stop


@section('content')

  <main class="">
    @if (count($productos) > 0)
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
            <section class="bg-center bg-cover bg-no-repeat flex flex-col justify-center relative pb-28" style="background-image: url({{asset('images/img/tc_bannerservicios.png')}})">                        
                {{-- <img class="object-cover absolute top-0 left-0 h-full object-left w-full bg-gradient-to-r from-[#00388C] to-transparent" src="{{asset('images/img/tc_textura.svg')}}" />
                <img class="object-cover absolute bottom-0 right-0 h-full object-bottom w-full" src="{{asset('images/img/tc_textura2.svg')}}" /> --}}
                <div class="flex flex-col lg:flex-row px-[5%]  py-[5%]  lg:px-[5%]  gap-5 justify-center items-start lg:items-end">
                    <div class="z-20 w-full flex flex-col gap-4 justify-center">
                        
                        <div class="flex flex-col gap-1 max-w-4xl mx-auto text-center">
                            <h3 class="font-gilroy_regular text-white text-xl line-clamp-1 flex flex-row gap-3 items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path d="M16.3334 3.5H11.6667C7.26693 3.5 5.06705 3.5 3.70021 4.86683C2.33337 6.23367 2.33337 8.43355 2.33337 12.8333C2.33337 17.2331 2.33337 19.4331 3.70021 20.7998C5.06705 22.1667 7.26693 22.1667 11.6667 22.1667H16.3334C20.7331 22.1667 22.9331 22.1667 24.2998 20.7998C25.6667 19.4331 25.6667 17.2331 25.6667 12.8333C25.6667 8.43355 25.6667 6.23367 24.2998 4.86683C22.9331 3.5 20.7331 3.5 16.3334 3.5Z" stroke="white" stroke-width="1.75" stroke-linecap="round"/>
                                    <path d="M19.7167 18.0833C19.7167 17.0524 20.5524 16.2167 21.5833 16.2167M15.9833 18.0833C15.9833 14.9905 18.4905 12.4833 21.5833 12.4833M12.25 18.0833C12.25 12.9287 16.4287 8.75 21.5833 8.75" stroke="white" stroke-width="1.75" stroke-linecap="round"/>
                                    <path d="M21 22.167L22.1667 24.5003" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7.00004 22.167L5.83337 24.5003" stroke="white" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                TV Online: Planes de Televisión
                            </h3>
                            <h2 class="font-gilroy_medium text-white text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl">Servicios que Transforman tu Conexión: <span class="text-[#59C402] font-gilroy_bold">Internet y Televisión Premium </span></h2> 
                        </div>

                        <div class="max-w-5xl mx-auto text-center">
                            <div class="grid grid-cols-1 md:grid-cols-3 font-gotham_bold w-full rounded-2xl overflow-hidden bg-[#5599FF] mt-5">
                                <template x-for="(cat, index) in categories" :key="index">
                                    <div    
                                        @click="selected = index" 
                                        :class="selected === index 
                                            ? 'bg-[#004FC6]' 
                                            : ''" 
                                         class="flex flex-row gap-5 md:gap-0 md:flex-col items-center justify-start md:justify-center md:items-center px-6 py-7 cursor-pointer">
                                         <img class="w-12 h-12 object-contain" :src="cat.url_image + cat.name_image"  onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';"  />
                                         <div class="flex flex-col">
                                             <h3 class="text-white text-lg xl:text-xl font-gilroy_semibold md:mt-5" x-text="cat.name"></h3>
                                             <h2 class="text-white text-base font-gilroy_regular" x-text="cat.description"></h2>
                                         </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div> 
            </section>

            
                <section class="bg-cover bg-opacity-100 relative flex flex-col gap-5 bg-transparent -mt-24">
                    
                    <div class="px-[5%] md:px-[8%] pb-5 flex md:flex-row gap-5 md:gap-10">
                            <div class="w-full">
                                <div class="swiper planes w-full">
                                    <div class="swiper-wrapper">   
                                        <template x-for="producto in filteredProducts" :key="producto.id">
                                            <div class="swiper-slide">
                                                <div class="flex flex-col gap-5 max-w-[390px] bg-[#1F509A] p-6 rounded-3xl mx-auto">
                                                    
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
                                                            <span x-text="producto.categoria_id === 3 ? 'Deco:' : 'Velocidad:'"></span>
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
                                                                <span x-text="producto.categoria_id === 3 ? 'Netflix:' : 'Instalación:'"></span>
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
                        
                    <div class="font-gilroy_regular text-sm text-center text-[#001637]">*Planes y precios validos para contrataciones desde el <span class="font-bold">25 de noviembre hasta el 31 de diciembre 2024</span></div>

                </section>
        
        </div>
    @endif

    @if (count($benefit) > 0)    
        <section class="px-[5%] md:px-[8%] py-10 lg:py-16 flex flex-col gap-5 md:gap-10">
                <div class="flex flex-row justify-start items-center">
                    <h3 class="font-gilroy_extrabold text-[#001F4F] text-4xl xl:text-5xl">Beneficios Clave</h3>
                </div>
                <div class="flex flex-wrap gap-6 justify-center items-center">
                    @foreach ($benefit as $benef)
                        <div class="flex flex-col gap-4 p-6 bg-[#EEF9E6] border-[#EEF9E6] border hover:border-[#59C402] rounded-2xl overflow-hidden min-w-[180px]">
                            <h2 class="text-[#001F4F] text-xl font-gilroy_bold">{{$benef->title}}</h2>
                            <p class="text-[#001F4F] text-lg font-gilroy_regular max-w-[300px] h-20 line-clamp-3">{{$benef->description}}</p>
                        </div>
                    @endforeach
                </div>
        </section>
    @endif

    @if (count($testimonie) > 0)
            <section class="bg-cover relative pt-10 lg:pt-0"  style="background-image: url('{{asset('images/img/tc_texturaservicios.svg')}}');">
                <div class="px-[5%] md:px-[10%] flex flex-col  lg:flex-row gap-5 md:gap-10 lg:items-end">
                    
                    <div class="w-full sm:w-full lg:w-1/2  flex flex-col justify-end items-center order-2 lg:order-1">
                        <img class="h-full object-bottom object-contain " src="{{asset('images/img/tc_comentarios.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                    </div>

                    <div class="w-full lg:w-1/2 py-0 lg:py-16 order-1 lg:order-2 flex flex-col justify-center">
                        <div>
                            <div class="swiper testimonios min-h-[300px]" data-aos="fade-down">
                                <div class="swiper-wrapper ">   
                                    @foreach ($testimonie as $testimonio)
                                        <div class="swiper-slide">
                                            <div class="flex flex-col justify-center">
                                                <div class="relative max-w-md mx-auto flex flex-col gap-2">
                                                    <div class="flex flex-col gap-0 text-left">
                                                      <p class="font-gilroy_semibold text-white text-4xl line-clamp-[7]">{{$testimonio->testimonie}}</p>
                                                    </div>
                                                    <div class="flex flex-row gap-2">
                                                      <div>
                                                        <img class="w-14 h-14 rounded-full object-cover" src="{{asset($testimonio->ocupation)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/tc_testimonio.png') }}';" />
                                                      </div>
                                                      <div class="flex flex-col gap-0 text-left">
                                                        <h3 class="font-gilroy_bold text-white text-base">{{$testimonio->name}}</h3>
                                                        <p class="font-gilroy_regular text-white text-sm">{{$testimonio->email}}</p>
                                                      </div>
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
    @endif

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
                                <h2 class="font-gilroy_regular text-[#001637] text-sm line-clamp-2 uppercase text-center">{{$canal->name}}</h2>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    @endforeach

@section('scripts_importados')

<script>
    $(document).ready(function () {
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

  document.addEventListener('DOMContentLoaded', (event) => {
      fetch('/obtenerRedes', {
          method: 'GET',
          headers: {
              'Content-Type': 'application/json'
          }
      })
      .then(response => response.json())
      .then(data => {
          console.log('Datos obtenidos:', data);
          const facebookData = data.facebook;
          console.log(facebookData);
          if (facebookData) {
              // Asigna la URL al elemento <a> con id="facebook"
              const facebookLink = document.getElementById('facebook');
              if (facebookLink) {
                  facebookLink.href = facebookData.url;
                  facebookLink.textContent = 'Facebook';
              }
          }
      })
      .catch((error) => {
          console.error('Error:', error);
      });
  });
  

  var swiper = new Swiper(".planes", {
            slidesPerView: 3,
            spaceBetween: 15,
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

                },
                920: {
                    slidesPerView: 3,

                },
                1600: {
                    slidesPerView: 4,
                   
                },
            },
    });

    var swiper = new Swiper(".testimonios", {
            slidesPerView: 1,
            spaceBetween: 15,
            loop: true,
            centeredSlides: false,
    });
</script>
@stop

@stop
