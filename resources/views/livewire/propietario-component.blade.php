<div>
    
    {!! Form::open(['route' => 'inmuebles.formulario.store', 'files' => true]) !!}
    <div x-show.transition.in="step === 1">
        <div class="mb-5 text-center">
            <div
                class="mx-auto w-32 h-32  border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                <img id="image" class="object-cover w-full h-32 rounded-full"
                    src="{{ Auth::user()->profile_photo_url }}" />
            </div>

        </div>

        <div class="mb-5">
            <label for="firstname" class="font-bold mb-1 text-gray-700 block">Nombre</label>
            <input type="text"
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                placeholder="Nombre" name="nombre">


            @error('nombre')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="firstname" class="font-bold mb-1 text-gray-700 block">Apellido</label>
            <input type="text"
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                placeholder="Apellido" name="apellido">

            @error('apellido')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror



        </div>


        <div class="mb-5">
            <label for="email" class="font-bold mb-1 text-gray-700 block">Correo</label>
            <input type="email"
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                value="{{ auth()->user()->email }}" name="correo">

            @error('correo')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-5">
            <label for="firstname" class="font-bold mb-1 text-gray-700 block">Contacto</label>
            <input type="number"
                class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                placeholder="Numero de contacto" name="telefono">


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

    </div>
    <button @click="step === 2" x-show="step === 1" type="submit"
        class="w-32 focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white bg-blue-500 hover:bg-blue-600 font-medium">Completar</button>
    {!! Form::close() !!}
</div>
