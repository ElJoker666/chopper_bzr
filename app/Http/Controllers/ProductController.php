<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();

        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'price' => 'required|numeric',
            'shipping_cost' => 'required|numeric',
            'description' => 'required|string|max:255',
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
                ];
        
                $request->validate($rules);

        $product = Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');

            
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        $rules = [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'price' => 'required|numeric',
            'shipping_cost' => 'required|numeric',
            'description' => 'required|string|max:255',
            'category_id' => 'required|numeric',
            'brand_id' => 'required|numeric',
                ];
        
                $request->validate($rules);
        
                $product->update($request->all());
        
                return redirect()->route('products.index')
                    ->with('success', 'Product created successfully.');
        request()->validate(Product::$rules);
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}

