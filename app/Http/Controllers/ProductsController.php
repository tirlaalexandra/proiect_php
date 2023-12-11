<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());
        Products::create($request->all());
        return redirect()->route('products.index')
->with('succes','produsul ac fost creat cu succes!');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $product = Products::findOrFail($id);
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Products $product)
    {
        $product->update($request->all());
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Products $product)
    {
        $product -> update($request->all());
        return redirect()->route('products.index')
            ->with('succes', 'produsul ac fost modificat cu succes!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
