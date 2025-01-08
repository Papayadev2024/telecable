@extends('components.public.matrix', ['pagina' => 'catalogo'])
@section('titulo', 'Productos')
@section('css_importados')
    <style>
        .selected {
            background-color: #F07407 !important;
        }
      </style>
@stop


@section('content')

    <main>

        <div class='h-[300px] px-[5%] w-full bg-cover bg-red-500 flex flex-col justify-center' style="background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0)), url('{{ asset('images/img/imagencatalogo.png') }}');">
            <div class=''>
                <h2 class='font-bignoodle text-6xl'><span class='text-white'>Nuestro</span> <br> <span class='text-[#F07407]'>Catalogo</span></h2>
            </div>
        </div>


        <section class="flex flex-col justify-center items-center px-[5%] xl:px-[8%] py-10 lg:py-16 bg-[#F1EBE3] gap-12 relative">

            <div class="swiper categorias w-full h-max">
                <div class="swiper-wrapper">                 
                   @foreach ($categorias as $categoria)
                        <div class="swiper-slide">
                            <div id="{{ $categoria->id }}" class="{{ $filtro == $categoria->id ? 'selected' : '' }} group flex flex-col rounded-lg border border-[#DDCCBA] overflow-hidden hover:bg-[#F07407]">
                                <a href="{{route('catalogo', $categoria->id )}}" class="botonopciones categoryselect">
                                    <img class="w-full h-full aspect-[3/2] object-cover" src="{{asset($categoria->url_image . $categoria->name_image)}}" />
                                    
                                    <div class="{{ $filtro == $categoria->id ? 'text-white' : 'text-[#54340E]' }}  font-latoregular font-semibold text-lg px-3 py-3.5 w-full flex flex-col gap-1">
                                        <div>
                                            <h2 class="line-clamp-2 group-hover:text-white leading-none">{{$categoria->name}}</h2>
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        </div>
                    @endforeach
                    
                </div>
            </div>

        </section>
        <input type="hidden" id="valorcategoria" value="{{ $filtro }}" />

        <section class="px-[5%]">
    
            <div class="flex flex-wrap gap-10 justify-between items-center mt-10 w-full text-base font-medium">
              <h2 class="text-[#54340E] font-bignoodle text-5xl">pide todo lo que quieras y comparte</h2>
            </div>

        </section>


        <section class="flex flex-col gap-10 w-full px-[5%] mx-auto py-10 ">
           
           
            <div id="getProductAjax" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 w-full gap-5">

                @foreach ($productos as $product)
                    
                        <div class="flex flex-col rounded-lg border border-[#DDCCBA] overflow-hidden group cursor-pointer">
                            <a href="{{route('producto', $product->id)}}">
                                <img
                                    class="w-full h-full aspect-[3/2] object-cover"
                                    src="{{asset($product->imagen)}}"
                                />
                            </a>
                            
                            <div class="text-[#54340E] font-latobold text-xl px-3 pt-2 pb-3 w-full flex flex-col gap-1">
                                <div class="flex flex-col">
                                    <h2 class="line-clamp-1">{{$product->producto}}</h2>
                                    <div class="line-clamp-2 font-latoregular text-sm h-9 leading-tight flex flex-col justify-center">
                                        {!! $product->extract ?? $product->description !!}
                                    </div>
                                    <div class="flex flex-row justify-start items-center gap-2 font-latobold mt-1">
                                        @if ($product->descuento == 0)
                                            <span class="text-lg">S/ {{$product->precio}}</span>   
                                        @else
                                            <span class="text-lg">S/ {{$product->descuento}}</span>
                                            <span class="text-sm line-through">S/ {{$product->precio}}</span>
                                        @endif
                                    </div>
                                </div>
                    
                                <a href="{{route('producto', $product->id)}}" class="botonopciones">
                                    <div class="bg-[#54340E] rounded-lg pt-1 pb-2 text-center ">
                                        <span
                                            class="bg-[#54340E] text-white font-latoregular text-base text-center w-full"
                                            href="{{route('producto', $product->id)}}"
                                        >
                                            Ordena aqui
                                        </span>
                                    </div>
                                </a>
                            </div>
                        </div>
                   
                @endforeach
            </div>
        </section>

        <div class="flex justify-center items-center mb-10">
            <a href="javascript:;" @if (empty($page) || $page == 0) style="display:none;" @endif
                data-page={{ $page }}
                class="text-white py-2.5 px-3 bg-[#F07407] rounded-xl w-48 text-center font-latoregular text-base cargarMas">
                Cargar más modelos
            </a>
        </div>


    </main>

@section('scripts_importados')
    <script>

var swiper = new Swiper(".categorias", {
            slidesPerView: 4,
            spaceBetween: 15,
            centeredSlides: false,
            initialSlide: 0,
            loop: true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
            },
            navigation: true,
            breakpoints: {
                0: {
                    slidesPerView: 1,
                   
                },
                768: {
                    slidesPerView: 2,
                  
                },
                1024: {
                    slidesPerView: 3,
                  
                },
                1224: {
                    slidesPerView: 4,
                  
                },
            },
        });


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

                            var precioHtml = '';

                            if (value.descuento == 0) {
                                precioHtml = `
                                    <p class="leading-tight font-gotham_book text-base font-semibold text-[#7080A0]">
                                        S/ ${value.precio}
                                    </p>`;
                            } else {
                                precioHtml = `
                                    <p class="leading-tight font-gotham_book text-base font-semibold text-[#7080A0]">
                                        S/ ${value.descuento}
                                    </p>
                                    <p class="leading-tight font-gotham_book text-sm font-semibold text-[#7080A0] line-through">
                                        S/ ${value.precio}
                                    </p>`;
                            }

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
                                        <div class="flex flex-row justify-start items-end gap-2">
                                            ${precioHtml}
                                        </div>
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

                        if (value.descuento == 0) {
                                precioHtml = `
                                    <p class="leading-tight font-gotham_book text-base font-semibold text-[#7080A0]">
                                        S/ ${value.precio}
                                    </p>`;
                        } else {
                                precioHtml = `
                                    <p class="leading-tight font-gotham_book text-base font-semibold text-[#7080A0]">
                                        S/ ${value.descuento}
                                    </p>
                                    <p class="leading-tight font-gotham_book text-sm font-semibold text-[#7080A0] line-through">
                                        S/ ${value.precio}
                                    </p>`;
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
                                        <div class="flex flex-row justify-start items-end gap-2">
                                            ${precioHtml}
                                        </div>
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

                            if (value.descuento == 0) {
                                precioHtml = `
                                    <p class="leading-tight font-gotham_book text-base font-semibold text-[#7080A0]">
                                        S/ ${value.precio}
                                    </p>`;
                            } else {
                                precioHtml = `
                                    <p class="leading-tight font-gotham_book text-base font-semibold text-[#7080A0]">
                                        S/ ${value.descuento}
                                    </p>
                                    <p class="leading-tight font-gotham_book text-sm font-semibold text-[#7080A0] line-through">
                                        S/ ${value.precio}
                                    </p>`;
                            }    


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
                                        <div class="flex flex-row justify-start items-end gap-2">
                                            ${precioHtml}
                                        </div>
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
         $(document).on('click', '.selected', function() {
            var id = $(this).attr('id');
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
