<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Orders::all();
        //afisare produse sterse
        //$Orders = Orders::onlyTrashed()->get();
        // dd($Orders);
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Orders::create($request->all());
        return redirect()->route('orders.index')
            ->with('succes', 'comanda a fost creata cu succes!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Orders = Orders::findOrFail($id);
        return view('orders.show', compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
       
       $order = Orders::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $order = Orders::findOrFail($id);
        $order->update($request->all());
        return redirect()->route('orders.index')
            ->with('succes', 'comanda a fost modificata cu succes!');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        $orders->delete();
        return redirect()->route('orders.index')
            ->with('succes', 'comanda a fost stearsa cu succes!');
    }
}
