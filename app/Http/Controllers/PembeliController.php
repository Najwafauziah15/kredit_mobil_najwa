<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;

class PembeliController extends Controller
{
    public function index()
    {
        $datas = Pembeli::all();
        return view('pembeli.index',compact('datas'));
    }

    public function create()
    {
        $model = new Pembeli;
        return view ('pembeli.create', compact('model'));
    }

    public function store(Request $request)
    {
        $model = new Pembeli;
        $model->ktp_pembeli = $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli = $request->alamat_pembeli;
        $model->tlp_pembeli = $request->tlp_pembeli;
        $model->save();

        return redirect('/pembeli');
    }

    public function edit($ktp_pembeli)
    {
        $model = Pembeli::find($ktp_pembeli);
        return view ('pembeli.edit', compact('model'));
    }
    
    public function update(Request $request, $ktp_pembeli)
    {
        $model = Pembeli::find($ktp_pembeli);
        $model->ktp_pembeli = $request->ktp_pembeli;
        $model->nama_pembeli = $request->nama_pembeli;
        $model->alamat_pembeli = $request->alamat_pembeli;
        $model->tlp_pembeli = $request->tlp_pembeli;
        $model->save();

        return redirect('/pembeli');
    }

    public function destroy($id)
    {
        $model = Pembeli::find($id);
        $model->delete();
        return redirect('/pembeli');
    }
}
