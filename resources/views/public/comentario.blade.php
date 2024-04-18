@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')

    <div class="w-full">
        <div
            style="background-image: url('{{ asset('images/img/header_comentar.png') }}')" class="bg-cover bg-center bg-no-repeat min-h-[600px]  flex flex-col justify-center items-center">
        </div>
    </div>

  <main class="my-16">
    
   

    <section class="font-poppins flex flex-col gap-10">
      <div class="w-11/12 mx-auto flex flex-col gap-3">
        <h2 class="font-medium text-[28px]">Opiniones de los usuarios</h2>
        <div class="flex items-center gap-2">
          <div class="flex gap-2 py-2">
            <img src="./images/svg/start.svg" alt="estrella" />
            <img src="./images/svg/start.svg" alt="estrella" />
            <img src="./images/svg/start.svg" alt="estrella" />
            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
            <img src="./images/svg/start_sin_color.svg" alt="estrella" />
          </div>
          <p class="font-normal text-[12px] text-[#141718]">11 opiniones</p>
        </div>
      </div>

      <div class="w-11/12 mx-auto">
        <form action="#">
          <div
            class="flex flex-col gap-5 md:flex-row md:justify-between md:items-center md:border-2 md:border-[#E8ECEF] md:p-2 md:rounded-2xl"
          >
            <input
              type="text"
              placeholder="Comparte tus pensamientos"
              class="w-full border-[1px] md:border-none focus:outline-none focus:ring-0 border-gray-400 rounded-2xl py-4 px-2"
            />

            <input
              type="submit"
              value="Comentar"
              class="font-semibold text-base bg-[#74A68D] py-3 px-5 rounded-2xl text-white cursor-pointer"
            />
          </div>
        </form>
      </div>

      <div class="w-11/12 mx-auto">
        <div class="flex flex-col gap-10">
          <div
            class="flex flex-col md:flex-row items-start md:justify-between md:items-center gap-5"
          >
            <p class="font-medium text-[28px]">11 Opiniones</p>
            <div class="w-full md:w-auto">
              <div>
                <!-- cmombo -->
                <div class="dropdown w-full">
                  <div
                    class="input-box focus:outline-none font-medium text-[16px] mr-20 shadow-md px-2"
                  >
                    El más nuevo
                  </div>
                  <div class="list">
                    <div class="w-full">
                      <input
                        type="radio"
                        name="drop1"
                        id="id11"
                        class="radio"
                      />

                      <label
                        for="id11"
                        class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white comentar"
                      >
                        <span class="name inline-block w-full"
                          >Lo más reciente</span
                        >
                      </label>
                    </div>

                    <div class="w-full">
                      <input
                        type="radio"
                        name="drop1"
                        id="id12"
                        class="radio"
                      />
                      <label
                        for="id12"
                        class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white comentar"
                      >
                        <span class="name inline-block w-full"
                          >Lo más antiguo</span
                        >
                      </label>
                    </div>

                    <div class="w-full">
                      <input
                        type="radio"
                        name="drop1"
                        id="id13"
                        class="radio"
                      />
                      <label
                        for="id13"
                        class="font-normal text-text18 hover:font-bold md:duration-100 hover:text-white comentar"
                      >
                        <span class="name inline-block w-full"
                          >Lo más actual</span
                        >
                      </label>
                    </div>
                  </div>
                </div>
              </div>

              <!-- <div>
                <div class="dropdown-comentario inline-block relative w-full">
                  <button
                    class="font-medium py-2 px-4 rounded flex justify-between items-center border-[1px] border-[#F5F5F5] shadow-md w-full md:w-auto"
                  >
                    <span class="mr-5 md:mr-12 text-[#141718] text-[16px]">
                      El más nuevo
                    </span>
                    <svg
                      width="10"
                      height="6"
                      viewBox="0 0 10 6"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        fill-rule="evenodd"
                        clip-rule="evenodd"
                        d="M9.20711 0.792893C8.81658 0.402369 8.18342 0.402369 7.79289 0.792893L5 3.58579L2.20711 0.792893C1.81658 0.402369 1.18342 0.402369 0.792894 0.792893C0.402369 1.18342 0.402369 1.81658 0.792894 2.20711L4.29289 5.70711C4.68342 6.09763 5.31658 6.09763 5.70711 5.70711L9.20711 2.20711C9.59763 1.81658 9.59763 1.18342 9.20711 0.792893Z"
                        fill="#6C7275"
                      />
                    </svg>
                  </button>
                  <ul
                    class="dropdown-menu-comentario absolute text-[#141718] text-[16px] pt-1 w-full hidden border-[#F5F5F5] bg-white border-[1px] z-[20]"
                  >
                    <li class="">
                      <a
                        class="rounded-md hover:bg-[#74A68D] py-2 px-4 block whitespace-no-wrap"
                        href="#"
                        >Más reciente</a
                      >
                    </li>
                    <li class="">
                      <a
                        class="rounded-md hover:bg-[#74A68D] py-2 px-4 block whitespace-no-wrap"
                        href="#"
                        >Más reciente</a
                      >
                    </li>
                    <li class="">
                      <a
                        class="rounded-md hover:bg-[#74A68D] py-2 px-4 block whitespace-no-wrap"
                        href="#"
                        >Más reciente</a
                      >
                    </li>
                  </ul>
                </div>
              </div> -->
            </div>
          </div>

          <div class="flex flex-col gap-10">
            <div
              class="flex flex-col md:flex-row gap-5 border-b-[1px] border-[#DDDDDD] pb-5"
            >
              <div class="">
                <img
                  src="./images/img/perfil_user_2.png"
                  alt="perfil"
                  class="md:w-32 lg:w-20"
                />
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-semibold text-[20px] text-[#141718]">
                  Sofía
                </h2>
                <div class="flex flex-col gap-1">
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
                  <p class="font-normal text-[16px] text-[#353945]">
                    Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                    aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                    vestibulum, ante nibh rutrum erat, ac malesuada neque
                    tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                  </p>
                </div>
                <div class="flex flex-col md:flex-row gap-5 md:items-center">
                  <span
                    class="font-normal text-[12px] text-[#DDDDDD] inline-block"
                    >Hace aproximadamente 1 hora
                  </span>
                  <div class="flex gap-5">
                    <a
                      href="#"
                      class="font-semibold text-[12px] text-[#23262F]"
                      >Me gusta</a
                    >
                    <a
                      href="#"
                      class="font-semibold text-[12px] text-[#23262F]"
                      >Responder</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col md:flex-row gap-5 border-b-[1px] border-[#DDDDDD] pb-5"
            >
              <div class="">
                <img
                  src="./images/img/perfil_user_2.png"
                  alt="perfil"
                  class="md:w-32 lg:w-20"
                />
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-semibold text-[20px] text-[#141718]">
                  Sofía
                </h2>
                <div class="flex flex-col gap-1">
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
                  <p class="font-normal text-[16px] text-[#353945]">
                    Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                    aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                    vestibulum, ante nibh rutrum erat, ac malesuada neque
                    tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                  </p>
                </div>
                <div class="flex flex-col md:flex-row gap-5 md:items-center">
                  <span
                    class="font-normal text-[12px] text-[#DDDDDD] inline-block"
                    >Hace aproximadamente 1 hora
                  </span>
                  <div class="flex gap-5">
                    <a
                      href="#"
                      class="font-semibold text-[12px] text-[#23262F]"
                      >Me gusta</a
                    >
                    <a
                      href="#"
                      class="font-semibold text-[12px] text-[#23262F]"
                      >Responder</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div
              class="flex flex-col md:flex-row gap-5 border-b-[1px] border-[#DDDDDD] pb-5"
            >
              <div class="">
                <img
                  src="./images/img/perfil_user_2.png"
                  alt="perfil"
                  class="md:w-32 lg:w-20"
                />
              </div>
              <div class="flex flex-col gap-5">
                <h2 class="font-semibold text-[20px] text-[#141718]">
                  Sofía
                </h2>
                <div class="flex flex-col gap-1">
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
                  <p class="font-normal text-[16px] text-[#353945]">
                    Cras et sapien nisl. Sed magna erat, rutrum eu est ac,
                    aliquet ornare quam. Nunc pharetra, tellus eu venenatis
                    vestibulum, ante nibh rutrum erat, ac malesuada neque
                    tellus ut diam. Praesent ac aliquet metus, id porta nisi.
                  </p>
                </div>
                <div class="flex flex-col md:flex-row gap-5 md:items-center">
                  <span
                    class="font-normal text-[12px] text-[#DDDDDD] inline-block"
                    >Hace aproximadamente 1 hora
                  </span>
                  <div class="flex gap-5">
                    <a
                      href="#"
                      class="font-semibold text-[12px] text-[#23262F]"
                      >Me gusta</a
                    >
                    <a
                      href="#"
                      class="font-semibold text-[12px] text-[#23262F]"
                      >Responder</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex justify-center items-center">
            <a
              href="#"
              class="font-semibold text-[16px] bg-white md:duration-500 py-4 px-5 rounded-3xl border-[1px] border-colorBorder flex-initial text-center w-full md:w-56"
            >
              Cargar más
            </a>
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