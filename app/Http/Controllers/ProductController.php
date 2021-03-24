<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MongoDB\Driver\Session;

class ProductController extends Controller
{
    public function index() {
        return view('shop.index', [
            'products' => DB::table('products')->paginate(8)
        ]);
    }
}
