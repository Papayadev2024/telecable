@extends('components.public.matrix', ['pagina' => 'catalogo'])
@section('titulo', 'Productos')
@section('css_importados')
    <style>
        .selected {
            background-color: #245BC8 !important;
        }
    </style>
@stop


@section('content')

    <main>
        <section class="pt-[155px]">
            
            <div class="bg-[#F7F8F8] pb-20">
                <div class="w-11/12 md:w-10/12 mx-auto">
                    <div class="flex flex-col items-center text-center pt-20 pb-20 gap-5">
                        <div class="flex flex-col gap-2 w-full md:max-w-[850px]" data-aos="fade-up" data-aos-offset="150">
                            <h3
                                class="text-[#082252] font-roboto font-bold text-text48 md:text-text56 leading-tight text-center">
                                Descubre Nuestra Gama de Soluciones</h3>
                            <p class="font-roboto font-normal text-text18 text-[#082252] text-center">
                                Explora nuestra selección de productos innovadores y eficientes para el tratamiento de agua,
                                diseñados para satisfacer tus necesidades industriales y residenciales
                            </p>
                        </div>

                        <div class="relative w-full md:max-w-[450px] pb-8 lg:py-0">
                            <input type="text" placeholder="Buscar" id="buscarproducto2"
                                class="w-full md:max-w-[450px] pl-8 pr-10 py-2 border border-[#E6E4E5] rounded-lg focus:outline-none focus:ring-0 text-[#082252] placeholder:text-[#E6E4E5] lg:placeholder:text-[#E6E4E5] focus:border-[#E6E4E5]">
                            <span
                                class="absolute inset-y-0 left-0 flex items-start lg:items-center px-2 pb-2 pt-[9px] lg:p-2">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.6851 13.6011C14.3544 13.2811 13.8268 13.2898 13.5068 13.6206C13.1868 13.9514 13.1955 14.4789 13.5263 14.7989L14.6851 13.6011ZM16.4206 17.5989C16.7514 17.9189 17.2789 17.9102 17.5989 17.5794C17.9189 17.2486 17.9102 16.7211 17.5794 16.4011L16.4206 17.5989ZM15.2333 9.53333C15.2333 12.6814 12.6814 15.2333 9.53333 15.2333V16.9C13.6018 16.9 16.9 13.6018 16.9 9.53333H15.2333ZM9.53333 15.2333C6.38531 15.2333 3.83333 12.6814 3.83333 9.53333H2.16667C2.16667 13.6018 5.46484 16.9 9.53333 16.9V15.2333ZM3.83333 9.53333C3.83333 6.38531 6.38531 3.83333 9.53333 3.83333V2.16667C5.46484 2.16667 2.16667 5.46484 2.16667 9.53333H3.83333ZM9.53333 3.83333C12.6814 3.83333 15.2333 6.38531 15.2333 9.53333H16.9C16.9 5.46484 13.6018 2.16667 9.53333 2.16667V3.83333ZM13.5263 14.7989L16.4206 17.5989L17.5794 16.4011L14.6851 13.6011L13.5263 14.7989Z"
                                        fill="#E6E4E5" />
                                </svg>
                            </span>
                            <div class="bg-white z-60 shadow-2xl top-12 w-full absolute overflow-y-auto max-h-[200px]"
                                id="resultados2"></div>
                        </div>
                    </div>

                    <div>
                        <div class="swiper logos">
                            <div class="swiper-wrapper">
                                @foreach ($categorias as $item)
                                    <div class="swiper-slide !flex justify-center cursor-pointer">
                                        {{-- <a href="{{route('catalogo', $item->id)}}"> --}}
                                        <a id="{{ $item->id }}" class="categoryselect">
                                            <div class="inline-flex flex-col gap-3">
                                                <div id="{{ $item->id }}"
                                                    class="rounded-full bg-white hover:bg-[#245BC8] md:duration-300 w-36 h-36 md:w-52 md:h-52 flex justify-center items-center">
                                                    <div class="flex flex-row justify-center items-center">
                                                        <img src="{{ asset($item->url_image.$item->name_image) }}"
                                                            alt="tratamiento de agua"
                                                            class="w-28 md:w-48 object-cover rounded-full">
                                                    </div>
                                                </div>
                                                <h2 class="text-[#082252] font-roboto font-bold text-text18 text-center">
                                                    {{ $item->name }}</h2>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section>
            <div class="flex flex-col gap-5 md:gap-10 w-11/12 mx-auto py-10">
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#082252] font-roboto font-bold text-text32 subtitle">

                        </h2>
                        <p class="text-[#082252] font-roboto font-normal text-text18 description">

                        </p>
                    </div>

                    <div>
                        <div class="flex flex-col md:flex-row md:justify-start gap-3">
                            <div class="relative inline-block text-left min-w-64 w-auto">
                                <select id="selectSubcategory"
                                    class="hidden bg-[#FF5E14] w-full py-3 text-left px-4 text-white font-bold font-roboto hover:bg-[#FF5E14] hover:bg-opacity-80 text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                                    <option value="sinproduct">Selecciona subcategoria</option>
                                </select>
                            </div>
                            <div class="relative inline-block text-left min-w-64 w-auto">
                                <select id="selectMicrocategory"
                                    class="hidden bg-[#FF5E14] w-full py-3 text-left px-4 text-white font-bold font-roboto hover:bg-[#FF5E14] hover:bg-opacity-80 text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                                    <option value="sinproduct">Selecciona microcategoria</option>
                                </select>
                            </div>
                            <input type="hidden" id="valorcategoria" />
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div id="getProductAjax"
                    class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-11/12 mx-auto gap-x-10 gap-y-10 pb-10 md:pb-20">

                    @foreach ($productos as $item)
                        <div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                            <div class="flex justify-center items-center">
                                <a href="{{ route('producto', $item->id) }}" class="w-full"><img
                                        src="{{ asset($item->imagen) }}" alt="planta de tratmiento de agua"
                                        class="w-full object-cover rounded-lg h-full " /></a>
                            </div>
                            <div class="flex flex-col gap-2">
                                @if (is_null($item->categoria->name))
                                @else
                                    <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">
                                        {{ $item->categoria->name }}
                                    </h3>
                                @endif

                                <a href="{{ route('producto', $item->id) }}">
                                    <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">
                                        {{ $item->producto }}</h2>
                                </a>
                                {{-- <p class="font-roboto font-normal text-text16 text-[#082252]">
                                    {{ Str::limit($item->extract, 100) }}
                                </p> --}}
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="flex justify-center items-center mb-10">
                    <a href="javascript:;" @if (empty($page)) style="display:none;" @endif
                        data-page={{ $page }}
                        class="text-white py-3 px-5 border-2 bg-[#082252] rounded-3xl w-60 text-center font-medium text-text16 cargarMas">
                        Cargar más modelos
                    </a>
                </div>

            </div>
        </section>
    </main>

