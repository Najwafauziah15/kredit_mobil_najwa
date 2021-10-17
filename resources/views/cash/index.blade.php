@extends('layouts.header', ['title'=>'mobil'])

@section('content')

<div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content-header">
        <div class="row">
        <div class="card text-white bg-dark m-2">
            <div class="card-header">
                <h3 class="card-title">Pembayaran</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body text-white">
                <div>
                    <a href="kredit" class="btn btn-outline-light">
                        Beli Kredit
                    </a>
                </div>
                <br>
                <div>
                    <a href="cash" class="btn btn-outline-light">
                        Beli Cash
                    </a>
                </div>
                <br>
                <div>
                    <a href="cash" class="btn btn-outline-light">
                        Bayar Cicilan
                    </a>
                </div>

                <div>
                    {{-- @include('cash.mobil') --}}
                    {{-- @include('cash.pembeli') --}}
                    {{-- @include('cash.cash') --}}
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>
        </div>
        </section>
    </div>
</div>

@endsection
@push('script')
@endpush