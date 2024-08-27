@extends('components.public.matrix', ['pagina'=>'contacto'])
@section('titulo', 'Contacto')
@section('css_importados')

@stop


@section('content')
    <main>
        <section class="bg-white pt-52">
            <div class="w-11/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex flex-col gap-5 pb-10 md:pb-5">
                    <div class="flex flex-col gap-1">
                        <h3 class="font-roboto font-bold text-text48 text-[#082252]">Hablemos Hoy</h3>
                        <p class="text-[#082252] text-text18 font-roboto font-normal">
                            Ponte en contacto con nosotros para obtener soluciones personalizadas de tratamiento de agua.
                        </p>
                    </div>

                    <div>
                        <form id="formContactos" class="flex flex-col gap-5">
                            @csrf
                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="full_name" class="text-[#082252] font-roboto font-normal text-text14">Nombre
                                    Completo</label>
                                <input required type="text" name="full_name" id="fullNameContacto" placeholder="Nombre Completo"
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl">
                            </div>

                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="email" class="text-[#082252] font-roboto font-normal text-text14">Correo
                                    Electrónico</label>
                                <input required type="email" name="email" id="emailContacto" placeholder="hola@gmail.com"
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl">
                            </div>

                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="telf" class="text-[#082252] font-roboto font-normal text-text14">Teléfono</label>
                                <input type="tel" name="phone" id="telefonoContacto" placeholder="Teléfono" maxlength="12" required
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl">
                            </div>

                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="message" class="text-[#082252] font-roboto font-normal text-text14">Mensaje</label>
                                <textarea name="message" id="message" cols="30" rows="3" placeholder="Hola ..."
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl"></textarea>
                            </div>

                            <input type="hidden" id="tipo" placeholder="tipo" name="source" value="Contacto" />
                            <input type="hidden" name="client_width" id="anchodispositivo">
                            <input type="hidden" name="client_height" id="largodispositivo">
                            <input type="hidden" name="client_latitude" id="latitud">
                            <input type="hidden" name="client_longitude" id="longitud">
                            <input type="hidden" name="client_system" id="sistema">

                            <div class="flex justify-start items-center pt-5" data-aos="fade-up" data-aos-duration="150">
                                <button type="submit"
                                    class="bg-[#FF5E14] text-white font-roboto font-bold text-text16 py-3 px-5 rounded-xl">
                                    Enviar mensaje
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="flex justify-center items-start">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3903.558014709529!2d-77.05893329999999!3d-11.935816800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d123f4bc6baf%3A0xe43079ef49fcf9b3!2sHPI!5e0!3m2!1ses!2spe!4v1718064498652!5m2!1ses!2spe" class="w-full h-72 md:h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
                    {{-- <img src="{{ asset('images/img/image_60.png') }}" alt="ubicacion" class="w-full object-cover h-[588px] hidden md:block rounded-xl">
                    <img src="{{ asset('images/img/image_61.png') }}" alt="ubicacion" class="w-full object-cover h-[588px] block md:hidden rounded-xl"> --}}
                </div>
            </div>
        </section>
          @php
                $contactosAgrupados = $contactos->groupBy('categoria_id');
          @endphp      
        <section>
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 w-11/12 mx-auto gap-8 py-20">
                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_39.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Email</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16 mb-2">Escríbenos para recibir atención personalizada y resolver tus dudas.</p>
                        {{-- <p class="text-[#FF5E14] font-roboto font-normal text-text16 underline">{{$general[0]->email}}</p> --}}
                        @foreach($contactosAgrupados as $categoria_id => $contactos)
                            <div><h2 class="font-roboto font-semibold text-lg text-[#FF5E14] mb-1">{{ $contactos->first()->categoria->name }}</h2></div>
                            @foreach($contactos as $contacto)
                                <div><span class="font-roboto font-semibold text-base text-[#082252] normal-case">
                                {{$contacto->nombre}}</span>: 
                                <span class="font-roboto text-text14 text-[#082252] font-normal">{{$contacto->email}}</span> 
                                </div>
                            @endforeach
                            <div class="mb-3"></div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_40.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Teléfono</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16 mb-2">Llámanos para obtener soporte inmediato y asistencia profesional.</p>
                       
                                                    
                        @foreach($contactosAgrupados as $categoria_id => $contactos)
                            <div><h2 class="font-roboto font-semibold text-lg text-[#FF5E14] mb-1">{{ $contactos->first()->categoria->name }}</h2></div>
                            @foreach($contactos as $contacto)
                                <div><span class="font-roboto font-semibold text-base text-[#082252] normal-case">
                                {{$contacto->nombre}}</span>: 
                                <span class="font-roboto text-text14 text-[#082252] font-normal">{{$contacto->celular}}</span> 
                                </div>
                            @endforeach
                            <div class="mb-3"></div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_41.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Oficina</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16">Visítanos en nuestra oficina para conocer nuestras soluciones de tratamiento de agua en persona.</p>
                        <p class="text-[#FF5E14] font-roboto font-normal text-text16 underline">{{$general[0]->address}}, {{$general[0]->inside}}, {{$general[0]->district}} - {{$general[0]->city}}</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


@section('scripts_importados')
<script>
 
    // Obtener información del navegador y del sistema operativo
    const platform = navigator.platform;
    document.getElementById('sistema').value = platform;

    // Obtener la geolocalización del usuario (si se permite)
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            document.getElementById('latitud').value = position.coords.latitude;
            document.getElementById('longitud').value = position.coords.longitude;
        });
    }

    // Obtener la página de referencia
    const referrer = document.referrer;
    document.getElementById('llegade').value = referrer;


    // Obtener la resolución de la pantalla
    const screenWidth = window.screen.width;
    const screenHeight = window.screen.height;
    document.getElementById('anchodispositivo').value = screenWidth;
    document.getElementById('largodispositivo').value = screenHeight;
</script>

@stop

@stop
