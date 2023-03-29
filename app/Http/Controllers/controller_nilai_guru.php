<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
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
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $_SESSION["sem_guru"] = $req;
        if ($req == '1') {
            $query = sem1::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        } elseif ($req == '2') {
            $query = sem2::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        } elseif ($req == '3') {
            $query = sem3::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        } elseif ($req == '4') {
            $query = sem4::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        } elseif ($req == '5') {
            $query = sem5::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        } elseif ($req == '6') {
            $query = sem6::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        }
        $query = $query->get();
        return view('guru/dsh_tampil_nilai', ['nilai' => $query, 'sem' => $req]);
    }

    public function updateByNis(Request $req)
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $sem = $req->sem;
        $nis = $req->nis;
        if ($sem == 1) {
            $query = sem1::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        }
        if ($sem == 2) {
            $query = sem2::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        }
        if ($sem == 3) {
            $query = sem3::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        }
        if ($sem == 4) {
            $query = sem4::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        }
        if ($sem == 5) {
            $query = sem5::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        }
        if ($sem == 6) {
            $query = sem6::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
        }
        $query = $query->where('nis', $nis)->get();
        $siswa = siswa::select('nis', 'nama', 'pass', 'tanggal_lahir', 'alamat');
        $siswa = $siswa->where('nis', $nis)->get();
        return view('guru/dsh_update_semester', ['nilai' => $query, 'sem' => $sem, 'siswa' => $siswa]);
    }

    public function updateNilai(Request $req)
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        $sem = $req->sem;
        $mean = ($req->mat + $req->indo + $req->ipa + $req->ips + $req->agama + $req->pkn) / 6;
        if ($sem == 1) {
            sem1::where('nis', $req->nis)->update([
                'mat' => $req->mat,
                'indo' => $req->indo,
                'ipa' => $req->ipa,
                'ips' => $req->ips,
                'agama' => $req->agama,
                'pkn' => $req->pkn,
                'keterangan' => $req->keterangan,
                'mean' => $mean
            ]);
            return redirect('guru_tampil_nilai/1');
        }
        if ($sem == 2) {
            sem2::where('nis', $req->nis)->update([
                'mat' => $req->mat,
                'indo' => $req->indo,
                'ipa' => $req->ipa,
                'ips' => $req->ips,
                'agama' => $req->agama,
                'pkn' => $req->pkn,
                'keterangan' => $req->keterangan,
                'mean' => $mean
            ]);
            return redirect('guru_tampil_nilai/2');
        }
        if ($sem == 3) {
            sem3::where('nis', $req->nis)->update([
                'mat' => $req->mat,
                'indo' => $req->indo,
                'ipa' => $req->ipa,
                'ips' => $req->ips,
                'agama' => $req->agama,
                'pkn' => $req->pkn,
                'keterangan' => $req->keterangan,
                'mean' => $mean
            ]);
            return redirect('guru_tampil_nilai/3');
        }
        if ($sem == 4) {
            sem4::where('nis', $req->nis)->update([
                'mat' => $req->mat,
                'indo' => $req->indo,
                'ipa' => $req->ipa,
                'ips' => $req->ips,
                'agama' => $req->agama,
                'pkn' => $req->pkn,
                'keterangan' => $req->keterangan,
                'mean' => $mean
            ]);
            return redirect('guru_tampil_nilai/4');
        }
        if ($sem == 5) {
            sem5::where('nis', $req->nis)->update([
                'mat' => $req->mat,
                'indo' => $req->indo,
                'ipa' => $req->ipa,
                'ips' => $req->ips,
                'agama' => $req->agama,
                'pkn' => $req->pkn,
                'keterangan' => $req->keterangan,
                'mean' => $mean
            ]);
            return redirect('guru_tampil_nilai/5');
        }
        if ($sem == 6) {
            sem6::where('nis', $req->nis)->update([
                'mat' => $req->mat,
                'indo' => $req->indo,
                'ipa' => $req->ipa,
                'ips' => $req->ips,
                'agama' => $req->agama,
                'pkn' => $req->pkn,
                'keterangan' => $req->keterangan,
                'mean' => $mean
            ]);
            return redirect('guru_tampil_nilai/6');
        }
    }

    public function cari_nilai_byNis(Request $req)
    {
        session_start();
        if (!isset($_SESSION["nip"])) {
            return redirect('/');
        }
        if ($_SESSION["sem_guru"] == '1') {
            $siswa = sem1::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            if ($req->has('cari_byNIS')) {
                $siswa = $siswa->where('nis', 'LIKE', '%' . $req->cari_byNIS . '%')->get();
            } else {
                $siswa = $siswa->get();
            }
        } elseif ($_SESSION["sem_guru"] == '2') {
            $siswa = sem2::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            if ($req->has('cari_byNIS')) {
                $siswa = $siswa->where('nis', 'LIKE', '%' . $req->cari_byNIS . '%')->get();
            } else {
                $siswa = $siswa->get();
            }
        } elseif ($_SESSION["sem_guru"] == '3') {
            $siswa = sem3::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            if ($req->has('cari_byNIS')) {
                $siswa = $siswa->where('nis', 'LIKE', '%' . $req->cari_byNIS . '%')->get();
            } else {
                $siswa = $siswa->get();
            }
        } elseif ($_SESSION["sem_guru"] == '4') {
            $siswa = sem4::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            if ($req->has('cari_byNIS')) {
                $siswa = $siswa->where('nis', 'LIKE', '%' . $req->cari_byNIS . '%')->get();
            } else {
                $siswa = $siswa->get();
            }
        } elseif ($_SESSION["sem_guru"] == '5') {
            $siswa = sem5::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            if ($req->has('cari_byNIS')) {
                $siswa = $siswa->where('nis', 'LIKE', '%' . $req->cari_byNIS . '%')->get();
            } else {
                $siswa = $siswa->get();
            }
        } elseif ($_SESSION["sem_guru"] == '6') {
            $siswa = sem6::select('nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean');
            if ($req->has('cari_byNIS')) {
                $siswa = $siswa->where('nis', 'LIKE', '%' . $req->cari_byNIS . '%')->get();
            } else {
                $siswa = $siswa->get();
            }
        }
        return view('guru/dsh_tampil_nilai', ['nilai' => $siswa, 'sem' => $_SESSION["sem_guru"]]);
    }
}
