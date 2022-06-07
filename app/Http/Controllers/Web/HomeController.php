<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\Product;
class HomeController extends Controller
{
    public function viewHome()
    {
        $pro = Product::all();
        $data = compact('pro');
        return view('home')->with($data);
    }
}
