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
                <h3 class="card-title ">Data Mobil</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" style="color: white" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body text-white">
                <div class="modal-title">
                    <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#formInputModal">
                        Tambah Data
                    </button>
                </div>

                <div style="margin-top:20px">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert" id="success-alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>

        <div>
            @include('mobil.list-all')
        </div>

        </div>
        </section>
    </div>
</div>

@include('mobil.form')
{{-- @include('mobil.edit') --}}
@endsection
@push('script')
<script>
    $(function(){
        //data table
        $('#tbl-mobil').DataTable()

        //menghapus alert
        $('#success-alert').fadeTo(2000,500).slideUp(500,function(){
            $('#success-alert').slideUp(500);
        });
        $('#error-alert').fadeTo(2000,500).slideUp(500,function(){
            $('#error-alert').slideUp(500);
        })

        // //delete mobil
        // $('.delete-mobil').click(function(e){
        //     e.preventDefault()
        //     let data = $(this).closest('tr').find('td:eq(1)').text()
        //     swal({
        //         title: "Apakah kamu yakin?",
        //         text: "Data "+data+" akan dihapus",
        //         icon: "warning",
        //         buttons: true,
        //         dangerMode: true
        //     })
        //     .then((req)=>{
        //         if(req) $(e.target).closest('form').submit()
        //         else swal.close()
        //     })
        // })

        //edit dan input mobil
        // $('#formInputModal').on('show.bs.modal', function(event){
        //     let button = $(event.relatedTarget)
        //     console.log(button)
        //     let kode_mobil = button.data('kode_mobil')
        //     let merk = button.data('merk')
        //     let type = button.data('type')
        //     let warna = button.data('warna')
        //     let harga_mobil = button.data('harga_mobil')
        //     let gambar = button.data('gambar')
        //     let mode = button.data('mode')
        //     let modal = $(this)
        //     if(mode == "edit"){
        //         modal.find('.modal-title').text('Edit Data Kelas')
        //         modal.find('.modal-body #kode_mobil').val(kode_mobil)
        //         modal.find('.modal-body #type').val(type).change()
        //         modal.find('.modal-body #warna').val(warna).change()
        //         modal.find('.modal-body #harga_mobil').val(harga_mobil).change()
        //         modal.find('.modal-body #gambar').val(gambar).change()
        //         modal.find('.modal-footer #btn-submit').text('update')
        //         modal.find('.modal-body #method').html('{{ method_field('patch') }}')
        //         modal.find('.modal-body form').attr('action','mobil/'+kode_mobil)
        //     }
        //     else {
        //         modal.find('.modal-title').text('Input Data Kelas')
        //         modal.find('.modal-body #kode_mobil').val('')
        //         modal.find('.modal-body #type').val('').change()
        //         modal.find('.modal-body #warna').val('').change()
        //         modal.find('.modal-body #harga_mobil').val('').change()
        //         modal.find('.modal-body #gambar').val('').change()
        //         modal.find('modal-body #method').html("")
        //         modal.find('.modal-footer #btn-submit').text('submit')   
        //     }
        // })
    })
</script>
@endpush