<x-app-layout>

    <!-- component -->
    <!-- This is an example component -->
    <div class="h-screen py-14">


        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css"
            integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"
            integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

        <style>
            [x-cloak] {
                display: none;
            }

            [type="checkbox"] {
                box-sizing: border-box;
                padding: 0;
            }

            .form-checkbox,
            .form-radio {
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
                display: inline-block;
                vertical-align: middle;
                background-origin: border-box;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                flex-shrink: 0;
                color: currentColor;
                background-color: #fff;
                border-color: #e2e8f0;
                border-width: 1px;
                height: 1.4em;
                width: 1.4em;
            }

            .form-checkbox {
                border-radius: 0.25rem;
            }

            .form-radio {
                border-radius: 50%;
            }

            .form-checkbox:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }

            .form-radio:checked {
                background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
                border-color: transparent;
                background-color: currentColor;
                background-size: 100% 100%;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>

        <div x-data="app()" x-cloak>
            <div class="max-w-3xl mx-auto px-4 py-10">

                 <div x-show.transition="step === 'complete'">
                    <div class="bg-white rounded-lg p-10 flex items-center shadow justify-between">
                        <div>
                            <svg class="mb-4 h-20 w-20 text-green-500 mx-auto" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd" />
                            </svg>

                            <h2 class="text-2xl mb-4 text-gray-800 text-center font-bold">El inmueble se resgistro
                                correctamente</h2>

                            <div class="text-gray-600 mb-8">
                                Muy pronto, nos pondremos en contacto contigo atraves de el siguiente correo electronico
                                {{ Auth::user()->email }} y/o numero de contacto.
                            </div>

                            <a href="{{ route('home') }}"
                                class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Back
                                Volver</a>
                        </div>
                    </div>
                </div> 



                <div x-show.transition="step != 'complete'">
                    <!-- Top Navigation -->
                    <div class="border-b-2 py-4">
                        <div class="uppercase tracking-wide text-xs font-bold text-gray-500 mb-1 leading-tight"
                            x-text="`Step: ${step} of 3`"></div>
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <div x-show="step === 1">
                                    <div class="text-lg font-bold text-gray-700 leading-tight">Información personal
                                    </div>
                                </div>

                                <div x-show="step === 2">
                                    <div class="text-lg font-bold text-gray-700 leading-tight">Información del inmueble
                                    </div>
                                </div>

                                <div x-show="step === 3">
                                    <div class="text-lg font-bold text-gray-700 leading-tight">Imagenes del inmueble
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center md:w-64">
                                <div class="w-full bg-white rounded-full mr-2">
                                    <div class="rounded-full bg-pink-500 text-xs leading-none h-2 text-center text-white"
                                        :style="'width: ' + parseInt(step / 3 * 100) + '%'"></div>
                                </div>
                                <div class="text-xs w-10 text-gray-600" x-text="parseInt(step / 3 * 100) +'%'"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Top Navigation -->

                    <!-- Step Content -->
                    <div class="py-10">
                        {!! Form::open(['route' => 'inmuebles.formulario.store', 'files' => true, 'id' => 'form']) !!}
                        <div x-show.transition.in="step === 1">
                            <div class="mb-5 text-center">
                                <div
                                    class="mx-auto w-32 h-32  border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                                    <img id="image" class="object-cover w-full h-32 rounded-full"
                                        src="{{ Auth::user()->profile_photo_url }}" />
                                </div>

                            </div>

                            <div class="mb-5" x-data="{ field: '' }">
                                <label for="firstname" class="font-bold mb-1 text-gray-700 block">Nombre</label>
                                <input type="text" x-model="form.name"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    placeholder="Nombre" name="nombre" id="nombre">
                                @error('nombre')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="firstname" class="font-bold mb-1 text-gray-700 block">Apellido</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    placeholder="Apellido" name="apellido" id="apellido">

                                @error('apellido')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror



                            </div>


                            <div class="mb-5">
                                <label for="email" class="font-bold mb-1 text-gray-700 block">Correo</label>
                                <input type="email"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    value="{{ auth()->user()->email }}" name="correo" id="correo">

                                @error('correo')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-5">
                                <label for="firstname" class="font-bold mb-1 text-gray-700 block">Contacto</label>
                                <input type="number"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    placeholder="Numero de contacto" name="telefono" id="telefono">


                                @error('contacto')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-5 hidden">
                                <label for="firstname" class="font-bold mb-1 text-gray-700 block">Contacto</label>
                                <input type="text"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    placeholder="Numero de contacto" value="cedula" name="tipo_documento">


                                @error('contacto')
                                    <span class="text-xs text-red-500">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-5 hidden">
                                <label for="firstname" class="font-bold mb-1 text-gray-700 block">user_id</label>
                                <input type="number"
                                    class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                    value="{{ Auth()->user()->id }}" name="user_id">
                            </div>




                            <div class="max-w-3xl mx-auto px-4">
                                <div class="flex justify-between">
                                    <div class="w-full text-right">
                                        <button x-show="step < 3" @click="step++" type="submit" id="enviar"
                                            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Siguiente</button>
                                    </div>
                                </div>
                            </div>


                        </div>
                        {!! Form::close() !!}


                        {!! Form::open(['route' => 'formulario.comodidades', 'files' => true, 'id' => 'comodidades']) !!}
                        <div x-show.transition.in="step === 3" class="">

                            <div class="flex justify-center items-center">
                                <div class="mb-5 px-2 w-1/2">
                                    <label for="Municipio"
                                        class="font-bold mb-1 text-gray-700 block">Municipio</label>
                                    <input type="text"
                                        class=" px-4 w-full py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Municipio" name="municipio">

                                    @error('municipio')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="mb-5 w-1/2">
                                    <label for="Barrio" class="font-bold mb-1 text-gray-700 block">Barrio</label>
                                    <input type="text"
                                        class=" px-4 py-3 w-full rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Barrio" name="barrio">

                                    @error('barrio')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-center items-center">

                                <div class="mb-5 px-2 w-1/2">
                                    <label for="firstname" class="font-bold mb-1 text-gray-700 block">Estrato</label>
                                    <input type="number"
                                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Numero de estrato" name="estrato">

                                    @error('estrato')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class=" px-2 w-1/2">
                                    <label for="password" class="font-bold mb-1 text-gray-700 block">Tipo de
                                        inmueble</label>
                                    <div class="relative inline-flex mb-4 w-full">
                                        <select name="tipo_inmueble"
                                            class="px-4 w-full py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                                            <option>Casa</option>
                                            <option>Apartamento</option>
                                            <option>Apartamento loft</option>
                                            <option>Casa Finca</option>
                                            <option>Finca</option>
                                            <option>Comercial (Local,Hotel,Oficina)</option>
                                            <option>Parqueadero</option>
                                        </select>
                                        @error('tipo')
                                            <span class="text-xs text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>


                                <div class=" px-2 w-1/2">
                                    <label for="password"
                                        class="font-bold mb-1 text-gray-700 block">Destinación</label>
                                    <div class="relative inline-flex mb-4 w-full">
                                        <select name="destinacion"
                                            class="px-4 w-full py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium">
                                            <option>Arriendo</option>
                                            <option>Venta</option>
                                            <option>Ambos</option>
                                        </select>
                                        @error('destinacion"')
                                            <span class="text-xs text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                            </div>


                            <div class="flex justify-center items-center">
                                <div class="mb-5 px-2 w-1/2">
                                    <label for="firstname"
                                        class="font-bold mb-1 text-gray-700 block">Habitaciónes</label>
                                    <input type="number"
                                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Numero de habitaciónes" name="habitaciones">

                                    @error('habitaciones')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-5 w-1/2">
                                    <label for="firstname" class="font-bold mb-1 text-gray-700 block">Baños</label>
                                    <input type="number"
                                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Numero de baños" name="banos">

                                    @error('bano')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-5 px-2 w-1/2">
                                    <label for="firstname" class="font-bold mb-1 text-gray-700 block">Closets</label>
                                    <input type="number"
                                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Numero de closets" name="closets">

                                    @error('closets')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>








                            {!! Form::close() !!}

                            {!! Form::open([
                                'route' => 'inmueble.files',
                                'files' => true,
                                'id' => 'my-dropzone',
                                'class' => 'dropzone  rounded-lg',
                                'enctype' => 'multipart/form-data',
                            ]) !!}
                            @csrf


                            {{-- {!! Form::model($inmueble, [
                                    'route' => ['inmueble.files', $inmueble],
                                    'files' => true,
                                    'class' => 'dropzone  rounded-lg',
                                    'id' => 'my-awesome-dropzone',
                                    'name' => 'img',
                                ]) !!} --}}

                            {!! Form::close() !!}



                            <div class="max-w-3xl mx-auto px-4 py-4 ">
                                <div class="flex justify-between">
                                    <div class="w-full text-right">
                                        <button @click="step = 'complete'" x-show="step === 3" id="enviar"
                                            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Completar</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {!! Form::open(['route' => 'formulario.inmueble', 'files' => true, 'id' => 'inmueble']) !!}
                        <div x-show.transition.in="step === 2" class="">

                            <div class="flex justify-center items-center">
                                <div class="mb-5 px-2 w-1/2">
                                    <label for="Municipio" class="font-bold mb-1 text-gray-700 block">Nombre</label>
                                    <input type="text"
                                        class=" px-4 w-full py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Nombre" name="nombre" id="nombre">
                                </div>

                                <div class="mb-5 px-2 w-1/2">
                                    <label for="Municipio" class="font-bold mb-1 text-gray-700 block">Precio</label>
                                    <input type="number"
                                        class=" px-4 w-full py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Precio" name="precio">
                                </div>

                                <div class="mb-5 w-1/2 hidden">
                                    <label for="Barrio" class="font-bold mb-1 text-gray-700 block">slug</label>
                                    <input type="text"
                                        class=" px-4 py-3 w-full rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        placeholder="Slug" name="slug" id="slug">
                                </div>
                            </div>

                            <div class="flex justify-center items-center">


                                <div class="mb-5 hidden">
                                    <label for="firstname" class="font-bold mb-1 text-gray-700 block">user_id</label>
                                    <input type="number"
                                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        value="{{ Auth()->user()->id }}" name="user_id">
                                </div>


                            </div>

                            <div class="mb-5">
                                <label for="password" class="font-bold mb-1 text-gray-700 block">Acerca de este
                                    inmueble</label>
                                <div class="text-gray-600 mt-2 mb-4">
                                    Crea una breve descripción que incluya los siguientes criterios.

                                    <ul class="list-disc text-sm ml-4 mt-2">
                                        <li>Descripción de las comodidades del inmueble</li>
                                        <li>Breve descripción de las zona comunes</li>
                                        <li>Años de construcción</li>
                                        <li>Maximo de 500 caracteres</li>
                                    </ul>
                                </div>

                                <div class="relative">
                                    <textarea
                                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                        rows="3"
                                        placeholder="Ejemplo('Se arrienda apartamento en sabaneta con 3 habitaciones, 3 closets, 2 baños cabinados, cocina integral, sala comedor, horno, balcon, sala comedor, red de gas ascensor & parqueadero')"
                                        name="descripcion"></textarea>
                                    @error('descripcion')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror

                                </div>

                                <p class="mt-5 text-gray-600">No importa lo que te diga la gente, las palabras y las
                                    ideas pueden cambiar el mundo by <a
                                        href="https://www.sensacine.com/actores/actor-1191/biografia/"
                                        class="text-blue-500">Robin Williams</a>.</p>
                            </div>

                            <div class="max-w-3xl mx-auto px-4">
                                <div class="flex justify-between">
                                    <div class="w-full text-right">
                                        <button x-show="step < 3" @click="step++" type="submit"
                                            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Siguiente</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                    <!-- / Step Content -->
                </div>
            </div>

            <!-- Bottom Navigation -->
            <div class="fixed bottom-0 left-0 right-0 py-5 hidden bg-white shadow-md" x-show="step != 'complete'">
                <div class="max-w-3xl mx-auto px-4">
                    <div class="flex justify-between">
                        <div class="w-1/2">
                            <button x-show="step > 1" @click="step--"
                                class="w-32 focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Atras</button>
                        </div>

                        <div class="w-1/2 text-right">
                            <button x-show="step < 3" @click="step++"
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Siguiente</button>

                            <button @click="step = 'complete'" x-show="step === 3" type="submit"
                                class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Completar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Bottom Navigation https://placehold.co/300x300/e2e8f0/cccccc -->
        </div>

        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js"
            integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

        <script src="/js/form.js"></script>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"
            integrity="sha512-llCHNP2CQS+o3EUK2QFehPlOngm8Oa7vkvdUpEFN71dVOf3yAj9yMoPdS5aYRTy8AEdVtqUBIsVThzUSggT0LQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

        {{-- script de el slug automatico --}}
        <script>
            //Slug automático
            document.getElementById("nombre").addEventListener('keyup', slugChange);

            function slugChange() {

                title = document.getElementById("nombre").value;
                document.getElementById("slug").value = slug(title);

            }

            function slug(str) {
                var $slug = '';
                var trimmed = str.trim(str);
                $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
                replace(/-+/g, '-').
                replace(/^-|-$/g, '');
                return $slug.toLowerCase();
            }
        </script>
        {{-- script de configuracion de dropzone --}}

        <script>
            Dropzone.options.myDropzone = {
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"

                },
                acceptedFiles: 'image/*',
                dictDefaultMessage: "Click para agregar fotos del inmueble",
                paramName: "file", // The name that will be used to transfer the file
                maxFilesize: 2, // MB
                accept: function(file, done) {
                    if (file.name == "justinbieber.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                }
            };
        </script>


        <script>
            function app() {
                return {
                    step: 1,
                    // passwordStrengthText: '',
                    // togglePassword: false,

                    password: '',
                    gender: 'Male',

                    checkPasswordStrength() {
                        var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
                        var mediumRegex = new RegExp(
                            "^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

                        let value = this.password;

                        if (strongRegex.test(value)) {
                            this.passwordStrengthText = "Strong password";
                        } else if (mediumRegex.test(value)) {
                            this.passwordStrengthText = "Could be stronger";
                        } else {
                            this.passwordStrengthText = "Too weak";
                        }
                    }
                }
            }
        </script>
</x-app-layout>
