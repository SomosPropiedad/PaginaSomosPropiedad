<x-app-layout>

    <body>

        <article id="the-article">

            <div>
                <div class="mx-auto max-w-6xl py-14">
                    <div class="p-2 rounded">
                        <div class="flex flex-col md:flex-row">
                            <div class="md:w-1/3 p-4 text-sm">

                                <div class="sticky inset-x-0 top-0 left-0 py-12">

                                    <div class="text-3xl text-pink-400 mb-4">¿En que podemos ayudarte?</div>
                                    <div class="mb-2 font-semibold text-gray-400">Si no encuentras una respuesta sugerida ¡Tranquilo! Podras enviarla y nuestro equipo de somos propiedad podra resolverla lo mas pronto posible.</div>
                                    <div class="text-xs text-pink-600 font-semibold">PQRS SOMOS PROPIEDAD</div>

                                    <div class="relative text-gray-600 mt-4 lg:mr-16">
                                        <input x-ref="searchField" x-model="search"
                                            x-on:keydown.window.prevent.slash="$refs.searchField.focus()" type="search"
                                            name="serch" placeholder="Buscar"
                                            class="bg-white w-full h-10 px-5 rounded-full text-sm focus:outline-none">
                                        <button type="submit"
                                            class="focus:outline-none absolute right-0 top-0 mt-3 mr-4">
                                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1"
                                                x="0px" y="0px" viewBox="0 0 56.966 56.966"
                                                style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                                                width="512px" height="512px">
                                                <path
                                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                            </svg>
                                        </button>
                                    </div>

                                </div>
                            </div>
                            <div class="md:w-2/3 py-12 ">
                                <div class="p-4">

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-pink-400 font-medium': isOpen == true }"> ¿Cómo describen su proceso de búsqueda de propiedades y negociación de contratos?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</p>
                                        </div>
                                    </div>

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-pink-400 font-medium': isOpen == true }"> ¿Qué servicios adicionales ofrecen, como asesoramiento financiero o inspecciones de la propiedad?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</p>
                                        </div>
                                    </div>

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-pink-400 font-medium': isOpen == true }"> ¿Cuál es su política de cancelación y reembolso?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</p>
                                        </div>
                                    </div>

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-pink-400 font-medium': isOpen == true }"> ¿Cómo manejan la privacidad y la seguridad de la información del cliente?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</p>
                                        </div>
                                    </div>

                                    <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                        <a href="#" class="flex items-center justify-between"
                                            @click.prevent="isOpen = true">
                                            <h4 :class="{ 'text-pink-400 font-medium': isOpen == true }"> ¿Tienen un equipo de apoyo en caso de emergencia o si surgen problemas con la propiedad?
                                            </h4>
                                            <svg :class="{ 'transform rotate-180': isOpen == true }"
                                                class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </a>
                                        <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                            :class="{ 'text-gray-600': isOpen == true }">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                                occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                                mollit anim id est laborum.</p>
                                        </div>
                                    </div>




                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </article>

        <div x-data="scrollHandler(document.getElementById('the-article'))" x-cloak aria-hidden="true" @scroll.window="calculateHeight(window.scrollY)"
            class="fixed h-screen w-1 hover:bg-gray-200 top-0 left-0 bg-gray-300">
            <div :style="`max-height:${height}%`" class="h-full bg-green-400"></div>
        </div>

        <div id="alpine-devtools" x-data="devtools()" x-show="alpines.length" x-init="start()">
        </div>
        <script>
            function scrollHandler(element = null) {
                return {
                    height: 0,
                    element: element,
                    calculateHeight(position) {
                        const distanceFromTop = this.element.offsetTop
                        const contentHeight = this.element.clientHeight
                        const visibleContent = contentHeight - window.innerHeight
                        const start = Math.max(0, position - distanceFromTop)
                        const percent = (start / visibleContent) * 100;
                        requestAnimationFrame(() => {
                            this.height = percent;
                        });
                    },
                    init() {
                        this.element = this.element || document.body;
                        this.calculateHeight(window.scrollY);
                    }
                };
            }
        </script>
    </body>

</x-app-layout>
