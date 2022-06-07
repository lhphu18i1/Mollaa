<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
// use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function viewCart(){
        $pro = Product::all();
        $data = compact('pro');
        return view('web.cart')->with($data);;
    }
    public function addCart($id){
        $pro = Product::find($id);
        $cart = session()->get('cart');
        $cart[$id] = [                     //[$user_id]
            "image" => $pro->image,
            "name" => $pro->name,
            "price" => $pro->price,
            "quantity" => 1
        ];

        session()->put('cart', $cart);
            return redirect()->back();
    }
    public function updateCart(Request $request, $id){
        if($request->id && $request->quantity)
        {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity'] = $request->quantity;
            session()->put('cart',$cart);
            // session()->flash('success','Cart updated successfully');
        }
    }
    public function removeCart($id){
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back();
    }
}
