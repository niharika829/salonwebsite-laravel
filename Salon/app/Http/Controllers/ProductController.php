<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->first();
        return view('confirmation',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('confirmation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
         'name'=>'required|max:120',
         'email'=>"required|email",
       'mobile'=>'regex:/^[0-9]{3}[0-9]{3}[0-9]{4}$/',
        'date'=>"required|date"

      ]); Product::create($request->all());

            return redirect()->route('products.index')->with('successs','Booking confirmed');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('confirm',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     edit     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request, [
        'name'=>'required|max:120',
        'email'=>"required|email",
        'mobile'=>'regex:/^[0-9]{3}[0-9]{3}[0-9]{4}$/',
        'date'=>"required|date"
    ]);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success','Booking is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return view('index1');

    }
}
