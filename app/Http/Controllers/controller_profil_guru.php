<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class controller_profil_guru extends Controller
{
    public function read_profil()
    {
        $query = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        $query = $query->get();
        return view('guru/dsh_tampil_profil', ['profil' => $query]);
    }
}
