<div class="navigation z-20">
  <button aria-label="hamburguer" type="button" class="hamburger" id="position" onclick="show()">
    <!-- <div id="bar1" class="bar"></div>
      <div id="bar2" class="bar"></div>
      <div id="bar3" class="bar"></div> -->

    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M18 2L2 18M18 18L2 2" stroke="white" stroke-width="2.66667" stroke-linecap="round" />
    </svg>
  </button>
  <nav class="menu-list">
    <ul>
      <li>
        <a href="/" class="">Home</a>
      </li>
      <li>
        <a href="catalogo.html" class="r">Catálogo</a>
      </li>
      <li>
        <a href="contacto.html" class="">Contacto</a>
      </li>
      <li>
        <a href="comentar.html" class="">Comentar</a>
      </li>
    </ul>
  </nav>
</div>


<header>
  <div class="absolute z-10 md:hidden top-[65px] left-[10px]">
    <button aria-label="hamburguer" class="hamburger" onclick="show()">
      <img src="{{ asset('images/img/menu_hamburguer.png') }}" alt="menu hamburguesa" class="w-44" />
    </button>
  </div>

  <div class="bg-colorBackgroundHeader">
    <div class="flex justify-center md:justify-end gap-5 w-11/12 mx-auto py-4">
      <div class="text-white font-normal font-poppins text-[14px] text-center w-full">
        <p>Pellentesque convallis eu tortor id condimentum</p>
      </div>
    </div>
  </div>

  <div>
    <div class="flex justify-between items-center w-11/12 mx-auto my-5">
      <div class="hidden md:block">
        <a href="index.html">
          <img src="{{ asset('images/svg/logo_decotab_header.svg') }}" alt="decotab" />
        </a>

        <!--  <p class="font-medium text-[24px] font-poppins">DecoTab</p> -->
      </div>
      <div class="hidden md:block">
        <div>
          <nav class="text-black flex gap-5">
            <a href="/" class="font-medium font-poppins text-[14px]">Home
            </a>
            <a href="catalogo.html" class="font-medium font-poppins text-[14px]">Catálogo
            </a>
            <a href="contacto.html" class="font-medium font-poppins text-[14px]">Contacto
            </a>

            <a href="comentar.html" class="font-medium font-poppins text-[14px]">Comentar
            </a>
          </nav>
        </div>

        <!-- <div class="sm:hidden">
            <button
              aria-label="hamburguer"
              class="hamburger"
              onclick="show()"
            >
              <div id="bar1" class="bar"></div>
              <div id="bar2" class="bar"></div>
              <div id="bar3" class="bar"></div>
            </button>
          </div> -->
      </div>

      <div class="flex justify-end w-full md:w-auto md:justify-center items-center gap-5">
        <a href="catalogo.html"><img src="{{ asset('images/svg/search_header.svg') }}" alt="buscar" /></a>
        <a href="login_user.html"><img src="{{ asset('images/svg/header_user.svg') }}" alt="user" /></a>

        <div class="bg-[#EB5D2C] flex justify-center items-center rounded-full w-7 h-7">
          <span class="text-white">1</span>
        </div>

        <div class="flex justify-center items-center pl-2">
          <label for="check" class="inline-block cursor-pointer">
            <img src="{{ asset('images/svg/header_bag.svg') }}" alt="bag" class="max-w-full h-auto" />
          </label>
          <!-- ----- carritos  148 sad -->

          <input type="checkbox" class="bag__modal" id="check" />
          <!-- bag hidden  absolute -->
          <div class="bag hidden absolute top-0 right-0 z-[200] md:w-[600px] cartContainer">
            <!-- class="h-screen overflow-y-scroll " -->
            <div class="p-4 flex flex-col h-screen justify-between">
              <h2 class="font-medium text-[28px] text-[#151515] pb-5">
                Carrito
              </h2>
              <div class="overflow-y-scroll h-auto scroll__carrito">
                <div class="flex flex-col gap-10">
                  <div class="flex justify-between bg-white font-poppins border-b-[1px] border-[#E8ECEF] pb-5">
                    <div class="flex justify-center items-center gap-5">
                      <div class="bg-[#F3F5F7] rounded-md p-4">
                        <img src="./images/img/bag_img.png" alt="producto" class="w-24" />
                      </div>
                      <div class="flex flex-col gap-3 py-2">
                        <h3 class="font-semibold text-[14px] text-[#151515]">
                          Producto 1
                        </h3>
                        <p class="font-normal text-[12px] text-[#6C7275]">
                          Color: Black
                        </p>
                        <div class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">-</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center">
                            <span class="font-semibold text-[12px]">2</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
                      <p class="font-semibold text-[14px] text-[#151515]">
                        s/ 19.19
                      </p>
                      <div>
                        <a href="#"><img src="./images/svg/close_bag.svg" alt="close" />
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="flex justify-between bg-white font-poppins border-b-[1px] border-[#E8ECEF] pb-5">
                    <div class="flex justify-center items-center gap-5">
                      <div class="bg-[#F3F5F7] rounded-md p-4">
                        <img src="./images/img/bag_img.png" alt="producto" class="w-24" />
                      </div>
                      <div class="flex flex-col gap-3 py-2">
                        <h3 class="font-semibold text-[14px] text-[#151515]">
                          Producto 1
                        </h3>
                        <p class="font-normal text-[12px] text-[#6C7275]">
                          Color: Black
                        </p>
                        <div class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">-</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center">
                            <span class="font-semibold text-[12px]">2</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
                      <p class="font-semibold text-[14px] text-[#151515]">
                        s/ 19.19
                      </p>
                      <div>
                        <a href="#"><img src="./images/svg/close_bag.svg" alt="close" />
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="flex justify-between bg-white font-poppins border-b-[1px] border-[#E8ECEF] pb-5">
                    <div class="flex justify-center items-center gap-5">
                      <div class="bg-[#F3F5F7] rounded-md p-4">
                        <img src="./images/img/bag_img.png" alt="producto" class="w-24" />
                      </div>
                      <div class="flex flex-col gap-3 py-2">
                        <h3 class="font-semibold text-[14px] text-[#151515]">
                          Producto 1
                        </h3>
                        <p class="font-normal text-[12px] text-[#6C7275]">
                          Color: Black
                        </p>
                        <div class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">-</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center">
                            <span class="font-semibold text-[12px]">2</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
                      <p class="font-semibold text-[14px] text-[#151515]">
                        s/ 19.19
                      </p>
                      <div>
                        <a href="#"><img src="./images/svg/close_bag.svg" alt="close" />
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="flex justify-between bg-white font-poppins border-b-[1px] border-[#E8ECEF] pb-5">
                    <div class="flex justify-center items-center gap-5">
                      <div class="bg-[#F3F5F7] rounded-md p-4">
                        <img src="./images/img/bag_img.png" alt="producto" class="w-24" />
                      </div>
                      <div class="flex flex-col gap-3 py-2">
                        <h3 class="font-semibold text-[14px] text-[#151515]">
                          Producto 1
                        </h3>
                        <p class="font-normal text-[12px] text-[#6C7275]">
                          Color: Black
                        </p>
                        <div class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">-</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center">
                            <span class="font-semibold text-[12px]">2</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
                      <p class="font-semibold text-[14px] text-[#151515]">
                        s/ 19.19
                      </p>
                      <div>
                        <a href="#"><img src="./images/svg/close_bag.svg" alt="close" />
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="flex justify-between bg-white font-poppins border-b-[1px] border-[#E8ECEF] pb-5">
                    <div class="flex justify-center items-center gap-5">
                      <div class="bg-[#F3F5F7] rounded-md p-4">
                        <img src="./images/img/bag_img.png" alt="producto" class="w-24" />
                      </div>
                      <div class="flex flex-col gap-3 py-2">
                        <h3 class="font-semibold text-[14px] text-[#151515]">
                          Producto 1
                        </h3>
                        <p class="font-normal text-[12px] text-[#6C7275]">
                          Color: Black
                        </p>
                        <div class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">-</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center">
                            <span class="font-semibold text-[12px]">2</span>
                          </div>
                          <div class="w-8 h-8 flex justify-center items-center cursor-pointer">
                            <span class="text-[20px]">+</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-col justify-start py-2 gap-5 items-center pr-2">
                      <p class="font-semibold text-[14px] text-[#151515]">
                        s/ 19.19
                      </p>
                      <div>
                        <a href="#"><img src="./images/svg/close_bag.svg" alt="close" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="font-poppins flex flex-col gap-2 pt-36">
                <div class="text-[#141718] flex justify-between items-center">
                  <p class="font-normal text-[16px]">Subtotal</p>
                  <p class="font-semibold text-[16px]">s/ 99.00</p>
                </div>

                <div class="text-[#141718] font-medium text-[20px] flex justify-between items-center">
                  <p>Total</p>
                  <p>s/ 234.00</p>
                </div>
                <div>
                  <a href="checkout_carrito.html"
                    class="font-semibold text-base bg-[#74A68D] py-3 px-5 rounded-2xl text-white cursor-pointer w-full inline-block text-center">
                    Checkout
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
