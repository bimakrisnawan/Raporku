<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kkm extends Model
{
    protected $table = "tb_kkm";
    protected $primaryKey = "id";
    public $timestamps = false;
    public $fillable = ['id', 'mat', 'indo', 'ipa', 'ips', 'agama', 'pkn'];
}
