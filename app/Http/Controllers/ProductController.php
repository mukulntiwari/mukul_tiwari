<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function addToCart($id)
{
    $product = Product::findOrFail($id);
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity']++;
    } else {
        $cart[$id] = [
            "name" => $product->name,
            "price" => $product->price,
            "quantity" => 1,
            "image" => $product->image,
        ];
    }

    session()->put('cart', $cart);
    return redirect()->back()->with('success', 'Product added to cart!');
}

public function viewCart()
{
    return view('cart');
}

public function removeFromCart($id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart);
    }

    return redirect()->back()->with('success', 'Product removed from cart!');
}
public function show($id)
{
    $product = Product::findOrFail($id);
    return view('products.show', compact('product'));
}


}