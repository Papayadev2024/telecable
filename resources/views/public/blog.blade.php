@extends('components.public.matrix', ['pagina'=>'blog'])
@section('titulo', 'Blog')
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
                        <a href="{{ route('blog', 0) }}"
                            class="text-text18 py-3 px-4 rounded-lg font-semibold  {{ $filtro == 0 ? 'bg-[#FF5E14] text-white' : 'text-[#082252] bg-[#E6E4E5] bg-opacity-40 ' }} ">Todas</a>
                        @foreach ($categorias as $item)
                            <a href="{{ route('blog', $item->id) }}"
                                class="text-[#082252] font-normal text-text16 py-3 px-4 rounded-lg bg-[#E6E4E5] 
                                @if ($filtro == 0) @else {{ $item->id == $filtro ? 'bg-[#FF5E14] font-semibold text-white' : 'bg-[#E6E4E5] bg-opacity-40 text-[#082252] font-normal ' }} @endif">{{ $item->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="md:basis-5/6 flex flex-col gap-10">
                    @if (is_null($lastpost))
                    @else
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                            <div class="flex justify-center items-center">
                                <img src="{{ asset($lastpost->url_image . $lastpost->name_image) }}" alt="blog"
                                    class="w-full h-[450px] object-cover rounded-xl hidden md:block">

                                <img src="{{ asset($lastpost->url_image . $lastpost->name_image) }}" alt="blog"
                                    class="w-full h-[450px] object-cover rounded-xl block md:hidden">
                            </div>
                            <div class="flex justify-start items-center gap-5">
                                <p
                                    class="text-white font-roboto font-semibold text-text14 bg-[#0C4AC3] py-2 px-4 rounded-lg">
                                    {{ $lastpost->categories->name }}</p>
                                <p class="text-[#0C4AC3] font-roboto font-semibold text-text14">Publicado
                                    {{ \Carbon\Carbon::parse($lastpost->created_at)->diffForHumans() }}</p>
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-[#082252] font-roboto font-bold text-text32 leading-tight">
                                    {{ $lastpost->title }}</h2>
                                <p class="text-[#082252] text-text16 font-normal font-roboto">
                                    {!! Str::limit($lastpost->description, 250) !!}
                                </p>
                            </div>

                            <div>
                                <a href="{{ route('detalleBlog', $lastpost->id) }}"
                                    class="text-[#FF5E14] font-roboto font-normal text-text16 flex justify-start items-center gap-3">
                                    <span>Leer más</span>
                                    <div>
                                        <img src="{{ asset('images/svg/image_36.svg') }}" alt="arrow">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endif

                    @if ($posts->isEmpty())
                    @else
                        <div class="grid grid-cols-2 gap-x-5 gap-y-10">
                            @foreach ($posts as $post)
                                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-duration="150">
                                    <div class="flex justify-center items-center">
                                        <img src="{{ asset($post->url_image . $post->name_image) }}" alt="blog"
                                            class="w-full h-[300px] object-cover rounded-xl hidden md:block">
                                        <img src="{{ asset($post->url_image . $post->name_image) }}" alt="blog"
                                            class="w-full h-[220px] object-cover rounded-xl block md:hidden">
                                    </div>

                                    <div class="flex flex-col md:flex-row md:justify-start md:items-center gap-2 md:gap-5">
                                        <p
                                            class="text-white font-roboto font-semibold text-text14 bg-[#0C4AC3] py-2 px-4 rounded-lg text-center">
                                            {{ $post->categories->name }}</p>
                                        <p class="text-[#0C4AC3] font-roboto font-semibold text-text14">Publicado
                                            {{ \Carbon\Carbon::parse($lastpost->created_at)->diffForHumans() }}</p>
                                    </div>

                                    <div class="flex flex-col gap-1">
                                        <h2 class="text-[#082252] font-roboto font-bold text-text32 leading-tight">
                                            {{ $post->title }}</h2>
                                        <p class="text-[#082252] text-text16 font-normal font-roboto">
                                            {!! Str::limit($post->description, 250) !!}
                                        </p>
                                    </div>

                                    <div>
                                        <a href="{{ route('detalleBlog', $post->id) }}"
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
                    @endif


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

                            <form   id="footerFormulario"
                                class="flex flex-col md:flex-row md:justify-start md:items-center gap-5">
                                @csrf
                                <div class="w-full">
                                    <input type="email"
                                        required name="email" id="emailFooter"
                                        class="bg-white px-5 py-3 rounded-xl w-full placeholder:text-opacity-40 text-[#082252] transition-all focus:border-transparent border-0 focus:font-semibold"
                                        placeholder="Introduce tu correo electrónico" />
                                    <input type="hidden" id="nameFooter" required name="full_name" value="Usuario suscrito" />
                                    <input type="hidden" id="tipo" placeholder="tipo" name="tipo_message" value="Inscripción" />
                                </div>

                                <div class="flex justify-center items-center w-full md:w-auto">
                                    <button type="submit"
                                        class="font-roboto font-normal text-text16 text-white py-3 px-6 rounded-xl w-full md:w-auto text-center bg-[#FF5E14]">
                                        Suscribe
                                    </button>
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
