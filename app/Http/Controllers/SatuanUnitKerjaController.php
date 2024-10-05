<?php

namespace App\Http\Controllers;

use App\Models\satuan_unit_kerja;
use Illuminate\Http\Request;

class SatuanUnitKerjaController extends Controller
{
    public function index()
    {
        $satuanunitkerja = satuan_unit_kerja::all();
        return view('satuan_unit_kerja.index', compact('satuanunitkerja'));
    }

    public function create()
    {
        return view('satuan_unit_kerja.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perangkat_daerah' => 'required',
            'alamat_perangkat_daerah' => 'required',
            'telepon' => 'required',
        ]);

        satuan_unit_kerja::create($request->all());

        return redirect('/satuan-unit-kerja');
    }

    public function edit($id)
    {
        $satuanunitkerja = satuan_unit_kerja::findOrFail($id);

        return view('satuan_unit_kerja.edit', compact('satuanunitkerja'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_perangkat_daerah' => 'required',
            'alamat_perangkat_daerah' => 'required',
            'telepon' => 'required',
        ]);

        $satuanunitkerja = satuan_unit_kerja::findOrFail($id);
        $satuanunitkerja->update($request->all());

        return redirect('/satuan-unit-kerja');
    }

    public function destroy(Request $request, $id)
    {
        $satuanunitkerja = satuan_unit_kerja::findOrFail($id);

        $satuanunitkerja->delete();

        return redirect('/satuan-unit-kerja')
            ->with('delete', 'Data berhasil dihapus');
    }
}
