<div>
    
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

                <button @click="step = 1"
                    class="w-40 block mx-auto focus:outline-none py-2 px-5 rounded-lg shadow-sm text-center text-gray-600 bg-white hover:bg-gray-100 font-medium border">Back
                    to home</button>
            </div>
        </div>
    </div>
</div>
