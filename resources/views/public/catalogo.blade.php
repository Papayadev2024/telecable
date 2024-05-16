@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

  <main class="flex flex-col gap-12 -mb-12">

    {{-- <section class="flex gap-2 items-center w-11/12 mx-auto">
            <a href="#" class="font-regularDisplay text-text20 xl:text-text24 text-gray-500 leading-none">
                Home
            </a>
            <div class="flex justify-center items-center">
                <img src="{{asset('images/svg/flecha.svg')}}" alt="doomine" />
            </div>
            <a href="#" class="font-mediumDisplay text-text20 xl:text-text24 text-black leading-none">
                Categorías
            </a>
        </section> --}}
    <!--  -->

    <div class="w-11/12 mx-auto mt-10">
      <div class="grid grid-cols-2 row-span-2 md:grid-cols-4 lg:row-span-1 gap-2 md:gap-0">
        <div class="order-3 md:order-1 flex justify-between md:pr-2 items-center">
          <p class="font-boldDisplay text-[20px] xl:text-text28 hidden md:block">
            Categorías
          </p>
          <div class="flex justify-center items-center open">
            <img src="{{ asset('images/svg/catalogo_filtro_icon.svg') }}" alt="logo_filtros" />
          </div>
        </div>

        <div class="md:pl-9 order-1 md:order-2 flex items-center">
          <h3 class="font-boldItalicDisplay text-text20 md:text-text24 text-left w-full lg:w-auto">
            @if ($filtro == 0)
              / Productos /
            @else
              / Productos - {{ $categoria->name }} /
            @endif
          </h3>
        </div>

        <div class="flex items-center gap-2 order-4 md:order-3 justify-end md:pr-5">
          <p class="text-[#CCCCCC] font-regularDisplay text-text14 md:text-text18">
            Mostrando <span>1</span>-<span>20</span> de
            <span>100</span> productos
          </p>
        </div>

        <div class="dropdown w-full order-2 md:order-4">
          <div
            class="input-box focus:outline-none font-mediumDisplay text-text16 md:text-text20 mr-20 shadow-md px-2 bg-[#F5F5F5]">
            Ordenar por
          </div>
          <div class="list z-[10]">
            <div class="w-full">
              <input type="radio" name="drop1" id="id11" class="radio" />

              <label for="id11"
                class="font-regularDisplay text-text20 hover:font-bold md:duration-100 hover:text-white ordenar">
                <span class="name inline-block w-full">Precio más alto</span>
              </label>
            </div>

            <div class="w-full">
              <input type="radio" name="drop1" id="id12" class="radio" />
              <label for="id12"
                class="font-regularDisplay text-text20 hover:font-bold md:duration-100 hover:text-white ordenar">
                <span class="name inline-block w-full">
                  Precio más bajo
                </span>
              </label>
            </div>

            <div class="w-full">
              <input type="radio" name="drop1" id="id13" class="radio" />
              <label for="id13"
                class="font-regularDisplay text-text20 hover:font-bold md:duration-100 hover:text-white comentar">
                <span class="name inline-block w-full"> Antiguo </span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <div class="flex flex-col md:flex-row md:gap-10 w-11/12 mx-auto font-poppins">
      <aside class="flex flex-col gap-10 md:basis-3/12">

        <div class="hidden-categoria-precio">
          <div class="hidden md:flex flex-col gap-10 show-categoria-precio">
            <div class="flex flex-col gap-2 text-text18 xl:text-text20">



              <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                <a href="/catalogo/0" class="{{ $filtro == 0 ? 'font-semibold underline' : 'text-black' }}">Todas</a>
              </div>

              @foreach ($categorias as $item)
                <a href="/catalogo/{{ $item->id }}">
                  <div
                    class="font-boldDisplay flex justify-start gap-2 items-center w-full @if ($filtro == 0) @else

                                        {{ $item->id == $categoria->id ? 'font-semibold underline text-black' : '' }} @endif ">
                    {{ $item->name }}
                  </div>
                </a>
              @endforeach


            </div>

            <div>
              <div class="relative">
                <div class="mx-auto">
                  <div class="mx-auto grid max-w-[900px] divide-y divide-neutral-200">
                    <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium pr-1">
                        <span class="font-boldDisplay text-text20 text-[#151515]">
                          Precio
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

                      <div class="group-open:animate-fadeIn mt-5">
                        <div class="flex flex-col gap-2 text-text18 xl:text-text20">
                          <a href="/catalogo/{{ $filtro }}?rangefrom=0&rangeto=0"
                            class="font-regularDisplay  @if ($rangefrom == 0 && $rangeto == 0) font-semibold underline
                                                    @else
                                                    font-normal @endif">Todos
                            los precios</a>
                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <a href="/catalogo/{{ $filtro }}?rangefrom=0&rangeto=50"
                              class="cursor-pointer
                                                        @if ($rangefrom == 0 && $rangeto == 50) font-semibold
                                                        @else
                                                        font-normal @endif
                                                        ">
                              S/0 - S/50
                            </a>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <a href="/catalogo/{{ $filtro }}?rangefrom=51&rangeto=100"
                              class="cursor-pointer
                                                        @if ($rangefrom == 51 && $rangeto == 100) font-semibold
                                                        @else
                                                        font-normal @endif
                                                        ">
                              S/51 - S/100
                            </a>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <a href="/catalogo/{{ $filtro }}?rangefrom=101&rangeto=150"
                              class="cursor-pointer
                                                        @if ($rangefrom == 101 && $rangeto == 150) font-semibold
                                                        @else
                                                        font-normal @endif
                                                        ">
                              S/101 - S/150
                            </a>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <a href="/catalogo/{{ $filtro }}?rangefrom=151&rangeto=200"
                              class="cursor-pointer
                                                        @if ($rangefrom == 151 && $rangeto == 200) font-semibold
                                                        @else
                                                        font-normal @endif
                                                        ">
                              S/151 - S/200
                            </a>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <a href="/catalogo/{{ $filtro }}?rangefrom=201&rangeto=10000"
                              class="cursor-pointer
                                                        @if ($rangefrom == 201 && $rangeto == 10000) font-semibold
                                                        @else
                                                        font-normal @endif
                                                        ">
                              S/201 a Más
                            </a>
                          </div>
                        </div>
                      </div>
                    </details>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="relative">
                <div class="mx-auto">
                  <div class="mx-auto grid max-w-[900px] divide-y divide-neutral-200">
                    <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium pr-1">
                        <span class="font-boldDisplay text-text20 text-[#151515]">
                          Colores
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

                      <div class="group-open:animate-fadeIn mt-5">
                        <div
                          class="grid grid-cols-4 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-2 place-items-center">
                          <div class="colors w-14 h-14 bg-[#F1EFEE] rounded-[50%] cursor-pointer">
                          </div>
                          <div class="colors w-14 h-14 bg-[#212020] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>

                          <div class="colors w-14 h-14 bg-[#6DA783] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>

                          <div class="colors w-14 h-14 bg-[#B8CDEE] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>

                          <div class="colors w-14 h-14 bg-[#424047] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>

                          <div class="colors w-14 h-14 bg-[#97A0A0] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>

                          <div class="colors w-14 h-14 bg-[#436956] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>

                          <div class="colors w-14 h-14 bg-[#5B7EBB] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>

                          <div class="colors w-14 h-14 bg-[#3A383C] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>

                          <div class="colors w-14 h-14 bg-[#D5D4D2] rounded-[50%] cursor-pointer active:from-amber-100">
                          </div>
                        </div>
                      </div>
                    </details>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="relative">
                <div class="mx-auto">
                  <div class="mx-auto grid max-w-[900px] divide-y divide-neutral-200">
                    <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium pr-1">
                        <span class="font-boldDisplay text-text20 text-[#151515]">
                          Tallas
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

                      <div class="group-open:animate-fadeIn mt-5">
                        <div class="flex flex-col gap-2 text-text18 xl:text-text22">
                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <input type="checkbox" id="x-small" class="w-4 h-4 accent-[#000000] cursor-pointer" />
                            <label for="x-small" class="cursor-pointer">
                              X-Small
                            </label>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <input type="checkbox" id="small" class="w-4 h-4 accent-[#000000] cursor-pointer" />
                            <label for="small" class="cursor-pointer">
                              Small
                            </label>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <input type="checkbox" id="medium" class="w-4 h-4 accent-[#000000] cursor-pointer" />
                            <label for="medium" class="cursor-pointer">
                              Medium
                            </label>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <input type="checkbox" id="large" class="w-4 h-4 accent-[#000000] cursor-pointer" />
                            <label for="large" class="cursor-pointer">
                              Large
                            </label>
                          </div>
                        </div>
                      </div>
                    </details>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="relative">
                <div class="mx-auto">
                  <div class="mx-auto grid max-w-[900px] divide-y divide-neutral-200">
                    <details class="group">
                      <summary class="flex cursor-pointer list-none items-center justify-between font-medium pr-1">
                        <span class="font-boldDisplay text-text20 text-[#151515]">
                          Colección
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

                      <div class="group-open:animate-fadeIn mt-5">
                        <div class="flex flex-col gap-2 text-text18 xl:text-text22">
                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <input type="checkbox" id="real-sensation"
                              class="w-4 h-4 accent-[#000000] cursor-pointer" />
                            <label for="real-sensation" class="cursor-pointer">
                              Real Sensation
                            </label>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <input type="checkbox" id="autumm-bBreezes"
                              class="w-4 h-4 accent-[#000000] cursor-pointer" />
                            <label for="autumm-bBreezes" class="cursor-pointer">
                              Autumm Breezes
                            </label>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <input type="checkbox" id="summer-dreams"
                              class="w-4 h-4 accent-[#000000] cursor-pointer" />
                            <label for="summer-dreams" class="cursor-pointer">
                              Summer Dreams
                            </label>
                          </div>

                          <div class="font-regularDisplay flex justify-start gap-2 items-center w-full">
                            <input type="checkbox" id="enjoy-collection"
                              class="w-4 h-4 accent-[#000000] cursor-pointer" />
                            <label for="enjoy-collection" class="cursor-pointer">
                              Enjoy Collection
                            </label>
                          </div>
                        </div>
                      </div>
                    </details>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <!-- modal filtros -->
      <!-- <a class="mostrar-modal">Filtrossss</a> -->
      <div class="modal-filtros z-[100]">
        <div class="modal__mostrar-filtro">
          <div class="flex justify-between">
            <p class="font-boldDisplay text-[20px]">Categorías</p>
            <a href="#" class="modal__close-filtro">
              <img src="{{ asset('images/svg/close.svg') }}" alt="close" />
            </a>
          </div>
          <div class="overflow-y-scroll h-[500px] scroll__categorias">
            <div class="addCategoriaPrecio flex flex-col gap-5"></div>
          </div>
        </div>
      </div>
      <!-- --- -->
      <section class="md:basis-9/12 flex flex-col gap-10">
        <div class="grid grid-cols-2 lg:grid-cols-3 gap-5 z-[0]">

          @foreach ($productos as $item)
            <div class="flex flex-col gap-5 relative col-span-1 order-1 lg:order-1">
              <div class="product_container">
                <img src="{{ asset($item->imagen) }}" alt="{{ $item->name }}" class="w-full h-full" />

                <div class="addProduct text-center flex justify-center">
                  <a href="{{ route('producto', $item->id) }}"
                    class="leading-none font-mediumDisplay text-text12 md:text-text14 bg-[#000000] px-1 py-2 md:py-2 2lg:px-5 flex-initial w-32 md:w-36 2lg:py-3 2lg:w-52 text-center text-white rounded-3xl xl:text-text20 xl:w-60">
                    Ver producto
                  </a>
                </div>
              </div>

              <div class="flex flex-col gap-2">
                <div
                  class="flex flex-col 2xl:flex-row md:justify-between font-boldDisplay text-black gap-2 order-2 lg:order-1">
                  <p class="text-text14 md:text-text16 xl:text-text20">
                    {{ $item->producto }}
                  </p>
                  <div class="flex font-boldDisplay text-black items-center gap-2">
                    <div class="flex font-boldDisplay text-black items-center gap-2">
                      @if ($item->descuento == 0)
                        <p class="text-text14 md:text-text16 xl:text-text20">
                          s/{{ $item->precio }}
                        </p>
                      @else
                        <p class="text-text14 md:text-text16 xl:text-text20">
                          s/{{ $item->descuento }}
                        </p>
                        <p
                          class="text-text10 md:text-text16 line-through text-gray-400 font-mediumDisplay xl:text-text18">
                          s/{{ $item->precio }}
                        </p>
                      @endif
                    </div>
                  </div>
                </div>

                <div class="order-1 lg:order-2">
                  <p class="font-boldDisplay text-text12 md:text-text14 xl:text-text16 text-textGray">
                    @if (!is_null($item->categoria) && !is_null($item->categoria->name))
                      {{ $item->categoria->name }}
                    @else
                      S/C
                    @endif
                  </p>
                </div>
              </div>

              <div class="absolute top-[10px] left-[10px] md:top-[20px] md:left-[20px]">
                <div class="flex gap-3 flex-wrap">
                  @foreach ($item->tags as $tag)
                    <div class="bg-white  rounded-md py-1 px-2">
                      <p class="font-regularDisplay text-[8px] md:text-text16 text-textBlack ">
                        {{ $tag->name }}
                      </p>
                    </div>
                  @endforeach
                </div>
              </div>
            </div>
          @endforeach
        </div>

        {{-- <div class="hidden md:block">
                    <nav class="mb-4 flex justify-between" aria-label="Pagination">
                        <a class="px-4 py-2 flex gap-2 border-[1.5px] border-gray-300 rounded-lg group items-center hover:bg-black md:duration-500"
                            href="/page/1">
                            <div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.8332 10.0013H4.1665M4.1665 10.0013L9.99984 15.8346M4.1665 10.0013L9.99984 4.16797"
                                        stroke="black" stroke-width="1.67" stroke-linecap="round"
                                        stroke-linejoin="round" class="group-hover:stroke-strokeWithe md:duration-500" />
                                </svg>
                            </div>
                            <span
                                class="font-mediumDisplay text-[16px] xl:text-text20 text-[#000000] group-hover:text-textWhite md:duration-500">Anterior</span>
                        </a>

                        <div class="flex text-[#000000] font-mediumDisplay items-end">
                            <a class="rounded-lg px-4 py-2 hover:bg-[#F5F5F5] duration-300 active:bg-[#F5F5F5] text-text20"
                                href="/page/2">1
                            </a>

                            <a class="rounded-lg px-4 py-2 text-[#495560] hover:bg-[#F5F5F5] duration-300 text-text20"
                                href="/page/2">2
                            </a>

                            <a class="rounded-lg px-4 py-2 text-[#495560] hover:bg-[#F5F5F5] duration-300 text-text20"
                                href="/page/3">3
                            </a>

                            <p>.....</p>

                            <a class="rounded-lg px-4 py-2 text-[#495560] hover:bg-[#F5F5F5] duration-300 text-text20"
                                href="/page/3">4
                            </a>
                        </div>

                        <a class="px-4 py-2 flex gap-2 border-[1.5px] border-gray-300 rounded-lg group items-center hover:bg-black md:duration-500"
                            href="/page/1">
                            <span
                                class="font-mediumDisplay text-[16px] xl:text-text20 text-[#000000] group-hover:text-textWhite md:duration-500">
                                Próxima
                            </span>

                            <div>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M4.1665 10.0013H15.8332M15.8332 10.0013L9.99984 4.16797M15.8332 10.0013L9.99984 15.8346"
                                        stroke="black" stroke-width="1.67" stroke-linecap="round"
                                        stroke-linejoin="round" class="group-hover:stroke-strokeWithe md:duration-500" />
                                </svg>
                            </div>
                        </a>
                    </nav>
                </div> --}}

        <div class="flex justify-center items-center ">
          {{-- <a href="#"
                        class="text-textBlack py-3 px-5 border-2 border-gray-700 rounded-3xl w-full text-center font-medium text-text16">
                        Cargar más modelos
                    </a> --}}
          {{ $productos->appends(['rangefrom' => $rangefrom, 'rangeto' => $rangeto])->links() }}
        </div>
      </section>
    </div>

    <section>
      <div>
        <img src="{{ asset('images/img/catalogo_1.png') }}" alt="doomine" class="w-full h-full hidden md:block" />
      </div>
    </section>
  </main>


