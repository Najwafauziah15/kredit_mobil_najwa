<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_mobil'; // jika primary field bukan id, wajib diubah disini
    public $incrementing = false; // jika primary key tidak auto increment ubah menjadi false
    protected $table = 'mobils';
    protected $fillable = ['kode_mobil', 'merk', 'type', 'warna', 'harga_mobil', 'gambar'];
}
