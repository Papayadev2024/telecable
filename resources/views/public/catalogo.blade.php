@extends('components.public.matrix', ['pagina' => 'catalogo'])
@section('titulo', 'Productos')
@section('css_importados')
    <style>
        select {
          background: linear-gradient(to right, cyan, green, yellow);
          color: white;
          font-weight: bold;
          border: none;
          border-radius: 8px;
          padding: 10px;
          width: 100%;
          appearance: none; /* Elimina el estilo predeterminado */
        }
      </style>
@stop


@section('content')

    <main>

        <section
            class="flex flex-col lg:flex-row gap-10 lg:gap-10 justify-center items-center px-[5%] -mt-24 bg-cover bg-top pt-32"
            style="background-image:url({{ asset('images/img/portadaimagen.png') }})">
            <div class="w-full pt-20 pb-10">
                {{-- <div>
                        <div class="swiper logos">
                            <div class="swiper-wrapper">
                                @foreach ($categorias as $item)
                                    <div class="swiper-slide !flex justify-center cursor-pointer">
                                        
                                        <a id="{{ $item->id }}" class="categoryselect">
                                            <div class="flex flex-col justify-center items-center gap-3">
                                                <div id="{{ $item->id }}"
                                                    class="{{ $filtro == $item->id ? 'selected' : '' }} rounded-full bg-white hover:bg-[#245BC8] md:duration-300 w-36 h-36 md:w-52 md:h-52 flex justify-center items-center">
                                                    <div class="flex flex-row justify-center items-center">
                                                        <img src="{{ asset($item->url_image.$item->name_image) }}"
                                                            alt="tratamiento de agua"
                                                            class="max-w-[93%] object-cover rounded-full">
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
                    </div> --}}
                <div class="flex flex-col lg:flex-row lg:justify-between lg:items-end">
                    <div class="flex flex-col gap-3 items-start justify-center max-w-2xl">
                        <h2 class="leading-normal font-gotham_medium  text-4xl sm:text-5xl lg:text-6xl text-white">
                            {{$textoproducto->title1section ?? "Ingrese un texto"}}</h2>
                    </div>
                    <div
                        class="w-full flex flex-col justify-end items-start lg:items-end gap-2 px-0 lg:pl-[5%] pt-5 lg:pt-0 xl:max-w-3xl ">
                        <p class="text-[#F8FCFF] text-base font-gotham_medium line-clamp-1">
                            {{$textoproducto->subtitle1section ?? "Ingrese un texto"}}
                        </p>
                        <div class="flex flex-wrap gap-5 mt-3">
                            <img class="h-8 object-contain" src="{{ asset('images/img/logosatec.png') }}" />
                            <img class="h-8 object-contain" src="{{ asset('images/img/metrycon.png') }}" />
                            <img class="h-8 object-contain" src="{{ asset('images/img/eaton.png') }}" />
                            <img class="h-8 object-contain" src="{{ asset('images/img/metcon.png') }}" />
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="flex flex-col gap-10 w-full px-[5%] mx-auto py-10 lg:py-20 bg-[#F5F7F9]">
            {{-- <div class="flex flex-col gap-5 md:gap-10 w-11/12 mx-auto py-10">
                <div class="flex flex-col gap-5">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#082252] font-roboto font-bold text-text32 subtitle">
                          @if ($filtro != 0)
                            {{$categoria->extract}}
                          @endif  
                        </h2>
                        <p class="text-[#082252] font-roboto font-normal text-text18 description">
                          @if ($filtro != 0)
                                {{$categoria->description}}
                          @endif    
                        </p>
                    </div>

                    <div>
                        <div class="flex flex-col md:flex-row md:justify-start gap-3">
                            <div class="relative inline-block text-left min-w-64 w-auto">
                                <select id="selectSubcategory"
                                    class="{{ ($filtro === null || $filtro == 0) ? 'hidden' : '' }} bg-[#FF5E14] w-full py-3 text-left px-4 text-white font-bold font-roboto hover:bg-[#FF5E14] hover:bg-opacity-80 text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                                    <option value="sinproduct">Selecciona subcategoria</option>
                                    @if (!is_null($filtro))
                                        @foreach ($subcategorias as $subcat)
                                           @if ($subcat->category_id == $filtro)
                                            <option value="{{$subcat->id}}">{{$subcat->name}}</option>  
                                           @endif   
                                        @endforeach
                                    @endif
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
            </div> --}}

            <div class="grid grid-cols-1 gap-5 sm:gap-10">
                <div class="flex flex-col justify-center gap-5 rounded-xl">
                    <h2 class="leading-tight font-gotham_medium  text-4xl text-[#0181AA] subtitle">
                        {{$textoproducto->title3section ?? "Ingrese un texto"}}</h2>
                    <div class="h-[3px] bg-[#0181AA] w-32 rounded-full -mt-2"> </div>
                    <p class="text-[#02324A] font-gotham_book font-normal text-lg description">
                        {{$textoproducto->description3section ?? "Ingrese un texto"}}
                    </p>
                </div>
            </div>


            <div class="flex flex-row">
                <div class="flex flex-col md:flex-row md:justify-start gap-3">
                    
                    <div class="relative inline-block text-left min-w-64 w-auto">
                        <select id="categoryselect" 
                            class="bg-[#11355A] w-full py-3 text-left px-4 text-white font-bold font-roboto  text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                            <option value="sinproduct">Selecciona categoria</option>
                            @foreach ($categorias as $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="relative inline-block text-left min-w-64 w-auto">
                        <select id="selectSubcategory"
                            class="hidden bg-[#11355A] w-full py-3 text-left px-4 text-white font-bold font-roboto text-text16 focus:outline-none border-b-[1.5px] border-x-0 border-t-0 border-gray-200 focus:ring-0 focus:border-gray-200 focus:border-b-[1.5px] rounded-lg">
                            <option value="sinproduct">Selecciona subcategoria</option>
                        </select>
                    </div>

                    <input type="hidden" id="valorcategoria" />
                </div>
            </div>

            <div id="getProductAjax" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-full pt-10 gap-x-10 gap-y-16">

                @foreach ($productos as $item)
                    <div class="flex flex-col gap-4 max-w-[300px] mx-auto" data-aos="fade-up" data-aos-offset="150">
                        <div class="flex justify-center items-center bg-white p-1 sm:p-2 relative">
                            {{-- <div class="absolute left-2 top-2 flex flex-wrap gap-2">
                                <span
                                    class="bg-[#11355A] text-white px-3 py-0.5 rounded-2xl font-gotham_book text-sm">Satec</span>
                            </div> --}}
                            <a href="{{ route('producto', $item->id) }}" class="">
                                <img  src="{{ asset($item->imagen) }}" alt="{{$item->producto}}"
                                    class="w-full h-full object-contain aspect-square" />
                            </a>
                        </div>

                        <div class="flex flex-col gap-1 justify-start">
                            <a href="{{ route('producto', $item->id) }}">
                                <h2 class="leading-tight font-gotham_medium text-lg md:text-xl  text-[#0181AA] line-clamp-2">
                                    {{$item->producto}}</h2>
                            </a>
                            {{-- <p class="leading-tight font-gotham_book text-base font-semibold text-[#7080A0] ">
                                Por pedido</p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        <section>
            <div class="flex flex-col gap-10 w-full px-[5%] mx-auto bg-[#F5F7F9]">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 lg:gap-0">

                    <div class="flex flex-col justify-start gap-5 w-full  col-span-2">
                        <h2 class="leading-tight font-gotham_medium  text-4xl  text-[#0181AA] ">
                            {{$textoproducto->title2section ?? "Ingrese un texto"}}</h2>
                        <div class="h-[3px] bg-[#0181AA] w-32 rounded-full -mt-2"> </div>
                        <p class="text-[#02324A] font-gotham_book font-normal text-lg">
                            {{$textoproducto->description2section ?? "Ingrese un texto"}}</p>
                        <div
                            class="py-3 rounded-3xl bg-[#11355A] flex flex-row w-48 justify-center items-center gap-2 mt-5">
                            <a href="{{route('contacto')}}" class="cursor-pointer text-white font-gotham_medium tracking-wider text-center">Contactarme</a>
                            <img src="{{ asset('images/svg/flechaderecha.svg') }}" />
                        </div>
                    </div>

                    <div class="relative flex flex-col justify-end col-span-1">
                        <img class="h-96 object-cover sm:object-contain object-bottom"
                            src="{{ asset('images/img/secretaria.png') }}" />
                    </div>

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
                700: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
            },
        });
    </script>

    <script>
        $('document').ready(function() {

            $('#selectMicrocategory').change(function() {

                let id = $('#selectMicrocategory').val();
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

                        $('.cargarMas').attr('data-page', response.page);

                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
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
                                        <p class="font-roboto font-normal text-text16 text-[#082252] line-clamp-3">
                                            ${value.extract}
                                        </p>
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

                let page = $(this).attr('data-page');
                let id = $('#selectSubcategory').val();
                $.ajax({
                    url: '{{ route('getMicrocategoria') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: id
                    },
                    dataType: "json",
                    success: function(response) {
                        console.log(response.page)
                        if (response.microcategorias && response.microcategorias.length > 0) {
                            $('#selectMicrocategory').empty().show();

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
                                `<div class="flex flex-col gap-4 max-w-[300px] mx-auto" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center bg-white p-1 sm:p-2 relative">
                                        <a href='${productoUrl}' class="">
                                            <img src="{{ asset('${value.imagen}') }}" alt="${value.producto}" class="w-full h-full object-contain aspect-square" />
                                        </a>
                                    </div>
                                    <div class="flex flex-col gap-1 justify-start">
                                        <a href='${productoUrl}'>
                                            <h2 class="leading-tight font-gotham_medium text-lg md:text-xl text-[#0181AA] line-clamp-2">
                                                ${value.producto}
                                            </h2>
                                        </a>
                                        
                                    </div>
                                </div>`
                            );
                        });

                        //    console.log(response);
                        $('.cargarMas').attr('data-page', response.page);
                        $('.cargarMas').html('Cargar más modelos');
                        if (response.page == 0) {
                            $('.cargarMas').hide();
                        } else {
                            $('.cargarMas').show();
                        }

                    },
                    error: function(error) {

                    }
                });


            });


            $('#categoryselect').change(function() {

                let id = $('#categoryselect').val();
                console.log(id)
                // $('.categoryselect .rounded-full').removeClass('selected');
                // $(this).find('.rounded-full').addClass('selected');


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
                        $('.subtitle').text(response.categorias[0].name);

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
                                `<div class="flex flex-col gap-4 max-w-[300px] mx-auto" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center bg-white p-1 sm:p-2 relative">
                                       
                                        <a href='${productoUrl}' class="">
                                            <img src="{{ asset('${value.imagen}') }}" alt="${value.producto}" class="w-full h-full object-contain aspect-square" />
                                        </a>
                                    </div>
                                    <div class="flex flex-col gap-1 justify-start">
                                        <a href='${productoUrl}'>
                                            <h2 class="leading-tight font-gotham_medium text-lg md:text-xl text-[#0181AA] line-clamp-2">
                                                ${value.producto}
                                            </h2>
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
                    cache: false,
                    success: function(response) {
                        console.log(response.page);

                        $.each(response.productos.data, function(key, value) {

                            var productoUrl = `{{ route('producto', ':id') }}`.replace(
                                ':id', value.id);

                            $('#getProductAjax').append(
                                `<div class="flex flex-col gap-4 max-w-[300px] mx-auto" data-aos="fade-up" data-aos-offset="150">
                                    <div class="flex justify-center items-center bg-white p-1 sm:p-2 relative">
                                       
                                        <a href='${productoUrl}' class="">
                                            <img src="{{ asset('${value.imagen}') }}" alt="${value.producto}" class="w-full h-full object-contain aspect-square" />
                                        </a>
                                    </div>
                                    <div class="flex flex-col gap-1 justify-start">
                                        <a href='${productoUrl}'>
                                            <h2 class="leading-tight font-gotham_medium text-lg md:text-xl text-[#0181AA] line-clamp-2">
                                                ${value.producto}
                                            </h2>
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


                        //if (response.productos.next_page_url) {
                        //    $('.cargarMas').data('page', page + 1).html('Cargar más modelos');
                        //} else {
                        //    $('.cargarMas').hide();
                        //}

                    },
                    error: function(error) {}
                });

            })

        });
    </script>
    <script>
         $('#categoryselect').on('change', function() {
            let id = $(this).val();
            console.log('ID from selected div:', id);
            $('#valorcategoria').val(id);
        });

        // Actualizar id cuando cambie el select con id 'selectSubcategory'
        $('#selectSubcategory').on('change', function() {
            let id = $(this).val();
            console.log('ID from selectSubcategory:', id);
            $('#valorcategoria').val(id);
        });

        // Actualizar id cuando cambie el select con id 'selectMicrocategory'
        $('#selectMicrocategory').on('change', function() {
            let id = $(this).val();
            console.log('ID from selectMicrocategory:', id);
            $('#valorcategoria').val(id);
        });
    </script>
@stop

@stop
