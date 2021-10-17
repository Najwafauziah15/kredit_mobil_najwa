@extends('layouts.header', ['title'=>'bayar cash'])

@section('content')

<div class="wrapper">
<div class="content-wrapper">
    <form action="{{ route('cash.store') }}" method="POST">
        @csrf
    <section class="content-header">
        <h1 class="m3">PEMBAYARAN CASH</h1>
        <div>
            <a href="/faktur" class="btn btn-sml btn-outline-dark m-3">Data Pembelian Cash</a>
        </div>
        {{-- form input pembeli --}}
        <div class="card m-2">
            <div class="card-header">
                <H4>Pilih Pembeli</H4>
            </div>
            <div class="card-body">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="ktp_pembeli" class="form-label">KTP Pembeli</label>
                            <input type="text" name="ktp_pembeli" id="ktp_pembeli" class="form-control" placeholder="KTP Pembeli" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                            <input type="text" name="nama_pembeli" id="nama_pembeli" class="form-control" placeholder="Nama Pembeli" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat" class="form-label">Alamat Pembeli</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat Pembeli" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="tlp_pembeli" class="form-label">No Telepon</label>
                            <input type="text" name="tlp_pembeli" id="tlp_pembeli" class="form-control" placeholder="Nomor HP/Telepon" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-toggle="modal" data-target="#pilihPelanggan" class="btn btn-outline-dark">Tambah Pembeli</button>
                        </div>
                    </div>
            </div>
        </div>


        {{-- form input mobil --}}
        <div class="card m-2">
            <div class="card-header">
                <H4>Pilih Mobil</H4>
            </div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="kode_mobil" class="form-label">Kode Mobil</label>
                            <input type="text"  name="kode_mobil" id="kode_mobil" class="form-control" placeholder="Kode Mobil" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="merk" class="form-label">Merk</label>
                            <input type="text" name="merk" id="merk" class="form-control" placeholder="Merk" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="type" class="form-label">Tipe</label>
                            <input type="text" name="type" id="type" class="form-control" placeholder="Type" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="warna" class="form-label">Warna</label>
                            <input type="text" name="warna" id="warna" class="form-control" placeholder="Warna" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga_mobil" class="form-label">Harga Mobil</label>
                            <input type="text" name="harga_mobil" id="harga_mobil" class="form-control" placeholder="Harga Mobil $" readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-toggle="modal" data-target="#pilihMobil" class="btn btn-outline-dark">Tambah Mobil</button>
                        </div>
                    </div>
        </div>

        

            <div class="card m-2">
                <div class="card-header">
                    <H4>Form Pembayaran</H4>
                </div>
                <div class="card-body">
                   
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="kode_cash" class="form-label">Kode Pembayaran</label>
                                <input type="text" name="kode_cash" id="kode_cash" class="form-control" placeholder="Kode Pembayaran Cash" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="cash_tgl" class="form-label">Tanggal</label>
                                <input type="date" name="cash_tgl" id="cash_tgl" class="form-control" placeholder="Harga Mobil $" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="cash_bayar" class="form-label">Pembayaran</label>
                                <input type="text" name="cash_bayar" id="cash_bayar" class="form-control" placeholder="Uang Yang Diberikan" required>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" data-target="#f-cash" class="btn btn-outline-dark">Bayar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>

    {{-- modal pilih mobil --}}
    <div class="modal fade" id="pilihMobil" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Pilih Mobil
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="tbl-mobil" class="table table-hover">
                        <thead>
                            <th>No.</th>
                            <th>Kode Mobil</th>
                            <th>Merk</th>
                            <th>Tipe</th>
                            <th>Warna</th>
                            <th>Harga Mobil</th>
                            <th>Pilih</th>
                        </thead>
                        <tbody>
                            @foreach ($mobils as $m)
                            <tr>
                            <td>{{ $j=(isset($j)?++$j:$j=1) }}</td>
                            <td>{{ $m->kode_mobil }}</td>
                            <td>{{ $m->merk }}</td>
                            <td>{{ $m->type }}</td>
                            <td>{{ $m->warna }}</td>
                            <td>{{ $m->harga_mobil }}</td>
                            <td><button class="pilih-mobil">Pilih</button></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
        {{-- pilih modal pembeli--}}
        <div class="modal fade" id="pilihPelanggan" tabindex="-1">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Pilih Pelanggan
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table id="tbl-pelanggan" class="table table-hover">
                            <thead>
                                <th>No.</th>
                                <th>No. KTP</th>
                                <th>Nama Pembeli</th>
                                <th>Alamat</th>
                                <th>No. HP</th>
                                <th>Pilih</th>
                            </thead>
                            <tbody>
                                @foreach ($pembelis as $p)
                                <tr>
                                <td>{{ $i=(isset($i)?++$i:$i=1) }}</td>
                                <td>{{ $p->ktp_pembeli }}</td>
                                <td>{{ $p->nama_pembeli }}</td>
                                <td>{{ $p->alamat_pembeli }}</td>
                                <td>{{ $p->tlp_pembeli }}</td>
                                <td><button class="pilih-pelanggan">Pilih</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="/pembeli" class="btn btn-dark">Tambah Pembeli</a>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>

@endsection
@push('script')
    <script>
        $(function(){
            $('#tbl-pelanggan').DataTable()
            $('#tbl-mobil').DataTable()

            //INPUT KE FORM PELANGGAN
            $('#tbl-pelanggan').on('click', '.pilih-pelanggan', function(){
                alert('berhasil masuk')
                let ele = $(this).closest('tr')
                let ktp_pembeli = ele.find('td:eq(1)').text()
                let nama_pembeli = ele.find('td:eq(2)').text()
                let alamat = ele.find('td:eq(3)').text()
                let tlp_pembeli = ele.find('td:eq(4)').text()
                $('#ktp_pembeli').val(ktp_pembeli)
                $('#nama_pembeli').val(nama_pembeli)
                $('#alamat').val(alamat)
                $('#tlp_pembeli').val(tlp_pembeli)
                $('#pilihPelanggan').modal("hide")
            })

            //INPUT KE FORM MOBIL
            $('#tbl-mobil').on('click', '.pilih-mobil', function(){
                alert('berhasil masuk')
                let ele = $(this).closest('tr')
                let kode_mobil = ele.find('td:eq(1)').text()
                let merk = ele.find('td:eq(2)').text()
                let type = ele.find('td:eq(3)').text()
                let warna = ele.find('td:eq(4)').text()
                let harga_mobil = ele.find('td:eq(5)').text()
                $('#kode_mobil').val(kode_mobil)
                $('#merk').val(merk)
                $('#type').val(type)
                $('#warna').val(warna)
                $('#harga_mobil').val(harga_mobil)
                $('#pilihMobil').modal("hide")
            })

            //default tanggal pembayaran
            Date.prototype.toDateInputValue = (function() {
            var local = new Date(this);
            local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
            return local.toJSON().slice(0, 10);
            });
            $('#cash_tgl').val(new Date().toDateInputValue());

            //validasi pemilihan pembeli dan mobil
            $('#f-cash').submit(function(e) { 
            e.preventDefault();
            if($('#ktp_pembeli').val() == ""){
                alert('data pelanggan belum dipilih')
            }
            else if($('#kode_mobil').val() == ""){ 
                alert('data mobil belum dipilih')
            }
            else{ e.currentTarget.submit()
            }

})
        })
    </script>
@endpush