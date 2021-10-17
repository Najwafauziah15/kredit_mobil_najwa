<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    protected $primaryKey = 'ktp_pembeli'; // jika primary field bukan id, wajib diubah disini
    public $incrementing = false; // jika primary key tidak auto increment ubah menjadi false
    protected $table = 'pembelis';
    protected $fillable = ['ktp_pembeli', 'nama_pembeli', 'alamat_pembeli', 'tlp_pembeli'];
}
