@extends('layout.main')

@section('section')
    <section class="bg-gray-100 py-10">
        <!-- Filter Section -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl space-y-4">
            <div class="flex flex-wrap items-center justify-between gap-3">
                <div class="flex flex-wrap items-center gap-3">
                    <button class="bg-white py-2.5 px-6 rounded-3xl text-xs shadow">All items</button>
                    <button class="bg-white py-2.5 px-6 rounded-3xl text-xs shadow">Drink</button>
                    <button class="bg-white py-2.5 px-6 rounded-3xl text-xs shadow">Cake</button>
                    <button class="bg-white py-2.5 px-6 rounded-3xl text-xs shadow">Waffle</button>
                    <button class="bg-white py-2.5 px-6 rounded-3xl text-xs shadow">Snack</button>
                    <button class="bg-white py-2.5 px-6 rounded-3xl text-xs shadow">Chocolate Bar</button>
                </div>
                <!-- Search Input -->
                <div class="relative w-full sm:w-96">
                    <input type="text" placeholder="Search product"
                        class="text-sm pl-10 py-2.5 rounded-3xl focus:outline-none focus:ring-2 focus:ring-amber-500 w-full shadow" />
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-7xl grid grid-cols-1 lg:grid-cols-4 gap-6 mt-8">
            <aside class="bg-white rounded-3xl  px-5 py-6 shadow-lg w-4/5 p-6">
                <h2 class="text-lg font-semibold mb-4">Categories</h2>
                <ul class="space-y-4">
                    <li><a href="#" class="text-gray-700 hover:text-brown-600">All Products</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-brown-600">Dark Chocolate</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-brown-600">Milk Chocolate</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-brown-600">White Chocolate</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-brown-600">Chocolate Truffles</a></li>
                    <li><a href="#" class="text-gray-700 hover:text-brown-600">Gift Boxes</a></li>
                </ul>
            </aside>

            <!-- Content Area -->
            <div class="col-span-1 lg:col-span-3">
                <!-- Carousel -->
                <div class="relative rounded-3xl overflow-hidden shadow-lg">
                    <div id="default-carousel" class="swiper-container">
                        <div class="swiper-wrapper">
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
                                <img src="{{ asset('img/aespa jooy.png') }}" class="object-cover w-full h-full"
                                    alt="Slide 3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- biar pas -->
            <div></div>

            <!-- produck -->
            <div class="col-span-1 lg:col-span-3">
                <div class="bg-white rounded-3xl mx-auto max-w-screen-xl px-6 py-4 sm:px-8 lg:px-12 shadow-lg">

                    <!-- Filter dan Sorting -->
                    <div class="mt-6 flex items-center justify-between">
                        <!-- View Mode Buttons -->
                        <div class="flex rounded border border-gray-200 overflow-hidden">
                            <button
                                class="inline-flex w-10 h-10 items-center justify-center border-r text-gray-600 transition hover:bg-gray-50 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
                                </svg>
                            </button>

                            <button
                                class="inline-flex w-10 h-10 items-center justify-center text-gray-600 transition hover:bg-gray-50 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                                </svg>
                            </button>
                        </div>

                        <!-- Sorting Dropdown -->
                        <div>
                            <label for="SortBy" class="sr-only">Sort By</label>
                            <select id="SortBy"
                                class="h-10 rounded-md border-gray-300 text-sm focus:ring focus:ring-amber-500 focus:outline-none">
                                <option>Sort By</option>
                                <option value="Title, DESC">Title, DESC</option>
                                <option value="Title, ASC">Title, ASC</option>
                                <option value="Price, DESC">Price, DESC</option>
                                <option value="Price, ASC">Price, ASC</option>
                            </select>
                        </div>
                    </div>

                    <!-- Produk -->
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
                        @foreach ($products as $product)
                            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                                <img src="{{ asset('img/products/' . $product->img) }}" alt="{{ $product->name }}"
                                    class="object-cover w-full h-40">
                                <div class="p-4">
                                    <h3 class="text-base font-semibold truncate">
                                        <a href="#" class="hover:underline">{{ $product->name }}</a>
                                    </h3>
                                    <p class="text-xs text-gray-500">{{ $product->kategori }}</p>
                                    <div class="flex items-center justify-between">
                                        <p class="text-sm font-semibold text-gray-800">Rp
                                            {{ number_format($product->harga, 0, ',', '.') }}</p>

                                        <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="text-white bg-amber-700 hover:bg-amber-800 p-2 rounded-lg text-sm flex items-center">
                                                <i class="fas fa-shopping-cart"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- sweetAlert2 --}}
                    @if (session('error'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: '{{ session('error') }}',
                                confirmButtonText: 'OK'
                            });
                        </script>
                    @endif

                    @if (session('success'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: '{{ session('success') }}',
                                confirmButtonText: 'OK'
                            });
                        </script>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
