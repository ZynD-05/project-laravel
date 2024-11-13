<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datakoloni;

class DatakoloniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataKoloni = Datakoloni::orderBy('created_at', 'DESC')->get();
        return view('dataKoloni.index', compact('dataKoloni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dataKoloni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Datakoloni::created($request->all());
        return redirect()->route('dataKoloni')->with('sukses', 'Data berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataKoloni = Datakoloni::findOrFail($id);
        return view('dataKoloni.show', compact('dataKoloni'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dataKoloni = Datakoloni::findOrFail($id);
        return view('dataKoloni.edit', compact('dataKoloni'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataKoloni = Datakoloni::findOrFail($id);
        $dataKoloni->update($request->all());
        return redirect()->route('dataKoloni')->with('Sukses', 'Data berhasil Di perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataKoloni = Datakoloni::findOrFail($id);
        $dataKoloni->delete();
        return redirect()->route('dataKoloni')->with('Sukses', 'Data berhasil dihapus');
    }
}
