<div>
    
    {!! Form::open(['route' => 'formulario.inmueble', 'files' => true]) !!}
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

        <button @click="step = 'complete'" x-show="step === 2" type="submit"
            class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Completar</button>

    </div>
    {!! Form::close() !!}
</div>
