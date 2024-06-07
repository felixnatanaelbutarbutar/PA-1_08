<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataJemaatController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\JadwalibadahController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\LingkunganController;
use App\Http\Controllers\KepalaKeluargaController;
use App\Http\Controllers\AnggotaKeluargaController;
use App\Http\Controllers\UserController;






Route::get('/', function () {
    return view('user.dashboard');
});

Route::get('/', [DashboardController::class, 'index'])->name('user.dashboard');

// Route untuk menampilkan halaman login
Route::get('/login', [AuthController::class, 'login'])->name('login');
// Route untuk melakukan proses login
Route::post('/login', [AuthController::class, 'authenticate']);
// Route untuk logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route untuk halaman index
Route::middleware(['auth'])->group(function () {
    Route::get('/index', [AuthController::class, 'index'])->name('index');
});

//REGISTER
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'process']);   


//DATA JEMAAT
Route::get('/datajemaat', [DataJemaatController::class, 'index'])->name('datajemaat');
Route::get('/datajemaatt',[DatajemaatController::class ,'indexx'])->name('datajemaatt');

Route::get('/datajemaat',[DatajemaatController::class ,'index'])->middleware(['auth'])->name('datajemaat');
Route::get('/tambahjemaat',[DatajemaatController::class ,'tambahjemaat'])->middleware(['auth'])->name('tambahjemaat');
Route::post('/insertdata',[DatajemaatController::class ,'insertdata'])->middleware(['auth'])->name('insertdata');
Route::get('/tampilkandata/{id}',[DatajemaatController::class ,'tampilkandata'])->middleware(['auth'])->name('tampilkandata');
Route::post('/updatedata/{id}',[DatajemaatController::class ,'updatedata'])->middleware(['auth'])->name('updatedata');
Route::get('/deletedata/{id}',[DatajemaatController::class ,'deletedata'])->middleware(['auth'])->name('deletedata');


//pengumuman JEMAAT
Route::get('/pengumumanjemaatt',[PengumumanController::class ,'indexx'])->name('pengumuman');
Route::get('/pengumumandetails',[PengumumanController::class ,'pengumumandetails'])->name('pengumumandetails');

Route::get('/pengumumanjemaat',[PengumumanController::class ,'index'])->middleware(['auth'])->name('pengumumanjemaat');
Route::get('/tambahpengumuman',[PengumumanController::class ,'tambahpengumuman'])->middleware(['auth'])->name('tambahpengumuman');
Route::post('/insertpengumuman',[PengumumanController::class ,'insertpengumuman'])->middleware(['auth'])->name('insertpengumuman');
Route::get('/tampilkanpengumuman/{id}',[PengumumanController::class ,'tampilkanpengumuman'])->middleware(['auth'])->name('tampilkanpengumuman');
Route::post('/updatepengumuman/{id}',[PengumumanController::class ,'updatepengumuman'])->middleware(['auth'])->name('updatepengumuman');
Route::get('/deletepengumuman/{id}',[PengumumanController::class ,'deletepengumuman'])->middleware(['auth'])->name('deletepengumuman');
// Route::post('/insertpengumuman', 'PengumumanController@insertpengumuman')->name('insertpengumuman');


//JADWAL IBADAH
Route::get('/jadwalibadahh',[JadwalibadahController::class ,'indexx'])->name('jadwalibadahh');

Route::get('/jadwalibadah',[JadwalibadahController::class ,'index'])->middleware(['auth'])->name('jadwalibadah');
Route::get('/tambahjadwal',[JadwalibadahController::class ,'tambahjadwal'])->middleware(['auth'])->name('tambahjadwal');
Route::post('/insertjadwal',[JadwalibadahController::class ,'insertjadwal'])->middleware(['auth'])->name('insertjadwal');
Route::get('/tampilkanjadwal/{id}',[JadwalibadahController::class ,'tampilkanjadwal'])->middleware(['auth'])->name('tampilkanjadwal');
Route::post('/updatejadwal/{id}',[JadwalibadahController::class ,'updatejadwal'])->middleware(['auth'])->name('updatejadwal');
Route::get('/deletejadwal/{id}',[JadwalibadahController::class ,'deletejadwal'])->middleware(['auth'])->name('deletejadwal');


//GALERI
Route::get('/logout',[GaleriController::class,'perform'])->name('logout');
Route::get('/photoo',[GaleriController::class ,'indexx'])->name('photoo');

