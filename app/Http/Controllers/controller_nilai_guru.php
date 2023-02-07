<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sem1;
use App\Models\sem2;
use App\Models\sem3;
use App\Models\sem4;
use App\Models\sem5;
use App\Models\sem6;

class controller_nilai_guru extends Controller
{
    public function read_nilai($req)
    {
        if ($req == '1') {
            $query = sem1::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            $query = $query->get();
            return view('guru/dsh_tampil_nilai', ['nilai' => $query]);
        } elseif ($req == '2') {
            $query = sem2::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            $query = $query->get();
            return view('guru/dsh_tampil_nilai', ['nilai' => $query]);
        } elseif ($req == '3') {
            $query = sem3::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            $query = $query->get();
            return view('guru/dsh_tampil_nilai', ['nilai' => $query]);
        } elseif ($req == '4') {
            $query = sem4::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            $query = $query->get();
            return view('guru/dsh_tampil_nilai', ['nilai' => $query]);
        } elseif ($req == '5') {
            $query = sem5::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            $query = $query->get();
            return view('guru/dsh_tampil_nilai', ['nilai' => $query]);
        } elseif ($req == '6') {
            $query = sem6::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'mean');
            $query = $query->get();
            return view('guru/dsh_tampil_nilai', ['nilai' => $query]);
        }
    }
}
