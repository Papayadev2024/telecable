@extends('components.public.matrix', ['pagina'=>'blog'])
@section('titulo', 'Post')
@section('css_importados')

@stop


@section('content')
    <main>
        <section class="w-11/12 md:w-10/12 mx-auto flex flex-col gap-10 pt-52 pb-16" data-aos="fade-up" data-aos-offset="150">
            <div class="flex flex-col gap-5">
                <h3 class="font-semibold font-roboto text-text16 text-[#FF5E14]">Blog</h3>
                <h2 class="font-roboto font-semibold text-text48 md:text-text56 text-[#082252] leading-tight">
                    {{$post->title}}
                </h2>
                <p class="font-roboto font-semibold text-text20 text-[#0C4AC3]">{{ \Carbon\Carbon::parse($post->created_at)->translatedFormat('d F, Y') }}</p>

                {{-- <p class="text-[#FF5E14]">////////////////////////////</p> --}}

                @if($post->url_video)
                    <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                        <iframe width="100%" height="600px" src="https://www.youtube.com/embed/{{ $post->url_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                @endif
               


                <div class="flex flex-col gap-2 text-[#082252] font-roboto font-normal text-text18">
                    {!!$post->description!!}
                </div>

                @if($post->url_image)
                    <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                        <img src="{{asset($post->url_image . $post->name_image)}}" alt="catedral" class="w-full h-[563px] object-cover hidden md:block rounded-xl" />
                        <img src="{{asset($post->url_image . $post->name_image)}}" alt="catedral" class="w-full h-[563px] object-cover block md:hidden rounded-xl" />
                    </div>
                @endif
            </div>

            <div>
                <div class="mb-4 flex justify-between border-t-2 pt-5" aria-label="Pagination">
                    <a class="px-2 py-2 text-[#3F76BB] flex gap-2" href="#">
                        <img src="{{asset('images/svg/image_38.svg')}}" alt="previo" />
                        <span class="font-bold font-roboto text-text14 text-[#FF5E14]">Anterior</span>
                    </a>

                    <a class="px-2 py-2 text-[#3F76BB] flex gap-2" href="#">
                        <span class="font-bold font-roboto text-text14 text-[#FF5E14]">Próximo</span>
                        <img src="{{asset('images/svg/image_37.svg')}}" alt="next" />
                    </a>
                </div>
            </div>
        </section>
    </main>


@section('scripts_importados')


@stop

@stop
