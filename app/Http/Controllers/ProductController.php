<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Display all products

    public function index(Request $request){

    $search = $request->input('search');
    $sortBy = $request->input('sort_by', 'name');  // Default sort by 'name'
    $direction = $request->input('direction', 'asc');  // Default order 'asc'



    $products = Product::when($search, function ($query) use ($search) {

        
            return $query->where('name', 'like', '%' . $search . '%')
                         ->orWhere('price', 'like', '%' . $search . '%');

        })->orderBy($sortBy, $direction)  // Sorting logic

        ->paginate(6);

        
    return view('products.index', compact('products'));
        
        // $products = Product::paginate(6);
        // return view('products.index', compact('products'));
    }

    // Show form to create a new product
    public function create()
    {
        return view('products.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|unique:products',
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    // Display a specific product
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    // Show form to edit an existing product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    // Update an existing product
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
