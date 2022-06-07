<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function viewProduct(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $pro = Product::where('name', 'LIKE', "%$search%")->orWhere('pro_cat', 'LIKE', "%$search%")->paginate();
        } else {
            $pro = Product::paginate(4);
        }
        $data = compact('pro', 'search');
        return view('admin.product.index')->with($data);
    }
    public function showAddProduct()
    {
        return view('admin.product.add');
    }
    public function postProduct(ProductRequest $request){
        {
            $newPro = new Product();
            $newPro->name = $request->name;
            $newPro->price = $request->price;
            $newPro->size = $request->size;
            $newPro->color = $request->color;
            $newPro->quantity = $request->quantity;
            $newPro->pro_cat = $request->pro_cat;
            $newPro->info = $request->info;
            // Upload image
            if ($request->has('image')) {
                $get_image = $request->image;
                $path = 'frontend/Images/';
                $name_image = $get_image->getClientOriginalName();
                $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
                $get_image->move($path, $new_image);
            }
            $newPro->image = $new_image;
            $newPro->save();
            return redirect()->route('get.view.product');
        }
    }
    public function showEditProduct($id)
    {
        $pro = Product::find($id);
        return view('admin.product.edit', compact('pro'));
    }
    public function editProduct(ProductRequest $request, $id)
    {
        $pro = Product::find($id);
        $pro->name = $request->name;
        $pro->price = $request->price;
        $pro->size = $request->size;
        $pro->color = $request->color;
        $pro->quantity = $request->quantity;
        $pro->pro_cat = $request->pro_cat;
        $pro->info = $request->info;
        // Upload image
        if ($request->has('image')) {
            $destination = 'frontend/Images/' . $pro->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $get_image = $request->image;
            $path = 'frontend/Images/';
            $name_image = $get_image->getClientOriginalName();
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            $pro->image = $new_image;
        }
        $pro->update();
        return redirect()->route('get.view.product');
    }
    public function deleteProduct($id)
    {
        $pro = Product::find($id);
        $destination = 'frontend/Images/' . $pro->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $pro->delete();

        return redirect()->route('get.view.product');
    }
}
