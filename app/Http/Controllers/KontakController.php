<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'judul_pesan' => 'required',
            'isi_pesan' => 'required',
        ]);

        Kontak::create($request->all());

        return back()->with('success',);
    }
}
