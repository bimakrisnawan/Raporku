<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\sem1;
use App\Models\sem2;
use App\Models\sem3;
use App\Models\sem4;
use App\Models\sem5;
use App\Models\sem6;
use App\Models\kkm;
use Illuminate\Http\Request;

class controller_siswa extends Controller
{
    public function getbynis()
    {
        session_start();
        if (!isset($_SESSION["nis"])) {
            return redirect('/');
        }
        $query = siswa::select(
            'nis',
            'nama',
            'pass',
            'tanggal_lahir',
            'alamat'
        );
        $query = $query->where('nis', $_SESSION["nis"])->get();
        return view('siswa/view_siswa', ['siswa' => $query]);
    }


    public function semester($sem)
    {
        session_start();
        if (!isset($_SESSION["nis"])) {
            return redirect('/');
        }
        if ($sem == 1) {
            $query = sem1::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
        } elseif ($sem == 2) {
            $query = sem2::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
        } elseif ($sem == 3) {
            $query = sem3::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
        } elseif ($sem == 4) {
            $query = sem4::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
        } elseif ($sem == 5) {
            $query = sem5::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
        } elseif ($sem == 6) {
            $query = sem6::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');

            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
        }
        $data_siswa = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        $data_siswa = $data_siswa
            ->WHERE('nis', $_SESSION["nis"])
            ->get();
        $kkm = kkm::select('id', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn');
        $kkm = $kkm->get();
        $_SESSION["sem_tampil_siswa"] = $sem;
        return view('siswa/view_tampil_semester', ['semester' => $query, 'data' => $data_siswa, 'id_kkm' => $kkm]);
    }
}
