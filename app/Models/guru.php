<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table = "tb_guru";
    protected $primaryKey = "nip";
    public $timestamps = false;
    public $fillable = ['nip', 'nama', 'pass'];
}
