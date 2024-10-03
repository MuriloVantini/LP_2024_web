<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Menu') }}
            </h2>
            <div class="text-center leading-tight">
                <button
                    class="text-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact"
                    aria-controls="drawer-contact">
                    Entre em contato!
                </button>
            </div>
        </div>
    </x-slot>
    @section('content')
        <div class="flex lg:flex-row md:flex-col-reverse md:justify-center sm:flex-col-reverse sm:items-center sm:justify-evenly mt-10 ">
            <div class="flex flex-wrap my-4 gap-2 ml-10">
                <a href="#"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Frota</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Confira nossa variedade de
                        carros, desde compactos até SUVs e veículos de luxo.</p>
                </a>
                <a href="#"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Ofertas</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Veja nossas promoções e
                        tarifas especiais para aluguel de curto e longo prazo.</p>
                </a>
                <a href="#"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Locação</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Saiba mais sobre como alugar
                        um carro e os requisitos necessários.</p>
                </a>
                <a href="#"
                    class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Serviços</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Explore os serviços
                        adicionais que oferecemos, como seguro, GPS, e suporte 24 horas.</p>
                </a>
            </div>
            <img src="{{ asset('images/home_image.webp') }}" alt="Descrição da imagem"
                class="h-1/2 max-w-lg duration-300 rounded-lg">
        </div>
        <div class="px-10 my-10">
            <hr>
        </div>
        <div class="mb-52 lg:mx-20">
            <div class="mb-4">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Encontre o Carro Perfeito
                    para Sua Jornada</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Explore nossa frota diversificada e escolha o
                    veículo ideal para cada ocasião, desde viagens curtas a grandes aventuras.</p>
            </div>
            <div id="drawer-contact"
                class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
                tabindex="-1" aria-labelledby="drawer-contact-label">
                <h5 id="drawer-label"
                    class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400">
                    <svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 16">
                        <path
                            d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                        <path
                            d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                    </svg>Contact us
                </h5>
                <button type="button" data-drawer-hide="drawer-contact" aria-controls="drawer-contact"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close menu</span>
                </button>
                <form class="mb-6">
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seu
                            e-mail</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="email@gmail.com" required />
                    </div>
                    <div class="mb-6">
                        <label for="subject"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Título</label>
                        <input type="text" id="subject"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Dê um título para sua mensagem" required />
                    </div>
                    <div class="mb-6">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sua
                            mensagem</label>
                        <textarea id="message" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Escreva sua mensagem da maneira que desejar!"></textarea>
                    </div>
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Enviar</button>
                </form>
                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                    <a href="https://github.com/MuriloVantini/LP_2024_web" class="hover:underline">Visualize o projeto</a>
                </p>
            </div>

            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1469285994282-454ceb49e63c?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1486496572940-2bb2341fdbdf?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1484136540910-d66bb475348d?q=80&w=1253&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                        data-carousel-slide-to="3"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                        data-carousel-slide-to="4"></button>
                </div>
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
            <p class="mt-4 font-normal text-gray-700 dark:text-gray-400">Oferecemos uma ampla seleção de veículos para
                atender a todas as suas necessidades. Desde compactos econômicos ideais para o trânsito urbano até SUVs
                espaçosos perfeitos para viagens em família, temos o carro certo para qualquer ocasião. Nosso compromisso é
                proporcionar conforto, segurança e praticidade, com veículos modernos e revisados regularmente para garantir
                sua tranquilidade na estrada. Além disso, oferecemos tarifas competitivas e pacotes especiais de locação de
                curto e longo prazo. Não importa o destino, estamos aqui para facilitar sua jornada. Escolha seu próximo
                carro e aproveite o melhor da estrada com a gente!</p>
            <p class="mt-4 font-normal text-gray-700 dark:text-gray-400">Além da variedade de veículos, você também conta
                com um atendimento personalizado e serviços adicionais, como GPS, cadeirinhas para crianças, seguro completo
                e assistência 24 horas. Nossa missão é garantir que sua experiência de locação seja a mais prática e
                conveniente possível. Seja para uma viagem de negócios, lazer ou uma ocasião especial, estamos prontos para
                oferecer soluções sob medida que atendam suas expectativas. Confie na nossa equipe para tornar sua locação
                fácil, rápida e sem complicações!</p>
        </div>
    @endsection
    @section('footer')
        <footer class="bg-white rounded-lg shadow  dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 - <a href="#"
                        class="hover:underline">Os Murilos do BCC</a>. Todos os direitos reservados.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Sobre</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Política de Privacidade</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licenças</a>
                    </li>
                </ul>
            </div>
        </footer>
    @endsection
</x-app-layout>
