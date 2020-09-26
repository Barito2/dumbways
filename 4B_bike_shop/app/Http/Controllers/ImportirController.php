<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Importir;

class ImportirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $importirs = Importir::all();
        return view('importir.index', compact('importirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('importir.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Importir::create([
            'name' => $request->name,
            'address' => $request->address,
            'tlp' => $request->telp,
        ]);
        return redirect('/importir')->with('success', 'success add importir');
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
        $importir = Importir::find($id);
        return view('importir.edit', compact('importir'));
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
        Importir::where('id', $id)->update([
            'name' => $request->name,
            'address' => $request->address,
            'tlp' => $request->telp,
        ]);

        return redirect('/importir')->with('success', 'success update importir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Importir::destroy($id);

        return redirect('/importir')->with('success', 'success delete importir');
    }
}
