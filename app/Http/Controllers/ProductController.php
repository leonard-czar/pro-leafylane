<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view('admin.all-products')->with('products', $products);
    }

    public function update()
    {
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'desc' => 'required',

        ], [

            'desc.required' => 'please enter a description',
            'price.required' => 'please set a price',
            'price.numeric' => 'the price should be a number',
            'name.required' => 'please enter product name'


        ], [
            'desc' => 'description'

        ]);

        $path = $request->file('pro_image')->store('ProductImages');


        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('desc');
        $product->price = $request->input('price');
        $product->category_id = $request->input('categoryId');
        // if ($request->hasFile('image_')) {
        // $path = $request->file('pro_image')->store('Productimages');
        $product->image = $path;
        $product->save();
        // return redirect('admin.all-product')->with('success', 'Product was added successfully!');
    }


    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->action([ProductController::class, 'index']);
    }
}
