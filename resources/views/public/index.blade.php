<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="page">
        <header class="bg-violet-200">
            la cabecera
        </header>
        <main class="bg-violet-400">
            @foreach($servicios as $dato)
                <div>
                    <p>{{ $dato['id'] }}</p>
                    <img src="{{ asset('storage/images/servicios/'.$dato->name_image) }}" alt="Imagen">
                    <p>{{ $dato['title'] }}</p>
                    <p>{{ $dato['description'] }}</p>
                </div>
            @endforeach
        </main>
        <footer class="bg-violet-600">
            el Footer
        </footer>



        <!-- ------------------------------ VIAJE FINANCIERO --------------------------------------- -->
      <section class="bg-colorBackground pb-10 mt-96">
        <div class="w-11/12 mx-auto flex justify-center mb-10">
          <div class="w-full">
            <img
              src="./images/img/stock-market-or-forex-trading-graph-in-graphic-concept-vector.png"
              alt="forex-trading"
              class="w-full -mt-72 xl:-mt-80"
              data-aos="fade-up"
              data-aos-offset="150"
            />
          </div>
        </div>
        <div
          class="grid grid-cols-1 gap-20 lg:flex w-11/12 mx-auto lg:gap-32 text-white pb-10"
          id="nuestros_servicios"
          data-aos="fade-up"
          data-aos-offset="150"
        >
          <div class="basis-2/5 flex flex-col gap-5">
            <div class="flex flex-col gap-4">
              <p class="font-inter font-semibold text-regularSize">Servicios</p>
              <h2
                class="font-inter font-semibold text-middleTitle leading-none md:leading-tight"
              >
                Tu Viaje Financiero Comienza Aquí
              </h2>
              <p class="font-inter font-regular text-basicSize">
                Yep Advisors: Expertos en Wealth Management, Finanzas
                Corporativas y Estructura Financiera. Tu socio confiable hacia
                el éxito financiero.
              </p>
            </div>

            <div class="flex flex-col gap-5">
              <div class="flex justify-between items-center">
                <a
                  class="text-colorSubtitleLittle font-inter font-semibold text-littleTitle servicios"
                  id="wealth"
                  >Wealth Management
                </a>
                <p
                  class="text-colorSubtitleLittle font-inter font-semibold text-littleTitle flecha-weath"
                >
                  >
                </p>
              </div>

              <div class="flex justify-between items-center">
                <a
                  class="font-inter font-regular text-regularSize servicios"
                  id="finanzas"
                  >Finanzas Corporativas
                </a>

                <p
                  class="text-colorSubtitleLittle font-inter font-semibold text-littleTitle flecha-finanzas"
                >
                  >
                </p>
              </div>

              <div class="flex justify-between items-center">
                <a
                  class="font-inter font-regular text-regularSize servicios"
                  id="estructuracion"
                  >Estructuración Financiera
                </a>

                <p
                  class="text-colorSubtitleLittle font-inter font-semibold text-littleTitle flecha-estructura"
                >
                  >
                </p>
              </div>
            </div>
          </div>
          <!-- --------------------- -->

          <div class="basis-3/5 lg:mt-0 services">
            <div class="animate-fade-up animate-once animate-duration-1000">
              <h2
                class="font-semibold font-inter text-subtitle pb-5 leading-none md:leading-tight"
              >
                Gestión Patrimonial Personalizada
              </h2>
              <div class="flex flex-col gap-5">
                <p class="font-regular font-inter text-regularSize">
                  Yep Advisors, entendemos que cada individuo tiene objetivos
                  financieros únicos. Nuestro servicio de Wealth Management
                  ofrece soluciones personalizadas diseñadas para proteger y
                  hacer tu patrimonio.
                </p>

                <p class="font-regular font-inter text-regularSize">
                  Desde la planificación de la jubilación hasta la gestión de
                  inversiones, nuestro enfoque centrado en el cliente garantiza
                  que tus necesidades estén siempre en el centro de nuestras
                  decisiones. Confía en nosotros para ayudarte a alcanzar tus
                  metas financieras con confianza y tranquilidad.
                </p>
              </div>

              <a
                class="flex justify-center items-center gap-2 rounded-xl px-4 bg-colorButton w-44 mt-5 cursor-pointer hover:bg-white hover:text-colorSubtitleLittle duration-300 group"
                href="#form"
              >
                <span
                  class="py-3 font-semibold font-inter text-basicSize border-lg"
                >
                  Quiero Invertir
                </span>
                <div>
                  <svg
                    width="22"
                    height="12"
                    viewBox="0 0 22 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M1.3999 10.8002L6.7759 5.63096L11.3839 10.0617L20.5999 1.2002M20.5999 1.2002H13.6879M20.5999 1.2002V7.84635"
                      stroke="white"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      class="group-hover:stroke-green-900"
                    />
                  </svg>
                </div>
              </a>
            </div>
          </div>

          <div class="basis-3/5 lg:mt-0 services hidden">
            <div class="animate-fade-up animate-once animate-duration-1000">
              <h2
                class="font-semibold font-inter text-subtitle pb-5 leading-none md:leading-tight"
              >
                Potenciando tu Empresa hacia el Éxito
              </h2>
              <div class="flex flex-col gap-5">
                <p class="font-regular font-inter text-regularSize">
                  En el mundo empresarial, el éxito depende en gran medida de la
                  capacidad para tomar decisiones financieras estratégicas. Con
                  Yep Advisors, tienes un socio confiable que te brinda el
                  conocimiento y la experiencia necesarios para impulsar el
                  crecimiento y la rentabilidad de tu empresa.
                </p>

                <p class="font-regular font-inter text-regularSize">
                  Desde la evaluación de inversiones hasta la reestructuración
                  financiera, nuestro equipo de expertos está aquí para ayudarte
                  a navegar por los desafíos financieros y alcanzar tus
                  objetivos empresariales.
                </p>
              </div>

              <a
                class="flex justify-center items-center gap-2 rounded-xl px-4 bg-colorButton w-44 mt-5 cursor-pointer"
                href="#form"
              >
                <span
                  class="py-3 font-semibold font-inter text-basicSize text-white border-lg"
                >
                  Quiero Invertir
                </span>
                <img
                  src="./images/img/trend-up-01.png"
                  alt="flecha"
                  class="w-6 h-6"
                />
              </a>
            </div>
          </div>

          <div class="basis-3/5 lg:mt-0 services hidden">
            <div class="animate-fade-up animate-once animate-duration-1000">
              <h2
                class="font-semibold font-inter text-subtitle pb-5 leading-none md:leading-tight"
              >
                Optimización Financiera Estratégica
              </h2>
              <div class="flex flex-col gap-5">
                <p class="font-regular font-inter text-regularSize">
                  Una estructura financiera sólida es la base de cualquier
                  estrategia empresarial exitosa. En Yep Advisors, te ofrecemos
                  soluciones estratégicas que te permiten optimizar tu
                  estructura financiera para maximizar el rendimietno y
                  minimizar los riesgos.
                </p>

                <p class="font-regular font-inter text-regularSize">
                  Desde la gestión de deudas hasta la planificación fiscal,
                  nuestro enfoque personalizado te proporciona las herramientas
                  necesarias para tomar decisiones informadas y ancanzar tus
                  metas financieras a largo plazo con confianza.
                </p>
              </div>

              <a
                class="flex justify-center items-center gap-2 rounded-xl px-4 bg-colorButton w-44 mt-5 cursor-pointer"
                href="#form"
              >
                <span
                  class="py-3 font-semibold font-inter text-basicSize text-white border-lg"
                >
                  Quiero Invertir
                </span>
                <img
                  src="./images/img/trend-up-01.png"
                  alt="flecha"
                  class="w-6 h-6"
                />
              </a>
            </div>
          </div>
        </div>

        <div class="images-servicios">
          <div
            class="animate-fade-up animate-once animate-duration-1000 flex justify-end z-0"
          >
            <div class="md:basis-2/5"></div>
            <div class="md:basis-3/5 md:ml-40 w-full">
              <img
                src="./images/img/patrimonio_testimonial.png"
                alt="patrimonio testimonial"
                class="w-full"
              />
            </div>
          </div>
        </div>

        <div class="images-servicios hidden">
          <div
            class="animate-fade-up animate-once animate-duration-1000 flex justify-end z-0"
          >
            <div class="md:basis-2/5"></div>
            <div class="md:basis-3/5 md:ml-40 w-full">
              <img
                src="./images/img/finanzas_testimonial_imagen.png"
                alt="finanzas"
                class="w-full"
              />
            </div>
          </div>
        </div>

        <div class="images-servicios hidden">
          <div
            class="animate-fade-up animate-once animate-duration-1000 flex justify-end z-0"
          >
            <div class="md:basis-2/5"></div>
            <div class="md:basis-3/5 md:ml-40 w-full">
              <img
                src="./images/img/estructuracion_imagen.png"
                alt="estructurar"
                class="w-full"
              />
            </div>
          </div>
        </div>
        <!-- ----- FORMULARIO----  -->
      </section>
    </div>
</body>
</html>