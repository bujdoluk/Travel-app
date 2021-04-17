<?php


namespace App\Http\Controllers;


use App\Models\Product;
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

    public function count() {
        return view('/dashboard', [
            $count = DB::table('products')->count('id'),
            $user = DB::table('users')->count('id'),
        ])->with('count',$count)->with('user',$user);

    }
}
