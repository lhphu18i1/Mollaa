<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;


class CategoryController extends Controller
{
    public function viewCategory(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $cat = Category::where('name', 'LIKE', "%$search%")->orWhere('brand', 'LIKE', "%$search%")->paginate();
        } else {
            $cat = Category::paginate(2);
        }
        $data = compact('cat', 'search');
        return view('admin.category.index')->with($data);
    }
    public function showAddCategory()
    {
        return view('admin.category.add');
    }
    public function postCategory(CategoryRequest $request){
        {
            $newCat = new Category();
            $newCat->name = $request->name;
            $newCat->brand = $request->brand;
            $newCat->save();

            return redirect()->route('get.view.category');
        }
    }
    public function showEditCategory($id)
    {
        $cat = Category::find($id);
        return view('admin.category.edit', compact('cat'));
    }
    public function editCategory(CategoryRequest $request, $id)
    {
        $cat = Category::find($id);
        $cat->name = $request->name;
        $cat->brand = $request->brand;
        $cat->update();

        return redirect()->route('get.view.category');
    }
    public function deleteCategory($id)
    {
        $cat = Category::find($id);
        $cat->delete();

        return redirect()->route('get.view.category');
    }
}
