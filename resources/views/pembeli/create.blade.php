@extends('layouts.header', ['title'=>'Data Pembeli Baru'])

@section('content')

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 mt-3">
                    <div class="card">
                        <div class="card-header">New Data</div>
                        <div class="card-body">
                            <form action="/pembeli/store" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="title">KTP</label>                 
                                    <input type="text" name="ktp_pembeli" id="ktp_pembeli" class="form-control @error('title') is-invalid @enderror">
                                </div>
                                @error('ktp_pembeli')
                                    <div class="danger mt-2" style="color: red;"> {{$message}} </div>
                                @enderror
            
                                <div class="form-group">
                                    <label for="title">Nama</label>                 
                                    <textarea name="nama_pembeli" id="nama_pembeli" class="form-control @error('body') is-invalid @enderror"> </textarea>
                                </div>
                                @error('nama_pembeli')
                                    <div class="danger mt-2" style="color: red;"> {{$message}} </div>
                                @enderror
            
                                <div class="form-group">
                                    <label for="title">Alamat</label>                 
                                    <textarea name="alamat_pembeli" id="alamat_pembeli" class="form-control @error('body') is-invalid @enderror"> </textarea>
                                </div>
                                @error('alamat_pembeli')
                                    <div class="danger mt-2" style="color: red;"> {{$message}} </div>
                                @enderror

                                <div class="form-group">
                                    <label for="title">Nomor Telepon</label>                 
                                    <input type="text" name="tlp_pembeli" id="tlp_pembeli" class="form-control @error('body') is-invalid @enderror">
                                </div>
                                @error('tlp_pembeli')
                                    <div class="danger mt-2" style="color: red;"> {{$message}} </div>
                                @enderror
            
                                <br>
                                <button type="submit" class="btn btn-outline-dark">Buat</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
</div>

@endsection

@push('script')
  
@endpush