<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\ProductType;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index()
{
    $categories = Category::with('productType')->get(); // Eager load productType
    return view('portal.categories.index', ['categories' =>$categories]);
}


    public function create()
{
    $product_types = ProductType::all();
    return view('portal.categories.create', compact('product_types'));
}

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'product_type_id' => 'required|integer|exists:product_types,id',
    ]);

    Category::create([
        'name' => $request->input('name'),
        'product_type_id' => $request->input('product_type_id'),
        'status' => 1, // Setting status to 1 automatically
    ]);

    return redirect()->route('portal.categories.index')->with('success', 'Category created successfully.');
}



    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('portal.categories.create');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return response()->json($category);
    }


    public function edit($id)
{
    $category = Category::findOrFail($id);
    $product_types = ProductType::all();
    return view('portal.categories.edit', compact('category', 'product_types'));
}

    public function destroy($id)
    {
        Category::destroy($id);
        return response()->json(['message' => 'Category deleted']);
    }



    public function adminCategories(Category $category)
    {
        //$products = $unit->products;

        //$products = Product::whereUnitId($unit->id)->get();
        $category = Category::with('productType')->get();

        return view('portal.categories.index', ['category' => $category]);
    }

    //public function adminCategories()
    //{
    //$categories = Category::all(); // Retrieve all categories
    //return view('portal.categories.index', ['categories' => $categories]);
    //}


}
