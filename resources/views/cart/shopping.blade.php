@extends('layout.main')

@section('section')
    <section class="bg-white py-8 antialiased dark:bg-gray-900 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white sm:text-2xl">Shopping Cart</h2>

            <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
                <!-- Product List -->
                <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
                    @if ($carts->isEmpty())
                        <div class="text-center py-8">
                            <h3 class="text-lg font-medium text-gray-600 dark:text-gray-400">Keranjang belanja kosong.</h3>
                            <a href="{{ route('products.index') }}"
                                class="inline-block mt-4 px-6 py-2 text-sm font-medium text-white bg-amber-700 rounded-lg hover:bg-amber-800">
                                Belanja Sekarang!
                            </a>
                        </div>
                    @else
                        <div class="space-y-6">
                            @foreach ($carts as $cart)
                                <div
                                    class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
                                    <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">
                                        <a href="#" class="shrink-0 md:order-1">
                                            <img class="h-20 w-20 object-cover dark:hidden rounded-md"
                                                src="{{ asset('img/products/' . $cart->product->img) }}"
                                                alt="{{ $cart->product->name }}" />
                                        </a>

                                        <label for="counter-{{ $cart->id }}" class="sr-only">Choose quantity:</label>
                                        <div class="flex items-center justify-between md:order-3 md:justify-end">
                                            <!-- Decrement and Increment Buttons -->
                                            <div class="flex items-center">
                                                <form action="{{ route('cart.update', $cart->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="quantity" value="{{ $cart->quantity - 1 }}">
                                                    <button type="submit"
                                                        class="inline-flex h-5 w-5 items-center justify-center rounded-md border bg-gray-100 hover:bg-gray-200">
                                                        <svg class="h-2.5 w-2.5" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 18 2">
                                                            <path stroke="currentColor" stroke-width="2" d="M1 1h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                                <input type="text" id="counter-{{ $cart->id }}"
                                                    value="{{ $cart->quantity }}"
                                                    class="w-10 text-center border-0 bg-transparent text-sm font-medium"
                                                    readonly />
                                                <form action="{{ route('cart.update', $cart->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="quantity" value="{{ $cart->quantity + 1 }}">
                                                    <button type="submit"
                                                        class="inline-flex h-5 w-5 items-center justify-center rounded-md border bg-gray-100 hover:bg-gray-200">
                                                        <svg class="h-2.5 w-2.5" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 18 18">
                                                            <path stroke="currentColor" stroke-width="2"
                                                                d="M9 1v16M1 9h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                            <div class="text-end md:order-4 md:w-32">
                                                <p class="text-base font-bold">Rp
                                                    {{ number_format($cart->product->harga * $cart->quantity, 0, ',', '.') }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="w-full min-w-0 flex-1 space-y-2 md:order-2 md:max-w-md">
                                            <a href="#" class="text-base font-medium">{{ $cart->product->name }}
                                                <p class="text-gray-600 text-xs">{{ $cart->product->kategori }}</p>
                                            </a>
                                            <div class="flex items-center gap-4">
                                                <form action="{{ route('cart.delete', $cart->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="inline-flex items-center text-sm font-medium text-red-400 hover:text-red-600">
                                                        <i class="fa-solid fa-xmark pr-2"></i>
                                                        Remove
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>

                <!-- Order Summary -->
                @if (!$carts->isEmpty())
                    <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
                        <div
                            class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                            <p class="text-xl font-semibold">Pemesanan</p>
                            <div class="space-y-4">
                                <div class="space-y-2">
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal">Harga</dt>
                                        <dd class="text-base font-medium">Rp
                                            {{ number_format($originalPrice, 0, ',', '.') }}</dd>
                                    </dl>
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal">Diskon</dt>
                                        <dd class="text-base font-medium text-green-600">-Rp
                                            {{ number_format($discount, 0, ',', '.') }}</dd>
                                    </dl>
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Pajak</dt>
                                        <dd class="text-base font-medium text-gray-900 dark:text-white">Rp
                                            {{ number_format($tax, 0, ',', '.') }}</dd>
                                    </dl>
                                    <dl class="flex items-center justify-between gap-4">
                                        <dt class="text-base font-normal">Biaya Pengiriman</dt>
                                        <dd class="text-base font-medium">Rp
                                            {{ number_format($shippingCost, 0, ',', '.') }}</dd>
                                    </dl>
                                </div>
                                <dl class="flex items-center justify-between gap-4 border-t pt-2">
                                    <dt class="text-base font-bold">Total</dt>
                                    <dd class="text-base font-bold">Rp {{ number_format($totalPrice, 0, ',', '.') }}</dd>
                                </dl>
                            </div>
                            <a href="#" id="checkout-btn"
                                class="flex w-full items-center justify-center rounded-lg bg-amber-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-amber-800">Checkout</a>
                            <div class="flex items-center justify-center gap-2">
                                <span class="text-sm font-normal">or</span>
                                <a href="{{ route('products.index') }}"
                                    class="text-sm font-medium text-amber-700 hover:text-amber-800 hover:underline">Continue
                                    Shopping</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <script>
                document.getElementById('checkout-btn').addEventListener('click', function(e) {
                    e.preventDefault();
            
                    Swal.fire({
                        title: 'Terima Kasih!',
                        text: 'Pesanan Anda berhasil diproses.',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "{{ route('cart.checkout') }}";
                        }
                    });
                });
            </script>
            
        </div>
    </section>
@endsection

