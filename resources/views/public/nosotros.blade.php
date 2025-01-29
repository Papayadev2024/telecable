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
    <main class="pt-10 xl:pt-16">

       
        {{-- <section class="bg-cover bg-opacity-100 relative py-10 xl:py-16" 
          style="background-image: url('{{asset('images/img/textura3.svg')}}');">
           
          <div class="px-[5%]  flex flex-col items-center justify-center gap-5">
            <div class="flex flex-col gap-1 max-w-3xl text-center">
                <h3 data-aos="fade-down" class="font-gotham_bold text-white text-lg ">{{$textosnosotros->subtitle1section ?? "Ingrese un texto"}}</h3>
                <h2 data-aos="fade-down" class="font-gotham_bold text-white text-4xl lg:text-5xl leading-none">{{$textosnosotros->title1section ?? "Ingrese un texto"}} <span class="text-[#E29720]">{{$textosnosotros->title1section2 ?? "Ingrese un texto"}}</span></h2>
                <p data-aos="fade-down" class="text-white text-base font-gotham_book"> 
                    {{$textosnosotros->description1section ?? "Ingrese un texto"}}
                </p>
            </div>
          </div>

          <div class="px-[5%] md:px-[8%] py-5 flex flex-col md:flex-row gap-5 md:gap-10 md:justify-center">
                
            <div class="flex flex-col md:flex-row gap-3 w-auto md:w-[420px] bg-[#1EA7A2] py-3 md:py-0 px-3 rounded-3xl">
                <img class="w-auto h-40 object-contain mx-auto " src="{{asset($textosnosotros->url_image2section)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/nosotroscable.png') }}';" />
                <div class="flex flex-col gap-3 justify-center items-start p-3">
                    <div class="flex flex-col gap-0">
                        <h2 class="font-gotham_bold text-4xl text-white line-clamp-1" data-aos="fade-down">
                            {{$textosnosotros->title2section ?? "Ingrese un texto"}}
                        </h2>
                        <span class="font-gotham_book text-lg text-white line-clamp-1 " data-aos="fade-down">
                            {{$textosnosotros->subtitle2section ?? "Ingrese un texto"}}
                        </span>
                    </div>
                    <div class="flex flex-row w-full">
                        <a class="bg-[#21149E] px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Pídelo aquí</span></a>
                    </div>
                </div>
            </div>

                <div class="flex flex-col md:flex-row gap-3 w-auto md:w-[420px] bg-[#1EA7A2] py-3 md:py-0 px-3 rounded-3xl">
                    <img class="w-auto h-40 object-contain mx-auto " src="{{asset($textosnosotros->url_image3section)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/nosotrosvaron.png') }}';" />
                    <div class="flex flex-col gap-3 justify-center items-start p-3">
                        <div class="flex flex-col gap-0">
                            <h2 class="font-gotham_bold text-4xl text-white line-clamp-1" data-aos="fade-down">
                                {{$textosnosotros->title3section ?? "Ingrese un texto"}}
                            </h2>
                            <span class="font-gotham_book text-lg text-white line-clamp-1" data-aos="fade-down">
                                {{$textosnosotros->subtitle3section ?? "Ingrese un texto"}}
                            </span>
                        </div>
                        <div class="flex flex-row w-full">
                            <a class="bg-[#21149E] px-7 py-2 rounded-full text-white text-center font-gotham_bold w-full"><span>Pídelo aquí</span></a>
                        </div>
                    </div>
                </div>

           </div>  
        </section> --}}



        {{-- <section class="bg-cover bg-opacity-100 relative pb-10 xl:pb-16 flex flex-col gap-10" 
          style="background-image: url('{{asset('images/img/textura3.svg')}}');">
           
          <div class="px-[5%]  flex flex-col items-center justify-center gap-5">
            <div class="flex flex-col gap-1 max-w-3xl text-center" >
                <h3 class="font-gotham_bold text-white text-lg " data-aos="fade-down">{{$textosnosotros->subtitle4section ?? "Ingrese un texto"}}</h3>
                <h2 class="font-gotham_bold text-white text-4xl lg:text-5xl leading-none" data-aos="fade-down">{{$textosnosotros->title4section ?? "Ingrese un texto"}}
                     <span class="text-[#E29720]" data-aos="fade-down">{{$textosnosotros->title4section2 ?? "Ingrese un texto"}}</span></h2>
                <p class="text-white text-base font-gotham_book" data-aos="fade-down"> 
                    {{$textosnosotros->description4section ?? "Ingrese un texto"}}
                </p>
            </div>
          </div>

          <div class="px-[5%] md:px-[8%] grid grid-cols-1 lg:grid-cols-3 gap-5">
            @foreach ($valores as $valor)    
                <div class="flex flex-col gap-5 w-full bg-black bg-opacity-10 p-6 rounded-3xl text-center" data-aos="zoom-in-up">
                    <div class="flex flex-row justify-center">
                        <div class="bg-[#E29720] p-3 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                <path d="M27.502 15C27.502 8.09644 21.9055 2.5 15.002 2.5C8.09839 2.5 2.50195 8.09644 2.50195 15C2.50195 21.9035 8.09839 27.5 15.002 27.5C21.9055 27.5 27.502 21.9035 27.502 15Z" fill="#E29720" stroke="#110B79" stroke-width="1.875"/>
                                <path d="M10.002 15.625L13.127 18.75L20.002 11.25" stroke="#110B79" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <h2 class="font-gotham_bold text-white text-3xl max-w-sm mx-auto ">{{$valor->title}}</h2>
                    <p class="font-gotham_book text-white text-base ">{{$valor->description}}</p>
                </div>
            @endforeach
           </div>  
        </section> --}}


        {{-- <section class="bg-cover bg-opacity-100 relative pb-10 lg:pb-16 flex flex-col gap-10" 
          style="background-image: url('{{asset('images/img/textura3.svg')}}');">
           
            <div class="px-[5%] md:px-[10%]" data-aos="zoom-in-up">
                <div class="bg-[#1EA7A2]  rounded-3xl overflow-hidden flex flex-col lg:flex-row lg:justify-between gap-0 md:gap-10">
                    <div class="flex flex-col gap-3 w-full lg:w-1/2 p-6 2xl:p-8 lg:max-w-xl  order-2 lg:order-1">
                        <div class="flex flex-col gap-1 text-left">
                            <h3 class="font-gotham_bold text-white text-lg " data-aos="zoom-in-up">¡Se parte de la experiencia Red Conex!</h3>
                            <h2 class="font-gotham_bold text-white text-3xl leading-none" data-aos="zoom-in-up">¡Déjanos tu correo y recibe la mejor info!</h2>
                        </div> 
                        <form id="footerBlog_Catalogo" data-aos="zoom-in-up">
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

                    <div class="flex flex-row justify-end items-end w-full lg:w-1/2 order-1 lg:order-2" data-aos="zoom-in-up">
                        <img class="w-full h-full object-right object-cover" src="{{asset('images/img/imagensus.png')}}" />
                    </div>
                </div>
            </div>
        </section> --}}


       <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pb-10 lg:pb-20">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-10 xl:gap-20">
                       
                            <div class="flex flex-col justify-center gap-5 rounded-xl">
                                <h3 class="font-gilroy_regular text-[#001F4F] text-xl line-clamp-1 flex flex-row gap-3 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                        <path d="M16.3334 3.5H11.6667C7.26693 3.5 5.06705 3.5 3.70021 4.86683C2.33337 6.23367 2.33337 8.43355 2.33337 12.8333C2.33337 17.2331 2.33337 19.4331 3.70021 20.7998C5.06705 22.1667 7.26693 22.1667 11.6667 22.1667H16.3334C20.7331 22.1667 22.9331 22.1667 24.2998 20.7998C25.6667 19.4331 25.6667 17.2331 25.6667 12.8333C25.6667 8.43355 25.6667 6.23367 24.2998 4.86683C22.9331 3.5 20.7331 3.5 16.3334 3.5Z" stroke="#001F4F" stroke-width="1.75" stroke-linecap="round"/>
                                        <path d="M19.7167 18.0833C19.7167 17.0524 20.5524 16.2167 21.5833 16.2167M15.9833 18.0833C15.9833 14.9905 18.4905 12.4833 21.5833 12.4833M12.25 18.0833C12.25 12.9287 16.4287 8.75 21.5833 8.75" stroke="#001F4F" stroke-width="1.75" stroke-linecap="round"/>
                                        <path d="M21 22.167L22.1667 24.5003" stroke="#001F4F" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.00004 22.167L5.83337 24.5003" stroke="#001F4F" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Más que un servicio, somos parte de tu día a día
                                </h3>
                                
                                <h2 class="font-gilroy_medium text-[#001F4F] text-4xl lg:text-5xl 2xl:text-6xl">Conectamos Hogares, <span class="text-[#59C402] font-gilroy_bold">Transformamos Vidas</span></h2>
                                
                                <div class="flex flex-col gap-2 text-[#001637] font-gilroy_regular text-lg">
                                    <p>
                                        Somos líderes en brindar soluciones de conectividad en Perú, ofreciendo Internet de alta velocidad y televisión por cable con tecnología de punta. Nuestro compromiso es mantenerte conectado con lo que más te importa.
                                    </p>
                                    <p>
                                        En Telecable, iniciamos nuestra misión en [año de fundación] con un objetivo claro: conectar a las familias peruanas con servicios de internet y televisión de alta calidad. A lo largo de los años, hemos crecido para convertirnos en un aliado confiable, ofreciendo soluciones innovadoras que transforman la manera en que nuestros clientes disfrutan del entretenimiento y la conectividad. ¡Seguimos trabajando para llevar lo mejor a cada hogar!
                                    </p>
                                </div>

                                <div class="grid grid-cols-2 md:grid-cols-3 font-gotham_bold w-full rounded-2xl bg-[#5599FF] mt-5 text-center">
                                    <div class="flex flex-col justify-center items-center px-6 py-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                            <path d="M23.6666 5H17C10.7146 5 7.57188 5 5.61924 6.95262C3.66663 8.90525 3.66663 12.0479 3.66663 18.3333C3.66663 24.6187 3.66663 27.7615 5.61924 29.714C7.57188 31.6667 10.7146 31.6667 17 31.6667H23.6666C29.952 31.6667 33.0948 31.6667 35.0473 29.714C37 27.7615 37 24.6187 37 18.3333C37 12.0479 37 8.90525 35.0473 6.95262C33.0948 5 29.952 5 23.6666 5Z" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                                            <path d="M28.5 25.8333C28.5 24.3605 29.6938 23.1667 31.1666 23.1667M23.1666 25.8333C23.1666 21.415 26.7483 17.8333 31.1666 17.8333M17.8333 25.8333C17.8333 18.4695 23.8028 12.5 31.1666 12.5" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                                            <path d="M30.3333 31.667L31.9999 35.0003" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M10.3333 31.667L8.66663 35.0003" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h3 class="text-white text-lg 2xl:text-xl font-gilroy_regular mt-5">Innovación  <span class="font-gilroy_bold"> constante</span></h3>
                                    </div>
            
                                    <div class="flex flex-col justify-center items-center px-6 py-7 bg-[#004FC6]">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                                            <path d="M32.882 19.833C33.3505 16.5991 33.5663 14.9364 32.9705 13.4571C32.3552 11.9297 30.9902 10.8847 28.26 8.79461L26.2203 7.23301C22.8242 4.63301 21.126 3.33301 19.1667 3.33301C17.2073 3.33301 15.5092 4.63301 12.1131 7.23301L10.0733 8.79461C7.3432 10.8847 5.97817 11.9297 5.3629 13.4571C4.74763 14.9845 4.9977 16.7073 5.4978 20.1532L5.92427 23.0917C6.63323 27.9763 6.98772 30.4188 8.64225 31.8758C10.2968 33.333 12.7156 33.333 17.5533 33.333H18.3333" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M21.6666 27.463C23.5813 25.9052 25.8681 25 28.3243 25C30.7881 25 33.0816 25.911 35 27.4777M31.9571 31.6667C30.8636 30.9848 29.6298 30.6012 28.3243 30.6012C27.0253 30.6012 25.7973 30.981 24.708 31.6563" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                                            <path d="M28.3334 36.667H28.344" stroke="white" stroke-width="3.33333" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <h3 class="text-white text-lg 2xl:text-xl font-gilroy_regular mt-5">Enfoque  <span class="font-gilroy_bold"> en el cliente</span></h3>
                                    </div>
            
                                    <div class="flex flex-col justify-center items-center px-6 py-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                                            <path d="M18.1668 11.667V16.667M18.1668 16.667V21.667M18.1668 16.667H14.8335C13.2621 16.667 12.4764 16.667 11.9883 16.1788C11.5001 15.6907 11.5001 14.905 11.5001 13.3337V11.667M23.1668 21.667V16.667M23.1668 16.667V11.667M23.1668 16.667L29.8335 11.667M23.1668 16.667L29.8335 21.667" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                                            <path d="M4.00012 16.6663C4.00012 10.3809 4.00012 7.23826 5.95274 5.28562C7.90537 3.33301 11.0481 3.33301 17.3335 3.33301H24.0001C30.2855 3.33301 33.4283 3.33301 35.3808 5.28562C37.3335 7.23826 37.3335 10.3809 37.3335 16.6663C37.3335 22.9517 37.3335 26.0945 35.3808 28.047C33.4283 29.9997 30.2855 29.9997 24.0001 29.9997H17.3335C11.0481 29.9997 7.90537 29.9997 5.95274 28.047C4.00012 26.0945 4.00012 22.9517 4.00012 16.6663Z" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                                            <path d="M27.3335 36.6667C25.3723 35.6067 23.0953 35 20.6668 35C18.2383 35 15.9613 35.6067 14.0001 36.6667" stroke="white" stroke-width="2.5" stroke-linecap="round"/>
                                        </svg>
                                        <h3 class="text-white text-lg 2xl:text-xl font-gilroy_regular mt-5">Compromiso  <span class="font-gilroy_bold"> con la excelencia</span></h3>
                                    </div>
                                </div>
                            </div>
                             
                            <div class="flex flex-col items-center justify-center">
                                <img class="h-[450px] md:h-[500px] object-contain lg:h-[650px] w-full"  src="{{asset('images/img/tc_portadanosotros.png')}}" />
                            </div>
                     
                    </div>
            </div>
       </section>


      
        <section class="flex flex-col gap-10 w-full px-[5%] mx-auto pb-10 lg:pb-20">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-10 xl:gap-20">
                    <div class="flex flex-col items-center justify-center">
                        <img class="h-[450px] md:h-[500px] object-contain lg:h-[650px] w-full lg:object-left"  src="{{asset('images/img/tc_nosotros2.png')}}" />
                    </div>
                    
                    <div class="flex flex-col justify-center gap-5 rounded-xl max-w-md">
                        
                        <h2 class="font-gilroy_medium text-[#001F4F] text-4xl lg:text-5xl 2xl:text-6xl">Por Qué  <span class="text-[#59C402] font-gilroy_bold">Elegirnos</span></h2>
                            
                        <div class="flex flex-row gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
                                    <path d="M13.9595 5.5C13.603 5.63322 13.2524 5.77853 12.9082 5.93543M34.5295 27.6685C34.6998 27.2998 34.8568 26.9237 35 26.5408M30.8313 32.7745C31.1175 32.5073 31.3941 32.2302 31.6605 31.9433M25.4481 36.1205C25.7716 35.9985 26.0901 35.8667 26.4035 35.7252M20.26 37.1565C19.8751 37.1698 19.4876 37.1698 19.1026 37.1565M12.9788 35.734C13.2802 35.8695 13.5864 35.9963 13.8971 36.1138M7.78756 32.0347C8.01538 32.2762 8.25046 32.5107 8.49248 32.738M4.38781 26.6075C4.51261 26.937 4.64776 27.2615 4.79285 27.5805M3.3416 21.3422C3.33078 20.9953 3.33081 20.6463 3.3416 20.299M4.37573 15.0619C4.49833 14.7361 4.63105 14.4152 4.77348 14.0997M7.76001 9.63205C8.00111 9.37523 8.2504 9.12622 8.50748 8.8854" stroke="#59C402" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22.5 20.5C22.5 21.8807 21.3807 23 20 23C18.6193 23 17.5 21.8807 17.5 20.5C17.5 19.1193 18.6193 18 20 18M22.5 20.5C22.5 19.1193 21.3807 18 20 18M22.5 20.5H26.6667M20 18V10.5" stroke="#59C402" stroke-width="2.5" stroke-linecap="round"/>
                                    <path d="M36.6667 20.5007C36.6667 11.2959 29.2047 3.83398 20 3.83398" stroke="#59C402" stroke-width="2.5" stroke-linecap="round"/>
                                </svg>
                            </div>
                            <div class="flex flex-col gap-0 text-left">
                              <h3 class="font-gilroy_bold text-[#001F4F] text-xl">Atención al cliente 24/7</h3>
                              <p class="font-gilroy_regular text-[#001F4F] text-lg">Estamos disponibles todo el día, todos los días, para resolver tus dudas y ayudarte rápidamente.</p>
                            </div>
                        </div>

                        <div class="flex flex-row gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
                                    <path d="M20.0002 37.1663C29.2049 37.1663 36.6668 29.7044 36.6668 20.4997C36.6668 11.2949 29.2049 3.83301 20.0002 3.83301C10.7954 3.83301 3.3335 11.2949 3.3335 20.4997C3.3335 29.7044 10.7954 37.1663 20.0002 37.1663Z" stroke="#59C402" stroke-width="2.5"/>
                                    <path d="M20.0002 37.1663C23.6821 37.1663 26.6668 29.7044 26.6668 20.4997C26.6668 11.2949 23.6821 3.83301 20.0002 3.83301C16.3183 3.83301 13.3335 11.2949 13.3335 20.4997C13.3335 29.7044 16.3183 37.1663 20.0002 37.1663Z" stroke="#59C402" stroke-width="2.5"/>
                                    <path d="M3.3335 20.5H36.6668" stroke="#59C402" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="flex flex-col gap-0 text-left">
                              <h3 class="font-gilroy_bold text-[#001F4F] text-xl">Tecnología de última generación</h3>
                              <p class="font-gilroy_regular text-[#001F4F] text-lg">Usamos las mejores tecnologías para ofrecerte internet rápido y televisión de alta definición.</p>
                            </div>
                        </div>

                        <div class="flex flex-row gap-2">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
                                    <path d="M25 13.833C25 16.5944 22.7615 18.833 20 18.833C17.2385 18.833 15 16.5944 15 13.833C15 11.0716 17.2385 8.83301 20 8.83301C22.7615 8.83301 25 11.0716 25 13.833Z" stroke="#59C402" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M26.6665 7.16699C29.4278 7.16699 31.6665 9.40558 31.6665 12.167C31.6665 14.2055 30.4465 15.959 28.697 16.7375" stroke="#59C402" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M22.8572 23.833H17.1429C13.198 23.833 10 27.031 10 30.9758C10 32.5538 11.2792 33.833 12.8571 33.833H27.1429C28.7209 33.833 30 32.5538 30 30.9758C30 27.031 26.802 23.833 22.8572 23.833Z" stroke="#59C402" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M29.5239 22.167C33.4688 22.167 36.6668 25.365 36.6668 29.3098C36.6668 30.8878 35.3876 32.167 33.8096 32.167" stroke="#59C402" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.3335 7.16699C10.5721 7.16699 8.3335 9.40558 8.3335 12.167C8.3335 14.2055 9.55338 15.959 11.303 16.7375" stroke="#59C402" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.19065 32.167C4.61268 32.167 3.3335 30.8878 3.3335 29.3098C3.3335 25.365 6.53146 22.167 10.4763 22.167" stroke="#59C402" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="flex flex-col gap-0 text-left">
                              <h3 class="font-gilroy_bold text-[#001F4F] text-xl">Planes accesibles para todos</h3>
                              <p class="font-gilroy_regular text-[#001F4F] text-lg">Opciones flexibles y asequibles para adaptarse a tus necesidades y presupuesto.</p>
                            </div>
                        </div>

                           
                    </div>
                </div>
        </section>
   

        @if (count($testimonie) > 0)
            <section class="bg-cover relative pt-10 lg:pt-0"  style="background-image: url('{{asset('images/img/tc_texturacomentarios.svg')}}');">
                <div class="px-[5%] md:px-[10%] flex flex-col  lg:flex-row gap-5 md:gap-10 lg:items-end">
                    
                    <div class="w-full lg:w-1/2 py-0 lg:py-16 flex flex-col justify-center">
                        <div>
                            <div class="swiper testimonios min-h-[300px]" data-aos="fade-down">
                                <div class="swiper-wrapper ">   
                                    @foreach ($testimonie as $testimonio)
                                            <div class="swiper-slide">
                                                <div class="flex flex-col justify-center">
                                                    <div class="relative max-w-md mx-auto flex flex-col gap-2">
                                                        <div class="flex flex-col gap-0 text-left">
                                                        <p class="font-gilroy_semibold text-[#001F4F] text-4xl line-clamp-[7]">{{$testimonio->testimonie}}</p>
                                                        </div>
                                                        <div class="flex flex-row gap-2">
                                                        <div>
                                                            <img class="w-14 h-14 rounded-full object-cover" src="{{asset($testimonio->ocupation)}}" onerror="this.onerror=null;this.src='{{ asset('images/img/tc_testimonio.png') }}';" />
                                                        </div>
                                                        <div class="flex flex-col gap-0 text-left">
                                                            <h3 class="font-gilroy_bold text-[#001F4F] text-base">{{$testimonio->name}}</h3>
                                                            <p class="font-gilroy_regular text-[#001F4F] text-sm">{{$testimonio->email}}</p>
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

                    <div class="w-full sm:w-full lg:w-1/2  flex flex-col justify-end items-center">
                        <img class="h-full  object-contain " src="{{asset('images/img/tc_comentarios2.png')}}" onerror="this.onerror=null;this.src='{{ asset('images/img/noimagen.jpg') }}';" />
                    </div>
                    
                </div>  
            </section>
        @endif

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
