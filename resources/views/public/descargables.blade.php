@extends('components.public.matrix', ['pagina'=>'descargables'])
@section('titulo', 'Catálogo')
@section('css_importados')

@stop


@section('content')
    <main>
        <section class="pt-44 pb-20">
            <div class="w-11/12 mx-auto">
                <div class="w-full md:max-w-[1000px] mx-auto flex flex-col gap-16 pt-0 lg:py-20">
                    <div class="flex flex-col gap-2">
                        <h2
                            class="text-[#082252] font-roboto font-bold text-text48 md:text-text56 text-center leading-tight">
                            Explora Nuestro Catálogo</h2>
                        <p class="text-[#082252] font-roboto font-normal text-text18 text-center">Descubre nuestra amplia
                            gama de soluciones de tratamiento de agua en nuestro catálogo.</p>
                    </div>
                    {{-- preguntar --}}
                    <div class="flex flex-col md:flex-row md:flew-row md:justify-center gap-5 md:gap-8 md:items-center">
                        <a href="{{route('descargables', 0)}}" 
                            class="font-roboto text-text16 rounded-lg py-3 px-5 text-center  {{$filtro == 0 ?  'bg-[#FF5E14] font-semibold text-white' : ' bg-[#E6E4E5] bg-opacity-40 text-[#082252] font-normal ' }}  ">Todas</a>
                        @foreach ($categorias as $item)
                            <a href="{{route('descargables', $item->id)}}"
                                class=" font-roboto text-text16 rounded-lg py-3 px-5 text-center bg-[#E6E4E5]  text-[#082252] font-normal    @if ($filtro == 0) @else {{ $item->id == $filtro ? 'bg-[#FF5E14] font-semibold text-white' : 'bg-[#E6E4E5] bg-opacity-40 text-[#082252] font-normal ' }} @endif">
                            {{ $item->name}}</a>
                        @endforeach     
                    </div>
                    {{-- ---- --}}
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 mt-20 lg:mt-0">
                    @foreach ($descargables as $descargable)
                        <div class="flex justify-start items-center gap-8 h-[150px] md:h-[250px]">
                            <div class="bg-[#F5F4F5] rounded-xl flex justify-center items-center w-2/5 h-full">
                                <img src="{{ asset($descargable->url_image.$descargable->name_image ) }}" alt="catalogo"
                                    class="w-[80px] h-[115px] md:w-[150px] md:h-[190px]">
                            </div>
                            <div class="flex flex-col gap-4 w-3/5">
                                <div class="flex flex-col gap-2">
                                    <h2 class="text-[#082252] font-roboto font-bold text-text18 md:text-text24 leading-tight">
                                        {{$descargable->title}}</h2>
                                    <p class="text-[#082252] font-roboto font-normal text-text10 md:text-text16">{{$descargable->description}}</p>
                                </div>

                                <a href="{{ asset($descargable->url_archive.$descargable->name_archive) }}" target="_blank" 
                                    class="text-[#FF5E14] font-roboto font-normal text-text10 md:text-text16 flex justify-start items-center gap-2">
                                    <span>Descargar</span>
                                    <div>
                                        <img src="{{ asset('images/svg/image_42.svg') }}" alt="download"
                                            class="w-[8px] h-[9px] md:w-[auto] md:h-auto">
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
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

                            <form   id="footerBlog_Catalogo"
                                class="flex flex-col md:flex-row md:justify-start md:items-center gap-5">
                                @csrf
                                <div class="w-full">
                                    <input type="email"
                                        required name="email" id="emailFooter2"
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

                            <div class="text-white font-roboto font-semibold text-text10 flex flex-wrap justify-start items-center gap-1">
                                <p>Al hacer clic en Registrarse, confirma que está de acuerdo con nuestra </p>
                                <a id="linkPoliticas" target="_blank" class="underline cursor-pointer">Política de privacidad</a>
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