Route::get('/photo',[GaleriController::class ,'index'])->middleware(['auth'])->name('photo');
Route::get('/tambahphoto',[GaleriController::class ,'tambahphoto'])->middleware(['auth'])->name('tambahphoto');
Route::post('/insertphoto',[GaleriController::class ,'insertphoto'])->middleware(['auth'])->name('insertphoto');
Route::get('/tampilkanphoto/{id}',[GaleriController::class ,'tampilkanphoto'])->middleware(['auth'])->name('tampilkanphoto');
Route::post('/updatephoto/{id}',[GaleriController::class ,'updatephoto'])->middleware(['auth'])->name('updatephoto');
Route::get('/deletephoto/{id}',[GaleriController::class,'deletephoto'])->middleware(['auth'])->name('deletephoto');

//KEUANGAN
Route::get('/keuangann',[KeuanganController::class ,'indexx'])->name('keuangann');

Route::get('/keuangan',[KeuanganController::class ,'index'])->middleware(['auth'])->name('keuangan');
Route::get('/tambahkeuangan',[KeuanganController::class ,'tambahkeuangan'])->middleware(['auth'])->name('tambahkeuangan');
Route::post('/insertkeuangan',[KeuanganController::class ,'insertkeuangan'])->middleware(['auth'])->name('insertkeuangan');
Route::get('/tampilkankeuangan/{id}',[KeuanganController::class ,'tampilkankeuangan'])->middleware(['auth'])->name('tampilkankeuangan');
Route::post('/updatekeuangan/{id}',[KeuanganController::class ,'updatekeuangan'])->middleware(['auth'])->name('updatekeuangan');
Route::get('/deletekeuangan/{id}',[KeuanganController::class ,'deletekeuangan'])->middleware(['auth'])->name('deletekeuangan');


//DONASI
Route::get('/donasii',[DonasiController::class ,'indexx'])->name('donasii');

Route::get('/donasi',[DonasiController::class ,'index'])->middleware(['auth'])->name('donasi');
Route::get('/tambahdonasi',[DonasiController::class ,'tambahdonasi'])->middleware(['auth'])->name('tambahdonasi');
Route::post('/insertdonasi',[DonasiController::class ,'insertdonasi'])->middleware(['auth'])->name('insertdonasi');
Route::get('/tampilkandonasi/{id}',[DonasiController::class ,'tampilkandonasi'])->middleware(['auth'])->name('tampilkandonasi');
Route::post('/updatedonasi/{id}',[DonasiController::class ,'updatedonasi'])->middleware(['auth'])->name('updatedonasi');
Route::get('/deletedonasi/{id}',[DonasiController::class ,'deletedonasi'])->middleware(['auth'])->name('deletedonasi');

//Lingkungan
Route::get('/lingkungan', [UserController::class, 'lingkungan'])->name('lingkungans');
Route::get('/lingkungans/index', [LingkunganController::class, 'index']);
Route::get('/lingkungans/{id}', [LingkunganController::class, 'show'])->name('lingkungans.show');
Route::post('/lingkungans/search', [LingkunganController::class, 'search']);

Route::get('/lingkungans/index', [LingkunganController::class, 'index']);
Route::get('/lingkungans/{lingkungan}/kepala_keluargas', [KepalaKeluargaController::class, 'index'])->name('kepala_keluargas.index');
Route::get('/lingkungans/{lingkungan}/kepala_keluargas/create', [KepalaKeluargaController::class, 'create'])->name('kepala_keluargas.create');
// Route::post('/lingkungans/{lingkungan}/kepala_keluargas', [KepalaKeluargaController::class, 'store'])->name('kepala_keluargas.store');
Route::get('/lingkungans/{lingkungan}/kepala_keluargas/{kepalaKeluarga}/edit', [KepalaKeluargaController::class, 'edit'])->name('kepala_keluargas.edit');
// Route::put('/lingkungans/{lingkungan}/kepala_keluargas/{kepalaKeluarga}', [KepalaKeluargaController::class, 'update'])->name('kepala_keluargas.update');
Route::get('/deletekepalakeluaraga/{id}',[KepalaKeluargaController::class ,'deletekepalakeluaraga'])->middleware(['auth'])->name('deletekepalakeluaraga');
Route::get('/delete_kepala_keluarga/{id}', [KepalaKeluargaController::class, 'destroy'])->name('delete_kepala_keluarga');

