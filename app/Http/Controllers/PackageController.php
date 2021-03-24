<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    public function index() {
        return view('/packages', [
            'packages' => DB::table('packages')->paginate(6)
        ]);
    }

    public function show($slug) {
        return view('/packages', [
            $package = DB::table('packages')->where('slug', $slug)->first()
        ])->with('package', $package);
    }
}
