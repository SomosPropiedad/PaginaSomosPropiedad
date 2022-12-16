<x-app-layout>
    <!-- component -->
<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12 ">
	<div class="relative mt-16 py-3 sm:max-w-xl sm:mx-auto">
		<div
			class="absolute inset-0 bg-gradient-to-r py-24 from-pink-300 to-pink-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
		</div>
		<div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
			<div class="max-w-md mx-auto">
				<div>
					<h1 class="text-2xl font-bold">¡Calcula el costo de arrendamiento! <br>(en desarrollo)</h1>
                    <p class="mt-2 font-semibold text-gray-500">¿Buscas una casa nueva? ¿Quieres alquilar tu casa? Somos propiedad te ayuda a encontrar la casa perfecta para ti.</p>
				</div>
				<div class=" divide-gray-200">
                    <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="relative w-full ">
                            <input autocomplete="off" style="text-decoration:none "  type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-0   border-gray-300   text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Direccion" />
                            <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base border-0 peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Direccion</label>
                        </div>
                        <div class="flex">
                            <div class="relative w-1/2 flex mr-2">
                                <input autocomplete="off" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-0 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Años de construcción" />
                                <label for="text" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Años de construcción</label>
                            </div>
                            <div class="relative w-1/2 flex item">
                                <input autocomplete="off" type="text" class="peer flex placeholder-transparent h-10 w-full border-b-2 border-0 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Área m2" />
                                <label for="text" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Área m2</label>
                            </div>

                        </div>
                        <div class="flex">
                            <div class="relative w-1/2 flex mr-2">
                                <input autocomplete="off" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-0 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Habitaciones" />
                                <label for="text" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Habitaciones</label>
                            </div>
                            <div class="relative w-1/2 flex item">
                                <input autocomplete="off" type="text" class="peer flex placeholder-transparent h-10 w-full border-b-2 border-0 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Baños" />
                                <label for="text" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Baños</label>
                            </div>

                        </div>
                        <div class="flex">
                            <div class="relative w-1/2 flex mr-2">
                                <input autocomplete="off" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-0 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Estrato" />
                                <label for="text" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Estrato</label>
                            </div>
                            <div class="relative w-1/2 flex item">
                                <input autocomplete="off" type="text" class="peer flex placeholder-transparent h-10 w-full border-b-2 border-0 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Parqueadero" />
                                <label for="text" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Parqueadero</label>
                            </div>

                        </div>
                
                        <div class="relative text-center w-full">
                            <button class="bg-pink-500 text-center text-white rounded-md w-full py-1">Calcular</button>
                        </div>
                    </div>
        

        

				</div>
			</div>
		</div>
	</div>
</div>
</x-app-layout>


{{-- <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
    <div class="relative w-full ">
        <input autocomplete="off"  type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Direccion" />
        <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Direccion</label>
    </div>
    <div class="relative w-50 ">
        <input autocomplete="off" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
        <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
    </div>
    <div class="relative text-center">
        <button class="bg-pink-500 text-center text-white rounded-md px-2 py-1">Calcular</button>
    </div>
</div> --}}