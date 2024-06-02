@extends('components.public.matrix')

@section('css_importados')

@stop


@section('content')
    <main>
        <section class="bg-white pt-52">
            <div class="w-11/12 mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="flex flex-col gap-5 pb-10 md:pb-20">
                    <div class="flex flex-col gap-1">
                        <h3 class="font-roboto font-bold text-text48 text-[#082252]">Hablemos Hoy</h3>
                        <p class="text-[#082252] text-text18 font-roboto font-normal">
                            Ponte en contacto con nosotros para obtener soluciones personalizadas de tratamiento de agua.
                        </p>
                    </div>

                    <div>
                        <form action="" class="flex flex-col gap-5">
                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="full_name" class="text-[#082252] font-roboto font-normal text-text14">Nombre
                                    Completo</label>
                                <input required type="text" name="full_name" id="full_name" placeholder="Nombre Completo"
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl">
                            </div>

                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="email" class="text-[#082252] font-roboto font-normal text-text14">Correo
                                    Electrónico</label>
                                <input required type="text" name="email" id="email" placeholder="hola@gmail.com"
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl">
                            </div>

                            <div class="flex flex-col justify-start gap-1" data-aos="fade-up" data-aos-duration="150">
                                <label for="message" class="text-[#082252] font-roboto font-normal text-text14">Mensaje</label>
                                <textarea name="message" id="message" cols="30" rows="3" placeholder="Hola ..."
                                    class="font-roboto font-normal text-text16 placeholder:text-[#082252] placeholder:font-medium py-3 px-5 w-full bg-white border border-[#E6E4E5] focus:outline-0 focus:ring-0 transition-all text-[#082252] placeholder:text-opacity-40 focus:border-[#E6E4E5] rounded-xl"></textarea>
                            </div>

                            <div class="flex justify-start items-center pt-5" data-aos="fade-up" data-aos-duration="150">
                                <a href="#" type="submit"
                                    class="bg-[#FF5E14] text-white font-roboto font-bold text-text16 py-3 px-5 rounded-xl">
                                    Enviar mensaje
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="flex justify-center items-start">
                    <img src="{{ asset('images/img/image_60.png') }}" alt="ubicacion" class="w-full object-cover h-[588px] hidden md:block rounded-xl">
                    <img src="{{ asset('images/img/image_61.png') }}" alt="ubicacion" class="w-full object-cover h-[588px] block md:hidden rounded-xl">
                </div>
            </div>
        </section>

        <section>
            <div class="grid grid-cols-1 md:grid-cols-3 w-11/12 mx-auto gap-8 py-20">
                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_39.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Email</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16">Escríbenos para recibir atención personalizada y resolver tus dudas.</p>
                        <p class="text-[#FF5E14] font-roboto font-normal text-text16 underline">hello@relume.io</p>
                    </div>
                </div>

                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_40.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Teléfono</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16">Llámanos para obtener soporte inmediato y asistencia profesional.</p>
                        <p class="text-[#FF5E14] font-roboto font-normal text-text16 underline">+1 (555) 000-0000</p>
                    </div>
                </div>

                <div class="flex flex-col gap-3 bg-[#F7F8F8] rounded-xl p-6" data-aos="fade-up" data-aos-duration="150">
                    <div class="flex justify-start items-center">
                        <img src="{{asset('images/svg/image_41.svg')}}" alt="email">
                    </div>

                    <div class="flex flex-col gap-2">
                        <p class="text-[#082252] font-roboto font-bold text-text32">Oficina</p>
                        <p class="text-[#082252] font-roboto font-normal text-text16">Visítanos en nuestra oficina para conocer nuestras soluciones de tratamiento de agua en persona.</p>
                        <p class="text-[#FF5E14] font-roboto font-normal text-text16 underline">Pasaje 47 Mz. D Lt. 2 N.120 Urb. Retablo Etapa 2 Comas - Lima</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


@section('scripts_importados')


@stop

@stop
