@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

<main>
    <section class="font-poppins my-12 w-11/12 mx-auto">
      <div
        class="flex flex-col 2md:flex-row gap-32 md:gap-10 w-11/12 mx-auto"
      >
        <div class="md:basis-1/2 flex flex-col gap-10 basis-0">
          <div>
            <a
              href="index.html"
              class="font-normal text-[14px] text-[#6C7275]"
            >
              Home
            </a>
            <span>/</span>
            <a
              href="carrito.html"
              class="font-semibold text-[14px] text-[#141718]"
              >Carrito</a
            >
          </div>

          <div class="flex justify-between items-center w-full">
            <p
              class="font-semibold text-[18px] text-[#EB5D2C] border-b-[1px] border-[#EB5D2C] md:px-4 py-4 basis-1/3 h-full text-center"
            >
              <span class="flex items-center h-full">Carro de compra</span>
            </p>

            <p
              class="font-semibold text-[18px] text-[#EB5D2C] border-b-[1px] border-[#EB5D2C] md:px-4 py-4 basis-1/3 h-full text-center"
            >
              <span class="flex items-center h-full">Detalles de pago</span>
            </p>

            <p
              class="font-medium text-[18px] text-[#21201E] border-b-[1px] border-[#21201E] md:px-4 py-4 basis-1/3 h-full text-center"
            >
              <span class="flex items-center h-full">Orden completada</span>
            </p>
          </div>
        </div>
      </div>

      <div
        class="flex flex-col justify-start gap-10 max-w-[600px] mx-auto pt-10 text-center"
      >
        <div
          class="font-poppins flex flex-col gap-4 justify-center items-center"
        >
          <p class="text-[#6C7275] font-medium text-[20px]">
            Gracias por tu compra &#127881;
          </p>
          <h2 class="font-semibold text-[40px] text-[#151515]">
            Tu orden ha sido recibida
          </h2>
          <p class="font-medium text-[16px] text-[#6C7275]">
            Código de pedido
          </p>
          <p class="font-semibold text-[16px] text-[#141718]">#0123_45678</p>
        </div>

        <div class="font-poppins">
          <div>
            <div
              class="flex flex-col 2lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
            >
              <div class="w-full basis-5/12">
                <p
                  class="font-semibold text-[14px] text-[#141718] text-left py-4"
                >
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img
                    src="./images/img/producto_carrito_1.png"
                    alt="producto"
                  />
                  <div class="flex flex-col justify-start items-start w-full">
                    <h3 class="font-semibold text-[14px] text-[#151515]">
                      Producto 01
                    </h3>
                    <p class="font-normal text-[12px] text-[#6C7275]">
                      Color: Black
                    </p>
                    <div
                      class="font-normal text-[12px] text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                    >
                      <p>SKU: 0908824</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-10 w-full text-center basis-7/12">
                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Cantidad
                  </p>

                  <div class="flex justify-center text-[#151515]">
                    <div
                      class="w-8 h-8 flex justify-center items-center flex-1"
                    >
                      <span class="font-semibold text-[14px]">2</span>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Precio
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/19.00
                  </p>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Sub Total
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/38.00
                  </p>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col 2lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
            >
              <div class="w-full basis-5/12">
                <p
                  class="font-semibold text-[14px] text-[#141718] text-left py-4"
                >
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img
                    src="./images/img/producto_carrito_1.png"
                    alt="producto"
                  />
                  <div class="flex flex-col justify-start items-start w-full">
                    <h3 class="font-semibold text-[14px] text-[#151515]">
                      Producto 01
                    </h3>
                    <p class="font-normal text-[12px] text-[#6C7275]">
                      Color: Black
                    </p>
                    <div
                      class="font-normal text-[12px] text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                    >
                      <p>SKU: 0908824</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-10 w-full text-center basis-7/12">
                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Cantidad
                  </p>

                  <div class="flex justify-center text-[#151515]">
                    <div
                      class="w-8 h-8 flex justify-center items-center flex-1"
                    >
                      <span class="font-semibold text-[14px]">2</span>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Precio
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/19.00
                  </p>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Sub Total
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/38.00
                  </p>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col 2lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
            >
              <div class="w-full basis-5/12">
                <p
                  class="font-semibold text-[14px] text-[#141718] text-left py-4"
                >
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img
                    src="./images/img/producto_carrito_1.png"
                    alt="producto"
                  />
                  <div class="flex flex-col justify-start items-start w-full">
                    <h3 class="font-semibold text-[14px] text-[#151515]">
                      Producto 01
                    </h3>
                    <p class="font-normal text-[12px] text-[#6C7275]">
                      Color: Black
                    </p>
                    <div
                      class="font-normal text-[12px] text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                    >
                      <p>SKU: 0908824</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-10 w-full text-center basis-7/12">
                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Cantidad
                  </p>

                  <div class="flex justify-center text-[#151515]">
                    <div
                      class="w-8 h-8 flex justify-center items-center flex-1"
                    >
                      <span class="font-semibold text-[14px]">2</span>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Precio
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/19.00
                  </p>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Sub Total
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/38.00
                  </p>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col 2lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
            >
              <div class="w-full basis-5/12">
                <p
                  class="font-semibold text-[14px] text-[#141718] text-left py-4"
                >
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img
                    src="./images/img/producto_carrito_1.png"
                    alt="producto"
                  />
                  <div class="flex flex-col justify-start items-start w-full">
                    <h3 class="font-semibold text-[14px] text-[#151515]">
                      Producto 01
                    </h3>
                    <p class="font-normal text-[12px] text-[#6C7275]">
                      Color: Black
                    </p>
                    <div
                      class="font-normal text-[12px] text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                    >
                      <p>SKU: 0908824</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-10 w-full text-center basis-7/12">
                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Cantidad
                  </p>

                  <div class="flex justify-center text-[#151515]">
                    <div
                      class="w-8 h-8 flex justify-center items-center flex-1"
                    >
                      <span class="font-semibold text-[14px]">2</span>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Precio
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/19.00
                  </p>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Sub Total
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/38.00
                  </p>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col 2lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
            >
              <div class="w-full basis-5/12">
                <p
                  class="font-semibold text-[14px] text-[#141718] text-left py-4"
                >
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img
                    src="./images/img/producto_carrito_1.png"
                    alt="producto"
                  />
                  <div class="flex flex-col justify-start items-start w-full">
                    <h3 class="font-semibold text-[14px] text-[#151515]">
                      Producto 01
                    </h3>
                    <p class="font-normal text-[12px] text-[#6C7275]">
                      Color: Black
                    </p>
                    <div
                      class="font-normal text-[12px] text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                    >
                      <p>SKU: 0908824</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-10 w-full text-center basis-7/12">
                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Cantidad
                  </p>

                  <div class="flex justify-center text-[#151515]">
                    <div
                      class="w-8 h-8 flex justify-center items-center flex-1"
                    >
                      <span class="font-semibold text-[14px]">2</span>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Precio
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/19.00
                  </p>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Sub Total
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/38.00
                  </p>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col 2lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
            >
              <div class="w-full basis-5/12">
                <p
                  class="font-semibold text-[14px] text-[#141718] text-left py-4"
                >
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img
                    src="./images/img/producto_carrito_1.png"
                    alt="producto"
                  />
                  <div class="flex flex-col justify-start items-start w-full">
                    <h3 class="font-semibold text-[14px] text-[#151515]">
                      Producto 01
                    </h3>
                    <p class="font-normal text-[12px] text-[#6C7275]">
                      Color: Black
                    </p>
                    <div
                      class="font-normal text-[12px] text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                    >
                      <p>SKU: 0908824</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-10 w-full text-center basis-7/12">
                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Cantidad
                  </p>

                  <div class="flex justify-center text-[#151515]">
                    <div
                      class="w-8 h-8 flex justify-center items-center flex-1"
                    >
                      <span class="font-semibold text-[14px]">2</span>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Precio
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/19.00
                  </p>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Sub Total
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/38.00
                  </p>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col 2lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
            >
              <div class="w-full basis-5/12">
                <p
                  class="font-semibold text-[14px] text-[#141718] text-left py-4"
                >
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img
                    src="./images/img/producto_carrito_1.png"
                    alt="producto"
                  />
                  <div class="flex flex-col justify-start items-start w-full">
                    <h3 class="font-semibold text-[14px] text-[#151515]">
                      Producto 01
                    </h3>
                    <p class="font-normal text-[12px] text-[#6C7275]">
                      Color: Black
                    </p>
                    <div
                      class="font-normal text-[12px] text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                    >
                      <p>SKU: 0908824</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-10 w-full text-center basis-7/12">
                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Cantidad
                  </p>

                  <div class="flex justify-center text-[#151515]">
                    <div
                      class="w-8 h-8 flex justify-center items-center flex-1"
                    >
                      <span class="font-semibold text-[14px]">2</span>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Precio
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/19.00
                  </p>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Sub Total
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/38.00
                  </p>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col 2lg:flex-row pb-5 border-b-[2px] border-[#E8ECEF] gap-5"
            >
              <div class="w-full basis-5/12">
                <p
                  class="font-semibold text-[14px] text-[#141718] text-left py-4"
                >
                  Producto
                </p>

                <div class="flex justify-start items-center gap-5 w-full">
                  <img
                    src="./images/img/producto_carrito_1.png"
                    alt="producto"
                  />
                  <div class="flex flex-col justify-start items-start w-full">
                    <h3 class="font-semibold text-[14px] text-[#151515]">
                      Producto 01
                    </h3>
                    <p class="font-normal text-[12px] text-[#6C7275]">
                      Color: Black
                    </p>
                    <div
                      class="font-normal text-[12px] text-[#6C7275] flex justify-between items-center gap-10 w-full md:w-auto"
                    >
                      <p>SKU: 0908824</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="flex gap-10 w-full text-center basis-7/12">
                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Cantidad
                  </p>

                  <div class="flex justify-center text-[#151515]">
                    <div
                      class="w-8 h-8 flex justify-center items-center flex-1"
                    >
                      <span class="font-semibold text-[14px]">2</span>
                    </div>
                  </div>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Precio
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/19.00
                  </p>
                </div>

                <div class="flex-1">
                  <p
                    class="font-semibold text-[14px] text-[#141718] pt-4 pb-6"
                  >
                    Sub Total
                  </p>
                  <p class="font-semibold text-[18px] text-[#151515]">
                    s/38.00
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="flex flex-col gap-5">
          <div>
            <a
              href="catalogo.html"
              class="text-white bg-[#74A68D] w-full py-3 rounded-2xl cursor-pointer font-semibold text-[16px] inline-block text-center"
              >Seguir comprando</a
            >
          </div>

          <div>
            <a
              href="HistorialPedidos.html"
              class="text-[#151515] bg-[#FFFFFF] w-full py-3 rounded-2xl cursor-pointer font-semibold text-[16px] inline-block text-center border-[1.5px] border-[#151515]"
              >Historial de compras</a
            >
          </div>
        </div>
      </div>
    </section>
  </main>


@section('scripts_importados')
<script>


</script>
@stop

@stop