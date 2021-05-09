<?php


namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        return view('cart.index');
    }

    public function store(Product $product) {
        Cart::add($product->id, $product->id, 1, $product->price)->associate('App\Models\Product');

        return redirect()->route('cart.index')->with('success_message', 'Item was added to shopping cart');
    }

}
