<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index() {
        return view('/shop', [
            'products' => DB::table('products')->paginate(8)
        ]);
    }

    public function show($slug) {
        return view('/product', [
            $product = DB::table('products')->where('slug', $slug)->first()
        ])->with('product', $product);
    }
}
