@extends('components.public.matrix')

@section('css_improtados')

@stop


@section('content')

    <main class="z-[15]">
        <!------initSection Slider Header ------>
        <div class="swiper header-slider">
            <div class="swiper-wrapper">

                <div class="swiper-slide rounded-2xl">
                    <div style="background-image: url('{{ asset('images/img/logodecotab.png') }}')"
                        class="bg-cover bg-center bg-no-repeat min-h-[700px] flex flex-col items-start py-16 md:justify-center bg-colorBackgroundHeader">
                        <div class="flex justify-start items-center md:py-16 w-11/12 mx-auto">
                            <div class="text-white font-poppins flex flex-col gap-10">
                                <h1 class="font-semibold text-[32px] md:text-[48px] leading-none md:leading-tight pt-16">
                                    Vestibulum molestie massa nec est hendrerit, nec commodo
                                    nulla
                                </h1>
                                <p class="font-normal text-[16px] md:text-[18px]">
                                    Pellentesque convallis eu tortor id condimentum. Etiam
                                    cursus semper odio non consectetur. Pellentesque et molestie
                                    risus. Aliquam eu nibh pulvinar.
                                </p>

                                <div class="flex flex-col md:flex-row gap-5 md:gap-10 items-center">
                                    <a href="catalogo.html"
                                        class="font-semibold text-[16px] bg-[#74A68D] text-white py-2 px-5 rounded-3xl md:duration-500 hover:bg-[#4e8569] w-full text-center md:w-auto">Catálogo</a>
                                    <a href="login_user.html"
                                        class="font-semibold text-[16px] border-2 border-white bg-transparent text-white py-2 px-5 rounded-3xl hover:bg-colorBackgroundHeader duration-500 w-full md:w-auto text-center">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide rounded-2xl">
                    <div style="background-image: url('{{ asset('images/img/logodecotab.png') }}')"
                        class="bg-cover bg-center bg-no-repeat min-h-[700px] flex flex-col items-start py-16 md:justify-center bg-colorBackgroundHeader">
                        <div class="flex justify-start items-center md:py-16 w-11/12 mx-auto">
                            <div class="text-white font-poppins flex flex-col gap-10">
                                <h1 class="font-semibold text-[32px] md:text-[48px] leading-none md:leading-tight pt-16">
                                    Vestibulum molestie massa nec est hendrerit, nec commodo
                                    nulla
                                </h1>
                                <p class="font-normal text-[16px] md:text-[18px]">
                                    Pellentesque convallis eu tortor id condimentum. Etiam
                                    cursus semper odio non consectetur. Pellentesque et molestie
                                    risus. Aliquam eu nibh pulvinar.
                                </p>

                                <div class="flex flex-col md:flex-row gap-5 md:gap-10 items-center">
                                    <a href="catalogo.html"
                                        class="font-semibold text-[16px] bg-[#74A68D] text-white py-2 px-5 rounded-3xl md:duration-500 hover:bg-[#4e8569] w-full text-center md:w-auto">Catálogo</a>
                                    <a href="login_user.html"
                                        class="font-semibold text-[16px] border-2 border-white bg-transparent text-white py-2 px-5 rounded-3xl hover:bg-colorBackgroundHeader duration-500 w-full md:w-auto text-center">Ingresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!------endSection Slider Header ------>

        <section>
            <div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    <div class="group bg-colorBackgroundMainTop hover:bg-white p-14 md:duration-1000">
                        <div class="pb-5 flex justify-center items-center md:justify-start">
                            <svg width="44" height="40" viewBox="0 0 44 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26 34V10M26 34H30M26 34H16M26 10C26 5.58172 22.4183 2 18 2H10C5.58172 2 2 5.58172 2 10V26C2 29.7304 4.55333 32.8645 8.00769 33.7499M26 10H32.4182C33.4344 10 34.4126 10.3868 35.154 11.0819L40.7358 16.3148C41.5424 17.071 42 18.1273 42 19.2329V30C42 32.2091 40.2091 34 38 34M38 34C38 36.2091 36.2091 38 34 38C31.7909 38 30 36.2091 30 34M38 34C38 31.7909 36.2091 30 34 30C31.7909 30 30 31.7909 30 34M16 34C16 36.2091 14.2091 38 12 38C9.79086 38 8 36.2091 8 34C8 33.916 8.00259 33.8326 8.00769 33.7499M16 34C16 31.7909 14.2091 30 12 30C9.87484 30 8.13677 31.6573 8.00769 33.7499"
                                    stroke="white" stroke-width="2.5" class="group-hover:stroke-[#151515]" />
                            </svg>
                        </div>
                        <div class="font-poppins text-center md:text-left">
                            <h3 class="text-white group-hover:text-colorTextBlack font-semibold text-[24px]">
                                Envío gratis
                            </h3>
                            <p class="text-white group-hover:text-colorTextBlack font-normal text-[16px]">
                                compras superior a s/200
                            </p>
                        </div>
                    </div>
                    <div class="group bg-colorBackgroundMainTop hover:bg-white p-10 md:duration-1000">
                        <div class="pb-5 flex justify-center items-center md:justify-start">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect x="4.33398" y="8" width="40" height="32" rx="4" stroke="white"
                                    stroke-width="2.5" class="group-hover:stroke-[#151515]" />
                                <circle cx="4" cy="4" r="4" transform="matrix(1 0 0 -1 20.334 28)"
                                    stroke="white" stroke-width="2.5" class="group-hover:stroke-[#151515]" />
                                <circle cx="2" cy="2" r="2" transform="matrix(1 0 0 -1 34.334 26)"
                                    fill="white" class="group-hover:stroke-[#151515]" />
                                <circle cx="2" cy="2" r="2" transform="matrix(1 0 0 -1 10.334 26)"
                                    fill="white" class="group-hover:stroke-[#151515]" />
                            </svg>
                        </div>
                        <div class="font-poppins text-center md:text-left">
                            <h3 class="text-white group-hover:text-colorTextBlack font-semibold text-[24px]">
                                Devolución de dinero
                            </h3>
                            <p class="text-white group-hover:text-colorTextBlack font-normal text-[16px]">
                                Garantía de 30 días
                            </p>
                        </div>
                    </div>

                    <div class="group bg-colorBackgroundMainTop hover:bg-white p-10 md:duration-1000">
                        <div class="pb-5 flex justify-center items-center md:justify-start">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M32.666 16H16.666M32.666 16C37.0843 16 40.666 19.5817 40.666 24V36C40.666 40.4183 37.0843 44 32.666 44H16.666C12.2477 44 8.66602 40.4183 8.66602 36V24C8.66602 19.5817 12.2477 16 16.666 16M32.666 16V12C32.666 7.58172 29.0843 4 24.666 4C20.2477 4 16.666 7.58172 16.666 12V16M24.666 32V28"
                                    stroke="white" stroke-width="2.5" stroke-linecap="round"
                                    class="group-hover:stroke-[#151515]" />
                            </svg>
                        </div>
                        <div class="font-poppins text-center md:text-left">
                            <h3 class="text-white group-hover:text-colorTextBlack font-semibold text-[24px]">
                                Pagos seguros
                            </h3>
                            <p class="text-white group-hover:text-colorTextBlack font-normal text-[16px]">
                                Asegurado por...
                            </p>
                        </div>
                    </div>

                    <div class="group bg-colorBackgroundMainTop hover:bg-white p-10 md:duration-1000">
                        <div class="pb-5 flex justify-center items-center md:justify-start">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M42 38V34.7081C42 33.0725 41.0042 31.6017 39.4856 30.9942L35.4173 29.3669C33.4857 28.5943 31.2844 29.4312 30.354 31.292L30 32C30 32 25 31 21 27C17 23 16 18 16 18L16.708 17.646C18.5688 16.7156 19.4057 14.5143 18.6331 12.5827L17.0058 8.51444C16.3983 6.99581 14.9275 6 13.2919 6H10C7.79086 6 6 7.79086 6 10C6 27.6731 20.3269 42 38 42C40.2091 42 42 40.2091 42 38Z"
                                    stroke="white" stroke-width="2.5" stroke-linejoin="round"
                                    class="group-hover:stroke-[#151515]" />
                            </svg>
                        </div>
                        <div class="font-poppins text-center md:text-left">
                            <h3 class="text-white group-hover:text-colorTextBlack font-semibold text-[24px]">
                                Soporte 24/7
                            </h3>
                            <p class="text-white group-hover:text-colorTextBlack font-normal text-[16px]">
                                Soporte telefónico y por correo electrónico
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="mt-20">
            <h2 class="block md:hidden font-poppins font-semibold text-[40px] w-11/12 mx-auto">
                Categorías
            </h2>

            <div>
                <!-- grilla categorias -->
                <section class="mt-10 hidden md:block relative">
                    <div class="grid grid-cols-4 gap-4 w-10/12 mx-auto">
                        <!-- Columna 1 -->
                        <div class="col-span-2 row-span-2">
                            <div class="bg-gradient-to-l from-[#E4E4E4] to-[#F3F5F7] rounded-3xl flex flex-col h-full">
                                <div class="font-poppins p-10 flex flex-col gap-2">
                                    <h2 class="font-semibold text-[24px]">
                                        Categoría: Fusce sagitis eleifend
                                    </h2>
                                    <p class="my-2 font-normal text-[16px]">
                                        Morbi vitae leo sit amet libero accumsan tempor id vitae
                                        neque. Sed tincidunt fermentum sem 1.
                                    </p>

                                    <div>
                                        <a href="#catalogo"
                                            class="font-semibold text-[16px] bg-transparent md:duration-500 py-1 px-5 rounded-3xl border-[1px] border-colorBorder">Comprar
                                        </a>
                                    </div>
                                </div>
                                <div class="h-full w-full pt-12">
                                    <img src="./images/img/deco_1.png" alt="tablas" class="w-full" />
                                </div>
                            </div>
                        </div>

                        <!-- Columna 2 -->
                        <div class="col-span-2 bg-gradient-to-l from-[#E4E4E4] to-[#F3F5F7] rounded-xl">
                            <div class="flex">
                                <div class="font-poppins basis-1/2 p-4 flex flex-col gap-2">
                                    <h2 class="font-semibold text-[24px]">
                                        Categoría: Fusce sagitis eleifend 2
                                    </h2>
                                    <p class="my-2 font-normal text-[16px]">
                                        Morbi vitae leo sit amet libero accumsan tempor id vitae
                                        neque. Sed tincidunt fermentum sem 2.
                                    </p>

                                    <div>
                                        <a href="#catalogo"
                                            class="font-semibold text-[16px] bg-transparent md:duration-500 py-1 px-5 rounded-3xl border-[1px] border-colorBorder">Comprar
                                        </a>
                                    </div>
                                </div>

                                <div class="basis-1/2">
                                    <img src="./images/img/deco_1.png" alt="tabla gris" class="w-full" />
                                </div>
                            </div>
                        </div>

                        <!-- Columna 3 -->
                        <div class="col-span-1">
                            <div class="bg-[#F3F5F7] flex flex-col h-full rounded-xl">
                                <div class="flex justify-start items-center basis-2/3">
                                    <img src="./images/img/deco_2.png" alt="tabla gris" class="w-full" />
                                </div>

                                <div class="font-poppins basis-1/3 p-4 flex flex-col gap-2">
                                    <h2 class="font-semibold text-[24px]">
                                        Categoría: Fusce sagitis eleifend 3
                                    </h2>
                                    <p class="my-2 font-normal text-[16px]">
                                        Morbi vitae leo sit amet libero accumsan.
                                    </p>

                                    <div>
                                        <a href="#catalogo"
                                            class="font-semibold text-[16px] bg-transparent md:duration-500 py-1 px-5 rounded-3xl border-[1px] border-colorBorder">Comprar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Columna 4 -->
                        <div class="col-span-1">
                            <div class="bg-[#F3F5F7] flex flex-col h-full rounded-xl">
                                <div class="basis-2/3">
                                    <img src="./images/img/deco_3.png" alt="tabla gris" class="w-full" />
                                </div>

                                <div class="font-poppins basis-1/3 p-4 flex flex-col gap-2">
                                    <h2 class="font-semibold text-[24px]">
                                        Categoría: Fusce sagitis eleifend 4
                                    </h2>
                                    <p class="my-2 font-normal text-[16px]">
                                        Morbi vitae leo sit amet libero accumsan. 4
                                    </p>
                                    <div>
                                        <a href="#catalogo"
                                            class="font-semibold text-[16px] bg-transparent md:duration-500 py-1 px-5 rounded-3xl border-[1px] border-colorBorder">Comprar
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end w-11/12 mx-auto mb-4 z-10">
                        <div class="absolute bottom-[-2rem] z-30">
                            <a href="https://wa.me/numerooo?text=Hola%20desde%20mi%20sitio%20web" target="_blank"
                                rel="noopener"><img src="./images/img/WhatsApp.png" alt="whatsapp"
                                    class="w-20 h-20 rounded-full" /></a>
                        </div>
                    </div>
                </section>
                <!-- carrousel categorias -->
                <section class="block md:hidden">
                    <div class="swiper categorias">
                        <!-- <div class="swiper-pagination-categorias mb-24"></div> -->
                        <div class="swiper-wrapper mb-[32x]">
                            <div class="swiper-slide mt-0 mb-4">
                                <div class="flex flex-col p-4">
                                    <div class="flex flex-col bg-[#F8F6F2] rounded-2xl">
                                        <h2 class="font-semibold text-[24px] text-center mt-5">
                                            Categoríssa: Fusce sagitis eleifend
                                        </h2>
                                        <div class="flex justify-center items-center">
                                            <img src="./images/img/deco_1.png" alt="tablas" class="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide mt-0 mb-4">
                                <div class="flex flex-col p-4">
                                    <div class="flex flex-col bg-[#F8F6F2] rounded-2xl">
                                        <h2 class="font-semibold text-[24px] text-center mt-5">
                                            Categoríssa: Fusce sagitis eleifend
                                        </h2>
                                        <div class="flex justify-center items-center">
                                            <img src="./images/img/deco_2.png" alt="tablas" class="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide mt-0 mb-4">
                                <div class="flex flex-col p-4">
                                    <div class="flex flex-col bg-[#F8F6F2] rounded-2xl">
                                        <h2 class="font-semibold text-[24px] text-center mt-5">
                                            Categoríssa: Fusce sagitis eleifend
                                        </h2>
                                        <div class="flex justify-center items-center">
                                            <img src="./images/img/deco_3.png" alt="tablas" class="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide mt-0 mb-4">
                                <div class="flex flex-col p-4">
                                    <div class="flex flex-col bg-[#F8F6F2] rounded-2xl">
                                        <h2 class="font-semibold text-[24px] text-center mt-5">
                                            Categoríssa: Fusce sagitis eleifend
                                        </h2>
                                        <div class="flex justify-center items-center">
                                            <img src="./images/img/deco_1.png" alt="tablas" class="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide mt-0 mb-4">
                                <div class="flex flex-col p-4">
                                    <div class="flex flex-col bg-[#F8F6F2] rounded-2xl">
                                        <h2 class="font-semibold text-[24px] text-center mt-5">
                                            Categoríssa: Fusce sagitis eleifend
                                        </h2>
                                        <div class="flex justify-center items-center">
                                            <img src="./images/img/deco_4.png" alt="tablas" class="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide mt-0 mb-4">
                                <div class="flex flex-col p-4">
                                    <div class="flex flex-col bg-[#F8F6F2] rounded-2xl">
                                        <h2 class="font-semibold text-[24px] text-center mt-5">
                                            Categoríssa: Fusce sagitis eleifend
                                        </h2>
                                        <div class="flex justify-center items-center">
                                            <img src="./images/img/deco_3.png" alt="tablas" class="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination-categorias"></div>
                    </div>
                </section>
            </div>
        </section>


         <!-- productos destacados -->
      <section class="font-poppins">
        <div
          class="grid grid-cols-1 gap-12 md:gap-0 md:grid-cols-4 grid-rows-1 pt-12 w-11/12 mx-auto"
        >
          <div
            class="col-span-1 md:col-span-3 order-1 md:order-1 flex flex-col gap-2"
          >
            <h2
              class="font-medium text-[40px] mt-2 leading-none md:leading-tight"
            >
              Productos destacados
            </h2>
            <p class="font-normal text-lg">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo,
              officiis tempora harum placeat Lorem, ipsum dolor sit amet
              consectetur adipisicing elit. Nemo, officiis tempora harum
              placeat.
            </p>
          </div>
          <div
            class="col-span-1 md:col-span-1 order-3 md:order-2 flex justify-center items-center w-full"
          >
            <a
              href="catalogo.html"
              class="font-semibold text-[16px] bg-transparent md:duration-500 py-4 px-5 rounded-3xl border-[1px] border-colorBorder flex-initial w-full md:w-56 text-center inline-block"
            >
              Ver todo
            </a>
          </div>

          <div class="col-span-1 md:col-span-4 order-2 md:order-3">
            <!-- grilla de productos destacados -->
            <div class="md:hidden grid grid-cols-2 gap-5">
              <div class="flex flex-col relative">
                <div
                  class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                >
                  <div class="px-4">
                    <a
                      class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                    >
                      Nuevo
                    </a>
                  </div>
                  <div>
                    <div class="relative flex justify-center items-center">
                      <img src="./images/img/deco_1.png" class="" />
                    </div>

                    <!-- ------ -->
                    <div class="addProduct text-center flex justify-center">
                      <a
                        href="#addProducto"
                        class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                      >
                        Agregar al carrito
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                >
                  <div class="flex items-center gap-2">
                    <div class="flex md:gap-2 py-2">
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                    </div>
                    <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                  </div>
                  <h2
                    class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                  >
                    Fusce sagittis eleifend sem eget dictum
                  </h2>
                  <p
                    class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                  >
                    <span>$595.00</span>

                    <span
                      class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                      >$1000.00</span
                    >
                  </p>
                </div>
              </div>

              <div class="flex flex-col relative">
                <div
                  class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                >
                  <div class="px-4">
                    <a
                      class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                    >
                      Nuevo
                    </a>
                  </div>
                  <div>
                    <div class="relative flex justify-center items-center">
                      <img src="./images/img/deco_2.png" class="" />
                    </div>

                    <!-- ------ -->
                    <div class="addProduct text-center flex justify-center">
                      <a
                        href="#addProducto"
                        class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                      >
                        Agregar al carrito
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                >
                  <div class="flex items-center gap-2">
                    <div class="flex md:gap-2 py-2">
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                    </div>
                    <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                  </div>
                  <h2
                    class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                  >
                    Fusce sagittis eleifend sem eget dictum
                  </h2>
                  <p
                    class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                  >
                    <span>$595.00</span>

                    <span
                      class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                      >$1000.00</span
                    >
                  </p>
                </div>
              </div>

              <div class="flex flex-col relative">
                <div
                  class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                >
                  <div class="px-4">
                    <a
                      class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                    >
                      Nuevo
                    </a>
                  </div>
                  <div>
                    <div class="relative flex justify-center items-center">
                      <img src="./images/img/deco_3.png" class="" />
                    </div>

                    <!-- ------ -->
                    <div class="addProduct text-center flex justify-center">
                      <a
                        href="#addProducto"
                        class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                      >
                        Agregar al carrito
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                >
                  <div class="flex items-center gap-2">
                    <div class="flex md:gap-2 py-2">
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                    </div>
                    <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                  </div>
                  <h2
                    class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                  >
                    Fusce sagittis eleifend sem eget dictum
                  </h2>
                  <p
                    class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                  >
                    <span>$595.00</span>

                    <span
                      class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                      >$1000.00</span
                    >
                  </p>
                </div>
              </div>

              <div class="flex flex-col relative">
                <div
                  class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                >
                  <div class="px-4">
                    <a
                      class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                    >
                      Nuevo
                    </a>
                  </div>
                  <div>
                    <div class="relative flex justify-center items-center">
                      <img src="./images/img/deco_4.png" class="" />
                    </div>

                    <!-- ------ -->
                    <div class="addProduct text-center flex justify-center">
                      <a
                        href="#addProducto"
                        class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                      >
                        Agregar al carrito
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                >
                  <div class="flex items-center gap-2">
                    <div class="flex md:gap-2 py-2">
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                    </div>
                    <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                  </div>
                  <h2
                    class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                  >
                    Fusce sagittis eleifend sem eget dictum
                  </h2>
                  <p
                    class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                  >
                    <span>$595.00</span>

                    <span
                      class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                      >$1000.00</span
                    >
                  </p>
                </div>
              </div>
            </div>

            <!-- carrousel productos destacados -->
            <div class="hidden md:block">
              <div class="swiper productos-destacados my-5">
                <div
                  class="swiper-pagination-productos-destacados mb-80 md:mb-32"
                ></div>
                <div class="swiper-wrapper mt-[80px]">
                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_1.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_3.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_3.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_1.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_2.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_3.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_2.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="swiper-pagination-productos-destacados"></div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- productos en oferta -->
      <section class="font-poppins mt-10 mb-20">
        <div
          class="grid grid-cols-1 gap-12 md:gap-0 md:grid-cols-4 grid-rows-1 pt-12 w-11/12 mx-auto"
        >
          <div class="col-span-1 md:col-span-3 order-1 md:order-1">
            <h2
              class="font-medium text-[40px] mt-2 leading-none md:leading-tight"
            >
              Productos en Oferta
            </h2>

            <p class="font-normal text-lg basis-3/6">
              Etiam cursus semper odio non consectetur. Pellentesque et molestie
              risus. Aliquam eu nibh pulvinar, sollicitudin sapien vel, aliquam
              orci.
            </p>
          </div>

          <div
            class="col-span-1 md:col-span-1 order-3 md:order-2 flex justify-center items-center w-full"
          >
            <a
              href="catalogo.html"
              class="font-semibold text-[16px] bg-transparent md:duration-500 py-4 px-5 rounded-3xl border-[1px] border-colorBorder flex-initial w-full md:w-56 text-center inline-block"
            >
              Ver todo
            </a>
          </div>

          <div class="col-span-1 md:col-span-4 order-2 md:order-3">
            <!-- grilla de productos en oferta -->
            <div class="md:hidden grid grid-cols-2 gap-5">
              <div class="flex flex-col relative">
                <div
                  class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                >
                  <div class="px-4">
                    <a
                      class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                    >
                      En programación
                    </a>
                  </div>
                  <div>
                    <div class="relative flex justify-center items-center">
                      <img src="./images/img/deco_1.png" class="" />
                    </div>

                    <!-- ------ -->
                    <div class="addProduct text-center flex justify-center">
                      <a
                        href="#addProducto"
                        class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                      >
                        Agregar al carrito
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                >
                  <div class="flex items-center gap-2">
                    <div class="flex md:gap-2 py-2">
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                    </div>
                    <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                  </div>
                  <h2
                    class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                  >
                    Fusce sagittis eleifend sem eget dictum
                  </h2>
                  <p
                    class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                  >
                    <span>$595.00</span>

                    <span
                      class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                      >$1000.00</span
                    >
                  </p>
                </div>
              </div>

              <div class="flex flex-col relative">
                <div
                  class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                >
                  <div class="px-4">
                    <a
                      class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                    >
                      En programación
                    </a>
                  </div>
                  <div>
                    <div class="relative flex justify-center items-center">
                      <img src="./images/img/deco_2.png" class="" />
                    </div>

                    <!-- ------ -->
                    <div class="addProduct text-center flex justify-center">
                      <a
                        href="#addProducto"
                        class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                      >
                        Agregar al carrito
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                >
                  <div class="flex items-center gap-2">
                    <div class="flex md:gap-2 py-2">
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                    </div>
                    <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                  </div>
                  <h2
                    class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                  >
                    Fusce sagittis eleifend sem eget dictum
                  </h2>
                  <p
                    class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                  >
                    <span>$595.00</span>

                    <span
                      class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                      >$1000.00</span
                    >
                  </p>
                </div>
              </div>

              <div class="flex flex-col relative">
                <div
                  class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                >
                  <div class="px-4">
                    <a
                      class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                    >
                      En programación
                    </a>
                  </div>
                  <div>
                    <div class="relative flex justify-center items-center">
                      <img src="./images/img/deco_3.png" class="" />
                    </div>

                    <!-- ------ -->
                    <div class="addProduct text-center flex justify-center">
                      <a
                        href="#addProducto"
                        class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                      >
                        Agregar al carrito
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                >
                  <div class="flex items-center gap-2">
                    <div class="flex md:gap-2 py-2">
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                    </div>
                    <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                  </div>
                  <h2
                    class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                  >
                    Fusce sagittis eleifend sem eget dictum
                  </h2>
                  <p
                    class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                  >
                    <span>$595.00</span>

                    <span
                      class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                      >$1000.00</span
                    >
                  </p>
                </div>
              </div>

              <div class="flex flex-col relative">
                <div
                  class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                >
                  <div class="px-4">
                    <a
                      class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                    >
                      En programación
                    </a>
                  </div>
                  <div>
                    <div class="relative flex justify-center items-center">
                      <img src="./images/img/deco_4.png" class="" />
                    </div>

                    <!-- ------ -->
                    <div class="addProduct text-center flex justify-center">
                      <a
                        href="#addProducto"
                        class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                      >
                        Agregar al carrito
                      </a>
                    </div>
                  </div>
                </div>
                <div
                  class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                >
                  <div class="flex items-center gap-2">
                    <div class="flex md:gap-2 py-2">
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img src="./images/svg/start.svg" alt="estrella" />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                      <img
                        src="./images/svg/start_sin_color.svg"
                        alt="estrella"
                      />
                    </div>
                    <p class="font-semibold text-[14px] text-[#6C7275]">(35)</p>
                  </div>
                  <h2
                    class="font-semibold text-[12px] md:text-[16px] text-[#141718]"
                  >
                    Fusce sagittis eleifend sem eget dictum
                  </h2>
                  <p
                    class="font-semibold text-[8px] md:text-[14px] text-[#121212] flex gap-5"
                  >
                    <span>$595.00</span>

                    <span
                      class="font-normal text-[8px] md:text-[14px] text-[#6C7275] line-through"
                      >$1000.00</span
                    >
                  </p>
                </div>
              </div>
            </div>

            <!-- carrousel productos oferta -->
            <div class="hidden md:block">
              <div class="swiper productos-oferta my-5">
                <div
                  class="swiper-pagination-productos-oferta mb-80 md:mb-32"
                ></div>

                <div class="swiper-wrapper mt-[80px]">
                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-32 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            En programación
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_1.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_2.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_3.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_4.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="swiper-slide rounded-2xl">
                    <div class="flex flex-col relative">
                      <div
                        class="bg-colorBackgroundProducts rounded-2xl pt-12 pb-5 md:pb-8 product_container basis-4/5 flex flex-col justify-center relative"
                      >
                        <div class="px-4">
                          <a
                            class="font-semibold text-[8px] md:text-[12px] bg-[#EB5D2C] py-2 px-2 flex-initial w-24 text-center text-white rounded-[5px] absolute top-[18px] z-10"
                          >
                            Nuevo
                          </a>
                        </div>
                        <div>
                          <div
                            class="relative flex justify-center items-center"
                          >
                            <img src="./images/img/deco_1.png" class="" />
                          </div>

                          <!-- ------ -->
                          <div
                            class="addProduct text-center flex justify-center"
                          >
                            <a
                              href="#addProducto"
                              class="font-semibold text-[9px] md:text-[16px] bg-[#74A68D] py-3 px-5 flex-initial w-32 md:w-56 text-center text-white rounded-3xl"
                            >
                              Agregar al carrito
                            </a>
                          </div>
                        </div>
                      </div>
                      <div
                        class="my-2 flex flex-col items-start gap-2 basis-1/5 px-2"
                      >
                        <div class="flex items-center gap-2">
                          <div class="flex gap-2 py-2">
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img src="./images/svg/start.svg" alt="estrella" />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                            <img
                              src="./images/svg/start_sin_color.svg"
                              alt="estrella"
                            />
                          </div>
                          <p class="font-semibold text-[14px] text-[#6C7275]">
                            (35)
                          </p>
                        </div>
                        <h2 class="font-semibold text-[16px] text-[#141718]">
                          Fusce sagittis eleifend sem eget dictum
                        </h2>
                        <p
                          class="font-semibold text-[14px] text-[#121212] flex gap-5"
                        >
                          <span>$595.00</span>

                          <span
                            class="font-normal text-[14px] text-[#6C7275] line-through"
                            >$1000.00</span
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="swiper-pagination-productos-oferta"></div> -->
              </div>
            </div>
          </div>
        </div>
      </section>


      <section>
        <div
          class="flex flex-col gap-5 lg:grid lg:grid-cols-2 lg:grid-rows-[700px] h-[100%]"
        >
          <div class="basis-1/2 flex items-center justify-center">
            <img
              src="./images/img/vestibulo.png"
              alt="vestibulo"
              class="w-full h-full object-cover object-center"
            />
          </div>
          <div class="basis-1/2 beneficioRelative px-5 md:px-10">
            <!-- aca va beneficion -->
            <div class="swiper myBeneficios h-full">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="flex flex-col gap-5 my-12">
                    <p class="font-semibold text-[24px]">Beneficios 01</p>

                    <h2
                      class="font-semibold text-[48px] leading-none md:leading-tight"
                    >
                      Vestibulum mole massa nec hendrerit, nec com nulla sed
                      magna
                    </h2>

                    <p class="font-normal text-[18px]">
                      Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                      aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                      vestibulum, ante nibh rutrum erat, ac malesuada neque
                      tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                      Praesent et libero a tellus.
                    </p>

                    <p class="font-normal text-[18px]">
                      Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                      aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                      vestibulum, ante nibh rutrum erat, ac malesuada neque
                      tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                      Praesent et libero a tellus varius faucibus. Mauris velit
                      urna, rhoncus consequat euismod.
                    </p>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="flex flex-col gap-5 mt-10">
                    <p class="font-semibold text-[24px]">Beneficios 02</p>

                    <h2
                      class="font-semibold text-[48px] leading-none md:leading-tight"
                    >
                      Vestibulum mole massa nec hendrerit, nec com nulla sed
                      magna
                    </h2>

                    <p class="font-normal text-[18px]">
                      Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                      aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                      vestibulum, ante nibh rutrum erat, ac malesuada neque
                      tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                      Praesent et libero a tellus.
                    </p>

                    <p class="font-normal text-[18px]">
                      Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                      aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                      vestibulum, ante nibh rutrum erat, ac malesuada neque
                      tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                      Praesent et libero a tellus varius faucibus. Mauris velit
                      urna, rhoncus consequat euismod.
                    </p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="flex flex-col gap-5 mt-10">
                    <p class="font-semibold text-[24px]">Beneficios 03</p>

                    <h2
                      class="font-semibold text-[48px] leading-none md:leading-tight"
                    >
                      Vestibulum mole massa nec hendrerit, nec com nulla sed
                      magna
                    </h2>

                    <p class="font-normal text-[18px]">
                      Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                      aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                      vestibulum, ante nibh rutrum erat, ac malesuada neque
                      tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                      Praesent et libero a tellus.
                    </p>

                    <p class="font-normal text-[18px]">
                      Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                      aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                      vestibulum, ante nibh rutrum erat, ac malesuada neque
                      tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                      Praesent et libero a tellus varius faucibus. Mauris velit
                      urna, rhoncus consequat euismod.
                    </p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="flex flex-col gap-5 mt-10">
                    <p class="font-semibold text-[24px]">Beneficios 04</p>

                    <h2
                      class="font-semibold text-[48px] leading-none md:leading-tight"
                    >
                      Vestibulum mole massa nec hendrerit, nec com nulla sed
                      magna
                    </h2>

                    <p class="font-normal text-[18px]">
                      Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                      aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                      vestibulum, ante nibh rutrum erat, ac malesuada neque
                      tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                      Praesent et libero a tellus.
                    </p>

                    <p class="font-normal text-[18px]">
                      Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                      aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                      vestibulum, ante nibh rutrum erat, ac malesuada neque
                      tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                      Praesent et libero a tellus varius faucibus. Mauris velit
                      urna, rhoncus consequat euismod.
                    </p>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination-beneficios"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="my-12">
        <div class="bg-[#F5F5F5] font-poppins">
          <div
            class="relative bg-[#F5F5F5] px-6 pt-10 pb-8 mt-8 ring-gray-900/5 sm:mx-auto sm:rounded-lg sm:px-10"
          >
            <div class="mx-auto px-5">
              <div class="flex flex-col items-center">
                <h2
                  class="font-semibold text-[40px] text-[#151515] text-center leading-none md:leading-tight"
                >
                  Vestibulum mole massa, nec com nulla sed magna
                </h2>
              </div>
              <div
                class="mx-auto mt-8 grid max-w-[900px] divide-y divide-neutral-200"
              >
                <div class="py-5">
                  <details class="group">
                    <summary
                      class="flex cursor-pointer list-none items-center justify-between font-medium"
                    >
                      <span class="font-bold text-[20px] text-[#151515]">
                        ¿Mauris at velit interdum, bibendum ligula quis, varius
                        libersssssssso?</span
                      >
                      <span class="transition group-open:rotate-180">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 18 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                            stroke="#EB5D2C"
                            stroke-width="3.33333"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                      Springerdata offers a variety of billing options,
                      including monthly and annual subscription plans, as well
                      as pay-as-you-go pricing for certain services. Payment is
                      typically made through a credit card or other secure
                      online payment method.
                    </p>
                  </details>
                </div>
                <div class="py-5">
                  <details class="group">
                    <summary
                      class="flex cursor-pointer list-none items-center justify-between font-medium"
                    >
                      <span class="font-bold text-[20px] text-[#151515]">
                        ¿Mauris at velit interdum, bibendum ligula quis, varius
                        libero?</span
                      >
                      <span class="transition group-open:rotate-180">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 18 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                            stroke="#EB5D2C"
                            stroke-width="3.33333"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                      Springerdata offers a variety of billing options,
                      including monthly and annual subscription plans, as well
                      as pay-as-you-go pricing for certain services. Payment is
                      typically made through a credit card or other secure
                      online payment method.
                    </p>
                  </details>
                </div>
                <div class="py-5">
                  <details class="group">
                    <summary
                      class="flex cursor-pointer list-none items-center justify-between font-medium"
                    >
                      <span class="font-bold text-[20px] text-[#151515]">
                        ¿Mauris at velit interdum, bibendum ligula quis, varius
                        libero?</span
                      >
                      <span class="transition group-open:rotate-180">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 18 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                            stroke="#EB5D2C"
                            stroke-width="3.33333"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                      Springerdata offers a variety of billing options,
                      including monthly and annual subscription plans, as well
                      as pay-as-you-go pricing for certain services. Payment is
                      typically made through a credit card or other secure
                      online payment method.
                    </p>
                  </details>
                </div>
                <div class="py-5">
                  <details class="group">
                    <summary
                      class="flex cursor-pointer list-none items-center justify-between font-medium"
                    >
                      <span class="font-bold text-[20px] text-[#151515]">
                        ¿Mauris at velit interdum, bibendum ligula quis, varius
                        libero?</span
                      >
                      <span class="transition group-open:rotate-180">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 18 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                            stroke="#EB5D2C"
                            stroke-width="3.33333"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                      Springerdata offers a variety of billing options,
                      including monthly and annual subscription plans, as well
                      as pay-as-you-go pricing for certain services. Payment is
                      typically made through a credit card or other secure
                      online payment method.
                    </p>
                  </details>
                </div>
                <div class="py-5">
                  <details class="group">
                    <summary
                      class="flex cursor-pointer list-none items-center justify-between font-medium"
                    >
                      <span class="font-bold text-[20px] text-[#151515]">
                        ¿Mauris at velit interdum, bibendum ligula quis, varius
                        libero?</span
                      >
                      <span class="transition group-open:rotate-180">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 18 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                            stroke="#EB5D2C"
                            stroke-width="3.33333"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                      Springerdata offers a variety of billing options,
                      including monthly and annual subscription plans, as well
                      as pay-as-you-go pricing for certain services. Payment is
                      typically made through a credit card or other secure
                      online payment method.
                    </p>
                  </details>
                </div>
                <div class="py-5">
                  <details class="group">
                    <summary
                      class="flex cursor-pointer list-none items-center justify-between font-medium"
                    >
                      <span class="font-bold text-[20px] text-[#151515]">
                        ¿Mauris at velit interdum, bibendum ligula quis, varius
                        libero?</span
                      >
                      <span class="transition group-open:rotate-180">
                        <svg
                          width="18"
                          height="20"
                          viewBox="0 0 18 20"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M16.2923 11.3882L9.00065 18.3327M9.00065 18.3327L1.70898 11.3882M9.00065 18.3327L9.00065 1.66602"
                            stroke="#EB5D2C"
                            stroke-width="3.33333"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          />
                        </svg>
                      </span>
                    </summary>
                    <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                      Springerdata offers a variety of billing options,
                      including monthly and annual subscription plans, as well
                      as pay-as-you-go pricing for certain services. Payment is
                      typically made through a credit card or other secure
                      online payment method.
                    </p>
                  </details>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="font-poppins text-[#151515] w-full testimoniosRelative">
        <h2
          class="w-11/12 mx-auto font-semibold text-[40px] text-center md:text-left"
        >
          Testimonios
        </h2>

        <div class="swiper myTestimonios mt-5">
          <div class="swiper-pagination-testimonios"></div>
          <div class="swiper-wrapper mb-12 md:mt-[80px]">
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="carousel-cell bg-[#F5F5F5] p-10">
                <div class="flex gap-2 py-2">
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                  <img src="./images/svg/start_sin_color.svg" alt="estrella" />
                </div>
                <div class="flex gap-5 items-center">
                  <p class="font-bold text-[20px]">Name N.</p>
                  <img src="./images/svg/check.svg" alt="check" />
                </div>
                <p class="font-normal text-[16px]">
                  “Donec ultricies aliquam tortor, eleifend ultricies sapien
                  fringilla condimentum. Aliquam erat volutpat. Morbi ac nibh
                  dolor. Vivamus eget placerat erat, eget consequat nisi.”
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

    </main>


@section('scripts_improtados')
    <script></script>
@stop

@stop
