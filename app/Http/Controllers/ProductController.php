<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = DB::table('products')
            ->leftJoin('categories', 'categories.id', '=', 'products.category_id')
            ->select('products.*', 'categories.name as category_name')
            ->get();
        return view('products.index')->with('products', $product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $catgories = Category::all();
        return view('products.create', compact('catgories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required |unique:products,name',
            'price' => 'required',
            'category' => 'required',
        ]);

        $newProduct = new Product();
        $newProduct->name = $request->name;
        $newProduct->price = $request->price;
        $newProduct->category_id = $request->category;
        $newProduct->save();


        return redirect('product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $catgories = Category::all();
        return view('products.edit')->with('editProduct', $product)->with('catgories', $catgories);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $product = Product::find($id);

        $request->validate([
            'name' => 'required |unique:products,name,' . $product->id,
            'price' => 'required',
            'category' => 'required',
        ]);

        $product->category_id = $request->category;
        $product->name = $request->name;
        $product->price = $request->price;
        // $input = $request->all();
        $product->update();
        return redirect('product')->with('flash_message', 'Product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'Product deleted!');
    }
}
