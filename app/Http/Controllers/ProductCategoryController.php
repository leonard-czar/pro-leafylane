<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    //
    public function index()
    {
        $category = ProductCategory::all();
        return view('admin.all-category')->with('category', $category);
    }

    public function get_categories()
    {
        $category = ProductCategory::all();
        return view('admin.add-productt')->with('product_categories', $category);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|alpha'
        ], [
            'category.alpha' => 'category must be alphabetic'

        ]);
        $category = ProductCategory::find($id);
        $category->category = $request->input('category');

        $category->save();
        return redirect('allcat')->with('success', 'Category was updated successfully!');
    }

    public function create(Request $request)
    {
        $request->validate([
            'category' => 'required|alpha'

        ], [
            'category.alpha' => 'category must be alphabetic'

        ]);

        $cate = new ProductCategory();
        $cate->category = $request->input('category');
        $cate->save();
        return redirect('allcat')->with('success', 'Category was added successfully!');
    }


    public function delete($id)
    {
        $category = ProductCategory::find($id);
        $category->delete();
        return redirect()->action([ProductCategoryController::class, 'index']);
    }

    public function store($id)
    {
        $category = ProductCategory::find($id);
        return view('admin.update-category', [
            'category' => $category
        ]);
    }
}
