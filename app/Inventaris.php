<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $fillable = ['nama_mahasiswa','judul_skripsi','thun_yudisium','angkatan','kategori','file'];
}
