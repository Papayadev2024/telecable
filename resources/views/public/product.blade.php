@extends('components.public.matrix', ['pagina' => 'catalogo'])

@section('titulo', 'Producto')
@section('meta_title', $meta_title)
@section('meta_description', $meta_description)
@section('meta_keywords', $meta_keywords)

@section('css_importados')
    <style>
        .active {
            border: 2px solid #FF5E14;
        }

        .ckeditor-content ul {
            list-style-type: disc; /* Muestra bullets (puntos) */
            padding-left: 20px; /* Sangría para listas */
            margin: 10px 0; /* Margen superior e inferior */
        }

        .ckeditor-content ol {
            list-style-type: decimal; /* Números para listas ordenadas */
            padding-left: 20px;
            margin: 10px 0;
        }

        .ckeditor-content li {
            margin-bottom: 5px; /* Espacio entre ítems */
        }
    </style>
    
@stop


@section('content')
    @php
        function capitalizeFirstLetter($string)
        {
            return ucfirst($string);
        }
    @endphp



    <main>
        <section class="w-full px-[5%] py-10 lg:py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
                
                <div class="flex flex-col justify-start items-center gap-5">
                    <div id="containerProductosdetail"
                        class="w-full flex justify-center items-center aspect-[3/2] overflow-hidden">
                        <img src="{{ asset($producto->imagen) }}" alt="computer" class="w-full h-full object-cover"
                            data-aos="fade-up" data-aos-offset="150"
                            onerror="this.onerror=null;this.src='/images/img/noimagen.jpg';">
                    </div>
                    <x-product-slider :product="$producto" />
                </div>    



                <div class="flex flex-col justify-start items-center gap-5">
                    <div class="flex flex-col w-full" data-aos="fade-up" data-aos-offset="150">
                        

                        <div class="flex flex-col gap-5 w-full lg:max-w-lg">
                            <h2 id="nombreproducto" class="leading-tight text-[#54340E] font-bignoodle text-5xl">
                                {{ $producto->producto }}</h2>
                          
                            <div class="text-[#54340E] font-latoregular font-normal ckeditor-content">
                                    {!! $producto->description !!}</div>


                            <div class="flex flex-row justify-start items-end gap-2">
                                @if ($producto->descuento == 0)
                                    <p class="leading-tight font-latoregular font-semibold text-4xl  text-[#54340E]">
                                       S/. {{$producto->precio}}</p>
                                @else
                                    <p class="leading-tight font-latoregular font-semibold text-4xl  text-[#54340E]">S/ {{ $producto->descuento }} </p>
                                    <p class="leading-tight font-latoregular text-2xl font-semibold text-[#54340E] line-through"> S/ {{ $producto->precio }}</p>
                                
                                @endif  
                            </div>    

                            
                            <div class="flex flex-row">
                                <div target="_blank" id="chatonline" class="cursor-pointer py-2 rounded-xl bg-[#F07407] flex flex-row w-auto px-6 justify-center items-center gap-2 mt-5">
                                    <a class="text-white font-latoregular text-center">Hacer mi pedido</a>
                                </div> 
                            </div>
                        </div>

                        {{-- <p class="text-[#082252] text-text16 font-roboto font-normal">{{ $producto->extract }}</p> --}}

                         {{-- @if (!is_null($producto->description))
                            <div class="flex flex-col gap-5 " data-aos="fade-up" data-aos-offset="150">
                                <div class="text-[#082252] text-text16 font-normal font-roboto flex flex-col gap-5">
                                    <p>
                                        {!! $producto->description !!}
                                    </p>
                                </div>
                            </div>
                        @endif --}}

                        {{-- <div class="flex justify-between items-center text-white font-roboto font-bold text-text14 gap-5 pt-3"
                            data-aos="fade-up" data-aos-offset="150">
                            
                            @if ($producto->name_fichatecnica)
                                <a href="{{ asset($producto->url_fichatecnica . $producto->name_fichatecnica) }}" target="_blank" 
                                    class="cursor-pointer bg-[#FF5E14] flex justify-center items-center w-6/12 py-3 px-4 md:px-10 text-center gap-2 rounded-xl">
                                    <span>Ficha técnica</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M382.56 233.376A15.96 15.96 0 0 0 368 224h-64V16c0-8.832-7.168-16-16-16h-64c-8.832 0-16 7.168-16 16v208h-64a16.013 16.013 0 0 0-14.56 9.376c-2.624 5.728-1.6 12.416 2.528 17.152l112 128A15.946 15.946 0 0 0 256 384c4.608 0 8.992-2.016 12.032-5.472l112-128c4.16-4.704 5.12-11.424 2.528-17.152z"
                                                    fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                                <path
                                                    d="M432 352v96H80v-96H16v128c0 17.696 14.336 32 32 32h416c17.696 0 32-14.304 32-32V352h-64z"
                                                    fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>                    
                            @endif
                            
                            @if ($producto->name_docriesgo)
                                <a href="{{ asset($producto->url_docriesgo.$producto->name_docriesgo) }}" target="_blank" 
                                    class="cursor-pointer bg-[#FF5E14] flex justify-center items-center w-6/12 py-3 px-4 md:px-10 text-center gap-2 rounded-xl">
                                    <span>Hoja de seguridad</span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0"
                                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M382.56 233.376A15.96 15.96 0 0 0 368 224h-64V16c0-8.832-7.168-16-16-16h-64c-8.832 0-16 7.168-16 16v208h-64a16.013 16.013 0 0 0-14.56 9.376c-2.624 5.728-1.6 12.416 2.528 17.152l112 128A15.946 15.946 0 0 0 256 384c4.608 0 8.992-2.016 12.032-5.472l112-128c4.16-4.704 5.12-11.424 2.528-17.152z"
                                                    fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                                <path
                                                    d="M432 352v96H80v-96H16v128c0 17.696 14.336 32 32 32h416c17.696 0 32-14.304 32-32V352h-64z"
                                                    fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                            </g>
                                        </svg>
                                    </div>
                                </a>
                            @endif 
                             
                        </div> --}}

                        {{-- <div class="flex flex-col items-start justify-start text-white font-roboto font-bold text-text14 gap-5 w-full lg:w-1/2"
                            data-aos="fade-up" data-aos-offset="150">
                            <div target="_blank" id="chatonline"
                                class="cursor-pointer bg-[#FF5E14] flex justify-center items-center w-6/12 py-3 px-4 md:px-10 text-center gap-2 rounded-xl">
                                <span>Cotizar aquí</span>
                                <div>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.1 2.3C12.6 0.8 10.6 0 8.5 0C4.1 0 0.5 3.6 0.5 8C0.5 9.4 0.900006 10.8 1.60001 12L0.5 16L4.70001 14.9C5.90001 15.5 7.2 15.9 8.5 15.9C12.9 15.9 16.5 12.3 16.5 7.9C16.5 5.8 15.6 3.8 14.1 2.3ZM8.5 14.6C7.3 14.6 6.10001 14.3 5.10001 13.7L4.89999 13.6L2.39999 14.3L3.10001 11.9L2.89999 11.6C2.19999 10.5 1.89999 9.3 1.89999 8.1C1.89999 4.5 4.9 1.5 8.5 1.5C10.3 1.5 11.9 2.2 13.2 3.4C14.5 4.7 15.1 6.3 15.1 8.1C15.1 11.6 12.2 14.6 8.5 14.6ZM12.1 9.6C11.9 9.5 10.9 9 10.7 9C10.5 8.9 10.4 8.9 10.3 9.1C10.2 9.3 9.80001 9.7 9.70001 9.9C9.60001 10 9.49999 10 9.29999 10C9.09999 9.9 8.50001 9.7 7.70001 9C7.10001 8.5 6.70001 7.8 6.60001 7.6C6.50001 7.4 6.60001 7.3 6.70001 7.2C6.80001 7.1 6.9 7 7 6.9C7.1 6.8 7.10001 6.7 7.20001 6.6C7.30001 6.5 7.20001 6.4 7.20001 6.3C7.20001 6.2 6.80001 5.2 6.60001 4.8C6.50001 4.5 6.30001 4.5 6.20001 4.5C6.10001 4.5 5.99999 4.5 5.79999 4.5C5.69999 4.5 5.49999 4.5 5.29999 4.7C5.09999 4.9 4.60001 5.4 4.60001 6.4C4.60001 7.4 5.29999 8.3 5.39999 8.5C5.49999 8.6 6.79999 10.7 8.79999 11.5C10.5 12.2 10.8 12 11.2 12C11.6 12 12.4 11.5 12.5 11.1C12.7 10.6 12.7 10.2 12.6 10.2C12.5 9.7 12.3 9.7 12.1 9.6Z"
                                            fill="white" />
                                    </svg>
                                </div>
                            </div>
                            
                            <h2 class="font-roboto font-bold text-text28 text-[#082252]">Obtén una cotización</h2>
                            
                            <div class= "">
                                  <form  id="formProducto">
                                    @csrf
                                    <div class="flex flex-col gap-5">
                                        <div class="relative flex flex-col md:flex-row w-full gap-5"  >
                                            <input 
                                                required name="full_name" id="fullNameContacto" type="text" placeholder="Nombre completo"
                                                class="w-full  py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                        </div>


                                        <input type="hidden" name="service_product" value="{{ $producto->producto }}"/>

                                         <div class="relative w-full" >
                                            <input  id="telefonoContacto" name="phone" placeholder="Teléfono" type="tel" maxlength="12" required
                                                    class="w-full  py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                        </div>
                                        <div class="relative w-full" >
                                            <input type="email" name="email" placeholder="E-mail" required id="emailContacto"
                                                class="w-full py-3 px-4 focus:outline-none font-roboto text-text16 text-[#082252] focus:ring-0 placeholder:text-[#082252] placeholder:text-opacity-40 border-[#082252] border-b transition-all focus:outline-0 border-t-0 border-l-0 border-r-0 focus:font-medium bg-transparent focus:bg-transparent focus:border-[#082252]" />
                                        </div>

                                        <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Producto" />

                                        <div class="relative w-full" >
                                            <textarea name="message" id="message" rows="2" cols="30"
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
                                                class="text-text18 font-roboto font-semibold text-white bg-[#FF5E14] py-3 px-6 w-full text-center rounded-xl">Enviar
                                                solicitud</button>
                                        </div>
                                    </div>
                                </form>   
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

                        </div> --}}
                    </div>


                    {{-- <div class="pt-5" data-aos="fade-up" data-aos-offset="150">
                        @if (is_null($producto->categoria->name))
                        @else
                            <p class="font-roboto font-medium text-text14 text-[#082252]">
                                Categoría: <span
                                    class="text-[#565656] font-normal text-text14">{{ $producto->categoria->name }}</span>
                            </p>
                        @endif

                        @if (is_null($producto->sku))
                        @else
                            <p class="font-roboto font-medium text-text14 text-[#082252]">
                                SKU: <span class="text-[#565656] font-normal text-text14">{{ $producto->sku }}</span>
                            </p>
                        @endif
                    </div> --}}
                    
                </div>
            </div>
            
            {{-- @php
                $especificacionf = strip_tags($producto->especificacion);
                
            @endphp --}}
                
            {{-- @if (!is_null($producto->especificacion) && $especificacionf !== '')
                <div class="flex flex-col gap-2 pt-10 md:pt-16" data-aos="fade-up" data-aos-offset="150">
                    <h3 class="font-roboto font-bold text-text28 text-[#082252]">Características técnicas</h3>
                    <div class="text-[#082252] text-text16 font-normal font-roboto flex flex-col ">
                        
                            {!! $producto->especificacion !!}
                        
                    </div>
                </div>
            @endif --}}
            
                

            {{-- @if ($especificaciones->isEmpty())
            @else
                <div class="pt-10 md:pt-16 flex flex-col gap-5">
                    <h3 class="font-roboto font-bold text-text28 text-[#082252]">Características técnicas</h3>
                    <div class="mx-6" data-aos="fade-up" data-aos-offset="150">
                        <ul class="font-roboto font-normal text-text16 list-disc text-[#082252]">

                            @foreach ($especificaciones as $item)
                                <li><span class="font-semibold">{{ capitalizeFirstLetter($item->tittle) }}:</span>
                                    {{ capitalizeFirstLetter($item->specifications) }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif --}}
        </section>


       


        @if ($ProdComplementarios->isEmpty())
        @else
            <section class=" justify-center items-center px-[5%] py-10 lg:py-16 bg-white space-y-12">

                <div class="flex flex-col justify-start gap-3 md:flex-row md:justify-between w-full md:items-center">
                    <h2 class="text-[#54340E] font-bignoodle text-5xl">Nuestros recomendados</h2>
                    <div class="flex flex-row">
                        <a href="{{route('catalogo.all')}}">
                            <div class="bg-[#F07407] text-white rounded-lg px-3 py-1.5 text-base font-latoregular">Ver todos los recomendados</div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="swiper slider_productos">
                        <div class="swiper-wrapper">
                            @foreach ($ProdComplementarios as $product)
                                <div class="swiper-slide">   
                                    <div class="flex flex-col rounded-lg border border-[#DDCCBA] overflow-hidden group cursor-pointer">
                                        <a href="{{route('producto', $product->id)}}">
                                            <img
                                                class="w-full h-full aspect-[3/2] object-cover"
                                                src="{{asset($product->imagen)}}"
                                            />
                                        </a>
                                        
                                        <div class="text-[#54340E] font-latobold text-xl px-3 pt-2 pb-3 w-full flex flex-col gap-1">
                                            <div class="flex flex-col">
                                                <h2 class="line-clamp-1">{{$product->producto}}</h2>
                                                <div class="line-clamp-2 font-latoregular text-sm h-9 leading-tight flex flex-col justify-center">
                                                    {!! $product->extract ?? $product->description !!}
                                                </div>
                                                <div class="flex flex-row justify-start items-center gap-2 font-latobold mt-1">
                                                    @if ($product->descuento == 0)
                                                        <span class="text-lg">S/ {{$product->precio}}</span>   
                                                    @else
                                                        <span class="text-lg">S/ {{$product->descuento}}</span>
                                                        <span class="text-sm line-through">S/ {{$product->precio}}</span>
                                                    @endif
                                                </div>
                                            </div>
                                
                                            <a href="{{route('producto', $product->id)}}" class="botonopciones">
                                                <div class="bg-[#54340E] rounded-lg pt-1 pb-2 text-center ">
                                                    <span
                                                        class="bg-[#54340E] text-white font-latoregular text-base text-center w-full"
                                                        href="{{route('producto', $product->id)}}"
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
        @endif



    </main>

@section('scripts_importados')
    <script>
        const principal = document.querySelector('.principal');
        const secundarios = document.querySelectorAll('.secundario');

        secundarios.forEach(item => {
            item.addEventListener('click', function() {
                const active = document.querySelector('.active');
                active.classList.remove('active');
                this.classList.add('active');
                principal.src = this.src;
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#chatonline').click(function() {

                function isMobile() {
                    if (sessionStorage.desktop)
                        return false;
                    else if (localStorage.mobile)
                        return true;
                    var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini',
                        'windows mobile', 'windows phone', 'iemobile'
                    ];
                    for (var i in mobile)
                        if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0)
                            return true;
                    return false;
                }

                setTimeout(function() {

                    telefono2 = '51992262598';
                    nombre2 = $('#nombreproducto').text();
                    mensaje2 = 'send?phone=' + telefono2 +
                        '&text=Hola, quiero comunicarme con un asesor.%0AEstoy interesad@ en el producto *' +
                        nombre2 + '*.';

                    if (isMobile()) {
                        window.open('https://api.whatsapp.com/' + mensaje2, '_blank');
                    } else {
                        window.open('https://web.whatsapp.com/' + mensaje2, '_blank');
                    }
                }, 200);
            });
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

    <script>
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
    </script>

@stop

@stop
