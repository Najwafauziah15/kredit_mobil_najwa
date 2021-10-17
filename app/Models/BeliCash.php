<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeliCash extends Model
{
    use HasFactory;

    protected $primaryKey = 'id'; // jika primary field bukan id, wajib diubah disini
    public $incrementing = false; // jika primary key tidak auto increment ubah menjadi false
    protected $table = 'beli_cash';
    protected $fillable = ['kode_cash', 'ktp_pembeli', 'kode_mobil', 'cash_tgl', 'cash_bayar'];

    public function mobils(){
        return $this->hasOne(Mobil::class,'kode_mobil', 'kode_mobil');
    }

    public function pembelis(){
        return $this->hasOne(Pembeli::class,'ktp_pembeli', 'ktp_pembeli');
    }

    // public static function get_code(){
    //     $no_urut = self::selectRaw("IFNULL(MAX(SUBSTRING(`kode_cash`,8,5)),0) + 1 AS no_urut")
    //     ->whereRaw("SUBSTRING(`kode_cash`,2,4)= '" .date('Y'). "'")->orderBy('no_urut')->first()->no_urut;
    //     $kode_mobil = "C" . date("Ym") . sprintf("%'.05d", $no_urut);
    //     return $kode_mobil;
    // }
}
