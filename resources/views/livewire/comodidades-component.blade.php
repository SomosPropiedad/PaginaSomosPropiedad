<div>

    
    {!! Form::open(['route' => 'formulario.comodidades', 'files' => true]) !!}
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

            <div class="mb-5 px-2 w-1/2 hidden">
                <label for="Municipio"
                    class="font-bold mb-1 text-gray-700 block">Municipio</label>
                @isset($inmueble->id)
                    <input type="text"
                        class=" px-4 w-full py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        placeholder="Municipio" value="{{ $inmueble->id }}" name="inmueble_id">
                @endisset

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

        <button @click="step = 'complete'" x-show="step === 3" type="submit"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Completar</button>


        {{-- <!-- component -->
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.4/dist/flowbite.min.css" />

        <!-- This is an example component -->
        <div class="max-w-2xl mx-auto">

            <div class="flex items-center justify-center w-full">
                <label for="dropzone-file"
                    class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg class="w-10 h-10 mb-3 text-gray-400" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                            </path>
                        </svg>
                        <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                class="font-semibold">Click to upload</span> or drag and drop</p>
                        <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF
                            (MAX. 800x400px)</p>
                    </div>
                    <input id="dropzone-file" type="file" class="hidden" />
                </label>
            </div>

            <p class="mt-5">This file input component is part of a larger, open-source library of
                Tailwind CSS components. Learn
                more
                by going to the official <a class="text-blue-600 hover:underline" href="#"
                    target="_blank">Flowbite Documentation</a>.
            </p>
            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

        </div> --}}

        {!! Form::close() !!}


        @isset($inmueble)
            
        
      {!!   Form::model($inmueble, ['route' => ['inmueble.files', $inmueble], 'files' => true, 'class' => 'dropzone  rounded-lg',
     'id' => 'my-awesome-dropzone',]) !!}

          {{-- {!! Form::open([
            'route' => 'inmueble.files',
            'files' => true,
            'class' => 'dropzone  rounded-lg',
            'id' => 'my-awesome-dropzone',
            'name' => 'file',

        ]) !!} --}}
        

        <button @click="step = 'complete'" x-show="step === 3" type="submit"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Completar</button>

        

        {{-- <form action="{{route('inmueble.files', $inmueble->id)}}" method="POST" class="dropzone rounded-lg" id="my-awesome-dropzone" name="file">
            @csrf
            <button @click="step = 'complete'" x-show="step === 3" type="submit"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Completar</button>
        </form> --}}
        @endisset






    </div>
    {!! Form::close() !!} 
</div>
