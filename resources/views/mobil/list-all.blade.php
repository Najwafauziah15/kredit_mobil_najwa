<table id="tbl-mobil" class="table table-dark table-striped mt-2">
    <tr class="align-center">
        <td>No</td>
        <td>Kode Mobil</td>
        <td>Merk</td>
        <td>Type</td>
        <td>Warna</td>
        <td>Harga Mobil</td>
        <td>Foto</td>
        <td>Aksi</td>   
    </tr>
    <div>
    @foreach ($mobils as $k)
    <tr class="align-center">
        <td>{{ $i=(isset($i)?++$i:$i=1) }}</td>
        <td>{{ $k->kode_mobil }}</td>
        <td>{{ $k->merk}}</td>
        <td>{{ $k->type }}</td>
        <td>{{ $k->warna }}</td>
        <td>${{ $k->harga_mobil }}</td>
        <td><img src="{{ asset('assets') }}/car/{{ $k->gambar }}" width="200px"></td>
        <td>
            {{-- delete-mobil --}}
            <form action="{{ url($k->kode_mobil). '/mobil/delete' }}" method="POST">
                @csrf
                @method("delete")
                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('apakah data mau dihapus')">hapus</button>
            </form>
            
            {{-- edit-mobil --}}
            <a href="{{ url($k->kode_mobil.'/mobil/edit') }}" class="btn btn-outline-success mt-2" onclick="return confirm('apakah data mau diubah')">ubah</a>
            {{-- <button class="btn edit-mobil" data-toggle="modal" data-target="#formEditModal"
                data-mode = "edit"
                data-kode_mobil = "{{ $k->kode_mobil }}"
                data-merk = "{{ $k->merk}}"
                data-type = "{{ $k->type}}"
                data-warna = "{{ $k->warna}}"
                data-harga_mobil = "{{ $k->harga_mobil}}"
                data-gambar = "{{ $k->gambar}}"
            >
            <p class="btn btn-outline-success mt-2">Edit</p>
            </button> --}}
            {{-- <a href="{{ url($k->kode_mobil.'/mobil/edit') }}" class="btn btn-outline-success mt-2" onclick="return confirm('apakah data mau diubah')">ubah</a> --}}
                    
        </td>
    </tr>   
    @endforeach
    </div>
</table>