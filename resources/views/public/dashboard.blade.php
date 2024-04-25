@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

<main>
    
    <section class="font-poppins mt-12 mb-0 md:my-12">
      <div class="flex flex-col w-11/12 mx-auto">
        <div class="flex flex-col gap-10 my-5">
          <div class="flex gap-1">
            <a
              href="index.html"
              class="font-normal text-[14px] text-[#6C7275]"
              >Home</a
            >
            <span>/</span>
            <a href="#" class="font-semibold text-[14px] text-[#141718]"
              >Mi cuenta</a
            >
          </div>
        </div>
      </div>
    </section>

    <section class="font-poppins my-8 md:my-16">
      <div
        class="flex flex-col gap-12 md:flex-row md:gap-28 w-full md:w-11/12 mx-auto"
      >
        <div class="bg-[#F3F5F7] md:bg-white py-5 md:py-0">
          <div class="w-11/12 md:w-full mx-auto">
            <div class="basis-5/12 flex flex-col gap-5">
              <div class="flex flex-col gap-5">
                <div
                  class="rounded-full w-24 h-24 bg-[#E9EDEF] flex justify-center items-center relative"
                >
                  <p class="text-[#0A3054] text-[32px] font-bold">FB</p>
                  <label
                    for="upload_image"
                    class="bg-[#74A68D] rounded-full w-7 h-7 flex justify-center items-center absolute bottom-0 right-0 cursor-pointer"
                  >
                    <img
                      src="./images/svg/upload_photo.svg"
                      alt="upload photo"
                    />
                  </label>
                  <input
                    type="file"
                    id="upload_image"
                    name="imagen"
                    accept="image/*"
                    class="hidden"
                  />
                </div>

                <div>
                  <p class="font-semibold text-[14px] text-[#0A3054]">
                    Ademir Neyra
                  </p>

                  <p class="font-medium text-[12px] text-[#8896A8]">
                    ademirneyra@gmail.com
                  </p>
                </div>
              </div>
              <div class="flex flex-col gap-4">
                <div
                  class="text-white bg-[#74A68D] py-2 px-4 rounded-2xl cursor-pointer text-[16px] border-none w-64 flex justify-between items-center"
                >
                  <p class="font-medium text-[16px] text-[#FFFFFF]">
                    Mi cuenta
                  </p>
                  <span>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 14 13"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                        fill="#FFFFFF"
                      />
                    </svg>
                  </span>
                </div>
                <div
                  class="text-white py-2 px-4 rounded-2xl cursor-pointer text-[16px] border-none w-64 flex justify-between items-center"
                >
                  <p class="font-medium text-[16px] text-[#254678]">
                    Dirección
                  </p>
                  <span>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 14 13"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                        fill="#E9EDEF"
                      />
                    </svg>
                  </span>
                </div>
                <div
                  class="text-white py-2 px-4 rounded-2xl cursor-pointer text-[16px] border-none w-64 flex justify-between items-center"
                >
                  <p class="font-medium text-[16px] text-[#254678]">
                    Historial de pedidos
                  </p>
                  <span>
                    <svg
                      width="20"
                      height="20"
                      viewBox="0 0 14 13"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M0.332031 6.50048C0.332031 2.93378 3.3187 0.0390626 6.9987 0.0390628C10.6787 0.039063 13.6654 2.93378 13.6654 6.50048C13.6654 10.0672 10.6787 12.9619 6.9987 12.9619C3.3187 12.9619 0.332031 10.0672 0.332031 6.50048ZM8.76536 6.27433L6.90536 4.47159C6.69203 4.26483 6.33203 4.40698 6.33203 4.69774L6.33203 8.30967C6.33203 8.60044 6.69203 8.74259 6.8987 8.53582L8.7587 6.73309C8.89203 6.60386 8.89203 6.39709 8.76536 6.27433Z"
                        fill="#E9EDEF"
                      />
                    </svg>
                  </span>
                </div>

                <a
                  href="#"
                  class="bg-[#F3F5F7] md:bg-[#FCFCFC] text-[#151515] font-medium text-[16px] py-3 px-4 flex justify-between items-center w-64 mt-0 md:mt-[200px]"
                >
                  <span>Cerrar Sesión</span>
                  <img src="./images/svg/cerrar_sesion.svg" alt="cerrar" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="basis-7/12 font-poppins w-11/12 md:w-full mx-auto">
          <form action="#" class="flex flex-col gap-5 mb-10">
            <h2 class="text-[20px] font-semibold text-[#151515]">
              Detalles de la cuenta
            </h2>
            <div class="flex flex-col gap-2">
              <label
                for="nombre_user"
                class="font-medium text-[12px] text-[#6C7275]"
                >Nombre</label
              >
              <input
                id="nombre_user"
                type="text"
                placeholder="Nombre"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]"
              />
            </div>

            <div class="flex flex-col gap-2">
              <label
                for="apellido_user"
                class="font-medium text-[12px] text-[#6C7275]"
                >Nombre</label
              >
              <input
                id="apellido_user"
                type="text"
                placeholder="Apellido"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]"
              />
            </div>

            <div class="flex flex-col gap-2">
              <label
                for="email_user"
                class="font-medium text-[12px] text-[#6C7275]"
                >E-mail</label
              >
              <input
                id="email_user"
                type="email"
                placeholder="hola@gmail.com"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]"
              />
            </div>

            <div>
              <hr class="bg-[#151515] h-[2px]" />
            </div>

            <h2 class="text-[20px] font-semibold text-[#151515]">
              Contraseña
            </h2>

            <div class="flex flex-col gap-2">
              <label
                for="contrasenia_anterior"
                class="font-medium text-[12px] text-[#6C7275]"
                >Contraseña anterior</label
              >
              <input
                id="contrasenia_anterior"
                type="password"
                placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]"
              />
            </div>

            <div class="flex flex-col gap-2">
              <label
                for="contrasenia_nueva"
                class="font-medium text-[12px] text-[#6C7275]"
                >Nueva Contraseña</label
              >
              <input
                id="contrasenia_nueva"
                type="password"
                placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]"
              />
            </div>

            <div class="flex flex-col gap-2">
              <label
                for="repetir_contrasenia"
                class="font-medium text-[12px] text-[#6C7275]"
                >Repetir nueva contraseña</label
              >
              <input
                id="repetir_contrasenia"
                type="password"
                placeholder="*************"
                class="w-full py-3 px-4 focus:outline-none placeholder-gray-400 font-normal text-[16px] border-[1.5px] border-gray-200 rounded-xl text-[#6C7275]"
              />
            </div>

            <div class="flex gap-5 flex-col md:flex-row">
              <input
                type="submit"
                value="Guardar cambios"
                class="text-white bg-[#74A68D] py-3 px-5 rounded-2xl cursor-pointer border-2 font-semibold text-[16px] text-center border-none inline-block"
              />

              <input
                type="submit"
                value="Cancelar"
                class="text-[#151515] py-3 px-5 rounded-2xl cursor-pointer font-semibold text-[16px] text-center inline-block border-[1px] border-[#151515]"
              />
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>



@section('scripts_importados')
<script>


</script>
@stop

@stop