<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="icon" type="image/png" sizes="32x32" href="/css/Home/img/logo-somos-propiedad.png">

        



        <!-- Scripts -->

        {{-- <link rel="stylesheet" href="{{asset('build/assets/app.d1973690.css')}}">
        <script src="{{asset('build/assets/app.ab93cf8a.js')}}" defer></script> --}}

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- FlexSlider --}}



         

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">

        <a href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=5391" class="fixed z-50 bottom-10 right-0  mb-6  rounded-full text-white  py-2 text-center" target="_blank">
            <img src="/css/Home/img/ps.png" alt="" width="150" height="150">
          </a>

        <a href="https://wa.me/573206716990/?text=¡Hola!%20me%20interesa%20una%20propiedad" class="fixed z-50 bottom-0 right-0 mr-6 mb-6 rounded-full text-white px-3 py-2 text-center" target="_blank">
            <img src="/css/Home/img/whatsapp3.png" alt="">
          </a>

        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->


            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
