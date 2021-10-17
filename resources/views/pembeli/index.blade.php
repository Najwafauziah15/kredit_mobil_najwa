@extends('layouts.header', ['title'=>'pembeli'])

@section('content')

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
    <section class="content-header">
        <div class="row">
        <div class="container-fluid">
            <div class="row">
            <form action="/pembeli/search" method="get" class="d-flex p-2">
                <input name="query" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>  
            <div>
                <a href="{{ url('/pembeli/create') }}" class="btn btn-dark mt-2">New Data</a>
                <a href="{{ url('/cash') }}" class="btn btn-dark mt-2">Pembayaran</a>
            </div>
            </div>

            <table class="table table-dark table-striped mt-2">
                <tr class="align-center">
                    <td>KTP</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Telepon</td>
                    <td>Aksi</td>  
                </tr>
                @foreach ($datas as $key=>$value)
                <tr class="align-center">
                    <td>{{ $value->ktp_pembeli }}</td>
                    <td>{{ $value->nama_pembeli }}</td>
                    <td>{{ $value->alamat_pembeli }}</td>
                    <td>{{ $value->tlp_pembeli }}</td>
                    <td>
                        <form action="{{ url($value->ktp_pembeli). '/pembeli/delete' }}" method="POST">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('apakah data mau dihapus')">hapus</button>
                        </form>
                        <a href="{{ url($value->ktp_pembeli.'/pembeli/edit') }}" class="btn btn-outline-success mt-2" onclick="return confirm('apakah data mau diubah')">ubah</a>
                    </td>
                </tr>   
                @endforeach
            </table>
          </div>
        </div>
    </section>
    </div>
</div>

@endsection