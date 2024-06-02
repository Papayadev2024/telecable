@foreach ($productos as $item)
      <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
        <div class="flex justify-center items-center">
            <a href=" " class="w-full"><img src="{{ asset('images/img/image_30.png') }}"
                    alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg"></a>
        </div>
        <div class="flex flex-col gap-2">
            <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">Tratamiento de agua</h3>
            <a href=" ">
                <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">Planta de
                    tratamiento de Agua</h2>
            </a>
            <p class="font-roboto font-normal text-text16 text-[#082252]">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias harum, rem ullam ut
                libero obcaecati culpa voluptates dolores illo impedit. Necessitatibus nostrum libero
                cupiditate dicta deleniti soluta maiores commodi ipsam.
            </p>
        </div>
     </div>
@endforeach

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
