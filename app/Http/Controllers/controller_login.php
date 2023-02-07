<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\guru;
use Illuminate\Http\Request;

class controller_login extends Controller
{
    public function cek_siswa(Request $request)
    {
        $query = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        if ($query == $query->WHERE('nis', $request->nis)->WHERE('pass', $request->pass)->exists()) {
            session_start();
            $_SESSION["nis"] = $request->nis;
            return redirect('/view_siswa');
        } else {
            return redirect('/login_siswa');
        }
    }

    public function cek_guru(Request $request)
    {
        $query = guru::select('nip', 'nama', 'pass');
        if ($query == $query->WHERE('nip', $request->nip)->WHERE('pass', $request->pass)->exists()) {
            session_start();
            $_SESSION["nis"] = $request->nip;
            return redirect('/dsh_guru');
        } else {
            return redirect('/login_guru');
        }
    }

    public function ubah_pass_siswa(Request $request)
    {
        $query = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        session_start();
        if ($query == $query->WHERE('nis', $_SESSION["nis"])->WHERE('pass', $request->old_pass)->exists()) {
            siswa::where('nis', $_SESSION["nis"])->update([
                'pass' => $request->new_pass,
            ]);
            return redirect('/view_siswa');
        } else {
            return redirect('/ubah_pass_siswa');
        }
    }
}
