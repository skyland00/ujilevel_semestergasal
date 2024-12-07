<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.shop', compact('products'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kategori' => 'required',
            'harga' => 'required|integer',
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imageName = time() . '.' . $request->img->getClientOriginalExtension();
        $request->img->move(public_path('img/products'), $imageName);


        Product::create([
            'name' => $request->name,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'img' => $imageName,
        ]);

        // dd($request->all());
        return redirect()->route('products.index');
    }

    public function adminIndex()
    {
        $products = Product::all();
        return view('products.admin', compact('products'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $imagePath = public_path('img/products' . $product->img);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $product->delete();
        return redirect()->route('products.admin.index')->with('success', 'Product telah dihapus');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'kategori' => 'required',
            'harga' => 'required|integer',
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('img')) {
            $imagePath = public_path('img/products/' . $product->img);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }

            $imageName = time() . '.' . $request->img->getClientOriginalExtension();
            $request->img->move(public_path('img/products'), $imageName);
            $product->img = $imageName;
        }

        $product->name = $request->name;
        $product->kategori = $request->kategori;
        $product->harga = $request->harga;
        $product->save();

        return redirect()->route('products.admin.index');
    }
}
