<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $productTypes = ProductType::all();
        return view('portal.product_types.index', compact('productTypes'));
    }

    public function create()
    {
        return view('portal.product_types.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create the new product type instance with status set to 1
        $productType = ProductType::create([
            'name' => $request->name,
            'status' => 1, // Set status to 1
        ]);

        // Redirect to a relevant page (e.g., show the newly created product type)
        return redirect()->route('portal.product_types.index')->with('success', 'Product type created successfully.');
    }

    public function edit(ProductType $productType)
    {
        return view('portal.product_types.edit', compact('productType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $product_type = ProductType::findOrFail($id);
        $product_type->update([
            'name' => $request->input('name'),
            'status' => 1, // Setting status to 1 automatically
        ]);

        return redirect()->route('portal.product_types.index')->with('success', 'Product Type updated successfully.');
    }

    public function show($id)
    {
        $productType = ProductType::findOrFail($id);
        return response()->json($productType);
    }

    public function destroy($id)
    {
        ProductType::destroy($id);
        return response()->json(['message' => 'ProductType deleted']);
    }

    //===============Custom Functions===================

    //*******************web Menu***********************
    public function webProducts(Product $products)
    {
    $products = Product::all(); // Example query, replace with your actual query
    if ($products->isEmpty()) {
        // Handle case when no products are available
        // For example, return an empty view or display a message
        return view('website.products');
    }
    return view('website.products', ['products' => $products]);
    }

    //******************Admin Menu**********************
    public function adminProducts(ProductType $productType)
    {
        //$products = $unit->products;

        //$products = Product::whereUnitId($unit->id)->get();

        return view('portal.product_types.index', ['productType' => $productType]);
    }

}
