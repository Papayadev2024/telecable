@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')
    <main>
        <section class="w-11/12 mx-auto pt-44 flex flex-col gap-10 pb-20">
            <div class="flex flex-col gap-2 w-full md:max-w-[768px]" data-aos="fade-up" data-aos-duration="150">
                <p class="uppercase text-[#FF5E14] font-roboto font-semibold text-text16">Blog</p>
                <h2 class="text-[#000929] font-bold font-roboto text-text40 md:text-text56 leading-tight">
                    En HPI te brindamos información útil y algunas recomendaciones
                </h2>
            </div>

            <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-12">

                <div class="md:basis-1/6 flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                    <h3 class="text-[#082252] font-bold font-roboto text-text18">Blog categorias</h3>
                    <div class="flex flex-col gap-3">
                        <a href="#"
                            class="text-text18 py-3 px-4 rounded-lg font-semibold text-white bg-[#FF5E14]">Todas</a>
                        <a href="#" class="text-[#082252] font-normal text-text16 py-3 px-4 rounded-lg">Tratamiento de
                            Agua</a>
                        <a href="#" class="text-[#082252] font-normal text-text16 py-3 px-4 rounded-lg">Productos
                            Químicos</a>
                        <a href="#" class="text-[#082252] font-normal text-text16 py-3 px-4 rounded-lg">Medición e
                            Instrumentación</a>
                        <a href="#" class="text-[#082252] font-normal text-text16 py-3 px-4 rounded-lg">Piscinas &
                            Spa</a>
                    </div>
                </div>

                <div class="md:basis-5/6 flex flex-col gap-10">
                    <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                        <div class="flex justify-center items-center">
                            <img src="{{ asset('images/img/image_44.png') }}" alt="blog"
                                class="w-full h-[450px] object-cover rounded-xl hidden md:block">
                            <img src="{{ asset('images/img/image_45.png') }}" alt="blog"
                                class="w-full h-[450px] object-cover rounded-xl block md:hidden">
                        </div>
                        <div class="flex justify-start items-center gap-5">
                            <p class="text-white font-roboto font-semibold text-text14 bg-[#0C4AC3] py-2 px-4 rounded-lg">
                                Categoría</p>
                            <p class="text-[#0C4AC3] font-roboto font-semibold text-text14">Publicado 5 min</p>
                        </div>
                        <div class="flex flex-col gap-1">
                            <h2 class="text-[#082252] font-roboto font-bold text-text32 leading-tight">Nunc faucibus, augue
                                at bibendum</h2>
                            <p class="text-[#082252] text-text16 font-normal font-roboto">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros.
                            </p>
                        </div>

                        <div>
                            <a href="  "
                                class="text-[#FF5E14] font-roboto font-normal text-text16 flex justify-start items-center gap-3">
                                <span>Leer más</span>
                                <div>
                                    <img src="{{ asset('images/svg/image_36.svg') }}" alt="arrow">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-x-5 gap-y-10">
                       @foreach ($posts as $post)
                            <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                                <div class="flex justify-center items-center">
                                    <img src="{{ asset('images/img/image_46.png') }}" alt="blog"
                                        class="w-full h-[300px] object-cover rounded-xl hidden md:block">
                                    <img src="{{ asset('images/img/image_52.png') }}" alt="blog"
                                        class="w-full h-[220px] object-cover rounded-xl block md:hidden">
                                </div>

                                <div class="flex flex-col md:flex-row md:justify-start md:items-center gap-2 md:gap-5">
                                    <p
                                        class="text-white font-roboto font-semibold text-text14 bg-[#0C4AC3] py-2 px-4 rounded-lg text-center">
                                        {{$post->categories->name}}</p>
                                    <p class="text-[#0C4AC3] font-roboto font-semibold text-text14">Publicado 5 min</p>
                                </div>

                                <div class="flex flex-col gap-1">
                                    <h2 class="text-[#082252] font-roboto font-bold text-text32 leading-tight">{{$post->title}}</h2>
                                    <p class="text-[#082252] text-text16 font-normal font-roboto">
                                      {!! Str::limit($post->description, 250) !!}
                                    </p>
                                </div>

                                <div>
                                    <a href=""
                                        class="text-[#FF5E14] font-roboto font-normal text-text16 flex justify-start items-center gap-3">
                                        <span>Leer más</span>
                                        <div>
                                            <img src="{{ asset('images/svg/image_36.svg') }}" alt="arrow">
                                        </div>
                                    </a>
                                </div>
                            </div>
                       @endforeach
                    </div>
                </div>

            </div>
        </section>

        <section class="pb-20">
            <div class="relative w-11/12 mx-auto ">
                <img src="{{ asset('images/img/image_68.png') }}" alt="fondo"
                    class="w-full h-[270px] object-cover rounded-xl hidden md:block">
                <img src="{{ asset('images/img/image_69.png') }}" alt="fondo"
                    class="w-full h-[485px] object-cover rounded-xl block md:hidden">
                <div class="absolute transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-11/12 mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="flex flex-col gap-3 justify-center">
                            <h3 class="text-white font-roboto font-bold text-text40 leading-tight">Únete a Nuestra
                                Comunidad
                            </h3>
                            <p class="text-white font-roboto font-normal text-text18">
                                Mantente al día con las últimas noticias, consejos y tendencias sobre tratamiento de agua.
                                ¡Inscríbete ahora y no te pierdas ninguna actualización!
                            </p>
                        </div>

                        <div class="flex flex-col gap-2 justify-center">

                            <form action="" id="footerFormulario"
                                class="flex flex-col md:flex-row md:justify-start md:items-center gap-5">
                                <div class="w-full">
                                    <input type="text"
                                        class="bg-white px-5 py-3 rounded-xl w-full placeholder:text-opacity-40 text-[#082252] transition-all focus:border-transparent border-0 focus:font-semibold"
                                        placeholder="Introduce tu correo electrónico" />
                                </div>

                                <div class="flex justify-center items-center w-full md:w-auto">
                                    <a href="#"
                                        class="font-roboto font-normal text-text16 text-white py-3 px-6 rounded-xl w-full md:w-auto text-center bg-[#FF5E14]">
                                        Suscribe
                                    </a>
                                </div>
                            </form>

                            <div
                                class="text-white font-roboto font-semibold text-text10 flex flex-wrap justify-start items-center gap-1">
                                <p>Al hacer clic en Registrarse, confirma que está de acuerdo con nuestros </p>
                                <a href="#" target="_blank" class="underline "> Términos y condiciones</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@section('scripts_importados')


@stop

@stop
