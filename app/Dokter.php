<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $primarykey = 'id';
    protected $fillable =['nama','spesialis','alamat','telp','tanggalMulai','foto'];
}
