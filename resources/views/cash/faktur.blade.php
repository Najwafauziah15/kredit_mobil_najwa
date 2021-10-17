@extends('layouts.header', ['title'=>'Pembayaran'])

@section('content')

    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
            <div class="row">
                <div class="container-fluid">
                <div class="row">
                    <div class="card m-2">
                        <div class="card-header">
                            <H4>Form Pembayaran</H4>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead>
                                    <th>No.</th>
                                    <th>Kode Pembayaran</th>
                                    <th>KTP Pembeli</th>
                                    <th>Kode Mobil</th>
                                    <th>Cash Bayar</th>
                                    <th>Cash Tanggal</th>
                                    <th>Pilih</th>
                                </thead>
                                <tbody>
                                    @foreach ($beli_cash as $m)
                                    <tr>
                                    <td>{{ $j=(isset($j)?++$j:$j=1) }}</td>
                                    <td>{{ $m->kode_cash }}</td>
                                    <td>{{ $m->ktp_pembeli }}</td>
                                    <td>{{ $m->kode_mobil }}</td> 
                                    <td>{{ $m->cash_bayar }}</td>
                                    <td>{{ $m->cash_tgl }}</td>
                                    <td>
                                        <a href="/faktur/cetak" class="btn btn-outline-success mt-2" onclick="return confirm('apakah data mau dicetak?')">cetak</a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </div>
    </div>
@endsection

@push('script')
    
@endpush