<div>
    <div class="h-96 col-span-1  ">
        <div class="bg-white py-3 px-4 rounded-lg flex justify-around items-center ">
            <input type="text" placeholder="seach"
                class=" bg-gray-100 rounded-md  outline-none pl-2 ring-indigo-700 w-full mr-2 p-2">
            <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor ">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg></span>
        </div>
        <br>
        <p>{{$clase}}</p>
        <div class="bg-white   rounded-md">
            


            <div class="bg-white rounded-md list-none  text-center ">
                <li class="py-3 border-b-2  transition   hover:-translate-y-1 hover:scale-110  duration-300"><a
                         class="cursor-pointer  list-none  hover:text-pink-500" wire:click="$set('clase','&destinacion=venta')" >Venta</a></li>
                <li class="py-3 border-b-2 transition   hover:-translate-y-1 hover:scale-110  duration-300"><a
                         class="cursor-pointer  list-none  hover:text-pink-500" wire:click="$set('clase','&destinacion=arriendo')" >Arrendamiento</a>
                </li>





                {{-- <div class="py-3 transition   hover:-translate-y-1 hover:scale-110  duration-300" x-data="{open: false}">
                    <button  class="list-none border-b-2 hover:text-pink-500 " x-on:click="open= !open " >Categorias</button>

                        <div x-show="open" class="hidden bg-white text-base z-10 list-none divide-y divide-gray-100 rounded shadow my-4 w-44">
                            <ul class="py-1" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Earnings</a>
                            </li>
                            </ul>
                            <div class="py-1">
                            <a href="#" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Sign out</a>
                            </div>
                        </div>
                    
                </div> --}}

                <div class="relative py-3 border-b-2 " x-data="{ open: false }">
                    <button class="px-4 border-b-2 " x-on:click="open = !open">
                        <i class="fa-solid fa-circle-caret-down"></i>
                        Categorias
                    </button>


                    <div class="absolute w-60 mt-4 py-5 z-40  bg-white " x-show="open" x-on:click.away="open= false">
                        <li
                            class=" py-3 border-b-2  transition   hover:-translate-y-1 hover:scale-110  duration-300">
                            <a  class="curso-pointer list-none  hover:text-pink-500">Apartamento</a></li>
                        <li
                            class=" py-3 border-b-2 transition   hover:-translate-y-1 hover:scale-110  duration-300">
                            <a  class="curso-pointer list-none  hover:text-pink-500">Apto-Loft</a>
                        </li>
                        <li
                            class=" py-3 border-b-2 transition   hover:-translate-y-1 hover:scale-110  duration-300">
                            <a  class="curso-pointer list-none  hover:text-pink-500">Apartaestudio</a>
                        </li>
                        <li class=" py-3 border-b-2 transition   hover:-translate-y-1 hover:scale-110  duration-300">
                            <a  class="curso-pointer list-none  hover:text-pink-500">Casa-Finca</a>
                        </li>
                        <li class=" py-3 border-b-2 transition   hover:-translate-y-1 hover:scale-110  duration-300">
                            <a  class="curso-pointer list-none  hover:text-pink-500">Local</a>
                        </li>
                        <li class=" py-3 border-b-2 transition   hover:-translate-y-1 hover:scale-110  duration-300">
                            <a  class="curso-pointer list-none  hover:text-pink-500">Finca</a>
                        </li>
                        <li class=" py-3 border-b-2 transition   hover:-translate-y-1 hover:scale-110  duration-300">
                            <a  class="curso-pointer list-none  hover:text-pink-500">Parqueadero</a>
                        </li>
                        <li class=" py-3  transition   hover:-translate-y-1 hover:scale-110  duration-300">
                            <a  class="curso-pointer list-none  hover:text-pink-500">Terreno</a>
                        </li>

                    </div>

                </div>




            </div>
        </div>
    </div>
</div>
