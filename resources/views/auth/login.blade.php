 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
     <title>Somos Propiedad</title>
     <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
     <!-- BEGIN GLOBAL MANDATORY STYLES -->
     <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
     <link href="/login_registrer/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="/login_registrer/assets/css/plugins.css" rel="stylesheet" type="text/css" />
     <link href="/login_registrer/assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
     <!-- END GLOBAL MANDATORY STYLES -->
     <link rel="stylesheet" href="/login_registrer/assets/css/forms/theme-checkbox-radio.css">
     <link rel="stylesheet" type="text/css" href="/login_registrer/assets/css/forms/switches.css">
 </head>

 <body class="form">


     <div class="form-container">
         <div class="form-form">
             <div class="form-form-wrap">
                 <div class="form-container">
                     <div class="form-content">

                         <h1 class="">Iniciar sesión en <a href="index.html"><span class="brand-name">Somos Propiedad</span></a></h1>
                         <p class="signup-link">¿Nuevo aqui? <a href="{{ route('register') }}">Create una cuenta</a></p>

                         <x-jet-validation-errors class="mb-4" />
                         @if (session('status'))
                             <div class="mb-4 font-medium text-sm text-green-600">
                                 {{ session('status') }}
                             </div>
                         @endif
                         <form class="text-left" method="POST" action="{{ route('login') }}">
                             @csrf
                             <div class="form">

                                 <div id="username-field" class="field-wrapper input">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                         <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                         <circle cx="12" cy="7" r="4"></circle>
                                     </svg>
                                     <input id="email" name="email" type="text" class="form-control"
                                         placeholder="Correo">
                                 </div>

                                 <div id="password-field" class="field-wrapper input mb-2">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                         <rect x="3" y="11" width="18" height="11"
                                             rx="2" ry="2"></rect>
                                         <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                     </svg>
                                     <input id="password" name="password" type="password" class="form-control"
                                         placeholder="Contraseña">
                                 </div>
                                 <div class="d-sm-flex justify-content-between">
                                     <div class="field-wrapper toggle-pass">
                                         <p class="d-inline-block">Mostrar contraseña</p>
                                         <label class="switch s-primary">
                                             <input type="checkbox" id="toggle-password" class="d-none">
                                             <span class="slider round"></span>
                                         </label>
                                     </div>
                                     <div class="field-wrapper">
                                         <button type="submit"   class="btn btn-dark text-white" value="">Iniciar sesión</button>
                                     </div>

                                 </div>

                                 <div class="field-wrapper text-center keep-logged-in">
                                     <div class="n-chk new-checkbox checkbox-outline-primary">
                                         <label class="new-control new-checkbox checkbox-outline-primary">
                                             <input type="checkbox" name="remember" class="new-control-input">
                                             <span class="new-control-indicator"></span>Recuerdame
                                         </label>
                                     </div>
                                 </div>

                                 <div class="field-wrapper">
                                    @if (Route::has('password.request'))
                                    <a class="forgot-pass-link bg-pink-500" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                </div>


                             </div>
                         </form>
                         <p class="terms-conditions text-center">© 2020 All Rights Reserved. Somos Propiedad,<a href="javascript:void(0);">Terminos & Condiciones.</a>
                         </p>

                     </div>
                 </div>
             </div>
         </div>
         <div class="form-image">
             <div class="l-image">
             </div>
         </div>
     </div>


     <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
     <script src="/login_registrer/assets/js/libs/jquery-3.1.1.min.js"></script>
     <script src="/login_registrer/bootstrap/js/popper.min.js"></script>
     <script src="/login_registrer/bootstrap/js/bootstrap.min.js"></script>

     <!-- END GLOBAL MANDATORY SCRIPTS -->
     <script src="/login_registrer/assets/js/authentication/form-1.js"></script>

 </body>

 </html>

 {{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>  --}}
