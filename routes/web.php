<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// INDEX
Route::get('/', function () {
    return view('login');
});





// LOGIN
// login siswa
Route::get('/login_siswa', function () {
    return view('login/login_siswa');
});
// cek nis dan pass siswa
Route::post('/cek_siswa', [App\Http\Controllers\controller_login::class, 'cek_siswa']);

// login guru
Route::get('/login_guru', function () {
    return view('login/login_guru');
});
// cek nip dan pass guru
Route::post('/cek_guru', [App\Http\Controllers\controller_login::class, 'cek_guru']);





//SISWA
// home siswa
Route::get('/view_siswa', function () {
    return view('/siswa/view_siswa');
});
//ubah password siswa
Route::get('/ubah_pass_siswa', function () {
    return view('/siswa/view_ubah_pass_siswa');
});
//cek password siswa apakah benar (parameter == old_pass)
Route::post('/ubah_pass_siswa_cek', [App\Http\Controllers\controller_login::class, 'ubah_pass_siswa']);
// tampil semester
Route::get('/sem/{id}', [App\Http\Controllers\controller_siswa::class, 'semester']);



//GURU
// dashboard guru
Route::get('/dsh_guru', function () {
    return view('/guru/dsh_guru');
});
// menampilkan list siswa beserta nilainya
Route::get('/guru_tampil_nilai/{req}', [App\Http\Controllers\controller_nilai_guru::class, 'read_nilai']);
// menampilkan list profil siswa
Route::get('/guru_tampil_profil_siswa', [App\Http\Controllers\controller_profil_guru::class, 'read_profil']);