// Kepala Keluarga Routes
Route::group(['prefix' => 'lingkungans/{lingkungan}'], function() {
    Route::get('kepala_keluargas', [KepalaKeluargaController::class, 'index'])->name('kepala_keluargas.index');
    Route::get('kepala_keluargas/create', [KepalaKeluargaController::class, 'create'])->name('kepala_keluargas.create');
    Route::post('kepala_keluargas', [KepalaKeluargaController::class, 'store'])->name('kepala_keluargas.store');
    Route::get('kepala_keluargas/{kepala_keluarga}/edit', [KepalaKeluargaController::class, 'edit'])->name('kepala_keluargas.edit');
    Route::put('kepala_keluargas/{kepala_keluarga}', [KepalaKeluargaController::class, 'update'])->name('kepala_keluargas.update');
    Route::post('kepala_keluargas/{kepala_keluarga}', [KepalaKeluargaController::class, 'destroy'])->name('kepala_keluargas.destroy');
});
Route::get('/lingkungan/{id}/kepalaKeluarga', [UserController::class, 'kepalaKeluarga'])->name('user.kepalaKeluarga');
Route::get('/lingkungan/{lingkungan}/kepalaKeluarga/{kepalaKeluarga}/anggotaKeluarga', [UserController::class, 'showAnggotaKeluarga'])->name('user.anggotaKeluarga');

//Anggota

Route::get('/anggotakeluarga/{id}/anggota_keluargas', 'AnggotaKeluargaController@index')->name('anggota_keluargas.index');
// Route::get('/lingkungans/{lingkunganId}/kepala_keluargas/{kepalaKeluargaId}/anggota_keluargas', [AnggotaKeluargaController::class, 'index'])->name('anggota_keluargas.index');
Route::resource('anggota_keluargas', AnggotaKeluargaController::class);
Route::get('/lingkungans/{lingkunganId}/kepala_keluargas/{kepalaKeluargaId}/anggota_keluargas', [AnggotaKeluargaController::class, 'index'])->name('anggota_keluargas.index');
// Route untuk melihat anggota keluarga berdasarkan lingkungan dan kepala keluarga
Route::get('/lingkungans/{lingkunganId}/kepala_keluargas/{kepalaKeluargaId}/anggota_keluargas', [AnggotaKeluargaController::class, 'showAnggotaKeluarga'])->name('anggota_keluargas.index');
Route::get('/lingkungans/{lingkunganId}/kepala_keluargas/{kepalaKeluargaId}/anggota_keluargas/create', [AnggotaKeluargaController::class, 'create'])->name('anggota_keluargas.create');
Route::post('/lingkungans/{lingkunganId}/kepala_keluargas/{kepalaKeluargaId}/anggota_keluargas/store', [AnggotaKeluargaController::class, 'store'])->name('anggota_keluargas.store');
Route::get('/lingkungans/{lingkunganId}/kepala_keluargas/{kepalaKeluargaId}/anggota_keluargas/{anggotaKeluargaId}/edit', [AnggotaKeluargaController::class, 'edit'])->name('anggota_keluargas.edit');
Route::put('/lingkungans/{lingkunganId}/kepala_keluargas/{kepalaKeluargaId}/anggota_keluargas/{anggotaKeluargaId}', [AnggotaKeluargaController::class, 'update'])->name('anggota_keluargas.update');
Route::delete('/lingkungans/{lingkunganId}/kepala_keluargas/{kepalaKeluargaId}/anggota_keluargas/{anggotaKeluargaId}', [AnggotaKeluargaController::class, 'destroy'])->name('anggota_keluargas.destroy');

// Route untuk user melihat lingkungans
Route::get('/lingkungan', [UserController::class, 'lingkungan'])->name('user.lingkungan');

// Route untuk user melihat kepala keluarga berdasarkan lingkungan
Route::get('/lingkungan/{id}/kepalaKeluarga', [UserController::class, 'kepalaKeluarga'])->name('user.kepalaKeluarga');

// Route untuk user melihat anggota keluarga berdasarkan kepala keluarga
Route::get('/kepalaKeluarga/{id}/anggotaKeluarga', [UserController::class, 'anggotaKeluarga'])->name('user.anggotaKeluarga');
