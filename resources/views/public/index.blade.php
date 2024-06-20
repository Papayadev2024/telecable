@extends('components.public.matrix', ['pagina'=>'index'])
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

        /* .custom-swiper-buttons .swiper-button-prev:after {
            background-image: url({{ asset('images/svg/image_32.svg') }});
        }

        .custom-swiper-buttons .swiper-button-prev:hover:after {
            background-image: url("./images/svg/image_34.svg");
        }
 */

        /* .custom-swiper-buttons .swiper-button-next:after {
            background-image: url({{ asset('images/svg/image_33.svg') }});
        }

        .custom-swiper-buttons .swiper-button-next:hover:after {
            background-image: url("./images/svg/image_35.svg");
        } */

        /* -------------- */
        .swiper-button-next {
            background-color: #FFD9C7;
            background-repeat: no-repeat;
            background-position: center;
            width: calc(var(--swiper-navigation-size) / 29 * 27) !important;
            height: 50px;
            border-radius: 50%;
            transition: background-color 0.3s ease-in; 
            background-image: url({{asset('images/svg/image_43.svg')}})
        }

        .swiper-button-next:hover{
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
            background-image: url({{asset('images/svg/image_44.svg')}})
        }

        .swiper-button-prev:hover{
            background-color: #FF5E14;
            opacity: 1;
        }
    </style>

@stop


