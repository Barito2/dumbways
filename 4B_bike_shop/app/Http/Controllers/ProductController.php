<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Importir;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $importir = Importir::all();
        return view('product.add', compact('importir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'name' => $request->product,
            'qty' => $request->qty,
            'price' => $request->price,
            'importir_id' => $request->importir
        ]);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $product->foto = $request->file('foto')->getClientOriginalName();
            $product->save();
        }

        return redirect('/product')->with('success', 'success update product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $importir = Importir::all();

        return view('product.edit', compact(['product', 'importir']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::where('id', $id)->update([
            'name' => $request->product,
            'qty' => $request->qty,
            'price' => $request->price,
            'importir_id' => $request->importir
        ]);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
            $product->foto = $request->file('foto')->getClientOriginalName();
        }

        return redirect('/product')->with('success', 'success update product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect('/product')->with('success', 'success delete product');
    }
}
