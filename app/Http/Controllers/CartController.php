<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart($productId)
    {
        // Cek apakah sudah login apa belum
        if (!Auth::check()) {
            return redirect()->back()->with('error', 'Anda harus login terlebih dahulu untuk menambahkan produk ke keranjang.');
        }
        
        // Cek apakah produk ada
        $product = Product::find($productId);

        if ($product) {
            // Periksa apakah produk sudah ada di keranjang
            $cart = Cart::where('product_id', $productId)
                ->where('user_id', Auth::id()) // jika pengguna login
                ->first();

            if ($cart) {
                // Jika produk sudah ada, update quantity
                $cart->quantity += 1;
                $cart->save();
            } else {
                // Jika produk belum ada, tambah produk baru ke keranjang
                Cart::create([
                    'product_id' => $productId,
                    'quantity' => 1,
                    'user_id' => Auth::id(), // jika pengguna login
                ]);
            }
        }

        return redirect()->route('cart.show');
    }

    public function index()
    {
        // Ambil produk-produk yang ada di keranjang pengguna
        $carts = Cart::with('product')->where('user_id', Auth::id())->get();

        return view('cart.shopping', compact('carts'));
    }

    public function update(Request $request, $cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->quantity = $request->input('quantity');
        $cart->save();

        return redirect()->route('cart.show')->with('success', 'Cart updated');
    }

    public function delete($cartId)
    {
        $cart = Cart::findOrFail($cartId);
        $cart->delete();

        return redirect()->route('cart.show')->with('success', 'Item removed from cart');
    }

    public function showCart()
    {
        // Mengambil data cart untuk pengguna saat ini
        $carts = Cart::where('user_id', auth()->id())->get();

        // Menghitung harga asli (original price)
        $originalPrice = $carts->sum(function ($cart) {
            return $cart->product->harga * $cart->quantity;
        });

        //diskon 
        $discount = $originalPrice * 0.1;

        $tax = ($originalPrice - $discount) * 0.11;

        // Biaya pengiriman (misalnya tetap)
        $shippingCost = 1000;

        //total harga
        $totalPrice = ($originalPrice - $discount) + $shippingCost + $tax;


        return view('cart.shopping', compact('carts', 'originalPrice', 'discount', 'shippingCost', 'tax', 'totalPrice'));
    }

    public function checkout()
    {
        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('products.index');
    }
}
