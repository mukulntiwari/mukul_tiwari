<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function store(Request $request, $id)
    {
        $cart = session()->get('cart', []);

        $cart[$id] = [
            "name" => $request->name,
            "price" => $request->price,
            "image" => $request->image,
            "quantity" => ($cart[$id]['quantity'] ?? 0) + 1,
        ];

        session()->put('cart', $cart);

        return redirect()->route('cart.index')->with('success', 'Product added to cart!');
    }

    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }
    public function update(Request $request, $id)
{
    $cart = session()->get('cart', []);

    if (isset($cart[$id])) {
        $cart[$id]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Cart updated successfully.');
    }

    return redirect()->back()->with('error', 'Product not found in cart.');
}

}
