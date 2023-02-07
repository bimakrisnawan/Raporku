<?php

namespace App\Http\Controllers;

use App\Models\sem1;
use App\Models\sem2;
use App\Models\sem3;
use App\Models\sem4;
use App\Models\sem5;
use App\Models\sem6;
use Illuminate\Http\Request;

class controller_siswa extends Controller
{
    public function semester($sem)
    {
        if ($sem == 1) {
            $query = sem1::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            session_start();
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
            return view('siswa/view_tampil_semester', ['semester' => $query]);
        } elseif ($sem == 2) {
            $query = sem2::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            session_start();
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
            return view('siswa/view_tampil_semester', ['semester' => $query]);
        } elseif ($sem == 3) {
            $query = sem3::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            session_start();
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
            return view('siswa/view_tampil_semester', ['semester' => $query]);
        } elseif ($sem == 4) {
            $query = sem4::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            session_start();
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
            return view('siswa/view_tampil_semester', ['semester' => $query]);
        } elseif ($sem == 5) {
            $query = sem5::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            session_start();
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
            return view('siswa/view_tampil_semester', ['semester' => $query]);
        } elseif ($sem == 6) {
            $query = sem6::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            session_start();
            $query = $query
                ->WHERE('nis', $_SESSION["nis"])
                ->get();
            return view('siswa/view_tampil_semester', ['semester' => $query]);
        }
    }
}
