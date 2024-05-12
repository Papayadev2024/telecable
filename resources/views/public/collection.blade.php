@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')



<main class="bg-bgBlack">
    <section class="uppercase italic text-white">
        <div class="w-full md:w-1/2 mx-auto text-center">
            <div class="flex justify-center items-center relative">
                <img src="./images/img/anio_24.png" alt="doomine" />

                <div class="absolute bottom-[10%]">
                    <h2 class="font-boldItalicDisplay text-text40 md:text-text64 xl:text-text68">
                        Real sensation
                    </h2>
                    <p class="font-regularItalicDisplay text-text16 md:text-text28">
                        New colection
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="hidden md:block">
            <img src="./images/img/colection_1.png" alt="colection" class="w-full h-full" />
        </div>

        <div class="block md:hidden">
            <img src="./images/img/colection_2.png" alt="colection" class="w-full h-full" />
        </div>
    </section>

    <section class="w-11/12 mx-auto flex flex-col gap-10 py-12">
        <div class="flex justify-between items-center uppercase">
            <h3 class="font-boldItalicDisplay text-text24 xl:text-text28 text-textWhite uppercase">
                New Collection
            </h3>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 md:grid-rows-2 gap-5 text-white">
            <!-- 1 -->
            <div class="md:col-span-1 md:row-span-1 order-1 md:order-1 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_1.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Vestido
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 xl:text-text18 text-textBlack">
                        New
                    </p>
                </div>
            </div>
            <!-- 2 -->
            <div class="md:col-span-1 md:row-span-1 order-2 md:order-2 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_2.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Polos
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 xl:text-text18 text-textBlack">
                        New
                    </p>
                </div>
            </div>
            <!-- 3 -->
            <div class="md:col-span-1 md:row-span-1 order-3 md:order-3 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_3.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Polos
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 xl:text-text18 text-textBlack">
                        New
                    </p>
                </div>
            </div>
            <!-- 4 -->
            <div class="md:col-span-1 md:row-span-1 order-4 md:order-4 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_4.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Polos
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 xl:text-text18 text-textBlack">
                        New
                    </p>
                </div>
            </div>
            <!-- 5 -->
            <div class="md:col-span-1 md:row-span-1 order-5 md:order-5 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_3.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Polos
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 xl:text-text18 text-textBlack">
                        New
                    </p>
                </div>
            </div>
            <!-- 6 -->
            <div class="col-span-2 md:row-span-1 order-7 md:order-6 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_5.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Polos
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 xl:text-text18 text-textBlack">
                        New
                    </p>
                </div>
            </div>
            <!-- 7 -->
            <div class="md:col-span-1 md:row-span-1 order-6 md:order-7 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_6.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Polos
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 xl:text-text18 text-textBlack">
                        New
                    </p>
                </div>
            </div>
            <!-- 8 -->
            <div class="md:col-span-1 md:row-span-1 order-8 md:order-8 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_1.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Polos
                        </p>
                    </div>
                </div>

                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                        -25%
                    </p>
                </div>
            </div>
            <!-- 9 -->
            <div class="md:col-span-1 md:row-span-1 flex order-9 md:order-9 flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_9.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
                            Polos
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white absolute top-[10px] left-[10px] md:top-[25px] md:left-[25px] rounded-md py-1 px-2">
                    <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack">
                        Outlet
                    </p>
                </div>
            </div>
            <!-- 10 -->
            <div class="md:col-span-1 md:row-span-1 flex order-10 md:order-10 flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_3.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
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
            <!-- 11 -->
            <div class="md:col-span-1 md:row-span-1 order-11 md:order-11 flex flex-col gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_1.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
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
            <!-- 12 -->
            <div class="col-span-2 flex flex-col order-12 md:order-12 gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_7.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
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
            <!-- 13 -->
            <div class="md:col-span-1 flex flex-col order-[13] md:order-[13] gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_1.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
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
            <!-- 14 -->
            <div class="md:col-span-1 flex flex-col order-[14] md:order-[14] gap-5 relative">
                <div class="product_container">
                    <img src="./images/img/arrives_1.png" alt="arrives" class="w-full h-full" />

                    <div class="addProduct text-center flex justify-center">
                        <a href="#addProducto"
                            class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 lg:px-5 flex-initial w-32 md:w-36 lg:py-3 lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                            Agregar a mi bolsa
                        </a>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div
                        class="flex flex-col lg:flex-row md:justify-between font-boldDisplay text-textWhite gap-2 order-2 lg:order-1">
                        <p class="text-text14 md:text-text16">
                            Oversize Verde Babygirl
                        </p>
                        <div class="flex justify-between font-boldDisplay items-center gap-2">
                            <p class="text-text14 md:text-text16">s/60.00</p>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <p class="font-boldDisplay text-text10 md:text-text14 text-textWhite">
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
        <div class="flex md:hidden justify-center items-center">
            <a href="#"
                class="border-[1.5px] border-white rounded-full py-4 px-16 text-white font-mediumDisplay text-text14">Cargar
                más modelos</a>
        </div>
    </section>
</main>



@section('scripts_importados')
@stop

@stop