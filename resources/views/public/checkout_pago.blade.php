@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

    <main>
        <section class="font-poppins w-11/12 mx-auto my-12 flex flex-col gap-10">
            <div>
                <a href="index.html" class="font-normal text-[14px] text-[#6C7275]">Home</a>
                <span>/</span>
                <a href="carrito.html" class="font-semibold text-[14px] text-[#141718]">Carrito</a>
            </div>
            <div class="flex md:gap-10">
                <div class="flex justify-between items-center md:basis-8/12 w-full md:w-auto">
                    <p
                        class="font-semibold text-[18px] text-[#EB5D2C] border-b-[1px] border-[#EB5D2C] md:px-4 py-4 basis-1/3 h-full text-center">
                        <span class="flex items-center h-full">Carro de compra</span>
                    </p>

                    <p
                        class="font-medium text-[18px] text-[#151515] border-b-[1px] border-[#6C7275] md:px-4 py-4 basis-1/3 h-full text-center">
                        <span class="flex items-center h-full">Detalles de pago</span>
                    </p>

                    <p
                        class="font-medium text-[18px] text-[#C8C8C8] border-b-[1px] border-[#6C7275] md:px-4 py-4 basis-1/3 h-full text-center">
                        <span class="flex items-center h-full">Orden completada</span>
                    </p>
                </div>
                <div class="md:basis-4/12"></div>
            </div>

            <div class="flex flex-col 2md:flex-row gap-16 md:gap-10">
                <div class="basis-8/12 flex flex-col gap-10 order-2 2md:order-1">
                    <div class="flex flex-col gap-5">
                        <div>
                            <!-- form -199 -513 -->
                            <div class="flex flex-col gap-8">
                                <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#151515]">
                                    <h2 class="font-semibold text-[20px] text-[#151515]">
                                        Información del contacto
                                    </h2>

                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col md:flex-row gap-5">
                                            <div class="basis-1/2 flex flex-col gap-2">
                                                <label for="nombre"
                                                    class="font-medium text-[12px] text-[#6C7275]">Nombre</label>
                                                <input id="nombre" type="text" placeholder="Nombre"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" />
                                            </div>

                                            <div class="basis-1/2 flex flex-col gap-2">
                                                <label for="apellido"
                                                    class="font-medium text-[12px] text-[#6C7275]">Apellido</label>
                                                <input id="apellido" type="text" placeholder="Apellido"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" />
                                            </div>
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <label for="email"
                                                class="font-medium text-[12px] text-[#6C7275]">E-mail</label>
                                            <input id="email" type="email" placeholder="Correo electrónico"
                                                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" />
                                        </div>

                                        <div class="flex flex-col gap-2">
                                            <label for="celular"
                                                class="font-medium text-[12px] text-[#6C7275]">Celular</label>
                                            <input id="celular" type="text" placeholder="(+51) 000 000 000"
                                                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl" />
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#151515]">
                                    <h2 class="font-semibold text-[20px] text-[#151515]">
                                        Dirección de envío
                                    </h2>
                                    <div class="flex flex-col gap-5">
                                        <div class="flex flex-col gap-5">
                                            <div class="flex flex-col gap-2 z-[45]">
                                                <label class="font-medium text-[12px] text-[#6C7275]">Departamento</label>

                                                <div>
                                                    <!-- combo -->
                                                    <div class="dropdown w-full">
                                                        <div
                                                            class="input-box focus:outline-none font-normal text-[16px] mr-20 text-[#6C7275] border-[1.5px] border-gray-200 rounded-xl py-3 px-4">
                                                            Selecciona un departamento
                                                        </div>
                                                        <div class="list overflow-y-scroll h-[200px] scroll-departamento">
                                                            <div class="w-full">
                                                                <!-- Ejemplo de explicacion para la obtencion del combo -->
                                                                <input type="radio" name="drop1" id="id1"
                                                                    depa-atributo="1" class="radio Arequipa" />

                                                                <label for="id1"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Arequipa
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id2"
                                                                    depa-atributo="2" class="radio Lima" />
                                                                <label for="id2"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Lima
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id3"
                                                                    depa-atributo="3" class="radio Huancavelica" />
                                                                <label for="id3"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Huancavelica
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id4"
                                                                    depa-atributo="4" class="radio Trujillo" />
                                                                <label for="id4"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Trujillo
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id5"
                                                                    depa-atributo="5" class="radio Huanuco" />
                                                                <label for="id5"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Huanuco
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop1" id="id6"
                                                                    depa-atributo="6" class="radio Tumbes" />
                                                                <label for="id6"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white departamento">
                                                                    Tumbes
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-col gap-2 z-[40]">
                                                <label class="font-medium text-[12px] text-[#6C7275]">
                                                    Provincia
                                                </label>

                                                <div>
                                                    <!-- combo -->
                                                    <div class="dropdown-provincia w-full">
                                                        <div
                                                            class="input-box-provincia focus:outline-none font-normal text-[16px] mr-20 text-[#6C7275] border-[1.5px] border-gray-200 rounded-xl py-3 px-4">
                                                            Selecciona una provincia
                                                        </div>
                                                        <div
                                                            class="list-provincia overflow-y-scroll h-[200px] scroll-provincia">
                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id7"
                                                                    class="radio-provincia" />

                                                                <label for="id7"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 1
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id8"
                                                                    class="radio-provincia" />

                                                                <label for="id8"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 2
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id9"
                                                                    class="radio-provincia" />

                                                                <label for="id9"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 3
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id10"
                                                                    class="radio-provincia" />

                                                                <label for="id10"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 4
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop2" id="id11"
                                                                    class="radio-provincia" />

                                                                <label for="id11"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white provincia">
                                                                    Provincia 5
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-col gap-2 z-[30]">
                                                <label class="font-medium text-[12px] text-[#6C7275]">
                                                    Distrito
                                                </label>

                                                <div>
                                                    <!-- combo -->
                                                    <div class="dropdown-distrito w-full">
                                                        <div
                                                            class="input-box-distrito focus:outline-none font-normal text-[16px] mr-20 text-[#6C7275] border-[1.5px] border-gray-200 rounded-xl py-3 px-4">
                                                            Selecciona un distrito
                                                        </div>
                                                        <div
                                                            class="list-distrito overflow-y-scroll h-[200px] scroll-distrito">
                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id12"
                                                                    class="radio-distrito" />

                                                                <label for="id12"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 1
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id13"
                                                                    class="radio-distrito" />

                                                                <label for="id13"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 2
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id14"
                                                                    class="radio-distrito" />

                                                                <label for="id14"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 3
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id15"
                                                                    class="radio-distrito" />

                                                                <label for="id15"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 4
                                                                </label>
                                                            </div>

                                                            <div class="w-full">
                                                                <input type="radio" name="drop3" id="id16"
                                                                    class="radio-distrito" />

                                                                <label for="id16"
                                                                    class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white distrito">
                                                                    Distrito 5
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="flex flex-col gap-2">
                                                <label for="nombre_calle"
                                                    class="font-medium text-[12px] text-[#6C7275]">Avenida / Calle /
                                                    Jirón</label>
                                                <input id="nombre_calle" type="text"
                                                    placeholder="Ingresa el nombre de la calle"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" />
                                            </div>
                                        </div>
                                        <div>
                                            <div class="flex flex-col md:flex-row gap-5">
                                                <div class="basis-1/2 flex flex-col gap-2">
                                                    <label for="numero_calle"
                                                        class="font-medium text-[12px] text-[#6C7275]">Número</label>
                                                    <input id="numero_calle" type="text"
                                                        placeholder="Ingresa el número de la callle"
                                                        class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" />
                                                </div>

                                                <div class="basis-1/2 flex flex-col gap-2">
                                                    <label for="direccion"
                                                        class="font-medium text-[12px] text-[#6C7275]">Dpto./ Interior/
                                                        Piso/ Lote/ Bloque
                                                        (opcional)</label>
                                                    <input id="direccion" type="text"
                                                        placeholder="Ejem. Casa 3, Dpto 101"
                                                        class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col gap-5 pb-10">
                                    <h2 class="font-semibold text-[20px] text-[#151515]">
                                        Dirección de envío
                                    </h2>
                                    <div
                                        class="w-full flex flex-col gap-5 border-dashed pb-10 border-b-2 border-[#E8ECEF]">
                                        <div class="flex items-center ps-4 border border-[#F3F5F7] rounded-xl">
                                            <input type="radio" id="bordered-radio-tarjeta"
                                                name="bordered-radio-tarjetas" value=""
                                                class="cuentas background-radius w-5 h-5 cursor-pointer text-[#6C7275]" />
                                            <label for="bordered-radio-tarjeta"
                                                class="w-full py-4 ms-2 text-[16px] font-normal text-[#6C7275] flex justify-between items-center px-4">
                                                <span>Tarjeta de crédito</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center ps-4 border border-[#F3F5F7] rounded-xl">
                                            <input type="radio" id="bordered-radio-debito"
                                                name="bordered-radio-tarjetas" value=""
                                                class="cuentas background-radius w-5 h-5 cursor-pointer text-[#6C7275]" />
                                            <label for="bordered-radio-debito"
                                                class="w-full py-4 ms-2 text-[16px] font-normal text-[#6C7275] flex justify-between items-center px-4">
                                                <span>Tarjeta de Débito</span>
                                            </label>
                                        </div>
                                        <div class="flex items-center ps-4 border border-[#F3F5F7] rounded-xl">
                                            <input type="radio" id="bordered-radio-cuenta"
                                                name="bordered-radio-tarjetas" value=""
                                                class="cuentas inputVoucher background-radius w-5 h-5 cursor-pointer text-[#6C7275]" />
                                            <label for="bordered-radio-cuenta"
                                                class="w-full py-4 ms-2 text-[16px] font-normal text-[#6C7275] flex justify-between items-center px-4">
                                                <span>Depósito a cuenta</span>
                                            </label>
                                        </div>
                                        <div class="deposito__cuenta hidden">
                                            <div
                                                class="flex items-center justify-between py-4 border border-[#F3F5F7] rounded-xl text-[#6C7275] text-[16px] p-2">
                                                <div>
                                                    <p class="font-bold">Banco - Interbank</p>
                                                    <p>N. Cuenta Corriente</p>
                                                    <p>43445648674984984646</p>
                                                </div>
                                                <div>
                                                    <label for="uploadArchivo"
                                                        class="font-bold text-[14px] cursor-pointer">
                                                        Envía tu comprobante
                                                    </label>
                                                    <input type="file" id="uploadArchivo" name="archivo"
                                                        class="hidden" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-5">
                                        <div class="flex flex-col gap-5">
                                            <div class="flex flex-col gap-2">
                                                <label for="nombre_tarjeta"
                                                    class="font-medium text-[12px] text-[#6C7275]">Nombre de la
                                                    tarjeta</label>
                                                <input id="nombre_tarjeta" type="text" placeholder="Nombre"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl" />
                                            </div>

                                            <div class="flex flex-col gap-2">
                                                <label for="numero_tarjeta"
                                                    class="font-medium text-[12px] text-[#6C7275]">Número de
                                                    tarjeta</label>
                                                <input id="numero_tarjeta" type="text" placeholder="1234 12345 1234"
                                                    class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl" />
                                            </div>

                                            <div class="flex flex-col md:flex-row gap-5">
                                                <div class="basis-1/2 flex flex-col gap-2">
                                                    <label for="fecha_caducidad"
                                                        class="font-medium text-[12px] text-[#6C7275]">Fecha de
                                                        caducidad</label>
                                                    <input id="fecha_caducidad" type="text" placeholder="MM/AA"
                                                        class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl" />
                                                </div>

                                                <div class="basis-1/2 flex flex-col gap-2">
                                                    <label for="CVC"
                                                        class="font-medium text-[12px] text-[#6C7275]">CVC</label>
                                                    <input id="CVC" type="text" placeholder="Código CVC"
                                                        class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pt-10">
                                        <a href="mensaje_exito.html"
                                            class="text-white bg-[#74A68D] w-full py-3 rounded-3xl cursor-pointer border-2 font-semibold text-[16px] inline-block text-center border-none">Pagar</a>
                                        <!-- <input
                              type="submit"
                              value="Checkout"
                              class="text-white bg-[#74A68D] w-full py-3 rounded-3xl cursor-pointer border-2 font-semibold text-[16px] inline-block text-center border-none"
                            /> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="basis-4/12 flex flex-col justify-start gap-10 pt-10 md:pt-0 order-1 2md:order-2">
                    <h2 class="font-semibold text-[20px] text-[#151515] px-4">
                        Resumen del pedido
                    </h2>

                    <div class="p-4">
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
                                        <div
                                            class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
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
                                <div class="flex flex-col justify-start py-2 gap-5 items-center">
                                    <p class="font-semibold text-[14px] text-[#151515]">
                                        s/ 19.19
                                    </p>
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
                                        <div
                                            class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
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
                                <div class="flex flex-col justify-start py-2 gap-5 items-center">
                                    <p class="font-semibold text-[14px] text-[#151515]">
                                        s/ 19.19
                                    </p>
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
                                        <div
                                            class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
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
                                <div class="flex flex-col justify-start py-2 gap-5 items-center">
                                    <p class="font-semibold text-[14px] text-[#151515]">
                                        s/ 19.19
                                    </p>
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
                                        <div
                                            class="flex justify-center text-[#151515] border-[1px] border-[#6C7275] rounded-md">
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
                                <div class="flex flex-col justify-start py-2 gap-5 items-center">
                                    <p class="font-semibold text-[14px] text-[#151515]">
                                        s/ 19.19
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="font-poppins flex flex-col gap-5 mt-10">
                            <div
                                class="text-[#141718] flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5">
                                <p class="font-normal text-[16px]">Envío</p>
                                <p class="font-semibold text-[16px]">Gratis</p>
                            </div>

                            <div
                                class="text-[#141718] flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5">
                                <p class="font-normal text-[16px]">Subtotal</p>
                                <p class="font-semibold text-[16px]">s/ 99.00</p>
                            </div>

                            <div
                                class="text-[#141718] font-medium text-[20px] flex justify-between items-center border-b-[1px] border-[#E8ECEF] pb-5">
                                <p>Total</p>
                                <p>s/ 234.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



@section('scripts_importados')
    <script></script>
@stop

@stop
