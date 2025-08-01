<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">

    {{-- FLowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

    {{-- Aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    @stack('style')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title ?? '' }} Wisata Likupang</title>
</head>

<body>
    <header class="fixed z-50 w-full font-inter" id="myElement">
        <nav class="bg-white border-gray-200 py-2.5">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto lg:px-8 ">
                <div href="#" class="flex items-center">
                    <img src="{{ asset('assets/img/logo.png') }}" class="h-12 mr-3 md:h-20" alt="Desa Sukarame" />
                </div>

                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>

                <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1 "
                    id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:items-center lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                            <a href="{{ route('index') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 lg:hover:text-green-new lg:p-0 {{ Route::current()->getName() == 'index' ? 'text-green-new' : '' }}">Beranda</a>
                        </li>
                        <li>
                            <a href="{{ route('destinations') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-new lg:p-0 {{ in_array(Route::current()->getName(), ['destinations', 'destinations.show']) ? 'text-green-new' : '' }}">Wisata</a>
                        </li>
                        <li>
                            <a href="{{ route('events') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-new lg:p-0 {{ in_array(Route::current()->getName(), ['events', 'events.show']) ? 'text-green-new' : '' }}">Acara</a>
                        </li>
                        <li>
                            <a href="{{ route('articles') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-new lg:p-0 {{ in_array(Route::current()->getName(), ['articles', 'articles.show']) ? 'text-green-new' : '' }} ">Artikel</a>
                        </li>
                         <li>
                            <a href="{{ route('galleries') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-new lg:p-0 {{ Route::current()->getName() == 'galleries' ? 'text-green-new' : '' }}">Galeri</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}"
                                class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-new lg:p-0 {{ Route::current()->getName() == 'about-us' ? 'text-green-new' : '' }}">Tentang
                                Kami</a>
                        </li>
                        @guest
                            <li>
                                <a href="{{ route('login') }}"
                                class="text-white bg-black-1 hover:bg-green-new focus:ring-4 focus:outline-none focus:ring-green-300 font-semibold rounded-xl text-lg px-6 py-2.5 transition-all duration-200">
                                    Admin
                                </a>
                            </li>
                        @endguest

                        @auth
                            <li>
                                <a href="{{ route(auth()->user()->role . '.dashboard') }}"
                                    class="block py-2 pl-3 pr-4 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-new lg:p-0">Dashboard</a>
                            </li>
                        @endauth
                    </ul>

                </div>

            </div>
        </nav>
    </header>

    <section class="min-h-screen">
        {{ $slot }}
    </section>

    <footer class="w-full mt-20 text-gray-700 bg-gray-100 body-font">
        <div class="flex flex-col items-center px-5 py-5 md:flex-row ">
            <div class="mx-auto text-center lg:w-1/2 md:mx-0 ">
                <a class="flex items-center justify-center font-medium text-gray-900 title-font ">
                    <img class="w-20" src="{{ asset('assets/img/logo.png') }}" alt="">
                </a>
                <p class="mt-2 text-sm text-gray-500">Niskala Likupang </p>
                <div class="mt-4">
                    <span class="inline-flex justify-center mt-2 sm:ml-auto sm:mt-0 sm:justify-start">
                        <a href="https://www.tiktok.com/@niskalalikupang"
                            class="text-gray-500 cursor-pointer hover:text-green-new">
                            <svg fill="currentColor" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/niskalalikupang?utm_source=ig_web_button_share_sheet&igsh=d3F4b2pxemZ4bXk0"
                            class="ml-3 text-gray-500 cursor-pointer hover:text-green-new">
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                                    clip-rule="evenodd" />
                            </svg>

                        </a>
                        <a href="https://www.instagram.com/niskalalikupang?utm_source=ig_web_button_share_sheet&igsh=d3F4b2pxemZ4bXk0"
                            class="ml-3 text-gray-500 cursor-pointer hover:text-green-new">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                </rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>

                    </span>
                </div>
            </div>
            <div class="flex flex-wrap flex-grow mt-10 -mb-10 text-center md:pl-20 md:mt-0 md:text-left">

                <div class="w-full px-4 md:w-1/2">

                    <nav class="mb-10 list-none text-md">
                        <li class="mt-3">
                            <a href="{{ route('index') }}"
                                class="text-gray-500 cursor-pointer hover:text-green-new {{ Route::current()->getName() == 'index' ? 'text-green-new' : '' }}">Beranda</a>
                        </li>
                        <li class="mt-3">
                            <a href="{{ route('destinations') }}"
                                class="text-gray-500 cursor-pointer hover:text-green-new {{ in_array(Route::current()->getName(), ['destinations', 'destinations.show']) ? 'text-green-new' : '' }}">Wisata</a>
                        </li>
                        <li class="mt-3">
                            <a href="{{ route('galleries') }}"
                                class="text-gray-500 cursor-pointer hover:text-green-new {{ Route::current()->getName() == 'galleries' ? 'text-green-new' : '' }}">Galeri</a>
                        </li>
                    </nav>
                </div>
                <div class="w-full px-4 md:w-1/2">

                    <nav class="mb-10 list-none text-md">
                        <li class="mt-3">
                            <a href="{{ route('events') }}"
                                class=" cursor-pointer hover:text-green-new {{ in_array(Route::current()->getName(), ['events', 'events.show']) ? 'text-green-new' : '' }}">Acara</a>
                        </li>
                        <li class="mt-3">
                            <a href="{{ route('articles') }}"
                                class=" cursor-pointer hover:text-green-new {{ in_array(Route::current()->getName(), ['articles', 'articles.show']) ? 'text-green-new' : '' }}">Artikel</a>
                        </li>
                        <li class="mt-3">
                            <a href="{{ route('about-us') }}"
                                class=" cursor-pointer hover:text-green-new {{ Route::current()->getName() == 'about-us' ? 'text-green-new' : '' }}">Tentang
                                Kami</a>
                        </li>
                    </nav>
                </div>


            </div>
        </div>
        <div class="bg-black-1">
            <div class="container px-5 py-4 mx-auto">
                <p class="text-sm font-bold text-center text-white capitalize font-inter">Copyright
                    {{ date('Y') }}
                    ANAK PUNKKK </p>
            </div>
        </div>
    </footer>

    <script>
        const myElement = document.getElementById('myElement');
        const scrollTrigger = 20; // Tinggi scroll yang memicu shadow (sesuaikan nilai ini)

        window.addEventListener('scroll', function() {
            if (window.scrollY > scrollTrigger) {
                myElement.classList.add('shadow-lg'); // Tambahkan class shadow
            } else {
                myElement.classList.remove('shadow-lg'); // Hapus class shadow
            }
        });

        // Ambil tombol toggle dan menu mobile
        // const toggleButton = document.querySelector('[data-collapse-toggle="mobile-menu-2"]');
        // const mobileMenu = document.getElementById('mobile-menu-2');

        // // Tambahkan event listener untuk klik pada tombol toggle
        // toggleButton.addEventListener('click', function() {
        //     // Toggle kelas 'hidden' pada menu mobile
        //     mobileMenu.classList.toggle('hidden');
        //     // Toggle atribut 'aria-expanded' untuk aksesibilitas
        //     const isOpen = mobileMenu.classList.contains('hidden') ? 'false' : 'true';
        //     toggleButton.setAttribute('aria-expanded', isOpen);

        // });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/TextPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>
