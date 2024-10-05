<?php

namespace App\Http\Controllers;

use App\Models\daftar_pejabat_struktural;
use Illuminate\Http\Request;

class DaftarPejabatStrukturalController extends Controller
{
    public function index()
    {
        $daftarpejabatstruktural = daftar_pejabat_struktural::all();
        return view('pejabat_struktural.index', compact('daftarpejabatstruktural'));
    }

    public function create()
    {
        return view('pejabat_struktural.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'perangkat_daerah' => 'required',
            'satuan_unit_kerja' => 'required',
            'jabatan' => 'required',
            'golongan' => 'required',
        ]);

        daftar_pejabat_struktural::create($request->all());

        return redirect('/pejabat-struktural');
    }

    public function edit($id)
    {
        $daftarpejabatstruktural = daftar_pejabat_struktural::findOrFail($id);

        return view('pejabat_struktural.edit', compact('daftarpejabatstruktural'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'perangkat_daerah' => 'required',
            'satuan_unit_kerja' => 'required',
            'jabatan' => 'required',
            'golongan' => 'required',
        ]);

        $daftarpejabatstruktural = daftar_pejabat_struktural::findOrFail($id);
        $daftarpejabatstruktural->update($request->all());

        return redirect('/pejabat-struktural');
    }

    public function destroy(Request $request, $id)
    {
        $daftar_pejabat_struktural = daftar_pejabat_struktural::findOrFail($id);

        $daftar_pejabat_struktural->delete();

        return redirect('/pejabat-struktural')
            ->with('delete', 'Data berhasil dihapus');
    }
}
