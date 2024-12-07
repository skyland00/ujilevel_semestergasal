@extends('layout.main')

@section('section')
    {{-- CARASOUL --}}
    <div class="pt-4 mx-auto max-w-7xl px-4 py-5 sm:px-6 lg:px-8 lg:mx-24">
        <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg swiper-container">
            <!-- Carousel wrapper -->
            <div class="relative h-64 sm:h-80 lg:h-96 w-full swiper-wrapper" data-carousel-inner>
                <!-- Item 1 -->
                <div class="swiper-slide">
                    <img src="{{ asset('img/cris.png') }}" class="object-cover w-full h-full" alt="Slide 1">
                </div>
                <!-- Item 2 -->
                <div class="swiper-slide">
                    <img src="{{ asset('img/banner.png') }}" class="object-cover w-full h-full" alt="Slide 2">
                </div>
                <!-- Item 3 -->
                <div class="swiper-slide">
                    <img src="{{ asset('img/aespa jooy.png') }}" class="object-cover w-full h-full" alt="Slide 3">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
                <button type="button"
                    class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                <button type="button"
                    class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
                <button type="button"
                    class="w-2.5 h-2.5 sm:w-3 sm:h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-1/2 left-2 sm:left-3 z-40 items-center justify-center w-8 h-8 sm:w-10 sm:h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-prev>
                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button type="button"
                class="flex absolute top-1/2 right-2 sm:right-3 z-40 items-center justify-center w-8 h-8 sm:w-10 sm:h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
                data-carousel-next>
                <svg class="w-4 h-4 sm:w-5 sm:h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>

    {{-- FITUR --}}
    <section class="py-5">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 lg:mx-24">
            <div
                class="grid grid-cols-1 md:grid-cols-2 lg:flex justify-around items-center bg-white rounded-lg shadow-md p-6 gap-6">
                <!-- Secure Payment -->
                <div class="flex items-center space-x-4 lg:space-x-6">
                    <i class="fa-solid fa-hand-holding-dollar text-amber-700 text-3xl"></i>
                    <div>
                        <h3 class="text-gray-800 text-lg lg:text-xl font-semibold">Secure Payment</h3>
                        <p class="text-sm text-gray-500">All cards accepted</p>
                    </div>
                </div>

                <!-- Online Support -->
                <div class="flex items-center space-x-4 lg:space-x-6">
                    <i class="fa-solid fa-headset text-amber-700 text-3xl"></i>
                    <div>
                        <h3 class="text-gray-800 text-lg lg:text-xl font-semibold">Online Support</h3>
                        <p class="text-sm text-gray-500">Technical 24/7</p>
                    </div>
                </div>

                <!-- Free Shipping -->
                <div class="flex items-center space-x-4 lg:space-x-6">
                    <i class="fa-solid fa-truck-fast text-amber-700 text-3xl"></i>
                    <div>
                        <h3 class="text-gray-800 text-lg lg:text-xl font-semibold">Free Shipping</h3>
                        <p class="text-sm text-gray-500">On all orders</p>
                    </div>
                </div>

                <!-- Discounts Online -->
                <div class="flex items-center space-x-4 lg:space-x-6">
                    <i class="fa-solid fa-percent text-amber-700 text-3xl"></i>
                    <div>
                        <h3 class="text-gray-800 text-lg lg:text-xl font-semibold">Discounts Online</h3>
                        <p class="text-sm text-gray-500">Weekend sales</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT US --}}
    <section class="py-5">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 lg:mx-24">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <!-- Bagian Gambar -->
                <div class="flex justify-center">
                    <img src="{{ asset('img/about.png') }}" alt="About Us Image" class="rounded-lg">
                </div>
                <!-- Bagian Teks -->
                <div class="space-y-3">
                    <!-- Judul "About Us" -->
                    <h2 class="text-lg font-semibold text-gray-600 uppercase tracking-wide">About Us</h2>

                    <!-- Slogan Besar -->
                    <h3 class="text-4xl font-extrabold text-gray-800 sm:text-5xl text-center lg:text-left">
                        Indulge in Blissful Chocolate Moments
                    </h3>

                    <!-- Deskripsi -->
                    <p class="text-sm text-gray-600 leading-relaxed py-3">
                        Welcome to our chocolate paradise! We specialize in crafting the most exquisite chocolate treats
                        to delight your senses.
                        Every piece is made with love and premium ingredients, bringing you a taste of joy in every
                        bite.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- BEST SELLER --}}
    <section class="py-5">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h1 class="text-4xl font-bold text-gray-800">Best Seller</h1>
                <a href="/shop" class="text-amber-700 hover:text-amber-800 hover:underline font-semibold flex items-center">
                    See More
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- #1 --}}
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg">
                    <a href="#">
                        <img src="{{ asset('img/best/Fudge Waffle.jpeg') }}" alt="Fudge Waffle"
                            class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Fudge Waffle</h2>
                        <p class="text-gray-600">Waffle</p>
                        <p class="text-gray-800 font-bold pb-2">Rp 50.000</p>
                    </div>
                </div>
                {{-- #2 --}}
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg">
                    <a href="#">  
                        <img src="{{ asset('img/best/Sweet Ruby.jpeg') }}" alt="Sweet Ruby"
                            class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Sweet Ruby</h2>
                        <p class="text-gray-600">Chocolate Bar</p>
                        <p class="text-gray-800 font-bold pb-2">Rp 25.000</p>
                    </div>
                </div>
                {{-- #3 --}}
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg">
                    <a href="#">  
                        <img src="{{ asset('img/best/Hot Chocolate.jpeg') }}" alt="Hot Chocolate"
                            class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Hot Chocolate</h2>
                        <p class="text-gray-600">Drink</p>
                        <p class="text-gray-800 font-bold pb-2">Rp 30.000</p>
                    </div>
                </div>
                {{-- #4 --}}
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg">
                    <a href="#"> 
                        <img src="{{ asset('img/best/Choco Nutty Caramel.jpeg') }}" alt="Choco Nutty Caramel"
                            class="w-full h-48 object-cover">
                    </a>
                    <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800 mb-2">Choco Nutty Caramel</h2>
                        <p class="text-gray-600">Cake</p>
                        <p class="text-gray-800 font-bold pb-2">Rp 80.000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- REVIEW --}}
    <section class="py-5">
        <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
            <h2 class="text-center text-4xl font-bold tracking-tight text-gray-800 sm:text-4xl">
                Reviews from our customers
            </h2>

            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
                {{-- review #1 --}}
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt="" src="{{ asset('img/review/Hendery.jpeg') }}"
                            class="size-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-amber-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Aheng</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        MUANTAAAAAP!! kata bang windah ini semuanya enak enak coy, kalian pada harus cobain! 
                    </p>
                </blockquote>

                {{-- review #2 --}}
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt="" src="{{ asset('img/review/eul.jpeg') }}"
                            class="size-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-amber-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Hannah</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        IT WAS SO DELICIOUSSS! I’m absolutely in love with the fudge waffle enak bangeeeet! the perfect balance of chocolate and waffle looove it! >ᴗ<
                    </p>
                </blockquote>

                {{-- review #3 --}}
                <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
                    <div class="flex items-center gap-4">
                        <img alt="" src="{{ asset('img/review/sunwoo.jpeg') }}"
                            class="size-14 rounded-full object-cover" />

                        <div>
                            <div class="flex justify-center gap-0.5 text-amber-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>

                            <p class="mt-0.5 text-lg font-medium text-gray-900">Rahmat</p>
                        </div>
                    </div>

                    <p class="mt-4 text-gray-700">
                        Brand ambassadornya aespa ya kali gak bintang 5
                    </p>
                </blockquote>
            </div>
        </div>
    </section>
@endsection
