<?php

namespace App\Http\Controllers;
use App\Models\BeliCash;
use App\Models\Mobil;
use App\Models\Pembeli;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;

class CashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['mobils'] = Mobil::all();
        $data['pembelis'] = Pembeli::all();

        return view('cash.cash', $data);
    }

    public function hasil()
    {
        $data['beli_cash'] = BeliCash::all();
        return view('cash.faktur', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        // $validator = Validator::make($request->all(),[
            'ktp_pembeli' => 'required',
            'kode_mobil' => 'required',
            'cash_bayar' => 'required',
            'cash_tgl' => 'required'
        ]);

        // if($validator->errors()){
        //     dd($validator->errors());
        // }

        $last_id = BeliCash::select('kode_cash')->orderBY('created_at','desc')->first();
        $kode_cash = ($last_id==null)?sprintf('C%08d',1):sprintf('C%08d',substr($last_id->kode_cash,1,8)+1);
        $validated['kode_cash']=$kode_cash;
        //dd($request);
        $input = BeliCash::create($validated);
        if($input)return redirect('/faktur')->with('success','Data Cash Berhasil Di Input');
    }

    public function faktur()
    {
        $kode_cash = BeliCash::all();
        // $kode_cash = BeliCash::find($kode_cash);
        // $kode_cash->kode_cash = $request->kode_cash;
        // $beli_cash->ktp_pembeli = $request->ktp_pembeli;
        // $beli_cash->kode_mobil = $request->kode_mobil;
        // $beli_cash->cash_bayar = $request->cash_bayar;
        // $beli_cash->cash_tgl = $request->cash_tgl;
        $pdf = PDF::loadview('cash.cetak',['beli_cash'=>$kode_cash]);
        // return $pdf->download('faktur-cash-pdf');
        return $pdf -> stream();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
