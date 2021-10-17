<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function index()
    {
        $data['mobils'] = Mobil::all();
        return view('mobil/index', $data);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validate = $request->validate([
            'kode_mobil' => 'required',
            'merk' => 'required',
            'type' => 'required',
            'warna' => 'required',
            'harga_mobil' => 'required',
            'gambar' => 'required'
        ]);

        $input = Mobil::create($validate);
        if($input) return redirect ('mobil')->with('success', 'Data Mobil Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($kode_mobil)
    {
        $mobils = Mobil::find($kode_mobil);
        return view ('mobil.edit', compact('mobils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_mobil)
    {
        $mobils = Mobil::find($kode_mobil);
        $mobils->kode_mobil = $request->kode_mobil;
        $mobils->merk = $request->merk;
        $mobils->type = $request->type;
        $mobils->warna = $request->warna;
        $mobils->harga_mobil = $request->harga_mobil;
        $mobils->gambar = $request->gambar;
        $mobils->save();

        return redirect('mobil');

        // $rules =$request ->validate([
        //     'kode_mobil'=>'required',
        //     'merk'=>'required',
        //     'type'=>'required',
        //     'warna'=>'required',
        //     'harga_mobil'=>'required',
        //     'gambar'=>'required'
        // ]);

        // $update = $mobils->find($kode_mobil)->update($request->all());

        // if($update) return redirect('/mobil')->with('success', 'Data Mobil Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mobil $mobils, $kode_mobil)
    {
        $mobils = Mobil::find($kode_mobil);
        $mobils->delete();
        return redirect('/mobil');
    }
}