@section('scripts_importados')
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Captura el click de abrir
      /*  const openModal = document.querySelector(".mostrar-modal"); */
      // Captura al modal que se quiere mostrar
      const modal = document.querySelector(".modal-filtros");
      //Captura el evento de cierre
      const closeModal = document.querySelector(".modal__close-filtro");
      // Captura el body para bloqueo
      const body = document.querySelector(".body");

      const hiddenCategoriaPrecio = document.querySelector(
        ".hidden-categoria-precio"
      );

      const open = document.querySelector(".open");
      const showCategoriaPrecio = document.querySelector(".show-categoria-precio");
      const addCategoriaPrecio = document.querySelector(".addCategoriaPrecio");
      let openModal = null;

      function getWidth() {
        // Corregir el modal !importante
        let width = window.innerWidth;
        if (width < 768) {
          //Habilita el click para modal
          open.classList.add("mostrar-modal", "cursor-pointer");
          openModal = document.querySelector(".mostrar-modal");
          openModal.addEventListener("click", showModal);
          hiddenCategoriaPrecio.innerHTML = "";
        } else {
          // Quita la opcion de click
          open.classList.remove("mostrar-modal", "cursor-pointer");
          if (openModal) {
            openModal.removeEventListener("click", showModal);
            showCategoriaPrecio.classList.remove("hidden");
            hiddenCategoriaPrecio.innerHTML = showCategoriaPrecio.innerHTML;
          }
        }
      }

      function showModal(e) {
        e.preventDefault();

        addCategoriaPrecio.innerHTML = showCategoriaPrecio.innerHTML;
        hiddenCategoriaPrecio.innerHTML = "";

        modal.classList.add("modal--show-filtro");
        body.classList.add("overflow-hidden");

        modal.style.display = "flex";
      }

      getWidth(); // Se ejecuta por primera vez
      window.addEventListener("resize", getWidth);

      closeModal.addEventListener("click", (e) => {
        e.preventDefault();
        modal.classList.remove("modal--show-filtro");
        body.classList.remove("overflow-hidden");
      });

      // Función para cerrar el modal
      function closeModa(event) {
        if (event.target === modal) {
          modal.classList.remove("modal--show-filtro");
          body.classList.remove("overflow-hidden");

          /* hiddenCategoriaPrecio.innerHTML = addCategoriaPrecio.innerHTML; */
        }
      }

      window.addEventListener("click", closeModa);
    });
  </script>
  <script>
    var appUrl = '{{ env('APP_URL') }}';

    // Agrega más variables de entorno aquí según sea necesario
  </script>


  <script src="{{ asset('js/carrito.js') }}"></script>
@stop

@stop