@section('content')
    <main>

        <section class="pt-[155px]">

            <div class="swiper slider_productos">
                <div class="swiper-wrapper">
                    @foreach ($slider as $slide)
                        <div class="swiper-slide">
                            <div class="bg-[#E6E4E5] pt-20">
                                <div class="flex flex-col items-center gap-8 w-11/12 mx-auto md:max-w-[900px]">
                                    <h2
                                        class="text-[#082252] font-roboto font-bold text-text40 md:text-text52 leading-tight text-center">
                                        {{$slide->title}}</h2>
                                    {{-- <div class="w-full md:w-auto">
                                        <div
                                            class="flex flex-col items-center w-full md:w-auto md:flex-row md:justify-center md:items-center gap-10">
                                            <a href="{{route('catalogo', 0)}}"
                                                class="bg-[#FF5E14] py-3 px-6 rounded-xl text-white font-roboto font-semibold text-text16 w-full md:w-auto text-center">Productos</a>
                                            <a href="{{route('contacto')}}"
                                                class="text-[#FF5E14] font-roboto font-medium text-text16 flex justify-center items-center w-full md:w-auto text-center">
                                                <span>Contactar</span>
                                                <div class="flex justify-center items-center">
                                                    <img src="{{ asset('images/svg/image_28.svg') }}" alt="arrow">
                                                </div>
                                            </a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="flex justify-center items-center pt-10">
                                   
                                    <img src="{{ asset($slide->url_image . $slide->name_image) }}" alt="producto"
                                        class="w-full h-[600px] object-cover bg-top hidden md:block">
                                   
                                    <img src="{{ asset($slide->url_image2 . $slide->name_image2) }}" alt="producto"
                                        class="w-full object-cover block bg-top md:hidden">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination_productos !flex justify-center py-5 lg:py-0"></div>
            </div>
        </section>

        @if($benefit->isEmpty())
                
        @else
            <section>
                <div class="flex flex-col gap-10 w-11/12 mx-auto pt-10 pb-20">
                    <h2
                        class="text-[#082252] font-roboto font-bold text-text32 md:text-text40 leading-tight text-left md:text-center w-full md:max-w-[1064px] mx-auto">
                        Especialistas en tratamiento de aguas. Suministro de productos químicos e instrumentos de medición.</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    @foreach ($benefit as $beneficios)
                        <div class="flex flex-col gap-5 bg-[#F7F8F8] p-4 rounded-xl">
                            <div class="flex justify-start items-center">
                                <img src="{{ asset('images/svg/image_7.svg') }}"
                                    alt="Laboratorio de Investigación y Desarrollo">
                            </div>
                            <div class="flex flex-col gap-2">
                                <p class="font-roboto font-bold text-text12 text-[#0C4AC3] uppercase">{{$beneficios->descripcionshort}}</p>
                                <h2 class="leading-tight font-roboto font-bold text-text28 text-[#082252]">{{$beneficios->titulo}}</h2>
                            </div>
                            <p class="text-[#082252] font-roboto font-normal text-text18">{{$beneficios->descripcion}}</p>
                        </div>       
                    @endforeach
                                
                    </div>
                </div>
            </section>
        @endif
       
        @if ($category->isEmpty())
            
        @else
        <section class="bg-[#F7F8F8]">
            <div class="flex flex-col gap-8 w-11/12 mx-auto py-20">

                <div class="flex flex-col gap-2">
                    <h4 class="font-roboto font-bold text-text48 md:text-text52 text-[#082252] leading-tight">Nuestros
                        productos</h4>
                    <h3 class="text-[#082252] font-roboto font-normal text-text22">Suministro de productos químicos e
                        instrumentos de medición.</h3>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                   @foreach ($category as $categorias)
                        <div
                        class="flex flex-col gap-5 py-6 px-4 md:p-6 bg-white hover:bg-[#0C4AC3] group md:duration-300 rounded-xl">
                            <div class="flex justify-center items-center">
                                <a href="{{route('catalogo', $categorias->id)}}"><img src="{{ asset($categorias->url_image . $categorias->name_image) }}"
                                        alt="Tratamiento de Agua"></a>
                            </div>
                            <div class="flex flex-col gap-2">
                                <a href="{{route('catalogo', $categorias->id)}}">
                                    <h2
                                        class="text-[#082252] font-roboto font-bold text-text32 group-hover:text-white md:duration-300">
                                        {{$categorias->name}}</h2>
                                </a>
                                <p
                                    class="text-[#082252] font-roboto font-normal text-text18 group-hover:text-white md:duration-300">
                                    {{$categorias->description}}
                                </p>
                            </div>
                        </div>
                   @endforeach 
                </div>
            </div>
        </section>
        @endif    
        
        @if ($logos->isEmpty())
            
        @else
            <section class="py-20 bg-[#082252]">
                <div class="max-w-[700px] mx-auto pb-10 w-11/12">
                    <h2 class="text-white font-roboto font-bold text-text32 leading-tight text-center">
                        Marcas que comercializamos
                    </h2>
                </div>

                <div class="w-full mx-auto">
                    <div class="swiper logos">
                        <div class="swiper-wrapper items-center">
                        @foreach ($logos as $logo)
                            <div class="swiper-slide">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset($logo->url_image . $logo->name_image) }}" alt="logo" />
                                </div>
                            </div>
                        @endforeach 
                        </div>
                    </div>
                </div>
            </section>
        @endif
        

        @if ($testimonie->isEmpty())
            
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
                                    <p class="text-[#082252] font-roboto font-normal text-text20 text-center">{{$testimonios->testimonie}}
                                    </p>

                                    <div class="flex flex-col gap-2 items-center">
                                        <p class="text-[#082252] font-roboto font-bold text-text20 text-center">{{$testimonios->name}}</p>
                                        <p class="uppercase text-[#0C4AC3] font-roboto font-medium text-text12 text-center">
                                            {{$testimonios->ocupation}}</p>
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
        @endif
       
  
        @if ($posts->isEmpty())
            
        @else
        <section class="hidden md:block">
            <div class="flex flex-col gap-8 w-11/12 mx-auto pb-20">
                <div class="flex justify-between items-center">

                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#082252] font-roboto font-bold text-text52 leading-tight">Últimas publicaciones
                        </h2>
                        <p class="text-[#082252] font-roboto font-normal text-text22">Suministro de productos químicos e
                            instrumentos de medición.</p>
                    </div>

                    <div class="flex justify-center items-center">
                        <a href="{{route('blog', 0)}}"
                            class="text-white py-4 px-6 bg-[#FF5E14] rounded-xl font-roboto font-semibold text-center">Ver
                            más publicaciones</a>
                    </div>

                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                    @foreach ($posts->take(3) as $post)
                    <div class="flex flex-col gap-5">
                        <div class="flex flex-col gap-2">
                            <div class="flex justify-center items-center">
                                <a href="{{route('detalleBlog', $post->id)}}" class="w-full"><img src="{{ asset($post->url_image.$post->name_image) }}"
                                        class="w-full object-cover rounded-xl" alt="blog"></a>
                            </div>
                            <h3 class="uppercase text-[#FF5E14] font-roboto font-bold text-text12">{{$post->categories->name}}</h3>
                            <a href="{{route('detalleBlog', $post->id)}}">
                                <h2 class="text-[#082252] font-roboto font-bold text-text24 leading-tight">{{$post->title}}</h2>
                            </a>
                            <p class="text-[#082252] font-roboto font-normal text-text16"> {{ Str::limit($post->extract, 250) }}</p>
                        </div>

                        <div class="flex justify-start items-center gap-2">
                            <p class="text-[#0C4AC3] font-roboto font-normal text-text14">Publicado {{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('images/svg/image_10.svg') }}" alt="point">
                            </div>
                           
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        @endif
        

        <section class="bg-[#0C4AC3]">
            <div class="grid grid-cols-1 md:grid-cols-2  relative overflow-hidden">
                <div class="flex flex-col gap-5 justify-center w-11/12 mx-auto z-[50] md:max-w-[620px] pt-10">
                    <div class="flex flex-col gap-2">
                        <h3 class="font-roboto font-bold text-white text-text40 md:text-text64 leading-tight">Descarga
                            nuestros Catálogos</h3>
                        <p class="font-roboto font-normal text-white text-text18 ">Duis aute irure dolor in reprehenderit
                            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="flex justify-start items-center">
                        <a href="{{route('descargables', 0)}}"
                            class="text-white font-roboto font-semibold text-text16 bg-[#0C4AC3] rounded-xl py-4 px-6">Descargar
                            Catálogos</a>
                    </div>
                </div>

                <div class="flex justify-center items-center w-11/12 mx-auto z-[50] py-20">
                    <img src="{{ asset('images/img/image_17.png') }}" alt="catalogo">
                </div>

                <div class="flex justify-center items-center absolute bottom-0 md:right-0 z-[25]">
                    <img src="{{ asset('images/img/image_16.png') }}" alt="shadow" class="hidden md:block">
                    <img src="{{ asset('images/img/image_18.png') }}" alt="shadow" class="block md:hidden">
                </div>
            </div>
        </section>

        <section>
            <div class="relative w-11/12 mx-auto md:w-full bg-[#F5F5F5] md:bg-transparent my-20 md:my-0 py-10 px-5 md:p-0">
                <img src="{{ asset('images/img/image_19.png') }}" alt="fondo"
                    class="w-full h-[877px] object-cover hidden md:block">

                <div
                    class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-32 w-full md:w-11/12 mx-auto relative md:absolute md:transform md:-translate-x-1/2 md:-translate-y-1/2 md:left-1/2 md:top-1/2">
                    <div class="flex flex-col gap-10">
                        <div class="flex flex-col gap-2">
                            <h4
                                class="text-[#082252] font-roboto font-bold text-text48 md:text-text52 leading-tight w-full md:max-w-[590px]">
                                Escribenos para ayudarte</h4>
                            <p class="font-roboto text-text16 text-[#082252] font-normal">Si deseas contactarte con
                                nosotros, puedes comunicarte con alguno de nuestros representantes,
                                los cuales solucionarán cualquier duda
                            </p>
                        </div>

                        <form  id="formContactos">
                            @csrf
                            <div class="flex flex-col gap-5">
                                <div class="relative w-full"  >
                                    <input 
                                        required name="full_name" id="fullNameContacto" type="text" placeholder="Nombre completo"
                                        class="w-full py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                </div>

                                <div class="relative w-full" >
                                    <input  id="telefonoContacto" name="phone" placeholder="Teléfono" type="tel" maxlength="12" required
                                        class="w-full py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                </div>

                                <div class="relative w-full" >
                                    <input type="email" name="email" placeholder="E-mail" required id="emailContacto"
                                        class="w-full py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                </div>

                                <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Inicio" />

                                <div class="relative w-full" >
                                    <textarea name="message" id="message" rows="3" cols="30"
                                        class="w-full py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]"
                                        placeholder="Mensaje"></textarea>
                                </div>
                                <input type="hidden" name="client_width" id="anchodispositivo">
                                <input type="hidden" name="client_height" id="largodispositivo">
                                <input type="hidden" name="client_latitude" id="latitud">
                                <input type="hidden" name="client_longitude" id="longitud">
                                <input type="hidden" name="client_system" id="sistema">
                                <div class="flex justify-center items-center py-5" 
                                    >
                                    <button type="submit"
                                        class="text-text18 font-roboto font-semibold text-white bg-[#0C4AC3] md:bg-[#FF5E14] py-4 px-6 w-full text-center rounded-lg">Enviar
                                        solicitud</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div   class="flex flex-col gap-10">
                        <div class="flex flex-col gap-1">
                            <h2 class="font-semibold font-roboto text-[#082252] text-text32">
                                Datos de contacto
                            </h2>
                            <p class="font-robot font-normal text-[#082252] text-text18">
                                Donec ac nisl ut mauris facilisis finibus. Nulla sed ultrices enim, nec consectetur tortor.
                            </p>
                        </div>

                        <div class="flex flex-col gap-10 bg-white md:bg-transparent rounded-xl md:rounded-none p-6 md:p-0">
                            <div class="flex gap-2"  >
                                <div>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M12.0004 15.2734L11.3442 16.028C11.7205 16.3552 12.2803 16.3552 12.6566 16.028L12.0004 15.2734ZM6.87357 16.1277C7.40485 15.9769 7.71323 15.4239 7.56235 14.8926C7.41148 14.3613 6.85849 14.0529 6.32721 14.2038L6.87357 16.1277ZM17.6736 14.2038C17.1423 14.0529 16.5893 14.3613 16.4384 14.8926C16.2876 15.4239 16.5959 15.9769 17.1272 16.1277L17.6736 14.2038ZM15.8004 7.96909C15.8004 8.51366 15.5851 9.18984 15.1709 9.9551C14.764 10.707 14.2089 11.4654 13.6333 12.1536C13.0605 12.8385 12.4849 13.4332 12.0511 13.8575C11.8348 14.0691 11.6553 14.2368 11.5311 14.3506C11.469 14.4075 11.4209 14.4508 11.3889 14.4793C11.373 14.4935 11.361 14.504 11.3535 14.5107C11.3497 14.514 11.347 14.5164 11.3455 14.5177C11.3447 14.5184 11.3442 14.5188 11.344 14.519C11.3439 14.5191 11.3438 14.5192 11.3439 14.5191C11.3439 14.5191 11.344 14.519 11.344 14.519C11.3441 14.5189 11.3442 14.5188 12.0004 15.2734C12.6566 16.028 12.6567 16.0279 12.6569 16.0278C12.657 16.0277 12.6572 16.0275 12.6573 16.0274C12.6577 16.0271 12.6581 16.0267 12.6585 16.0263C12.6595 16.0255 12.6607 16.0244 12.6623 16.0231C12.6653 16.0204 12.6695 16.0167 12.6748 16.0121C12.6854 16.0027 12.7005 15.9894 12.7197 15.9723C12.758 15.9381 12.813 15.8887 12.8822 15.8253C13.0204 15.6986 13.216 15.5158 13.4497 15.2872C13.9159 14.8311 14.5403 14.1867 15.1675 13.4367C15.7919 12.6901 16.4368 11.8182 16.9299 10.907C17.4157 10.0092 17.8004 8.98974 17.8004 7.96909H15.8004ZM12.0004 15.2734C12.6566 14.5188 12.6567 14.5189 12.6568 14.519C12.6568 14.519 12.6569 14.5191 12.6569 14.5191C12.6569 14.5192 12.6569 14.5191 12.6568 14.519C12.6566 14.5188 12.6561 14.5184 12.6553 14.5177C12.6537 14.5164 12.6511 14.514 12.6473 14.5107C12.6397 14.504 12.6278 14.4935 12.6119 14.4793C12.5799 14.4508 12.5317 14.4075 12.4697 14.3506C12.3454 14.2368 12.166 14.0691 11.9497 13.8575C11.5159 13.4332 10.9403 12.8385 10.3675 12.1536C9.7919 11.4654 9.23676 10.707 8.82986 9.9551C8.41573 9.18984 8.20039 8.51366 8.20039 7.96909H6.20039C6.20039 8.98974 6.58506 10.0092 7.07092 10.907C7.56403 11.8182 8.20888 12.6901 8.83331 13.4367C9.46052 14.1867 10.0849 14.8311 10.5511 15.2872C10.7848 15.5158 10.9803 15.6986 11.1186 15.8253C11.1878 15.8887 11.2428 15.9381 11.2811 15.9723C11.3003 15.9894 11.3153 16.0027 11.326 16.0121C11.3313 16.0167 11.3355 16.0204 11.3385 16.0231C11.34 16.0244 11.3413 16.0255 11.3422 16.0263C11.3427 16.0267 11.3431 16.0271 11.3434 16.0274C11.3436 16.0275 11.3438 16.0277 11.3439 16.0278C11.3441 16.0279 11.3442 16.028 12.0004 15.2734ZM8.20039 7.96909C8.20039 5.94864 9.88088 4.27344 12.0004 4.27344V2.27344C8.81797 2.27344 6.20039 4.80286 6.20039 7.96909H8.20039ZM12.0004 4.27344C14.1199 4.27344 15.8004 5.94864 15.8004 7.96909H17.8004C17.8004 4.80286 15.1828 2.27344 12.0004 2.27344V4.27344ZM20.6004 18.4734C20.6004 18.6774 20.5054 18.9622 20.1442 19.318C19.7794 19.6774 19.2003 20.047 18.404 20.3788C16.8158 21.0406 14.5523 21.4734 12.0004 21.4734V23.4734C14.7504 23.4734 17.2869 23.0109 19.1732 22.2249C20.1142 21.8329 20.9409 21.3406 21.5478 20.7428C22.1581 20.1416 22.6004 19.3741 22.6004 18.4734H20.6004ZM12.0004 21.4734C9.44845 21.4734 7.18502 21.0406 5.59678 20.3788C4.80048 20.047 4.22135 19.6774 3.85659 19.318C3.49535 18.9622 3.40039 18.6774 3.40039 18.4734H1.40039C1.40039 19.3741 1.84269 20.1416 2.45302 20.7428C3.05983 21.3406 3.88659 21.8329 4.82755 22.2249C6.71383 23.0109 9.25039 23.4734 12.0004 23.4734V21.4734ZM3.40039 18.4734C3.40039 18.2225 3.55143 17.8353 4.16014 17.3661C4.75881 16.9046 5.67899 16.467 6.87357 16.1277L6.32721 14.2038C4.98646 14.5846 3.80664 15.1134 2.93915 15.782C2.08169 16.443 1.40039 17.3496 1.40039 18.4734H3.40039ZM17.1272 16.1277C18.3218 16.467 19.242 16.9046 19.8406 17.3661C20.4493 17.8353 20.6004 18.2225 20.6004 18.4734H22.6004C22.6004 17.3496 21.9191 16.443 21.0616 15.782C20.1941 15.1134 19.0143 14.5846 17.6736 14.2038L17.1272 16.1277Z"
                                            fill="#FF5E14" class="h-7 w-7 fill-fillAzul md:fill-fillNaranja" />
                                    </svg>

                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="font-semibold text-[#082252] font-roboto text-text18 leading-none">Dirección
                                    </p>
                                    <p class="font-roboto text-text14 text-[#082252] font-normal">
                                        {{$general[0]->address}}, {{$general[0]->inside}}, {{$general[0]->district}} - {{$general[0]->city}}
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-2"  >
                                <div>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.9333 20.2751L20.6341 20.9885C20.7159 20.9082 20.7833 20.8143 20.8333 20.711L19.9333 20.2751ZM18.4907 21.7467L19.2204 22.4305C19.2313 22.4189 19.2419 22.407 19.2523 22.3949L18.4907 21.7467ZM16.5581 22.4689L16.6245 21.4711L16.6218 21.4709L16.5581 22.4689ZM12.9859 21.3994L12.5509 22.2998L12.5552 22.3019L12.9859 21.3994ZM6.22631 16.1161L5.45734 16.7554L5.4604 16.759L6.22631 16.1161ZM2.92893 10.6363L3.86653 10.2885L3.86549 10.2857L2.92893 10.6363ZM2.416 7.77522L1.41964 7.68989L1.41936 7.69336L2.416 7.77522ZM3.048 6.41783L3.75438 7.12566H3.75438L3.048 6.41783ZM4.60968 4.85934L3.92599 4.12957C3.91831 4.13677 3.91074 4.14408 3.90329 4.15151L4.60968 4.85934ZM5.97443 4.85477L5.26804 5.5626L5.97443 4.85477ZM5.98817 4.86848L5.28178 5.57631C5.28978 5.58429 5.29791 5.59213 5.30617 5.59984L5.98817 4.86848ZM6.81251 5.68657L6.0948 6.38292L6.09498 6.3831L6.81251 5.68657ZM7.24758 6.1299L6.53039 6.82678C6.53397 6.83045 6.53757 6.8341 6.5412 6.83773L7.24758 6.1299ZM8.49784 7.3776L7.79146 8.08543L8.49784 7.3776ZM8.10399 9.18745L7.41013 8.46734C7.40309 8.47412 7.39616 8.481 7.38932 8.48798L8.10399 9.18745ZM7.62306 9.63541L6.95627 8.89016C6.94273 8.90227 6.92953 8.91475 6.91667 8.92758L7.62306 9.63541ZM7.60016 9.65826L8.30654 10.3661C8.38267 10.2901 8.44604 10.2024 8.49422 10.1062L7.60016 9.65826ZM7.36201 10.6957L6.40861 10.9974C6.41021 11.0025 6.41185 11.0075 6.41353 11.0125L7.36201 10.6957ZM7.37575 10.7369L6.42726 11.0537C6.43464 11.0758 6.44279 11.0976 6.45169 11.1191L7.37575 10.7369ZM8.855 13.1454L8.07 13.7649C8.09444 13.7959 8.12069 13.8254 8.14861 13.8533L8.855 13.1454ZM8.85958 13.15L9.63534 12.519C9.61355 12.4922 9.5904 12.4666 9.56596 12.4422L8.85958 13.15ZM12.9263 16.8428L13.4611 15.9978L13.4601 15.9972L12.9263 16.8428ZM13.943 17.3913L13.4165 18.2414C13.4425 18.2575 13.4692 18.2724 13.4966 18.2861L13.943 17.3913ZM13.998 17.4233L14.4445 16.5285L13.998 17.4233ZM16.0452 16.3263L15.3388 15.6185L16.0452 16.3263ZM17.3962 16.3172L16.6579 16.9917C16.6683 17.003 16.6789 17.0142 16.6898 17.025L17.3962 16.3172ZM17.4054 16.3263L18.1117 15.6185L18.1117 15.6185L17.4054 16.3263ZM19.9288 18.8446L19.2224 19.5524L19.2258 19.5558L19.9288 18.8446ZM13.0368 6.21312C12.4921 6.12184 11.9765 6.48939 11.8852 7.03408C11.7939 7.57877 12.1615 8.09433 12.7062 8.18561L13.0368 6.21312ZM16.6855 12.1587C16.7792 12.703 17.2963 13.0683 17.8406 12.9746C18.3849 12.8809 18.7502 12.3638 18.6565 11.8195L16.6855 12.1587ZM13.2215 2.28745C12.6769 2.19532 12.1608 2.56208 12.0687 3.10663C11.9766 3.65117 12.3433 4.1673 12.8879 4.25943L13.2215 2.28745ZM18.6831 6.18474L19.3895 5.47691L19.3885 5.47587L18.6831 6.18474ZM20.6145 11.9692C20.707 12.5137 21.2234 12.8801 21.7679 12.7876C22.3123 12.6951 22.6788 12.1787 22.5863 11.6342L20.6145 11.9692ZM19.9333 20.2751C19.2326 19.5617 19.2326 19.5617 19.2326 19.5617C19.2326 19.5617 19.2326 19.5617 19.2325 19.5617C19.2325 19.5618 19.2324 19.5619 19.2323 19.5619C19.2322 19.5621 19.2319 19.5623 19.2316 19.5626C19.231 19.5632 19.2302 19.5641 19.229 19.5652C19.2267 19.5675 19.2234 19.5708 19.219 19.5751C19.2102 19.5837 19.1974 19.5963 19.1811 19.6124C19.1484 19.6446 19.1015 19.6909 19.0444 19.7474C18.9303 19.8603 18.7749 20.0147 18.6103 20.1798C18.2964 20.4947 17.9027 20.8948 17.7292 21.0986L19.2523 22.3949C19.3627 22.2651 19.6903 21.9294 20.0268 21.5918C20.1873 21.4307 20.3393 21.2797 20.4513 21.1689C20.5073 21.1135 20.5531 21.0682 20.5849 21.0369C20.6008 21.0212 20.6132 21.0091 20.6215 21.0008C20.6257 20.9967 20.6289 20.9936 20.631 20.9915C20.6321 20.9905 20.6328 20.9897 20.6334 20.9892C20.6336 20.989 20.6338 20.9888 20.6339 20.9887C20.634 20.9886 20.634 20.9886 20.634 20.9886C20.6341 20.9885 20.6341 20.9885 20.6341 20.9885C20.6341 20.9885 20.6341 20.9885 19.9333 20.2751ZM17.7611 21.063C17.4959 21.346 17.2191 21.4734 16.7688 21.4734V23.4734C17.7473 23.4734 18.5605 23.1347 19.2204 22.4305L17.7611 21.063ZM16.7688 21.4734C16.6935 21.4734 16.6542 21.473 16.6245 21.4711L16.4917 23.4667C16.5994 23.4738 16.7066 23.4734 16.7688 23.4734V21.4734ZM16.6218 21.4709C15.4621 21.3969 14.3424 20.9388 13.4167 20.4969L12.5552 22.3019C13.5255 22.765 14.9338 23.3672 16.4944 23.4668L16.6218 21.4709ZM13.4209 20.499C10.9586 19.3094 8.79461 17.6203 6.99223 15.4731L5.4604 16.759C7.44084 19.1183 9.82902 20.9848 12.5509 22.2998L13.4209 20.499ZM6.99527 15.4768C5.49023 13.6665 4.51104 12.0264 3.86653 10.2885L1.99133 10.984C2.72988 12.9755 3.83904 14.8089 5.45735 16.7554L6.99527 15.4768ZM3.86549 10.2857C3.4712 9.23222 3.35994 8.49879 3.41265 7.85708L1.41936 7.69336C1.33467 8.72439 1.53484 9.76426 1.99237 10.9868L3.86549 10.2857ZM3.41235 7.86055C3.43805 7.56058 3.5417 7.3379 3.75438 7.12566L2.34162 5.71C1.79407 6.25643 1.48555 6.9204 1.41965 7.68989L3.41235 7.86055ZM3.75438 7.12566L5.31606 5.56717L3.90329 4.15151L2.34162 5.71L3.75438 7.12566ZM5.29337 5.58911C5.34439 5.54132 5.37474 5.52559 5.37938 5.52341C5.38185 5.52225 5.35528 5.53485 5.30579 5.53485V3.53485C4.73564 3.53485 4.26501 3.81195 3.92599 4.12957L5.29337 5.58911ZM5.30579 5.53485C5.27654 5.53485 5.25244 5.53032 5.23577 5.52554C5.21991 5.52099 5.21241 5.51672 5.21338 5.51725C5.21449 5.51786 5.22086 5.52155 5.23182 5.53014C5.24265 5.53863 5.25497 5.54956 5.26804 5.5626L6.68081 4.14694C6.47181 3.93837 5.99483 3.53485 5.30579 3.53485V5.53485ZM5.26804 5.5626C5.27032 5.56488 5.27261 5.56715 5.2749 5.56944C5.27718 5.57172 5.27948 5.57402 5.28178 5.57631L6.69455 4.16065C6.69227 4.15838 6.68999 4.1561 6.6877 4.15382C6.68541 4.15153 6.68311 4.14924 6.68081 4.14694L5.26804 5.5626ZM5.30617 5.59984C5.56621 5.84233 5.81734 6.09695 6.0948 6.38292L7.53022 4.99023C7.24896 4.70034 6.96884 4.41565 6.67016 4.13713L5.30617 5.59984ZM6.09498 6.3831C6.16924 6.4596 6.24419 6.53557 6.31644 6.60881C6.38961 6.68298 6.46021 6.75454 6.53039 6.82678L7.96477 5.43302C7.88841 5.35443 7.81246 5.27746 7.74022 5.20423C7.66707 5.13008 7.59776 5.0598 7.53004 4.99005L6.09498 6.3831ZM6.5412 6.83773L7.79146 8.08543L9.20422 6.66977L7.95397 5.42207L6.5412 6.83773ZM7.79146 8.08543C7.82522 8.11913 7.84791 8.1457 7.86256 8.16487C7.87717 8.18399 7.88214 8.1936 7.8821 8.19351C7.88187 8.19307 7.87649 8.18247 7.87128 8.16241C7.86869 8.15246 7.86631 8.14077 7.86459 8.12758C7.86287 8.11436 7.86193 8.1004 7.86193 8.086C7.86193 8.0716 7.86287 8.05765 7.86459 8.04443C7.86631 8.03123 7.86869 8.01955 7.87128 8.0096C7.87649 7.98953 7.88187 7.97894 7.8821 7.97849C7.88214 7.9784 7.87717 7.98801 7.86256 8.00713C7.84791 8.0263 7.82522 8.05288 7.79146 8.08658L9.20422 9.50224C9.54192 9.16523 9.86193 8.69218 9.86193 8.086C9.86193 7.47982 9.54192 7.00678 9.20422 6.66977L7.79146 8.08543ZM7.79146 8.08658C7.64111 8.23662 7.53556 8.34648 7.41013 8.46734L8.79784 9.90756C8.93804 9.77248 9.08895 9.61727 9.20422 9.50224L7.79146 8.08658ZM7.38932 8.48798C7.28792 8.59159 7.2417 8.63927 7.20918 8.67238C7.17137 8.71086 7.1976 8.68217 7.23508 8.65148C7.24122 8.64645 7.25958 8.63206 7.23345 8.65246C7.21739 8.665 7.19821 8.68031 7.17325 8.70104C7.12609 8.74022 7.06003 8.79732 6.95627 8.89016L8.28984 10.3807C8.3853 10.2952 8.43088 10.2564 8.45114 10.2395C8.45988 10.2323 8.46336 10.2296 8.46432 10.2288C8.46819 10.2258 8.46497 10.2283 8.47339 10.2218C8.4786 10.2178 8.48944 10.2093 8.50227 10.1988C8.56209 10.1498 8.6098 10.1005 8.63598 10.0739C8.66744 10.0419 8.72771 9.97984 8.81865 9.88692L7.38932 8.48798ZM6.91667 8.92758C6.9435 8.9008 6.96586 8.88187 6.97443 8.8747C6.97776 8.87191 6.98154 8.86882 6.97807 8.87167C6.97664 8.87284 6.96899 8.87911 6.95988 8.88691C6.92767 8.91446 6.79985 9.02319 6.7061 9.21031L8.49422 10.1062C8.40505 10.2842 8.2841 10.3861 8.2599 10.4068C8.25601 10.4101 8.25288 10.4127 8.25098 10.4143C8.25 10.4151 8.24922 10.4157 8.24873 10.4162C8.24825 10.4165 8.24792 10.4168 8.24791 10.4168C8.24657 10.4179 8.25254 10.413 8.25809 10.4084C8.27109 10.3975 8.29803 10.3746 8.32944 10.3432L6.91667 8.92758ZM6.89377 8.95043C6.54616 9.29733 6.35721 9.69707 6.30914 10.1115C6.26422 10.4987 6.35267 10.8206 6.40861 10.9974L8.31542 10.394C8.30927 10.3746 8.30508 10.3599 8.3021 10.3481C8.29914 10.3363 8.29773 10.3288 8.29707 10.3246C8.2958 10.3164 8.29789 10.3241 8.29582 10.3419C8.29479 10.3508 8.29291 10.3605 8.29002 10.3705C8.28712 10.3804 8.28386 10.3882 8.28127 10.3935C8.27872 10.3986 8.27789 10.3991 8.28088 10.395C8.28396 10.3908 8.29167 10.3809 8.30654 10.3661L6.89377 8.95043ZM6.41353 11.0125C6.41582 11.0194 6.41811 11.0263 6.4204 11.0331C6.42269 11.04 6.42498 11.0468 6.42726 11.0537L8.32424 10.42C8.32195 10.4132 8.31966 10.4063 8.31737 10.3995C8.31508 10.3926 8.31279 10.3858 8.3105 10.3789L6.41353 11.0125ZM6.45169 11.1191C6.8222 12.0148 7.336 12.8348 8.07 13.7649L9.63999 12.5259C8.98176 11.6919 8.57963 11.0311 8.29982 10.3546L6.45169 11.1191ZM8.14861 13.8533L8.15319 13.8578L9.56596 12.4422L9.56138 12.4376L8.14861 13.8533ZM8.08381 13.781C9.4058 15.4062 10.8177 16.6945 12.3926 17.6885L13.4601 15.9972C12.0949 15.1356 10.8413 14.0016 9.63534 12.519L8.08381 13.781ZM12.3916 17.6878C12.6288 17.838 12.8659 17.9554 13.0432 18.0438L13.9361 16.2543C13.747 16.1599 13.5994 16.0853 13.4611 15.9978L12.3916 17.6878ZM13.0432 18.0438C13.2188 18.1315 13.3303 18.188 13.4165 18.2414L14.4696 16.5411C14.2901 16.43 14.0903 16.3312 13.9361 16.2543L13.0432 18.0438ZM13.4966 18.2861C13.4724 18.274 13.4547 18.2637 13.447 18.2592C13.4401 18.2551 13.435 18.2518 13.4413 18.2558C13.4442 18.2576 13.4585 18.2665 13.4745 18.276C13.4914 18.286 13.5182 18.3014 13.5515 18.3181L14.4445 16.5285C14.4686 16.5405 14.4863 16.5508 14.494 16.5554C14.5009 16.5595 14.506 16.5627 14.4997 16.5588C14.4969 16.557 14.4826 16.548 14.4665 16.5385C14.4497 16.5285 14.4228 16.5131 14.3895 16.4965L13.4966 18.2861ZM13.5515 18.3181C13.8271 18.4556 14.1255 18.5375 14.4514 18.5375V16.5375C14.4542 16.5375 14.4578 16.5377 14.4618 16.5382C14.4658 16.5387 14.4687 16.5393 14.4702 16.5397C14.4737 16.5406 14.4659 16.5392 14.4445 16.5285L13.5515 18.3181ZM14.4514 18.5375C15.2657 18.5375 15.7583 18.0254 15.8539 17.93L14.4411 16.5143C14.4315 16.524 14.4274 16.528 14.423 16.5321C14.4191 16.5359 14.4159 16.5387 14.4131 16.5411C14.4072 16.5461 14.4039 16.5481 14.4034 16.5484C14.4031 16.5486 14.408 16.5457 14.4177 16.5427C14.4226 16.5412 14.4283 16.5398 14.4345 16.5389C14.4408 16.5379 14.4466 16.5375 14.4514 16.5375V18.5375ZM15.8539 17.93L16.7516 17.0342L15.3388 15.6185L14.4411 16.5143L15.8539 17.93ZM16.7516 17.0342C16.7684 17.0174 16.785 17.0024 16.8006 16.99C16.8164 16.9775 16.8274 16.9705 16.8329 16.9674C16.8383 16.9643 16.8334 16.9679 16.818 16.9725C16.8018 16.9774 16.7738 16.9835 16.7367 16.9835V14.9835C16.0338 14.9835 15.5395 15.4182 15.3388 15.6185L16.7516 17.0342ZM16.7367 16.9835C16.665 16.9835 16.624 16.9606 16.6224 16.9597C16.6211 16.959 16.6251 16.9611 16.6332 16.9679C16.6412 16.9745 16.6498 16.9828 16.6579 16.9917L18.1345 15.6427C17.9186 15.4064 17.4363 14.9835 16.7367 14.9835V16.9835ZM16.6898 17.025C16.6921 17.0273 16.6933 17.0285 16.6945 17.0297C16.6956 17.0308 16.6967 17.0319 16.699 17.0342L18.1117 15.6185C18.1094 15.6162 18.1082 15.615 18.1071 15.6138C18.1059 15.6127 18.1048 15.6116 18.1026 15.6094L16.6898 17.025ZM16.699 17.0342L19.2224 19.5524L20.6351 18.1368L18.1117 15.6185L16.699 17.0342ZM19.2258 19.5558C19.1516 19.4825 19.139 19.4091 19.1388 19.4078C19.1387 19.4077 19.1392 19.4109 19.1395 19.4179C19.1397 19.425 19.1397 19.4347 19.139 19.4474C19.1376 19.4735 19.1336 19.5062 19.1261 19.545C19.1107 19.6246 19.0856 19.7045 19.062 19.7678C19.0507 19.798 19.0411 19.821 19.0353 19.8343C19.0325 19.8408 19.0307 19.8448 19.0302 19.8457C19.03 19.8462 19.0301 19.8459 19.0306 19.8449C19.0309 19.8443 19.0312 19.8436 19.0317 19.8426C19.0319 19.8422 19.0322 19.8416 19.0325 19.841C19.0326 19.8408 19.0327 19.8405 19.0329 19.8401C19.033 19.84 19.0331 19.8397 19.0331 19.8397C19.0332 19.8394 19.0334 19.8392 19.9333 20.2751C20.8333 20.711 20.8334 20.7108 20.8336 20.7105C20.8336 20.7104 20.8337 20.7102 20.8338 20.71C20.834 20.7096 20.8342 20.7092 20.8344 20.7088C20.8348 20.708 20.8352 20.7071 20.8357 20.7062C20.8366 20.7043 20.8376 20.7022 20.8387 20.6998C20.841 20.695 20.8436 20.6893 20.8467 20.6826C20.8529 20.6692 20.8607 20.6519 20.8697 20.6312C20.8876 20.59 20.9108 20.534 20.936 20.4665C20.9852 20.3344 21.0474 20.144 21.0898 19.9243C21.1597 19.5626 21.2484 18.7428 20.6317 18.1333L19.2258 19.5558ZM12.7062 8.18561C13.697 8.35168 14.599 8.8188 15.3251 9.54338L16.7378 8.12772C15.7236 7.11557 14.4457 6.44925 13.0368 6.21312L12.7062 8.18561ZM15.3251 9.54338C16.0493 10.2661 16.5146 11.1661 16.6855 12.1587L18.6565 11.8195C18.4152 10.4172 17.7539 9.14169 16.7378 8.12772L15.3251 9.54338ZM12.8879 4.25943C14.8148 4.58543 16.574 5.4968 17.9778 6.89362L19.3885 5.47587C17.6964 3.79227 15.5628 2.68356 13.2215 2.28745L12.8879 4.25943ZM17.9767 6.89257C19.3792 8.29216 20.2879 10.0463 20.6145 11.9692L22.5863 11.6342C22.1893 9.29754 21.0829 7.16688 19.3895 5.47691L17.9767 6.89257Z"
                                            fill="#FF5E14" class="h-7 w-7 fill-fillAzul md:fill-fillNaranja" />
                                    </svg>

                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="font-semibold text-[#082252] font-roboto text-text18 leading-none">Número de
                                        Teléfono</p>
                                    <p class="font-roboto text-text14 text-[#082252] font-normal">
                                        @if (!is_null($general[0]->cellphone) && !is_null($general[0]->office_phone))
                                            {{$general[0]->cellphone}} / {{$general[0]->office_phone}}
                                        @elseif(!is_null($general[0]->cellphone))
                                            {{$general[0]->cellphone}}
                                        @elseif(!is_null($general[0]->office_phone))
                                            {{$general[0]->office_phone}}
                                        @else

                                        @endif
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-2"  >
                                <div>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4.66576 6.15882C4.20119 5.86017 3.58247 5.99467 3.28382 6.45924C2.98517 6.92381 3.11967 7.54253 3.58424 7.84118L4.66576 6.15882ZM12 12.0625L11.4592 12.9037C11.7793 13.1094 12.1883 13.1157 12.5145 12.92L12 12.0625ZM20.952 7.85749C21.4256 7.57334 21.5791 6.95908 21.295 6.4855C21.0108 6.01192 20.3966 5.85836 19.923 6.14251L20.952 7.85749ZM4 16.9293V8.125H2V16.9293H4ZM5.25 6.875H18.75V4.875H5.25V6.875ZM20 8.125V16.9293H22V8.125H20ZM20 16.9293C20 17.6197 19.4404 18.1794 18.75 18.1794V20.1794C20.5449 20.1794 22 18.7243 22 16.9293H20ZM18.75 6.875C19.4404 6.875 20 7.43464 20 8.125H22C22 6.33008 20.5449 4.875 18.75 4.875V6.875ZM4 8.125C4 7.43464 4.55965 6.875 5.25 6.875V4.875C3.45507 4.875 2 6.33008 2 8.125H4ZM5.25 18.1794C4.55964 18.1794 4 17.6197 4 16.9293H2C2 18.7243 3.45507 20.1794 5.25 20.1794V18.1794ZM3.58424 7.84118L11.4592 12.9037L12.5408 11.2213L4.66576 6.15882L3.58424 7.84118ZM12.5145 12.92L20.952 7.85749L19.923 6.14251L11.4855 11.205L12.5145 12.92ZM18.75 18.1794H5.25V20.1794H18.75V18.1794Z"
                                            fill="#FF5E14" class="h-7 w-7 fill-fillAzul md:fill-fillNaranja" />
                                    </svg>

                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="font-semibold text-[#082252] font-roboto text-text18 leading-none">Correo
                                        Electrónico</p>
                                    <p class="font-roboto text-text14 text-[#082252] font-normal">
                                        {{$general[0]->email}}
                                    </p>
                                </div>
                            </div>

                            <div class="flex gap-2"  >
                                <div>
                                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14.3088 16.0737C14.8327 16.2483 15.399 15.9652 15.5737 15.4412C15.7483 14.9173 15.4652 14.351 14.9412 14.1763L14.3088 16.0737ZM11.25 14H10.25C10.25 14.4304 10.5254 14.8126 10.9338 14.9487L11.25 14ZM12.25 9.29587C12.25 8.74358 11.8023 8.29587 11.25 8.29587C10.6977 8.29587 10.25 8.74358 10.25 9.29587H12.25ZM19.25 12.875C19.25 13.4273 19.6977 13.875 20.25 13.875C20.8023 13.875 21.25 13.4273 21.25 12.875H19.25ZM19.9116 17.8757C20.1881 17.3977 20.0247 16.7859 19.5467 16.5094C19.0686 16.2329 18.4569 16.3962 18.1804 16.8743L19.9116 17.8757ZM18.4882 11.1802C18.0976 10.7897 17.4645 10.7897 17.0739 11.1802C16.6834 11.5708 16.6834 12.2039 17.0739 12.5945L18.4882 11.1802ZM20.0311 14.1373L19.3239 14.8445C19.7145 15.235 20.3476 15.235 20.7382 14.8445L20.0311 14.1373ZM22.9882 12.5945C23.3787 12.2039 23.3787 11.5708 22.9882 11.1802C22.5976 10.7897 21.9645 10.7897 21.5739 11.1802L22.9882 12.5945ZM14.9412 14.1763L11.5662 13.0513L10.9338 14.9487L14.3088 16.0737L14.9412 14.1763ZM12.25 14V9.29587H10.25V14H12.25ZM11.25 20.875C6.83172 20.875 3.25 17.2933 3.25 12.875H1.25C1.25 18.3978 5.72715 22.875 11.25 22.875V20.875ZM3.25 12.875C3.25 8.45672 6.83172 4.875 11.25 4.875V2.875C5.72715 2.875 1.25 7.35215 1.25 12.875H3.25ZM11.25 4.875C15.6683 4.875 19.25 8.45672 19.25 12.875H21.25C21.25 7.35215 16.7728 2.875 11.25 2.875V4.875ZM18.1804 16.8743C16.7956 19.2681 14.2099 20.875 11.25 20.875V22.875C14.9527 22.875 18.184 20.8621 19.9116 17.8757L18.1804 16.8743ZM17.0739 12.5945L19.3239 14.8445L20.7382 13.4302L18.4882 11.1802L17.0739 12.5945ZM20.7382 14.8445L22.9882 12.5945L21.5739 11.1802L19.3239 13.4302L20.7382 14.8445Z"
                                            fill="#FF5E14" class="h-7 w-7 fill-fillAzul md:fill-fillNaranja" />
                                    </svg>

                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="font-semibold text-[#082252] font-roboto text-text18 leading-none">Horario de
                                        Atención</p>
                                    <p class="font-roboto text-text14 text-[#082252] font-normal">
                                        @foreach (explode(',', $general[0]->schedule) as $item)
                                            {{ $item }}<br>
                                        @endforeach
                                    </p>
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
        var swiper = new Swiper(".logos", {
            slidesPerView: 5,
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
                    slidesPerView: 5,
                    centeredSlides: false,
                },
            },
        });


        var swiper = new Swiper(".slider_productos", {
            slidesPerView: 1,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            grabCursor: true,
            loop: true,
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
