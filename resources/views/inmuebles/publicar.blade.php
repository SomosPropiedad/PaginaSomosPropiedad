<x-app-layout>
    <!-- component -->

<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<section class=" bg-blueGray-200 -mt-24 py-10">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap">
      <div class="lg:pt-12 py-8 w-full md:w-4/12 px-4 text-center">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-1 shadow-lg rounded-lg">
          <div class="px-4 flex-auto">
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-wrap items-center mt-16">
      <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
        <div class="text-blueGray-500 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-white">
          <i class="fas fa-user-friends text-xl"></i>
        </div>
        <h3 class="text-3xl mb-2 text-gray-600  font-bold leading-normal">
          HAS PARTE DE LA FAMILIA SOMOS PROPIEDAD
        </h3>
        <p class="text-lg font-light leading-relaxed mt-4 mb-4 text-blueGray-600">
            Somos propiedad es una empresa completa con diferentes servicios inmobiliarios. Con la confianza de clientes como usted durante más de dos décadas, ofrecemos alquiler y venta de propiedades.
        </p>
        <p class="text-lg font-light leading-relaxed mt-0 mb-4 text-blueGray-600">
            ¿Buscas una casa nueva? ¿Quieres alquilar o verder tu casa? Somos propiedad te ayuda a encontrar la solucion perfecta para ti.
        </p>
        <a href="{{url('publicar_formulario') }}" class="bg-gradient-to-r from-indigo-400 to-pink-400 hover:scale-105  shadow-cla-blue px-4 py-2 rounded-lg">Publicar inmueble</a>
      </div>
      <div class="w-full md:w-4/12 px-4 mr-auto ml-auto mt-24">
        <div class=" relative flex flex-col min-w-0 break-words w-full mb-2 shadow-lg rounded-lg bg-pink-500">
          <video autoplay controls muted loop src="/css/Home/img/Videonat1.mp4"  class="w-full align-middle rounded-t-lg"></video>
          <blockquote class="relative p-8 mb-4">
            <h4 class="text-xl font-bold text-white">
              Contratos
            </h4>
            <p class="text-md font-light mt-2 text-white">
             ¿Tienes dudas sombre los tipos de contratos y del manejo del mismo? tranquilo en somos propiedad aclaramos tus dudas
            </p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>


</section>
</x-app-layout>