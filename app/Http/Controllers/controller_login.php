<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\guru;
use Illuminate\Http\Request;

class controller_login extends Controller
{
    public function cek_siswa(Request $request)
    {
        session_start();
        $query = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        if ($query == $query->WHERE('nis', $request->nis)->WHERE('pass', $request->pass)->exists()) {
            $_SESSION["nis"] = $request->nis;
            return redirect('/view_siswa');
        } else {
            $_SESSION["login_s"] = 1;
            return view('/login/login_siswa');
        }
    }

    public function reset_session_login_s()
    {
        session_start();
        $_SESSION["login_s"] = 0;
        return view('/login/login_siswa');
    }

    public function cek_guru(Request $request)
    {
        session_start();
        $query = guru::select('nip', 'nama', 'pass');
        if ($query == $query->WHERE('nip', $request->nip)->WHERE('pass', $request->pass)->exists()) {
            $_SESSION["nip"] = $request->nip;
            return redirect('/dsh_guru');
        } else {
            $_SESSION["login_g"] = 1;
            return view('/login/login_guru');
        }
    }

    public function reset_session_login_g()
    {
        session_start();
        $_SESSION["login_g"] = 0;
        return view('/login/login_guru');
    }


    public function cek_session_pass_siswa()
    {
        session_start();
        $_SESSION["error_s"] = 0;
        if (!isset($_SESSION["nis"])) {
            return redirect('/');
        }
        return view('/siswa/view_ubah_pass_siswa');
    }

    public function cek_session_pass_siswa_()
    {
        session_start();
        if (!isset($_SESSION["nis"])) {
            return redirect('/');
        }
        return view('/siswa/view_ubah_pass_siswa');
    }

    public function ubah_pass_siswa(Request $request)
    {
        session_start();
        $query = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        if (!isset($_SESSION["nis"])) {
            return redirect('/');
        }
        if ($query == $query->WHERE('nis', $_SESSION["nis"])->WHERE('pass', $request->old_pass)->exists()) {
            siswa::where('nis', $_SESSION["nis"])->update([
                'pass' => $request->new_pass,
            ]);
            $_SESSION["error_s"] = 2;
            return redirect('/ubah_pass_siswa_');
        } else {
            $_SESSION["error_s"] = 1;
            return redirect('/ubah_pass_siswa_');
        }
    }

    public function cek_session_pass_guru()
    {
        session_start();
        $_SESSION["error_g"] = 0;
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        return view('/guru/dsh_ubah_pass_guru');
    }

    public function cek_session_pass_guru_()
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        return view('/guru/dsh_ubah_pass_guru');
    }

    public function ubah_pass_guru(Request $request)
    {
        session_start();
        $query = guru::select('nip', 'nama', 'pass');
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        if ($query == $query->WHERE('nip', $_SESSION["nip"])->WHERE('pass', $request->old_pass)->exists()) {
            guru::where('nip', $_SESSION["nip"])->update([
                'pass' => $request->new_pass,
            ]);
            $_SESSION["error_g"] = 2;
            return redirect('/ubah_pass_guru_');
        } else {
            $_SESSION["error_g"] = 1;
            return redirect('/ubah_pass_guru_');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        return redirect('/');
    }
}
