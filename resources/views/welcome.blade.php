<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css\Home\all.min.css">
        <link rel="stylesheet" href="css\Home\normalize.css">
        <link rel="stylesheet" href="css\Home\style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="css/Home/bootstrap.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;700&display=swap">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css">
        <title>Somos propiedad</title>
    </head>

    <body class="bg-white">
        <!-- Start Header -->
        <!-- End Header -->
        <!-- Start Section -->
        <section>
            <div class="container">
                <div class="overlay"></div>
                <div class="text">
                    <h1>Hola,<span class="s-1"></span> </h1>

                    <h1> Bienvenido a <span class="s-2"></span></h1>
                    <h1> Somos Propiedad <span class="s-3"></span></h1>
                    @cannot('Crear Servicios')
                        <a href="{{ route('inmuebles.index') }}" style="text-decoration: none; color:white">
                            <button>Inmuebles</button></a>
                    @endcannot
                </div>
            </div>
        </section>
        <!-- End Section -->
        <div class="glider-content  bg-gray-200  py-2 px-4">
            <div id="slider"
                class="slider grid grid-cols-3 gap-12  text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-6 dark:text-gray-400">
                <a href="https://www.lonja.org.co/ "
                    class="flex duration-300  transition-transform transform hover:-translate-y-2 object-cover ">
                    <img src="/css/Home/img/Aliados/editor_373498207logo_la_lonja-removebg-preview.png" alt="">
                </a>
                <a href="https://n9.cl/pnfxt  "
                    class="flex duration-300 transition-transform transform hover:-translate-y-2 object-cover">
                    <img src="/css/Home/img/Aliados/editor_36026785Ciencuadras-removebg-preview.png" alt="">
                </a>
                <a href="https://www.ellibertador.co/"
                    class="flex duration-300 transition-transform transform hover:-translate-y-2 object-cover px-6">
                    <img src="/css/Home/img/Aliados/editor_620791013ElLibertador-removebg-preview.png" alt="">
                </a>

                <a href="https://www.fincaraiz.com.co/"
                    class="flex duration-300 transition-transform transform hover:-translate-y-2 object-cover">
                    <img src="/css/Home/img/Aliados/editor_793945574Fincaraiz-removebg-preview.png" alt="">
                </a>
                <a href="https://www.fenalco.com.co/es/"
                    class="flex duration-300 transition-transform transform hover:-translate-y-2 object-cover">
                    <img src="/css/Home/img/Aliados/editor_85122989Fenalco-removebg-preview.png" alt="">

                </a>
                <a href="https://www.datacredito.com.co/"
                    class="flex duration-300 transition-transform transform hover:-translate-y-2 object-cover">
                    <img src="/css/Home/img/Aliados/editor_694991305Datacredito-removebg-preview.png" alt="">
                </a>
                <a href="https://www.datacredito.com.co/"
                    class="flex duration-300 transition-transform transform hover:-translate-y-2 object-cover">
                    <img src="/css/Home/img/Aliados/editor_827237053Empatia-removebg-preview.png" alt="">
                </a>
                <a href="https://www.datacredito.com.co/"
                    class="flex duration-300 transition-transform transform hover:-translate-y-2 object-cover">
                    <img src="/css/Home/img/Aliados/editor_774989405Pse-removebg-preview.png" alt="">
                </a>
            </div>
        </div>

        <!-- Start Categoria -->
        <div class="projects">
            <div class="projects-heading">
                <h1>Nuestras
                    <span>Categorias</span>
                </h1>
            </div>
        </div>
        <!-- component -->
        <div class=" flex items-center justify-center">

            <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-6 lg:grid-cols-6 gap-x-4 gap-y-1 max-w-2xl">

                <!-- Card 1 -->
                <div class="col-span-2 transition hover:-translate-y-1 hover:scale-110">
                    <a href="{{ route('inmuebles.index') }}">
                        <img src="https://cdn.pixabay.com/photo/2016/08/26/15/06/home-1622401_960_720.jpg"
                            class="rounded-xl brightness-75" />
                    </a>
                    <p
                        class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3">
                        Casas </p>
                </div>

                <!-- Card 2 -->
                <div class="col-span-2 transition hover:-translate-y-1 hover:scale-110 ">
                    <a href="{{ route('inmuebles.index') }}">
                        <img src="https://images.pexels.com/photos/6874916/pexels-photo-6874916.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            class="rounded-xl brightness-75" />
                    </a>
                    <p
                        class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3">
                        Fincas </p>
                </div>

                <!-- Card 3 -->
                <div class="col-span-2 transition hover:-translate-y-1 hover:scale-110">
                    <a href="{{ route('inmuebles.index') }}">
                        <img src="https://cdn.pixabay.com/photo/2018/01/20/07/19/tallest-3093955_960_720.jpg"
                            class="rounded-xl brightness-75 shadow" />
                    </a>
                    <p
                        class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3">
                        Apartamentos </p>
                </div>

                <!-- Card 4 -->
                <div class="col-span-2 transition hover:-translate-y-1 hover:scale-110">
                    <a href="{{ route('inmuebles.index') }}">
                        <img src="https://cdn.pixabay.com/photo/2021/11/09/20/58/home-6782365_960_720.jpg"
                            class="rounded-xl brightness-75" />
                    </a>
                    <p
                        class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3">
                        Lofts </p>
                </div>

                <!-- Card 5 -->
                <div class="col-span-2 transition hover:-translate-y-1 hover:scale-110">
                    <a href="{{ route('inmuebles.index') }}">
                        <img src="https://cdn.pixabay.com/photo/2016/01/21/23/48/paris-1155008_960_720.jpg"
                            class="rounded-xl brightness-75" />
                    </a>
                    <p
                        class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3">
                        Locales </p>
                </div>

                <div class="col-span-2 transition hover:-translate-y-1 hover:scale-110">
                    <a href="{{ route('inmuebles.index') }}">
                        <img src="https://cdn.pixabay.com/photo/2016/02/05/16/19/offices-1181385_960_720.jpg"
                            class="rounded-xl brightness-75" />
                    </a>
                    <p
                        class="text-xs -translate-y-6 text-white font-semibold sm:-translate-y-8 sm:text-base translate-x-3">
                        Oficinas </p>
                </div>

            </div>

        </div>
        <!--Categoria -->

        <div class="medium mt-24 bg-gray-700 object-cover py-12">
            <h1 class="text-center text-white font-bold text-xl">¿No sabes lo que buscas?</h1>
            <p class="text-center text-white text-sm mb6">Relajate nosotros lo hacemos por ti</p>
            <div class="flex justify-center mt-3">
                <a href="{{ route('inmuebles.index') }}" style=" text-decoration: none;"
                    class="bg-pink-600  hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">
                    Todos los inmuebles
                </a>
            </div>
        </div>





        {{-- <div class="fixed bottom-16 right-0 h-1/4 w-1/4 rounded-t-full rounded-full transition-all translate-y-full hover:translate-y-0 bg-pink-600">
            <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=5391" class="rounded-full" >
                <img src="http://www.somospropiedad.com/wp-content/uploads/2022/07/BotonPSE-PEQUENA-1024x791.png" 
                    alt="pse">
            </a>
        </div> --}}

        {{-- <div class="flex  right-8 bg-gray-100 p-2 w-full justify-center space-x-10">
            <button href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=5391"
                class="min-w-auto w-14 h-14 bg-red-300 p-2 rounded-full hover:bg-red-500 text-white font-semibold transition-rotation duration-300 hover:-rotate-45 ease-in-out">
                <img src="http://www.somospropiedad.com/wp-content/uploads/2022/07/BotonPSE-PEQUENA-1024x791.png"
                    alt="pse">
            </button>
        </div> --}}





        <!-- Start Services -->
        <div class="services">

            <div class="main-heading">
                <h1>
                    <span>P</span>
                    ropi
                    <span>e</span>
                    dade
                    <span>s</span>

                </h1>

                <p>Somos Propiedad con mas 20 años de experiencia, estamos a la vanguardia en ventas de propiedades,
                    administración y desarrollo de propiedades, siempre trabajando en estrecha colaboración con los
                    propietarios y ocupantes de sus propiedades.</p>
            </div>
            <!-- component -->
            @livewire('slider-inmueble', ['inmuebles' => $inmuebles])
        </div>
        <!-- End Services -->
        <!-- Start projects -->
        <div class="projects">
            <div class="projects-heading">
                <h1>Mas
                    <span>Populares</span>
                </h1>
                <p class="text-center block w-2/5  m-auto leading-loose text-sm text-slate-500">Somos propiedad es una
                    empresa completa con diferentes servicios inmobiliarios.
                    Con la confianza de clientes como usted durante más de dos décadas,
                    ofrecemos alquiler y venta de propiedades.
                </p>
            </div>
        </div>
        @livewire('populares-p', ['populares' => $populares])


        <!-- End projects -->
        <!-- Start About -->
        <div class="about sm:text-center sm:">

            <div class="">
                <div class="col-1pic">
                    <img src="/css/Home/img/member.png" alt="">
                </div>
            </div>
            <div class="col-2">
                <h1 class="">SOBRE
                    <span>NOSOTROS</span>
                </h1>

                <h3>Somos Propiedad</h3>
                <p> Mejorar la calidad de vida de quienes requieren un servicio inmobiliario,
                    mediante la asesoría de nuestro equipo de trabajo, dentro de un marco de responsabilidad,
                    seriedad y compromiso con nuestros aliados,
                    apoyado en la calidad humana y en la atención oportuna y competente.</p>


                <button><a href="#">SABER MAS</a></button>

            </div>

        </div>
        <!-- End About -->
        <!-- Start Contact -->
        <div class="contact">

            <div class="container">
                <div class="contact-heading">
                    <h1>CONTACTO

                        <span>INFO</span>

                    </h1>

                </div>
                <div class="boxs">
                    <div class="box">
                        <img src="/css/Home/img/phone.png" alt="">
                        <div class="text">
                            <h4>Telefono</h4>
                            <span>604 444 73 62 Ext 100<br>
                                604 444 73 62 Ext 103</span>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/css/Home/img/new-post.png" alt="">
                        <div class="text">
                            <h4>Correo</h4>
                            <span>asesor2caldas@somospropiedad.com<br>
                                servicios@somospropiedad.com
                            </span>
                        </div>
                    </div>
                    <div class="box">
                        <img src="/css/Home/img/map-marker.png" alt="">
                        <div class="text">
                            <h4>Direccion</h4>
                            <span>Calle 73 sur # 45A-60 Sabaneta, Antioquia</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact -->
        <!-- Start Footer -->
        <div class="footer">
            <div class="content">
                <div class="text">
                    <h1>
                        <span>S</span>
                        omos
                        <span>P</span>
                        ropiedad

                    </h1>

                    <p>Su solución web completa</p>
                </div>
                <ul>
                    <li><a href="https://www.facebook.com/somospropiedadinmobiliarial/"><img class="icon-image"
                                src="/css/Home/img/facebook-new.png" alt=""></a>
                    </li>
                    <li><a href="https://www.instagram.com/somospropiedad_inmobiliaria/"><img class="icon-image"
                                src="/css/Home/img/instagram-new.png" alt=""></a>
                    </li>
                </ul>
                <div class="copy-right">
                    <span>Copyright &copy; 2023 Somos Propiedad. All rights reserved</span>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
        <script src="{{ asset('js/slider.js') }}"></script>
        <script src="{{ asset('js/aliadoslider.js') }}"></script>

    </body>





</x-app-layout>
