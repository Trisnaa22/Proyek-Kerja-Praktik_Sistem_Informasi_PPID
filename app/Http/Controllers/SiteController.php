<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function beranda()
    {
        return view('site.beranda');
    }
    //profil

    public function visimisi()
    {
        return view('site.visi-misi');
    }

    public function organisasiperangkatdaerah()
    {
        return view('site.organisasi-perangkat-daerah');
    }

    public function strukturorganisasi()
    {
        return view('site.struktur-organisasi');
    }

    public function tugasdanfungsi()
    {
        return view('site.tugas-dan-fungsi');
    }

    public function profilpimpinan()
    {
        return view('site.profil-pimpinan');
    }

    public function daftarpejabatstruktural()
    {
        return view('site.daftar-pejabat-struktural');
    }
    public function satuanunitkerja()
    {
        return view('site.satuan-unit-kerja');
    }
    //profil ppid
    public function profilppid()
    {
        return view('site.profil-ppid');
    }
    public function visidanmisippid()
    {
        return view('site.visi-dan-misi-ppid');
    }
    public function strukturorganisasippid()
    {
        return view('site.struktur-organisasi-ppid');
    }
    public function tugasdanwewenangppid()
    {
        return view('site.tugas-dan-wewenang-ppid');
    }
    public function dasarhukumppid()
    {
        return view('site.dasar-hukum-ppid');
    }

    //informasi publik

    public function informasipublikppidprov()
    {
        return view('site.daftar-informasi-publik');
    }
    public function informasidikecualikan()
    {
        return view('site.informasi-dikecualikan');
    }
    public function informasiberkala()
    {
        return view('site.informasi-berkala');
    }
    public function informasisertamerta()
    {
        return view('site.informasi-serta-merta');
    }
    public function  informasisetiapsaat()
    {
        return view('site.informasi-setiap-saat');
    }
    //standart layanan
    public function prosedurpelayananinformasipublik()
    {
        return view('site.prosedur-pelayanan-informasi-publik');
    }
    public function prosedurpengelolaankeberataninformasipublik()
    {
        return view('site.prosedur-pengelolaan-keberatan-informasi-publik');
    }

    public function prosedurpermohonanpenyelesaiansengketainformasi()
    {
        return view('site.prosedur-permohonan-penyelesaian-sengketa-informasi');
    }

    public function prosedurpenanganansengketainformasi()
    {
        return view('site.prosedur-penanganan-sengketa-informasi');
    }

    public function sopppid()
    {
        return view('site.sop-ppid');
    }

    public function kanallayananinformasi()
    {
        return view('site.kanal-layanan-informasi');
    }

    public function waktudanbiayalayanan()
    {
        return view('site.waktu-dan-biaya-layanan');
    }

    public function maklumatinformasipublik()
    {
        return view('site.maklumat-informasi-publik');
    }
    //laporan pemprov
    public function laporankeuanganpemerintahdaerahlkpd()
    {
        return view('site.laporan-keuangan-pemerintah-daerah-lkpd');
    }
    public function laporankinerjainstansipemerintahlkip()
    {
        return view('site.laporan-kinerja-instansi-pemerintah-lkip');
    }
    public function laporanpenyelenggaraanpemerintahandaerahlppd()
    {
        return view('site.laporan-penyelenggaraan-pemerintah-daerah-lppd');
    }
    //laporan ppid
    public function laporanppid()
    {
        return view('site.laporan-ppid');
    }
}
