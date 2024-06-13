@extends('components.public.matrix', ['pagina' => 'catalogo'])
@section('titulo', 'Producto')
@section('css_importados')
    <style>
        .active {
            border: 2px solid #FF5E14;
        }
    </style>
@stop


@section('content')
    @php
        function capitalizeFirstLetter($string)
        {
            return ucfirst($string);
        }
    @endphp
    <main>
        <section class="w-11/12 md:w-10/12 mx-auto pt-44 pb-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-16">
                <div class="flex flex-col md:flex-row justify-center items-center gap-5 md:gap-0">
                    <div
                        class="flex flex-row justify-between md:flex-col md:justify-start md:items-center h-full md:gap-10 md:basis-1/4 order-2 md:order-1 w-full">

                        @foreach ($productosConGalerias as $galeria)
                            <img src="{{ asset($galeria->imagen) }}" alt="{{ $galeria->descripcion }}"
                                class="w-[70px] h-[90px] active rounded-xl cursor-pointer secundario" data-aos="fade-up"
                                data-aos-offset="150">
                        @endforeach
                    </div>

                    <div class="md:basis-3/4 flex justify-center items-center order-1 md:order-2 w-full h-full">
                        <img src="{{ asset($producto->imagen) }}" alt="producto"
                            class="w-full h-full object-cover rounded-xl principal" data-aos="fade-up"
                            data-aos-offset="150">
                    </div>
                </div>

                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-5 pb-10 border-b-2 border-[#DDDDDD]" data-aos="fade-up"
                        data-aos-offset="150">
                        <h2 id="nombreproducto" class="font-roboto font-bold text-text40 text-[#082252]">
                            {{ $producto->producto }}</h2>


                        <p class="text-[#082252] text-text16 font-roboto font-normal">{{ $producto->extract }}</p>

                        <div class="flex justify-between items-center text-white font-roboto font-bold text-text14 gap-5 pt-3"
                            data-aos="fade-up" data-aos-offset="150">
                         @if ($producto->name_fichatecnica)
                         <a href="{{ asset('storage/archives/'.$producto->name_fichatecnica) }}" target="_blank" 
                            class="cursor-pointer bg-[#FF5E14] flex justify-center items-center w-6/12 py-3 px-4 md:px-10 text-center gap-2 rounded-xl">
                            <span>Ficha técnica</span>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M382.56 233.376A15.96 15.96 0 0 0 368 224h-64V16c0-8.832-7.168-16-16-16h-64c-8.832 0-16 7.168-16 16v208h-64a16.013 16.013 0 0 0-14.56 9.376c-2.624 5.728-1.6 12.416 2.528 17.152l112 128A15.946 15.946 0 0 0 256 384c4.608 0 8.992-2.016 12.032-5.472l112-128c4.16-4.704 5.12-11.424 2.528-17.152z"
                                            fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M432 352v96H80v-96H16v128c0 17.696 14.336 32 32 32h416c17.696 0 32-14.304 32-32V352h-64z"
                                            fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </a>                    
                         @endif
                          
                        @if ($producto->name_docriesgo)
                        <a href="{{ asset('storage/archives/'.$producto->name_docriesgo) }}" target="_blank" 
                            class="cursor-pointer bg-[#FF5E14] flex justify-center items-center w-6/12 py-3 px-4 md:px-10 text-center gap-2 rounded-xl">
                            <span>Ficha de riesgo</span>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="17" height="17" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M382.56 233.376A15.96 15.96 0 0 0 368 224h-64V16c0-8.832-7.168-16-16-16h-64c-8.832 0-16 7.168-16 16v208h-64a16.013 16.013 0 0 0-14.56 9.376c-2.624 5.728-1.6 12.416 2.528 17.152l112 128A15.946 15.946 0 0 0 256 384c4.608 0 8.992-2.016 12.032-5.472l112-128c4.16-4.704 5.12-11.424 2.528-17.152z"
                                            fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M432 352v96H80v-96H16v128c0 17.696 14.336 32 32 32h416c17.696 0 32-14.304 32-32V352h-64z"
                                            fill="#FFFFFF" opacity="1" data-original="#000000" class=""></path>
                                    </g>
                                </svg>
                            </div>
                        </a>
                        @endif
                            

                        </div>

                        <div class="flex justify-between items-center text-white font-roboto font-bold text-text14 gap-5 pt-3"
                            data-aos="fade-up" data-aos-offset="150">
                            <div target="_blank" id="chatonline"
                                class="cursor-pointer bg-[#FF5E14] flex justify-center items-center w-6/12 py-3 px-4 md:px-10 text-center gap-2 rounded-xl">
                                <span>Cotizar aquí</span>
                                <div>
                                    <svg width="17" height="16" viewBox="0 0 17 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M14.1 2.3C12.6 0.8 10.6 0 8.5 0C4.1 0 0.5 3.6 0.5 8C0.5 9.4 0.900006 10.8 1.60001 12L0.5 16L4.70001 14.9C5.90001 15.5 7.2 15.9 8.5 15.9C12.9 15.9 16.5 12.3 16.5 7.9C16.5 5.8 15.6 3.8 14.1 2.3ZM8.5 14.6C7.3 14.6 6.10001 14.3 5.10001 13.7L4.89999 13.6L2.39999 14.3L3.10001 11.9L2.89999 11.6C2.19999 10.5 1.89999 9.3 1.89999 8.1C1.89999 4.5 4.9 1.5 8.5 1.5C10.3 1.5 11.9 2.2 13.2 3.4C14.5 4.7 15.1 6.3 15.1 8.1C15.1 11.6 12.2 14.6 8.5 14.6ZM12.1 9.6C11.9 9.5 10.9 9 10.7 9C10.5 8.9 10.4 8.9 10.3 9.1C10.2 9.3 9.80001 9.7 9.70001 9.9C9.60001 10 9.49999 10 9.29999 10C9.09999 9.9 8.50001 9.7 7.70001 9C7.10001 8.5 6.70001 7.8 6.60001 7.6C6.50001 7.4 6.60001 7.3 6.70001 7.2C6.80001 7.1 6.9 7 7 6.9C7.1 6.8 7.10001 6.7 7.20001 6.6C7.30001 6.5 7.20001 6.4 7.20001 6.3C7.20001 6.2 6.80001 5.2 6.60001 4.8C6.50001 4.5 6.30001 4.5 6.20001 4.5C6.10001 4.5 5.99999 4.5 5.79999 4.5C5.69999 4.5 5.49999 4.5 5.29999 4.7C5.09999 4.9 4.60001 5.4 4.60001 6.4C4.60001 7.4 5.29999 8.3 5.39999 8.5C5.49999 8.6 6.79999 10.7 8.79999 11.5C10.5 12.2 10.8 12 11.2 12C11.6 12 12.4 11.5 12.5 11.1C12.7 10.6 12.7 10.2 12.6 10.2C12.5 9.7 12.3 9.7 12.1 9.6Z"
                                            fill="white" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="pt-5" data-aos="fade-up" data-aos-offset="150">
                        @if (is_null($producto->categoria->name))
                        @else
                            <p class="font-roboto font-medium text-text14 text-[#082252]">
                                Categoría: <span
                                    class="text-[#565656] font-normal text-text14">{{ $producto->categoria->name }}</span>
                            </p>
                        @endif

                        @if (is_null($producto->sku))
                        @else
                            <p class="font-roboto font-medium text-text14 text-[#082252]">
                                SKU: <span class="text-[#565656] font-normal text-text14">{{ $producto->sku }}</span>
                            </p>
                        @endif


                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-5 pt-10 md:pt-16" data-aos="fade-up" data-aos-offset="150">

                <h3 class="font-roboto font-bold text-text28 text-[#082252]">Descripción</h3>
                <div class="text-[#082252] text-text16 font-normal font-roboto flex flex-col gap-5">
                    <p>
                        {!! $producto->description !!}
                    </p>
                </div>
            </div>

            @if ($especificaciones->isEmpty())
            @else
                <div class="pt-10 md:pt-16 flex flex-col gap-5">
                    <h3 class="font-roboto font-bold text-text28 text-[#082252]">Características técnicas</h3>
                    <div class="mx-6" data-aos="fade-up" data-aos-offset="150">
                        <ul class="font-roboto font-normal text-text16 list-disc text-[#082252]">

                            @foreach ($especificaciones as $item)
                                <li><span class="font-semibold">{{ capitalizeFirstLetter($item->tittle) }}:</span>
                                    {{ capitalizeFirstLetter($item->specifications) }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        </section>

        @if ($ProdComplementarios->isEmpty())
        @else
            <section class="bg-[#F7F8F8] py-20">
                <div class="grid grid-cols-1 md:grid-cols-3 w-11/12 mx-auto gap-5">
                    @foreach ($ProdComplementarios->take(3) as $complemento)
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                            <div class="flex justify-center items-center">
                                <a href="{{ route('producto', $complemento->id) }}" class="w-full"><img
                                        src="{{ asset($complemento->imagen) }}" alt="planta de tratmiento de agua"
                                        class="w-full object-cover rounded-lg h-96"></a>
                            </div>
                            <div class="flex flex-col gap-2">
                                @if ($complemento->categoria && $complemento->categoria->name)
                                    <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">
                                        {{ $complemento->categoria->name }}
                                    </h3>
                                @endif
                                <a href="{{ route('producto', $complemento->id) }}">
                                    <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">
                                        {{ $complemento->producto }}</h2>
                                </a>
                                <p class="font-roboto font-normal text-text16 text-[#082252]">
                                    {{ Str::limit($complemento->extract, 220) }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif



    </main>

@section('scripts_importados')
    <script>
        const principal = document.querySelector('.principal');
        const secundarios = document.querySelectorAll('.secundario');

        secundarios.forEach(item => {
            item.addEventListener('click', function() {
                const active = document.querySelector('.active');
                active.classList.remove('active');
                this.classList.add('active');
                principal.src = this.src;
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#chatonline').click(function() {

                function isMobile() {
                    if (sessionStorage.desktop)
                        return false;
                    else if (localStorage.mobile)
                        return true;
                    var mobile = ['iphone', 'ipad', 'android', 'blackberry', 'nokia', 'opera mini',
                        'windows mobile', 'windows phone', 'iemobile'
                    ];
                    for (var i in mobile)
                        if (navigator.userAgent.toLowerCase().indexOf(mobile[i].toLowerCase()) > 0)
                            return true;
                    return false;
                }

                setTimeout(function() {

                    telefono2 = '51992262598';
                    nombre2 = $('#nombreproducto').text();
                    mensaje2 = 'send?phone=' + telefono2 +
                        '&text=Hola, quiero comunicarme con un asesor.%0AEstoy interesad@ en el producto *' +
                        nombre2 + '*.';

                    if (isMobile()) {
                        window.open('https://api.whatsapp.com/' + mensaje2, '_blank');
                    } else {
                        window.open('https://web.whatsapp.com/' + mensaje2, '_blank');
                    }
                }, 200);
            });
        });
    </script>

@stop

@stop
