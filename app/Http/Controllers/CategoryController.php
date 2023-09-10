<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('categories.index')->with('categories', $category);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required |unique:categories,name',
        ]);

        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->save();

        return redirect('category')->with('flash_message', 'Category Created!');
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
        $category = Category::find($id);
        return view('categories.edit')->with('editCategory', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        $request->validate([
            'name' => 'required |unique:categories,name,' . $category->id,
        ]);

        $input = $request->all();
        $category->update($input);
        return redirect('category')->with('flash_message', 'Category Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect('category')->with('flash_message', 'category deleted!');
    }

    // category add for api
    public function apiStore(Request $request)
    {
        $request->validate([
            'name' => 'required |unique:categories,name',
        ]);

        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->save();

        return $newCategory;
    }
}
