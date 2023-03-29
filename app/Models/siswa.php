<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = "tb_siswa";
    protected $primaryKey = "nis";
    public $timestamps = false;
    public $fillable = ['nis', 'nama', 'pass', 'tanggal_lahir', 'alamat'];
}
