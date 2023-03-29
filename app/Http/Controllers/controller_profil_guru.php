<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\sem1;
use App\Models\sem2;
use App\Models\sem3;
use App\Models\sem4;
use App\Models\sem5;
use App\Models\sem6;
use Illuminate\Http\Request;
use App\Models\siswa;

class controller_profil_guru extends Controller
{

    public function pop_up(Request $req)
    {
        session_start();
        $_SESSION["hapus"] = $req->nis;
        return redirect('/guru_tampil_profil_siswa_hapus');
    }

    public function getbynip()
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $query = guru::select('nip', 'nama', 'pass');
        $query = $query->where('nip', $_SESSION["nip"])->get();
        return view('guru/dsh_guru', ['guru' => $query]);
    }

    public function read_profil()
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $query = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        $query = $query->get();
        return view('guru/dsh_tampil_profil', ['profil' => $query]);
    }

    public function delete_profil(Request $req)
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        siswa::where('nis', $req->nis)->delete();
        return redirect('/guru_tampil_profil_siswa');
    }

    public function getbynis($nis)
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $query = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        $query = $query->where('nis', $nis)->get();
        return view('guru/dsh_update_profil', ['siswa' => $query]);
    }

    public function update_profil(Request $req)
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        siswa::where('nis', $req->nis)->update([
            'nama' => $req->nama,
            'pass' => $req->pass,
            'tanggal_lahir' => $req->tanggal_lahir,
            'alamat' => $req->alamat,
        ]);
        return redirect('/guru_tampil_profil_siswa');
    }

    public function tambahSiswa(Request $req)
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $query = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        if ($query == $query->WHERE('nis', $req->nis)->exists()) {
            $_SESSION["nis_full"] = 1;
            return view('guru/dsh_tambah_siswa');
        } else {
            siswa::insert([
                'nis' => $req->nis,
                'nama' => $req->nama,
                'pass' => $req->pass,
                'tanggal_lahir' => $req->tanggal_lahir,
                'alamat' => $req->alamat,
            ]);
            sem1::insert([
                'nis' => $req->nis,
                'mat' => 0,
                'indo' => 0,
                'ipa' => 0,
                'ips' => 0,
                'agama' => 0,
                'pkn' => 0,
                'keterangan' => '-',
                'mean' => 0
            ]);
            sem2::insert([
                'nis' => $req->nis,
                'mat' => 0,
                'indo' => 0,
                'ipa' => 0,
                'ips' => 0,
                'agama' => 0,
                'pkn' => 0,
                'keterangan' => '-',
                'mean' => 0
            ]);
            sem3::insert([
                'nis' => $req->nis,
                'mat' => 0,
                'indo' => 0,
                'ipa' => 0,
                'ips' => 0,
                'agama' => 0,
                'pkn' => 0,
                'keterangan' => '-',
                'mean' => 0
            ]);
            sem4::insert([
                'nis' => $req->nis,
                'mat' => 0,
                'indo' => 0,
                'ipa' => 0,
                'ips' => 0,
                'agama' => 0,
                'pkn' => 0,
                'keterangan' => '-',
                'mean' => 0
            ]);
            sem5::insert([
                'nis' => $req->nis,
                'mat' => 0,
                'indo' => 0,
                'ipa' => 0,
                'ips' => 0,
                'agama' => 0,
                'pkn' => 0,
                'keterangan' => '-',
                'mean' => 0
            ]);
            sem6::insert([
                'nis' => $req->nis,
                'mat' => 0,
                'indo' => 0,
                'ipa' => 0,
                'ips' => 0,
                'agama' => 0,
                'pkn' => 0,
                'keterangan' => '-',
                'mean' => 0
            ]);
            return redirect('/guru_tampil_profil_siswa');
        }
    }

    public function cari_profil_byNis(Request $req)
    {
        session_start();
        $_SESSION["hapus"] = 0;
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $siswa = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        if ($req->has('cari_byNIS')) {
            $siswa = $siswa->where('nis', 'LIKE', '%' . $req->cari_byNIS . '%')->get();
        } else {
            $siswa = $siswa->get();
        }
        return view('guru/dsh_tampil_profil', ['siswa' => $siswa]);
    }

    public function cari_profil_byNis_hapus(Request $req)
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $siswa = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        if ($req->has('cari_byNIS')) {
            $siswa = $siswa->where('nis', 'LIKE', '%' . $req->cari_byNIS . '%')->get();
        } else {
            $siswa = $siswa->get();
        }
        return view('guru/dsh_tampil_profil', ['siswa' => $siswa]);
    }

    public function cek_session_tambah_guru()
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $_SESSION["nis_full"] = 0;
        return view('guru/dsh_tambah_siswa');
    }

    public function salah_cek_session_tambah_guru()
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        return view('guru/dsh_tambah_siswa');
    }
}
