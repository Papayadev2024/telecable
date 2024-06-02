@extends('components.public.matrix')

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


                <div class="w-full" data-aos="fade-up" data-aos-offset="150">
                    <img src="{{asset('images/img/image_58.png')}}" alt="catedral" class="w-full h-[563px] object-cover hidden md:block rounded-xl" />
                    <img src="{{asset('images/img/image_59.png')}}" alt="catedral" class="w-full h-[563px] object-cover block md:hidden rounded-xl" />
                </div>


                <div class="flex flex-col gap-2 text-[#082252] font-roboto font-normal text-text18">
                    {!!$post->description!!}
                </div>
            </div>

            {{-- <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                <h2 class="font-roboto font-semibold text-text32 text-[#082252] leading-tight">
                    Vestibulum vehicula urna arcu
                </h2>
                <p class="text-[#082252] font-roboto font-normal text-text18">
                    onec tincidunt turpis lacinia nulla ultricies, quis sagittis nisl
                    feugiat. Ut lobortis dui et risus vulputate, ut placerat felis
                    rhoncus. Proin iaculis tellus massa, non mattis nulla malesuada
                    ultrices. Nam a lorem ut dui ultrices efficitur vitae et metus.
                    Mauris quis vulputate orci, ac hendrerit purus. Nunc sagittis lacus
                    sem. Nam varius purus et urna vehicula, eget dictum magna efficitur.
                </p>

                <ul class="list-disc pl-4 font-roboto font-normal text-text18 text-[#082252]">
                    <li>
                        sem. Nam varius purus et urna vehicula, eget dictum magna
                        efficitur.
                    </li>
                    <li>
                        sem. Nam varius purus et urna vehicula, eget dictum magna
                        efficitur.
                    </li>
                    <li>
                        sem. Nam varius purus et urna vehicula, eget dictum magna
                        efficitur.
                    </li>
                </ul>
            </div> --}}

            {{-- <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                <h2 class="font-roboto font-semibold text-text32 text-[#082252] leading-tight">
                    Nunc tincidunt sollicitudin lectus a ornare
                </h2>
                <p class="text-[#082252] font-roboto font-normal text-text18">
                    Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis
                    vulputate orci, ac hendrerit purus. Nunc sagittis lacus sem. Nam
                    varius purus et urna vehicula, eget dictum magna efficitur.
                    Vestibulum facilisis sapien id dolor suscipit malesuada. Cras
                    tristique odio ipsum. Morbi at accumsan lacus. Phasellus efficitur
                    magna eget orci posuere, at pretium metus ultricies. Proin
                    sollicitudin at est non imperdiet. Morbi rhoncus tortor et sapien
                    hendrerit, vel luctus ex feugiat.
                </p>

                <div class="flex flex-wrap gap-4 justify-center font-roboto font-medium text-text18 my-10">
                    <p
                        class="bg-[#FCFCFC] flex-grow text-[#082252] border-l-8 border-[#FF5E14] p-5 w-full md:w-5/12 lg:w-3/12">
                        Phasellus efficitur magna eget orci posuere, at pretium metus ultricies. Proin sollicitudin at est non imperdiet. Morbi rhoncus tortor et sapien hendrerit, vel luctus ex feugiat.
                    </p>
                </div>
               
            </div> --}}

            {{-- <div>
                <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                    <h2 class="font-roboto font-semibold text-text32 text-[#082252] leading-tight">
                        Mauris leo nibh, consequat pulvinar auctor
                    </h2>
                    <p class="text-[#082252] font-roboto font-normal text-text18">
                        Nam a lorem ut dui ultrices efficitur vitae et metus. Mauris quis
                        vulputate orci, ac hendrerit purus. Nunc sagittis lacus sem. Nam
                        varius purus et urna vehicula, eget dictum magna efficitur.
                        Vestibulum facilisis sapien id dolor suscipit malesuada. Cras
                        tristique odio ipsum. Morbi at accumsan lacus. Phasellus efficitur
                        magna eget orci posuere, at pretium metus ultricies. Proin
                        sollicitudin at est non imperdiet. Morbi rhoncus tortor et sapien
                        hendrerit, vel luctus ex feugiat. Donec elementum vestibulum
                        mauris, pharetra interdum risus mollis nec. Nam vitae venenatis
                        dolor, a consectetur nisl. Pellentesque vel mauris a ante laoreet
                        cursus vitae a orci. Nam condimentum, elit ut gravida congue, quam
                        metus dictum nulla.
                    </p>
                </div>
            </div> --}}

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
