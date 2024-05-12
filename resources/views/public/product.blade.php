@extends('components.public.matrix')
@section('css_importados')
@stop
@section('content')
    <?php
    // Definición de la función capitalizeFirstLetter()
    // function capitalizeFirstLetter($string)
    // {
    //     return ucfirst($string);
    // }
    // ?>

    <main class="flex flex-col gap-12 mt-12">
        {{-- <section class="flex gap-2 items-center w-11/12 mx-auto">
            <a href="#" class="font-regularDisplay text-text14 md:text-text24 text-gray-500">Home</a>
            <div>
                <img src="{{asset('images/svg/flecha.svg')}}" alt="doomine" />
            </div>

            <a href="#" class="font-regularDisplay text-text14 md:text-text24 text-gray-500">Categorías</a>
            <div>
                <img src="{{asset('images/svg/flecha.svg')}}" alt="doomine" />
            </div>

            <a href="#" class="font-regularDisplay text-text14 md:text-text24 text-gray-500">Vestidos</a>
            <div>
                <img src="{{asset('images/svg/flecha.svg')}}" alt="doomine" />
            </div>
            <a href="#" class="font-mediumDisplay text-text14 md:text-text24 text-black">Vestido Kim</a>
        </section> --}}

        <section class="w-11/12 mx-auto">
            <div class="flex flex-col gap-12 lg:flex-row md:gap-32">
                <div class="basis-3/6 grid grid-cols-2 gap-5">
                    <div class="flex flex-col gap-5 relative">
                        <img src="{{ asset($productos[0]->imagen) }}" alt="{{ $productos[0]->name }}" class="w-full h-full" />

                        <div
                            class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                            <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                New Arrival
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col gap-5 relative">
                        <img src="{{ asset('images/img/arrives_2.png') }}" alt="arrives" class="w-full h-full" />
                    </div>

                    <div class="flex flex-col gap-5 relative">
                        <img src="{{ asset('images/img/arrives_3.png') }}" alt="arrives" class="w-full h-full" />
                    </div>

                    <div class="flex flex-col gap-5 relative">
                        <img src="{{ asset('images/img/arrives_4.png') }}" alt="arrives" class="w-full h-full" />
                    </div>

                    <div class="flex flex-col gap-5 relative">
                        <img src="{{ asset('images/img/arrives_1.png') }}" alt="arrives" class="w-full h-full" />
                    </div>

                    <div class="flex flex-col gap-5 relative">
                        <img src="{{ asset('images/img/arrives_2.png') }}" alt="arrives" class="w-full h-full" />
                    </div>
                </div>

                <div class="basis-3/6 text-textBlack flex flex-col gap-10">
                    <div class="flex flex-col gap-1">
                        <p class="font-mediumDisplay text-text16 md:text-text18">
                            Categoría: Vestidos
                        </p>
                        <div class="flex justify-between">
                            <h3 class="font-mediumDisplay text-text32 md:text-text36">
                                Vestido Kim
                            </h3>
                            <div class="flex justify-between text-black items-center gap-2">
                                <p class="text-text14 md:text-text20 font-boldDisplay">
                                    s/60.00
                                </p>
                                <p class="text-text10 md:text-text16 line-through text-gray-400 font-mediumDisplay">
                                    s/120.00
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">

                    @foreach ($productos as $producto)
                        @foreach ($producto->attributes as $atributo)

                            {{-- {{$atributo->pivot}} --}}
                            <div>
                                @if ($atributo->typeAttribute->name === 'color')
                                    <p class="font-mediumDisplay text-text16 md:text-text20 pb-4">
                                        Seleccionar color
                                    </p>
                                    <!-- HTML específico para el tipo de atributo "color" -->
                                    <div class="flex gap-5 justify-start items-center">
                                        
                                            @foreach ($atributo->values as $valor)
                                                    <div style="background-color: {{ $valor->color }}" class="colors w-14 h-14 rounded-[50%] cursor-pointer"></div>     
                                            @endforeach   
                                    </div>
                                @elseif($atributo->typeAttribute->name === 'text')
                                    <p class="font-mediumDisplay text-text16 md:text-text20 pb-4">
                                        Seleccionar el tamaño
                                    </p>
                                    <div
                                        class="grid grid-cols-3 place-items-center font-regularDisplay text-text14 md:text-text20 gap-2">
                                        @foreach ($atributo->values as $valor)
                                            <div class="flex justify-center items-center border-2 w-full rounded-lg">
                                                <p class="py-5 px-4 w-full text-center">{{ $valor->valor }}</p>
                                            </div>    
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach 
                    @endforeach    
                    </div>

                    <div class="flex flex-col gap-3">
                       
                        <div class="flex justify-between items-center">
                            <!-- Corregir -->
                            <div class="flex">
                                <div
                                    class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5] cursor-pointer rounded-l-3xl">
                                    <span class="text-[30px]">-</span>
                                </div>
                                <div class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5]">
                                    <span class="text-[20px] font-mediumDisplay">2</span>
                                </div>
                                <div
                                    class="w-14 h-14 flex justify-center items-center bg-[#F5F5F5] cursor-pointer rounded-r-3xl">
                                    <span class="text-[30px]">+</span>
                                </div>
                            </div>

                            <div class="flex justify-center items-center">
                                <a href="#"
                                    class="text-white py-3 px-5 md:px-12 xl:px-16 border-2 border-gray-700 rounded-3xl w-full text-center font-mediumDisplay text-text16 h-full bg-black hover:bg-white hover:text-black md:duration-500">
                                    Agregar al carrito
                                </a>
                            </div>
                        </div>
                    </div>

                    <p class="italic font-mediumItalicDisplay text-text18">
                        SKU: 254kim/black/white
                    </p>

                    <div>
                        <div class="relative">
                            <div class="mx-auto">
                                <div class="mx-auto grid max-w-[900px] divide-y divide-neutral-200">
                                    <div class="py-5">
                                        <details class="group">
                                            <summary
                                                class="flex cursor-pointer list-none items-center justify-between font-medium">
                                                <span class="font-boldDisplay text-text20 md:text-text24 text-[#151515]">
                                                    Detalles de producto
                                                </span>
                                                <span class="transition group-open:rotate-180">
                                                    <svg width="20" height="20" viewBox="0 0 12 13" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.17736 3.72824C1.51789 3.3994 2.06052 3.40886 2.38937 3.74939L7.15275 8.68202L5.91958 9.87288L1.1562 4.94025C0.827356 4.59972 0.836834 4.05708 1.17736 3.72824Z"
                                                            fill="black" />
                                                        <path
                                                            d="M4.84668 8.67969L9.61006 3.74706C9.9389 3.40653 10.4815 3.39707 10.8221 3.72591C11.1626 4.05475 11.1721 4.59739 10.8432 4.93791L6.07985 9.87054L4.84668 8.67969Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </summary>

                                            <div class="group-open:animate-fadeIn mt-3 text-[#000000]">
                                                <div class="flex flex-col gap-10">
                                                    <div class="flex flex-col gap-5">
                                                        <p class="font-mediumDisplay text-text16 md:text-text20">
                                                            Detalle de producto
                                                        </p>
                                                        <p
                                                            class="font-regularDisplay text-text16 md:text-text20 text-gray-600">
                                                            Este polo Oversize para mujer con cuello redondo
                                                            es imprescindible para todas las amantes de la
                                                            diversión y el buen gusto. Las mangas cortas y
                                                            la longitud extra larga, así como su confección
                                                            en algodón súper suave y cómodo, harán que te
                                                            sientas genial con este polo en cualquier
                                                            momento. Está disponible en muchos colores y
                                                            estampados para que puedas elegir el que más te
                                                            guste.
                                                        </p>
                                                    </div>

                                                    <div class="flex flex-col gap-5">
                                                        <p class="font-mediumDisplay text-text20 md:text-text24">
                                                            Información adicional
                                                        </p>

                                                        <div
                                                            class="grid grid-cols-2 font-regularDisplay text-text16 md:text-text20">
                                                            <div class="border-2 border-black">
                                                                <p class="py-3 text-center">Peso</p>
                                                            </div>
                                                            <div class="border-2 border-black">
                                                                <p class="py-3 text-center">1kg</p>
                                                            </div>

                                                            <div class="border-2 border-black">
                                                                <p class="py-3 text-center">Dimensiones</p>
                                                            </div>

                                                            <div class="border-2 border-black">
                                                                <p class="py-3 text-center">25 x 25 x 5 cm</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </details>
                                    </div>

                                    <div class="py-5">
                                        <details class="group">
                                            <summary
                                                class="flex cursor-pointer list-none items-center justify-between font-medium">
                                                <div class="flex gap-2 items-center">
                                                    <span
                                                        class="font-boldDisplay text-text20 md:text-text24 text-[#151515]">
                                                        Comentarios
                                                    </span>
                                                    <div class="flex">
                                                        <img src="{{ asset('images/svg/start.svg') }}" alt="doomine" />
                                                        <img src="{{ asset('images/svg/start.svg') }}" alt="doomine" />
                                                        <img src="{{ asset('images/svg/start.svg') }}" alt="doomine" />
                                                        <img src="{{ asset('images/svg/start.svg') }}" alt="doomine" />
                                                        <img src="{{ asset('images/svg/start_middle.svg') }}"
                                                            alt="doomine" />
                                                    </div>
                                                    <span class="font-regularDisplay text-text14">
                                                        4.5/5
                                                    </span>
                                                </div>

                                                <span class="transition group-open:rotate-180">
                                                    <svg width="20" height="20" viewBox="0 0 12 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.17736 3.72824C1.51789 3.3994 2.06052 3.40886 2.38937 3.74939L7.15275 8.68202L5.91958 9.87288L1.1562 4.94025C0.827356 4.59972 0.836834 4.05708 1.17736 3.72824Z"
                                                            fill="black" />
                                                        <path
                                                            d="M4.84668 8.67969L9.61006 3.74706C9.9389 3.40653 10.4815 3.39707 10.8221 3.72591C11.1626 4.05475 11.1721 4.59739 10.8432 4.93791L6.07985 9.87054L4.84668 8.67969Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </summary>

                                            <p
                                                class="group-open:animate-fadeIn mt-3 font-regularDisplay text-text16 md:text-text20 text-gray-600">
                                                Este polo Oversize para mujer con cuello redondo es
                                                imprescindible para todas las amantes de la diversión
                                                y el buen gusto. Las mangas cortas y la longitud extra
                                                larga, así como su confección en algodón súper suave y
                                                cómodo, harán que te sientas genial con este polo en
                                                cualquier momento. Está disponible en muchos colores y
                                                estampados para que puedas elegir el que más te guste.
                                            </p>
                                        </details>
                                    </div>

                                    <div class="py-5">
                                        <details class="group">
                                            <summary
                                                class="flex cursor-pointer list-none items-center justify-between font-mediumDisplay">
                                                <span class="font-boldDisplay text-text20 md:text-text24 text-[#151515]">
                                                    FAQs</span>
                                                <span class="transition group-open:rotate-180">
                                                    <svg width="20" height="20" viewBox="0 0 12 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.17736 3.72824C1.51789 3.3994 2.06052 3.40886 2.38937 3.74939L7.15275 8.68202L5.91958 9.87288L1.1562 4.94025C0.827356 4.59972 0.836834 4.05708 1.17736 3.72824Z"
                                                            fill="black" />
                                                        <path
                                                            d="M4.84668 8.67969L9.61006 3.74706C9.9389 3.40653 10.4815 3.39707 10.8221 3.72591C11.1626 4.05475 11.1721 4.59739 10.8432 4.93791L6.07985 9.87054L4.84668 8.67969Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </summary>

                                            <p
                                                class="group-open:animate-fadeIn mt-3 font-regularDisplay text-text16 md:text-text20 text-gray-600">
                                                Este polo Oversize para mujer con cuello redondo es
                                                imprescindible para todas las amantes de la diversión
                                                y el buen gusto. Las mangas cortas y la longitud extra
                                                larga, así como su confección en algodón súper suave y
                                                cómodo, harán que te sientas genial con este polo en
                                                cualquier momento. Está disponible en muchos colores y
                                                estampados para que puedas elegir el que más te guste.
                                            </p>
                                        </details>
                                    </div>

                                    <div class="py-5">
                                        <details class="group">
                                            <summary
                                                class="flex cursor-pointer list-none items-center justify-between font-medium">
                                                <span class="font-boldDisplay text-text20 md:text-text24 text-[#151515]">
                                                    Entrega y devoluciones</span>
                                                <span class="transition group-open:rotate-180">
                                                    <svg width="20" height="20" viewBox="0 0 12 13"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.17736 3.72824C1.51789 3.3994 2.06052 3.40886 2.38937 3.74939L7.15275 8.68202L5.91958 9.87288L1.1562 4.94025C0.827356 4.59972 0.836834 4.05708 1.17736 3.72824Z"
                                                            fill="black" />
                                                        <path
                                                            d="M4.84668 8.67969L9.61006 3.74706C9.9389 3.40653 10.4815 3.39707 10.8221 3.72591C11.1626 4.05475 11.1721 4.59739 10.8432 4.93791L6.07985 9.87054L4.84668 8.67969Z"
                                                            fill="black" />
                                                    </svg>
                                                </span>
                                            </summary>

                                            <p
                                                class="group-open:animate-fadeIn mt-3 font-regularDisplay text-text16 md:text-text20 text-gray-600">
                                                Este polo Oversize para mujer con cuello redondo es
                                                imprescindible para todas las amantes de la diversión
                                                y el buen gusto. Las mangas cortas y la longitud extra
                                                larga, así como su confección en algodón súper suave y
                                                cómodo, harán que te sientas genial con este polo en
                                                cualquier momento. Está disponible en muchos colores y
                                                estampados para que puedas elegir el que más te guste.
                                            </p>
                                        </details>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-11/12 mx-auto flex flex-col gap-5 pt-10">
            <div>
                <img src="{{ asset('images/img/producto_1.png') }}" alt="doomine"
                    class="w-full h-full hidden md:block" />

                <img src="{{ asset('images/img/mobile_foto.png') }}" alt="doomine"
                    class="w-full h-full block md:hidden" />
            </div>

            <p class="font-regularDisplay text-text20 md:text-text24 text-textBlack text-center w-full md:w-2/3 mx-auto">
                Suspendisse vitae leo porta sem vestibulum venenatis. Ut ut eleifend
                tellus, vel dapibus lectus. Aenean faucibus nisi eget massa fringilla.
            </p>
        </section>

        <section class="w-11/12 mx-auto flex flex-col gap-10 mb-24">
            <div class="flex justify-between items-center gap-2">
                <p class="uppercase font-boldItalicDisplay text-text20 md:text-text28 xl:text-text28">
                    <span class="hidden md:inline-block">También</span> Podría Gustarte
                </p>
                <a href="#" class="font-boldItalicDisplay text-text20 md:text-text28 uppercase">/ Ver Todo /</a>
            </div>

            <div>
                <div class="swiper slider-productos">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_1.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                            <p
                                                class="text-text10 md:text-text12 line-through text-gray-400 font-boldDisplay">
                                                s/120.00
                                            </p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_2.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_3.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                            <p
                                                class="text-text10 md:text-text12 line-through text-gray-400 font-boldDisplay">
                                                s/120.00
                                            </p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_4.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                            <p
                                                class="text-text10 md:text-text12 line-through text-gray-400 font-boldDisplay">
                                                s/120.00
                                            </p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        -20%
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_1.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_2.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_3.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_4.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        -20%
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_1.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_2.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_3.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        New Arrival
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="flex flex-col gap-5 relative">
                                <img src="{{ asset('images/img/arrives_4.png') }}" alt="arrives"
                                    class="w-full h-full" />

                                <div class="flex flex-col gap-2">
                                    <div
                                        class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                                        <p class="text-text14 md:text-text16">
                                            Oversize Verde Babygirls
                                        </p>
                                        <div class="flex font-boldDisplay text-black items-center gap-2">
                                            <p class="text-text14 md:text-text16">s/60.00</p>
                                        </div>
                                    </div>

                                    <div class="order-1 lg:order-2">
                                        <p
                                            class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                                            Polos
                                        </p>
                                    </div>
                                </div>

                                <div
                                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                                        -20%
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
        $(document).ready(function() {


            function capitalizeFirstLetter(string) {
                string = string.toLowerCase()
                return string.charAt(0).toUpperCase() + string.slice(1);
            }
        })
        $('#disminuir').on('click', function() {
            console.log('disminuyendo')
            let cantidad = Number($('#cantidadSpan span').text())
            if (cantidad > 0) {
                cantidad--
                $('#cantidadSpan span').text(cantidad)
            }


        })
        // cantidadSpan
        $('#aumentar').on('click', function() {
            console.log('aumentando')
            let cantidad = Number($('#cantidadSpan span').text())
            cantidad++
            $('#cantidadSpan span').text(cantidad)

        })
    </script>
    <script>
        let articulosCarrito = [];


        function deleteOnCarBtn(id, operacion) {
            console.log('Elimino un elemento del carrito');
            console.log(id, operacion)
            const prodRepetido = articulosCarrito.map(item => {
                if (item.id === id && item.cantidad > 0) {
                    item.cantidad -= Number(1);
                    return item; // retorna el objeto actualizado 
                } else {
                    return item; // retorna los objetos que no son duplicados 
                }

            });
            Local.set('carrito', articulosCarrito)
            limpiarHTML()
            PintarCarrito()


        }

        function calcularTotal() {
            let articulos = Local.get('carrito')
            console.log(articulos)
            let total = articulos.map(item => {
                let monto
                if (Number(item.descuento) !== 0) {
                    monto = item.cantidad * Number(item.descuento)
                } else {
                    monto = item.cantidad * Number(item.precio)

                }
                return monto

            })
            const suma = total.reduce((total, elemento) => total + elemento, 0);

            $('#itemsTotal').text(`S/. ${suma} `)

        }

        function addOnCarBtn(id, operacion) {
            console.log('agrego un elemento del cvarrio');
            console.log(id, operacion)

            const prodRepetido = articulosCarrito.map(item => {
                if (item.id === id) {
                    item.cantidad += Number(1);
                    return item; // retorna el objeto actualizado 
                } else {
                    return item; // retorna los objetos que no son duplicados 
                }

            });
            console.log(articulosCarrito)
            Local.set('carrito', articulosCarrito)
            // localStorage.setItem('carrito', JSON.stringify(articulosCarrito));
            limpiarHTML()
            PintarCarrito()


        }

        function deleteItem(id) {
            console.log('borrando elemento')
            articulosCarrito = articulosCarrito.filter(objeto => objeto.id !== id);

            Local.set('carrito', articulosCarrito)
            limpiarHTML()
            PintarCarrito()
        }

        var appUrl = <?php echo json_encode($url_env); ?>;
        console.log(appUrl);
        $(document).ready(function() {
            articulosCarrito = Local.get('carrito') || [];

            PintarCarrito();
        });

        function limpiarHTML() {
            //forma lenta 
            /* contenedorCarrito.innerHTML=''; */
            $('#itemsCarrito').html('')


        }



        function PintarCarrito() {
            console.log('pintando carrito ')

            let itemsCarrito = $('#itemsCarrito')

            articulosCarrito.forEach(element => {
                let plantilla = `<div class="flex justify-between bg-white font-poppins border-b-[1px] border-[#E8ECEF] pb-5">
            <div class="flex justify-center items-center gap-5">
              <div class="bg-[#F3F5F7] rounded-md p-4">
                <img src="${appUrl}/${element.imagen}" alt="producto" class="w-24" />
              </div>
              <div class="flex flex-col gap-3 py-2">
                <h3 class="font-semibold text-[14px] text-[#151515]">
                  ${element.producto}
                </h3>
                <p class="font-normal text-[12px] text-[#6C7275]">
                  
                </p>
                <div class="flex w-20 justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                  <button type="button" onClick="(deleteOnCarBtn(${element.id}, '-'))" class="  w-8 h-8 flex justify-center items-center ">
                    <span  class="text-[20px]">-</span>
                  </button>
                  <div class="w-8 h-8 flex justify-center items-center">
                    <span  class="font-semibold text-[12px]">${element.cantidad }</span>
                  </div>
                  <button type="button" onClick="(addOnCarBtn(${element.id}, '+'))" class="  w-8 h-8 flex justify-center items-center ">
                    <span class="text-[20px]">+</span>
                  </button>
                </div>
              </div>
            </div>
            <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
              <p class="font-semibold text-[14px] text-[#151515]">
                S/ ${Number(element.descuento) !== 0 ? element.descuento : element.precio}
              </p>
              <div class="flex items-center">
                <button type="button" onClick="(deleteItem(${element.id}))" class="  w-8 h-8 flex justify-center items-center ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                </svg>
                </button>

              </div>
            </div>
          </div>`

                itemsCarrito.append(plantilla)

            });

            calcularTotal()
        }






        $('#btnAgregarCarrito').on('click', function() {
            let url = window.location.href;
            let partesURl = url.split('/')
            let item = partesURl[partesURl.length - 1]
            let cantidad = Number($('#cantidadSpan span').text())
            item = item.replace('#', '')



            // id='nodescuento'


            $.ajax({

                url: `{{ route('carrito.buscarProducto') }}`,
                method: 'POST',
                data: {
                    _token: $('input[name="_token"]').val(),
                    id: item,
                    cantidad

                },
                success: function(success) {
                    console.log(success)
                    let {
                        producto,
                        id,
                        descuento,
                        precio,
                        imagen,
                        color
                    } = success.data
                    let cantidad = Number(success.cantidad)
                    let detalleProducto = {
                        id,
                        producto,
                        descuento,
                        precio,
                        imagen,
                        cantidad,
                        color

                    }
                    let existeArticulo = articulosCarrito.some(item => item.id === detalleProducto.id)
                    if (existeArticulo) {
                        //sumar al articulo actual 
                        const prodRepetido = articulosCarrito.map(item => {
                            if (item.id === detalleProducto.id) {
                                item.cantidad += Number(detalleProducto.cantidad);
                                return item; // retorna el objeto actualizado 
                            } else {
                                return item; // retorna los objetos que no son duplicados 
                            }

                        });
                    } else {
                        articulosCarrito = [...articulosCarrito, detalleProducto]

                    }

                    Local.set('carrito', articulosCarrito)
                    let itemsCarrito = $('#itemsCarrito')
                    let ItemssubTotal = $('#ItemssubTotal')
                    let itemsTotal = $('#itemsTotal')
                    limpiarHTML()
                    PintarCarrito()

                },
                error: function(error) {
                    console.log(error)
                }

            })



            // articulosCarrito = {...articulosCarrito , detalleProducto }
        })
        $('#openCarrito').on('click', function() {
            console.log('abriendo carrito ');
            $('.main').addClass('blur')
        })
        $('#closeCarrito').on('click', function() {
            console.log('abriendo carrito ');
            $('.main').removeClass('blur')
            $('.cartContainer').addClass('hidden')
            $('#check').prop('checked', false);

        })
    </script>

    <script src="{{ asset('js/storage.extend.js') }}"></script>
@stop

@stop
