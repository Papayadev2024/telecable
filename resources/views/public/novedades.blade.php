@extends('components.public.matrix', ['pagina' => 'novedades'])
@section('titulo', 'Novedades')
@section('css_importados')

@stop


@section('content')

  <main class="">
    
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
                <div class="grid grid-cols-2 md:grid-cols-3 font-gotham_bold w-full rounded-2xl bg-[#5599FF] mt-5">
                    <div class="flex flex-col justify-center items-center px-6 py-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                            <path d="M23.6666 5H17C10.7146 5 7.57188 5 5.61924 6.95262C3.66663 8.90525 3.66663 12.0479 3.66663 18.3333C3.66663 24.6187 3.66663 27.7615 5.61924 29.714C7.57188 31.6667 10.7146 31.6667 17 31.6667H23.6666C29.952 31.6667 33.0948 31.6667 35.0473 29.714C37 27.7615 37 24.6187 37 18.3333C37 12.0479 37 8.90525 35.0473 6.95262C33.0948 5 29.952 5 23.6666 5Z" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M28.5 25.8333C28.5 24.3605 29.6938 23.1667 31.1666 23.1667M23.1666 25.8333C23.1666 21.415 26.7483 17.8333 31.1666 17.8333M17.8333 25.8333C17.8333 18.4695 23.8028 12.5 31.1666 12.5" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M30.3333 31.667L31.9999 35.0003" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.3333 31.667L8.66663 35.0003" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h3 class="text-white text-lg xl:text-xl font-gilroy_regular mt-5">Plan <span class="font-gilroy_bold"> Duo</span></h3>
                        <h2 class="text-white text-base font-gilroy_regular">Internet + Televisión por cable</h2>
                    </div>

                    <div class="flex flex-col justify-center items-center px-6 py-7 bg-[#004FC6]">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M32.882 19.833C33.3505 16.5991 33.5663 14.9364 32.9705 13.4571C32.3552 11.9297 30.9902 10.8847 28.26 8.79461L26.2203 7.23301C22.8242 4.63301 21.126 3.33301 19.1667 3.33301C17.2073 3.33301 15.5092 4.63301 12.1131 7.23301L10.0733 8.79461C7.3432 10.8847 5.97817 11.9297 5.3629 13.4571C4.74763 14.9845 4.9977 16.7073 5.4978 20.1532L5.92427 23.0917C6.63323 27.9763 6.98772 30.4188 8.64225 31.8758C10.2968 33.333 12.7156 33.333 17.5533 33.333H18.3333" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21.6666 27.463C23.5813 25.9052 25.8681 25 28.3243 25C30.7881 25 33.0816 25.911 35 27.4777M31.9571 31.6667C30.8636 30.9848 29.6298 30.6012 28.3243 30.6012C27.0253 30.6012 25.7973 30.981 24.708 31.6563" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M28.3334 36.667H28.344" stroke="white" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <h3 class="text-white text-lg xl:text-xl font-gilroy_regular mt-5">Internet <span class="font-gilroy_bold"> Fibra Óptica</span></h3>
                        <h2 class="text-white text-base font-gilroy_regular">Conexión 100% fibra óptica</h2>
                    </div>

                    <div class="flex flex-col justify-center items-center px-6 py-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                            <path d="M18.1668 11.667V16.667M18.1668 16.667V21.667M18.1668 16.667H14.8335C13.2621 16.667 12.4764 16.667 11.9883 16.1788C11.5001 15.6907 11.5001 14.905 11.5001 13.3337V11.667M23.1668 21.667V16.667M23.1668 16.667V11.667M23.1668 16.667L29.8335 11.667M23.1668 16.667L29.8335 21.667" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M4.00012 16.6663C4.00012 10.3809 4.00012 7.23826 5.95274 5.28562C7.90537 3.33301 11.0481 3.33301 17.3335 3.33301H24.0001C30.2855 3.33301 33.4283 3.33301 35.3808 5.28562C37.3335 7.23826 37.3335 10.3809 37.3335 16.6663C37.3335 22.9517 37.3335 26.0945 35.3808 28.047C33.4283 29.9997 30.2855 29.9997 24.0001 29.9997H17.3335C11.0481 29.9997 7.90537 29.9997 5.95274 28.047C4.00012 26.0945 4.00012 22.9517 4.00012 16.6663Z" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M27.3335 36.6667C25.3723 35.6067 23.0953 35 20.6668 35C18.2383 35 15.9613 35.6067 14.0001 36.6667" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                        <h3 class="text-white text-lg xl:text-xl font-gilroy_regular mt-5">Televisión <span class="font-gilroy_bold"> por cable</span></h3>
                        <h2 class="text-white text-base font-gilroy_regular">Conexión 100% fibra óptica</h2>
                    </div>
                </div>
              </div>
          </div>
      </div> 
    </section>

    <section class="bg-cover bg-opacity-100 relative pb-10 lg:pb-16 flex flex-col gap-5 bg-transparent -mt-24">
           
      <div class="px-[5%] md:px-[8%] pb-5 flex md:flex-row gap-5 md:gap-10">
            <div class="w-full">
                <div class="swiper planes w-full">
                    <div class="swiper-wrapper">   
                       {{-- @foreach ($productos as $producto)     --}}
                            <div class="swiper-slide my-auto">
                                <div class="flex flex-col gap-5 max-w-[390px] bg-[#1F509A] p-6 rounded-3xl mx-auto">
                                    
                                        <div class="flex flex-row justify-between items-center w-full">
                                            <h2 class="py-2 text-white text-lg font-gilroy_medium text-left w-auto line-clamp-1"><span>Internet Fibra</span></h2>
                                            <h3 class="font-gilroy_bold text-white text-2xl">S/ 70.00 <span class="font-gilroy_regular tracking-wide text-white text-base">/Mes</span></h3>
                                        </div>

                                        <div class="flex flex-col justify-center items-start font-gilroy_regular group">
                                            <div class="bg-[#59C402] px-2 py-1.5 rounded-full tracking-normal">
                                                <p class="leading-none text-white text-sm">80% más velocidad</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col">
                                            <div class="flex flex-row gap-2 items-center">
                                                <h2 class="font-gilroy_extrabold text-white text-6xl line-clamp-1">200</h2>
                                                <span class="font-gilroy_extrabold text-white text-3xl line-clamp-1">Mpbs</span>
                                            </div>

                                            <h2 class="-mt-2 font-gilroy_regular text-white text-sm line-clamp-1">Velocidad normal 70 Mbps</h2>
                                        </div>

                                        <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                                            <div class="bg-[#0066FF] w-full px-3 text-center py-3 rounded-3xl tracking-normal">
                                                <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                                            </div>
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
                                                Velocidad
                                               </h3>
                                               <h2 class="font-gilroy_regular text-white text-sm">Conexión rápida y estable.</h2>
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
                                                 Instalación
                                                </h3>
                                                <h2 class="font-gilroy_regular text-white text-sm">Sin costo adicional.</h2>
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
                                                 Soporte
                                                </h3>
                                                <h2 class="font-gilroy_regular text-white text-sm">Ayuda disponible siempre.</h2>
                                            </div>
                                        </div>
                                </div>
                            </div>

                            <div class="swiper-slide my-auto">
                                <div class="flex flex-col gap-5 max-w-[390px] bg-[#1F509A] p-6 rounded-3xl mx-auto">
                                    
                                        <div class="flex flex-row justify-between items-center w-full">
                                            <h2 class="py-2 text-white text-lg font-gilroy_medium text-left w-auto line-clamp-1"><span>Internet Fibra</span></h2>
                                            <h3 class="font-gilroy_bold text-white text-2xl">S/ 70.00 <span class="font-gilroy_regular tracking-wide text-white text-base">/Mes</span></h3>
                                        </div>

                                        <div class="flex flex-col justify-center items-start font-gilroy_regular group">
                                            <div class="bg-[#59C402] px-2 py-1.5 rounded-full tracking-normal">
                                                <p class="leading-none text-white text-sm">80% más velocidad</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col">
                                            <div class="flex flex-row gap-2 items-center">
                                                <h2 class="font-gilroy_extrabold text-white text-6xl line-clamp-1">200</h2>
                                                <span class="font-gilroy_extrabold text-white text-3xl line-clamp-1">Mpbs</span>
                                            </div>

                                            <h2 class="-mt-2 font-gilroy_regular text-white text-sm line-clamp-1">Velocidad normal 70 Mbps</h2>
                                        </div>

                                        <div class="flex flex-col justify-center items-start font-gilroy_semibold group">
                                            <div class="bg-[#0066FF] w-full px-3 text-center py-3 rounded-3xl tracking-normal">
                                                <p class="leading-none text-white text-lg">Lo quiero ahora</p>
                                            </div>
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
                                                Velocidad
                                               </h3>
                                               <h2 class="font-gilroy_regular text-white text-sm">Conexión rápida y estable.</h2>
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
                                                 Instalación
                                                </h3>
                                                <h2 class="font-gilroy_regular text-white text-sm">Sin costo adicional.</h2>
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
                                                 Soporte
                                                </h3>
                                                <h2 class="font-gilroy_regular text-white text-sm">Ayuda disponible siempre.</h2>
                                            </div>
                                        </div>
                                </div>
                            </div>
                       {{-- @endforeach --}}
                    </div>
                </div>
            </div>
      </div> 
        
      <div class="font-gilroy_regular text-sm text-center text-[#001637]">*Planes y precios validos para contrataciones desde el <span class="font-bold">25 de noviembre hasta el 31 de diciembre 2024</span></div>

    </section>

    <section class="px-[5%] md:px-[8%] pb-10 lg:pb-16 flex flex-col gap-5 md:gap-10">
        <div class="flex flex-row justify-start items-center">
            <h3 class="font-gilroy_extrabold text-[#001F4F] text-4xl xl:text-5xl">Beneficios Clave</h3>
        </div>
        <div class="flex flex-wrap gap-6 justify-center items-center">
            @foreach ($benefit as $benef)
                <div class="flex flex-col gap-4 p-6 bg-[#EEF9E6] border-[#EEF9E6] border hover:border-[#59C402] rounded-2xl overflow-hidden min-w-[180px]">
                    <h2 class="text-[#001F4F] text-xl font-gilroy_bold">{{$benef->titulo}}</h2>
                    <p class="text-[#001F4F] text-lg font-gilroy_regular max-w-[300px] h-20 line-clamp-3">{{$benef->descripcion}}</p>
                </div>
            @endforeach
        </div>
    </section>
    
    {{-- @if (count($testimonie) > 0) --}}
            <section class="bg-cover relative pt-10 lg:pt-0"  style="background-image: url('{{asset('images/img/tc_texturaservicios.svg')}}');">
                <div class="px-[5%] md:px-[10%] flex flex-col  lg:flex-row gap-5 md:gap-10 lg:items-end">
                    
                    <div class="w-full sm:w-full lg:w-1/2  flex flex-col justify-end items-center order-2 lg:order-1">
                        <img class="h-full  object-contain " src="{{asset('images/img/tc_comentarios.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                    </div>

                    <div class="w-full lg:w-1/2 py-0 lg:py-16 order-1 lg:order-2 flex flex-col justify-center">
                        <div>
                            <div class="swiper testimonios min-h-[300px]" data-aos="fade-down">
                                <div class="swiper-wrapper ">   
                                    {{-- @foreach ($testimonie as $testimonio) --}}
                                        <div class="swiper-slide">
                                            <div class="flex flex-col justify-center">
                                                <div class="relative max-w-md mx-auto flex flex-col gap-2">
                                                    <div class="flex flex-col gap-0 text-left">
                                                      <p class="font-gilroy_semibold text-white text-4xl line-clamp-[7]">“Con la Fibra Óptica mi conexión es súper rápida, ideal para el teletrabajo y mis videollamadas.”</p>
                                                    </div>
                                                    <div class="flex flex-row gap-2">
                                                      <div>
                                                        <img class="w-14 h-14 rounded-full object-cover" src="{{asset('images/img/tc_testimonio.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                                                      </div>
                                                      <div class="flex flex-col gap-0 text-left">
                                                        <h3 class="font-gilroy_bold text-white text-base">Ana López</h3>
                                                        <p class="font-gilroy_regular text-white text-sm">Estudiante de Medicina</p>
                                                      </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>  
            </section>
        {{-- @endif --}}

  </main>

@section('scripts_importados')
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
