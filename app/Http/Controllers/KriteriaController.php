<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtKriteria = Kriteria::all();
        return view('kriteria.Data-kriteria',compact('dtKriteria'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.Create-kriteria');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Kriteria::create([
            'id' => $request->input('id'),
            'jeniskriteria' => $request->input('jeniskriteria'),
            'bobot' => $request->input('bobot'),
        ]);
        return redirect('data-kriteria')->with('toast_success', 'Data Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $krit = Kriteria::findorfail($id);
        return view('kriteria.Edit-kriteria',compact('krit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $krit = Kriteria::findorfail($id);
        $krit->update($request->all());

        return redirect('data-kriteria')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $krit = Kriteria::findorfail($id);
        $krit->delete();
        return back()->with('toast_success', 'Data Berhasil Dihapus!');
    }
}
