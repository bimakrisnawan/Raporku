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




// ====================================LOGIN====================================
// login siswa
Route::get('/login_siswa', [App\Http\Controllers\controller_login::class, 'reset_session_login_s']);

// cek nis dan pass siswa
Route::post('/cek_siswa', [App\Http\Controllers\controller_login::class, 'cek_siswa']);

// login guru
Route::get('/login_guru', [App\Http\Controllers\controller_login::class, 'reset_session_login_g']);

// cek nip dan pass guru
Route::post('/cek_guru', [App\Http\Controllers\controller_login::class, 'cek_guru']);

// ====================================LOGIN====================================




//====================================SISWA====================================
// home siswa
Route::get('/view_siswa', [App\Http\Controllers\controller_siswa::class, 'getbynis']);
// tampil semester
Route::get('/sem/{id}', [App\Http\Controllers\controller_siswa::class, 'semester']);

//cek password siswa apakah benar (parameter == old_pass)
Route::post('/ubah_pass_siswa_cek', [App\Http\Controllers\controller_login::class, 'ubah_pass_siswa']);
//ubah password siswa
Route::get('/ubah_pass_siswa', [App\Http\Controllers\controller_login::class, 'cek_session_pass_siswa']);
Route::get('/ubah_pass_siswa_', [App\Http\Controllers\controller_login::class, 'cek_session_pass_siswa_']);

// ====================================SISWA====================================




// =====================================GURU====================================
// dashboard guru
Route::get('/dsh_guru', [App\Http\Controllers\controller_profil_guru::class, 'getbynip']);
// menampilkan list profil siswa
Route::get('/guru_tampil_profil_siswa', [App\Http\Controllers\controller_profil_guru::class, 'cari_profil_byNis']);
Route::get('/guru_tampil_profil_siswa_hapus', [App\Http\Controllers\controller_profil_guru::class, 'cari_profil_byNis_hapus']);
//tambah siswa
Route::get('/tambah', [App\Http\Controllers\controller_profil_guru::class, 'cek_session_tambah_guru']);
Route::get('/tambah_salah', [App\Http\Controllers\controller_profil_guru::class, 'salah_cek_session_tambah_guru']);
//proses tambah
Route::post('/proses_tambah', [App\Http\Controllers\controller_profil_guru::class, 'tambahSiswa']); //note ini form
// delete
Route::get('/delete_profil/{nis}', [App\Http\Controllers\controller_profil_guru::class, 'delete_profil']);
Route::post('/pop_up_delete', [App\Http\Controllers\controller_profil_guru::class, 'pop_up']);
// update
Route::get('/update/{nis}', [App\Http\Controllers\controller_profil_guru::class, 'getbynis']);
Route::post('/proses_update', [App\Http\Controllers\controller_profil_guru::class, 'update_profil']); //note ini form
// cari nama siswa
Route::post('/cari_tampil_profil_byNis', [App\Http\Controllers\controller_profil_guru::class, 'cari_profil_byNis']); //note ini form

// ================================================================================

// menampilkan list siswa beserta nilainya
Route::get('/guru_tampil_nilai/{req}', [App\Http\Controllers\controller_nilai_guru::class, 'read_nilai']);
//update nilai
Route::get('/update_nilai/{nis}&{sem}', [App\Http\Controllers\controller_nilai_guru::class, 'updateByNis']);
Route::post('/proses_update_nilai', [App\Http\Controllers\controller_nilai_guru::class, 'updateNilai']); //note ini form
// cari nilai
Route::post('/cari_tampil_nilai_byNis', [App\Http\Controllers\controller_nilai_guru::class, 'cari_nilai_byNis']); //note ini form

// ================================================================================

// ubah pass guru
Route::get('/ubah_pass_guru', [App\Http\Controllers\controller_login::class, 'cek_session_pass_guru']);
// proses ubah pass guru
Route::post('/ubah_pass_guru_cek', [App\Http\Controllers\controller_login::class, 'ubah_pass_guru']); //note ini form
Route::get('/ubah_pass_guru_', [App\Http\Controllers\controller_login::class, 'cek_session_pass_guru_']);
// ====================================GURU====================================




// ====================================LOGOUT====================================
// logout
Route::get('/logout', [App\Http\Controllers\controller_login::class, 'logout']);
// ====================================LOGOUT====================================
