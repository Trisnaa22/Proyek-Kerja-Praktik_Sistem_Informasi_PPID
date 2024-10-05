<?php

use App\Http\Controllers\DaftarPejabatStrukturalController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SatuanUnitKerjaController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//home
Route::get('/', [SiteController::class, 'beranda']);
Route::get('/buletin-sumut', function () {
    return view('buletin-sumut');
});

//profil Pemprov
Route::get('/visi-misi', [SiteController::class, 'visimisi']);
Route::get('/organisasi-perangkat-daerah', [SiteController::class, 'organisasiperangkatdaerah']);
Route::get('/struktur-organisasi', [SiteController::class, 'strukturorganisasi']);
Route::get('/tugas-dan-fungsi', [SiteController::class, 'tugasdanfungsi']);
Route::get('/profil-pimpinan', [SiteController::class, 'profilpimpinan']);
Route::get('/daftar-pejabat-struktural', [SiteController::class, 'daftarpejabatstruktural']);
Route::get('/satuan-unit-kerja', [SiteController::class, 'satuanunitkerja']);

//ProFil PPID
Route::get('/profil-ppid', [SiteController::class, 'profilppid']);
Route::get('/visi-dan-misi-ppid', [SiteController::class, 'visidanmisippid']);
Route::get('/struktur-organisasi-ppid', [SiteController::class, 'strukturorganisasippid']);
Route::get('/tugas-dan-wewenang-ppid', [SiteController::class, 'tugasdanwewenangppid']);
Route::get('/dasar-hukum-ppid', [SiteController::class, 'dasarhukumppid']);

//Informasi Publik 
Route::get('/daftar-informasi-publik', [SiteController::class, 'informasipublikppidprov']);
Route::get('/daftar-informasi-dikecualikan', [SiteController::class, 'informasidikecualikan']);
Route::get('/informasi-berkala', [SiteController::class, 'informasiberkala']);
Route::get('/informasi-serta-merta', [SiteController::class, 'informasisertamerta']);
Route::get('/informasi-setiap-saat', [SiteController::class, 'informasisetiapsaat']);

// Standar Layanan 
Route::get('/prosedur-pelayanan-informasi-publik', [SiteController::class, 'prosedurpelayananinformasipublik']);
Route::get('/prosedur-pengelolaan-keberatan-informasi-publik', [SiteController::class, 'prosedurpengelolaankeberataninformasipublik']);
Route::get('/prosedur-permohonan-penyelesaian-sengketa-informasi', [SiteController::class, 'prosedurpermohonanpenyelesaiansengketainformasi']);
Route::get('/prosedur-penanganan-sengketa-informasi', [SiteController::class, 'prosedurpenanganansengketainformasi']);
Route::get('/sop-ppid', [SiteController::class, 'sopppid']);
Route::get('/kanal-layanan-informasi', [SiteController::class, 'kanallayananinformasi']);
Route::get('/waktu-biaya-layanan', [SiteController::class, 'waktudanbiayalayanan']);
Route::get('/maklumat-informasi-publik', [SiteController::class, 'maklumatinformasipublik']);

// Laporan Penprov SUMUT 
Route::get('/laporan-keuangan-pemerintah-daerah-lkpd', [SiteController::class, 'laporankeuanganpemerintahdaerahlkpd']);
Route::get('/laporan-kinerja-instansi-pemerintah-lkip', [SiteController::class, 'laporankinerjainstansipemerintahlkip']);
Route::get('/laporan-penyelenggaraan-pemerintahan-daerah-lppd', [SiteController::class, 'laporanpenyelenggaraanpemerintahandaerahlppd']);


// Laporan PPID 
Route::get('/laporan-ppid', [SiteController::class, 'laporanppid']);

// Kontak

Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kontak', [KontakController::class, 'store']);
//


//Route::get('/pejabat-struktural', [DaftarPejabatStrukturalController::class, 'index']);
//Route::get('/tambahdata', [DaftarPejabatStrukturalController::class, 'create']);
//Route::post('/tambahdata', [DaftarPejabatStrukturalController::class, 'store']);
//Route::get('/editdata/{id}', [DaftarPejabatStrukturalController::class, 'edit']);
//Route::put('/editdata/{id}', [DaftarPejabatStrukturalController::class, 'update']);
//Route::delete('/hapusdata/{id}', [DaftarPejabatStrukturalController::class, 'destroy']);



//Route::get('/satuan-unit-kerja', [SatuanUnitKerjaController::class, 'index']);
//Route::get('/tambahdataunitkerja', [SatuanUnitKerjaController::class, 'create']);
//Route::post('/tambahdataunitkerja', [SatuanUnitKerjaController::class, 'store']);
//Route::get('/editdataunitkerja/{id}', [SatuanUnitKerjaController::class, 'edit']);
//Route::put('/editdataunitkerja/{id}', [SatuanUnitKerjaController::class, 'update']);
//Route::delete('/hapusdataunitkerja/{id}', [SatuanUnitKerjaController::class, 'destroy']);
