<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sem1 extends Model
{
    protected $table = "tb_sem1";
    protected $foreignKey = "nis";
    public $timestamps = false;
    public $fillable = ['nis', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn', 'keterangan', 'mean'];
}
