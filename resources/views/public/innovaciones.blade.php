@extends('components.public.matrix', ['pagina'=>'innovaciones'])
@section('titulo', 'Innovaciones')
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

        <section class="flex flex-col lg:flex-row gap-10 lg:gap-10 justify-center items-center px-[5%] lg:pl-0 lg:pr-0 -mt-24 bg-cover bg-top pt-32" style="background-image:url({{asset('images/img/portadaimagen.png')}})">
        </section>

        <section>
                <div class="flex flex-col gap-10 w-full px-[5%] mx-auto py-10 lg:py-20 bg-[#F5F7F9]">
                    <div class="flex flex-col lg:flex-row lg:justify-between lg:items-center"> 
                        <div class="flex flex-col gap-3 items-start justify-center max-w-2xl">
                             <h2 class="leading-tight font-gotham_medium  text-4xl lg:text-6xl  text-[#0181AA] ">
                                    Innovación tecnológica</h2>   
                        </div>
                         <div class="flex flex-col gap-3 items-start justify-center max-w-md text-left lg:text-right">
                             <h2 class="leading-tight font-gotham_medium  text-xl lg:text-3xl  text-[#11355a] ">
                                   Creamos tecnología de vanguardia</h2>  
                        </div>
                    </div>
                </div>
        </section>

        <div class="w-full bg-[#F5F7F9] pb-10 lg:pb-20 px-0 lg:px-[5%]">
            <img class="w-full object-cover object-center h-60 sm:h-96 lg:h-[450px]" src="{{asset('images/img/bannerinnovacion.png')}}" />
        </div>



       <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pb-10 lg:pb-20 bg-[#F5F7F9]">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-10">
                       
                            <div class="flex flex-col justify-center gap-5 rounded-xl">
                                <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                    Hardware</h2>
                                <div class="h-[3px] bg-[#0181AA] w-32 rounded-full -mt-2"> </div>   
                                <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                   Conectamos dispositivos a la nube. Desarrollamos e integramos soluciones basadas 
                                   en el Internet de las cosas (Internet of Things - IoT) para proyectos de Smart Grid 
                                   a la medida. Utilizamos protocolos de comunicación que permiten la escabilidad de 
                                   nuestras soluciones y flexibilidad para la integración a diferentes industrias. 
                                   Energía inteligente.
                                </p>
                            </div>
                             
                            <div class="flex flex-col items-center justify-center">
                            </div>
                     
                    </div>
            </div>
        </section>


        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pb-10 lg:pb-20 bg-[#F5F7F9]">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 sm:gap-10">
                            
                            <div class="flex flex-col items-start justify-center order-2 lg:order-1 gap-0 lg:gap-5"> 
                                <img class="h-[350px] md:h-[400px] object-contain object-right lg:h-[450px] w-full"  src="{{asset('images/img/laptop.png')}}" />
                            </div>
                     
                            <div class="flex flex-col justify-start gap-8 xl:gap-16 order-1 lg:order-2">
                                <div class="flex flex-col justify-start gap-5">
                                    <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                        Software</h2>
                                    <div class="h-[3px] bg-[#0181AA] w-28 rounded-full -mt-4"> </div>   
                                    <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                        Software de administración de energía, ofrece un conjunto de soluciones: desde facturación, 
                                        monitoreo, eficiencia energética y respuesta a la demanda hasta análisis exhaustivos de 
                                        calidad de energía y soporte de procesos centrales de planificación y previsión para 
                                        generadores, transmisores y distribuidores de energía e también para grandes proyectos 
                                        residenciales, edificios de oficinas, centros comerciales, entre otros.
                                    </p>
                                </div>
                            </div>
                             
                           
                    </div>
            </div>
        </section>


        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mx-auto pb-10 lg:pb-20 bg-[#F5F7F9]">
                    <div class="grid grid-cols-1 gap-5 sm:gap-10">
                            
                            <div class="flex flex-col justify-start gap-8 xl:gap-16">
                                <div class="flex flex-col justify-start gap-5">
                                    <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] ">
                                        Servicios</h2>
                                    <div class="h-[3px] bg-[#0181AA] w-28 rounded-full -mt-4"> </div>   
                                    <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                        Donec non velit non elit euismod varius eu id tellus. Nunc ultrices mauris quis facilisis sollicitudin. 
                                        Vestibulum convallis diam et nulla aliquet fringilla eget ut massa. Proin ac consequat neque. 
                                        Pellentesque arcu nisi, bibendum eget gravida sed.
                                    </p>
                                </div>
                            </div>

                            <div>
                                 <div class="swiper servicios">
                                    <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="flex flex-col gap-6 bg-[#F5F7F9]">
                                                    <div class="flex justify-start items-center">
                                                        <img class="h-10 w-10 object-contain" src="{{ asset('images/img/iconocadmo2.png') }}"
                                                            alt="icono">
                                                    </div>
                                                    <div class="flex flex-col gap-4">
                                                        <h2 class="leading-none font-gotham_medium text-4xl text-[#0181AA] ">
                                                            Servicio de implementación de sistemas de submedición</h2>
                                                        <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                                            Evita pérdidas de dinero en costos operativos. Implementamos sistemas de 
                                                            medición de energía eléctrica en baja y media tensión para monitorear de 
                                                            manera segura, rápida y precisa tus consumos eléctricos. Desplegamos 
                                                            sistemas de medición inteligente que incluyen medidores descentralizados, 
                                                            medidores multi-circuitos y sistema de monitoreo bajo la modalidad Software as a Service (SaaS).</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="flex flex-col gap-6 bg-[#F5F7F9]">
                                                    <div class="flex justify-start items-center">
                                                        <img class="h-10 w-10 object-contain" src="{{ asset('images/img/iconocadmo.png') }}"
                                                            alt="icono">
                                                    </div>
                                                    <div class="flex flex-col gap-4">
                                                        <h2 class="leading-none font-gotham_medium text-4xl text-[#0181AA] ">
                                                            Consultoría Energética</h2>
                                                        <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                                            Encontramos puntos de mejora tecnológica y eléctrica en sus sistemas. Análizamos 
                                                            la correcta opción tarifaria que tengas con tu actual proveedor de servicios eléctricos. 
                                                            Validamos la necesidad de un sistema de compensación de energía reactiva.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="flex flex-col gap-6 bg-[#F5F7F9]">
                                                    <div class="flex justify-start items-center">
                                                        <img class="h-10 w-10 object-contain" src="{{ asset('images/img/iconocadmo.png') }}"
                                                            alt="icono">
                                                    </div>
                                                    <div class="flex flex-col gap-4">
                                                        <h2 class="leading-none font-gotham_medium text-4xl text-[#0181AA] ">
                                                            Consultoría Energética</h2>
                                                        <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                                                            Encontramos puntos de mejora tecnológica y eléctrica en sus sistemas. Análizamos 
                                                            la correcta opción tarifaria que tengas con tu actual proveedor de servicios eléctricos. 
                                                            Validamos la necesidad de un sistema de compensación de energía reactiva.</p>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>   
                            </div>  
                    </div>
            </div>
        </section>
    
       
        

    </main>

@section('scripts_importados')

    <script>
        var swiper = new Swiper(".servicios", {
            slidesPerView: 2,
            spaceBetween: 150,
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
                    spaceBetween: 50,
                },
                1000: {
                    slidesPerView: 1,
                    spaceBetween: 50,
                },
                1200: {

                    slidesPerView: 2,
                    spaceBetween: 100,
                },
                1400: {
                    
                    spaceBetween: 150,
                }

            },

        });
    </script>
@stop

@stop