@section('scripts_importados')
    <script>
        var swiper = new Swiper(".logos", {
            slidesPerView: 4,
            spaceBetween: 30,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 4,
                },
            },
        });
    </script>

    <script>
        $('document').ready(function() {

            $('#selectMicrocategory').change(function() {

                var id = $('#selectMicrocategory').val();
                $('#getProductAjax').empty();
                $('.cargarMas').attr('data-page', 1);  // Reinicia a la primera página

                $.ajax({
                    url: '{{ route('getProductMicrocategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {

                        $('#getProductAjax').empty();

                        //$('.cargarMas').attr('data-page', response.page);

                        //if (response.page == 0) {
                        //    $('.cargarMas').hide();
                        //} else {
                        //    $('.cargarMas').show();
                        //}

                        if (response.productos.next_page_url) {
                            $('.cargarMas').show();
                        } else {
                            $('.cargarMas').hide();
                        }

                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg h-full"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                    </div>
                                </div>`
                            );
                        });


                    },
                    error: function(error) {

                    }
                });


            });



            $('#selectSubcategory').change(function() {

                var id = $('#selectSubcategory').val();


                // Vaciar el contenido y reiniciar la paginación
                $('#getProductAjax').empty();
                $('.cargarMas').attr('data-page', 1);  // Reinicia a la primera página


                $.ajax({
                    url: '{{ route('getMicrocategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        //    console.log(response);
                        $('.cargarMas').attr('data-page', response.page);
                        $('.cargarMas').html('Cargar más modelos');
                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
                        }

                        if (response.microcategorias && response.microcategorias.length > 0) {
                            $('#selectMicrocategory').empty().show();
                           $('#selectMicrocategory').append(
                                    '<option value="">Selecciona microcategoria</option>');     
                            $.each(response.microcategorias, function(key, value) {
                              
                                console.log(value);
                                $('#selectMicrocategory').append(
                                    '<option value="' + value['id'] + '">' + value[
                                        'name'] +
                                    '</option>'
                                );
                            });
                        }

                        if (response.microcategorias && response.microcategorias.length == 0) {
                            $('#selectMicrocategory').empty().hide();
                        }

                        $('#getProductAjax').empty(); 
                        
                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg h-full"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                    </div>
                                </div>`
                            );
                        });


                    },
                    error: function(error) {

                    }
                });


            });




            $('.categoryselect').click(function() {

                var id = $(this).attr('id');
                $('.categoryselect .rounded-full').removeClass('selected');
                $(this).find('.rounded-full').addClass('selected');


                $.ajax({
                    url: '{{ route('getSubcategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response.productos);
                        $('#selectSubcategory').empty().show();
                        $('#selectMicrocategory').empty().hide();
                        $('#selectMicrocategory').append(
                            '<option value="">Selecciona microcategoria</option>');
                        $('#selectSubcategory').append(
                            '<option value="">Selecciona subcategoria</option>');

                        $('.subtitle').empty();
                        $('.subtitle').text(response.categorias[0].extract);

                        $('.description').empty();
                        $('.description').text(response.categorias[0].description);

                        $('.cargarMas').attr('data-page', response.page);

                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
                        }

                        $.each(response.subcategorias, function(key, value) {


                            $('#selectSubcategory').append(
                                '<option value="' + value['id'] + '">' + value[
                                    'name'] +
                                '</option>'
                            );

                        });

                        $('#getProductAjax').empty();
                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg h-full"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                    </div>
                                    
                                </div>`
                            );
                        });


                    },
                    error: function(error) {

                    }
                });

            });




            $('body').delegate('.cargarMas', 'click', function() {
                var page = $(this).attr('data-page');
                $('.cargarMas').html('Cargando...');

                var id = $('#valorcategoria').val();
 
                $.ajax({
                    url: "{{ route('getTotalProductos') }}?page=" + page,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    //cache: false,
                    success: function(response) {

                        console.log(response);

                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-5" data-aos="fade-up" data-aos-offset="150">
                                    
                                    <div class="flex justify-center items-center">
                                        <a href='${productoUrl}' class="w-full"><img src="{{ asset('${value.imagen}') }}"
                                                alt="planta de tratmiento de agua" class="w-full object-cover rounded-lg h-full"></a>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <h3 class="text-[#FF5E14] uppercase font-roboto font-bold text-text12">${value.category_name}</h3>
                                        <a href='${productoUrl}'>
                                            <h2 class="text-[#082252] font-bold font-roboto text-text24 leading-tight">${value.producto}</h2>
                                        </a>
                                    </div>
                                    
                                </div>`
                            );
                        });


                        $('.cargarMas').attr('data-page', response.page);
                        $('.cargarMas').html('Cargar más modelos');
                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
                        }
                    },
                    error: function(error) {}
                });

            })

        });
    </script>
    <script>
        $(document).on('click', '.selected', function() {
            var id = $(this).attr('id');
            console.log('ID from selected div:', id);
            $('#valorcategoria').val(id);
        });

        // Actualizar id cuando cambie el select con id 'selectSubcategory'
        $('#selectSubcategory').on('change', function() {
            var id = $(this).val();
            console.log('ID from selectSubcategory:', id);
            $('#valorcategoria').val(id);
        });

        // Actualizar id cuando cambie el select con id 'selectMicrocategory'
        $('#selectMicrocategory').on('change', function() {
            var id = $(this).val();
            console.log('ID from selectMicrocategory:', id);
            $('#valorcategoria').val(id);
        });
    </script>
@stop

@stop
