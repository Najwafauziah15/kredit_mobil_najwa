<div class="modal fade" id="formInputModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>

            <div class="modal-body">
                <form action="mobil" method="POST">
                    @csrf
                    <div id="method"></div>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="kode_mobil" class="form-label">Kode Mobil</label>
                            <input type="text"  name="kode_mobil" id="kode_mobil" class="form-control" placeholder="Kode Mobil" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="merk" class="form-label">Merk</label>
                            <input type="text" name="merk" id="merk" class="form-control" placeholder="Merk" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" name="type" id="type" class="form-control" placeholder="Type" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="warna" class="form-label">Warna</label>
                            <input type="text" name="warna" id="warna" class="form-control" placeholder="Warna" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="harga_mobil" class="form-label">Harga Mobil</label>
                            <input type="text" name="harga_mobil" id="harga_mobil" class="form-control" placeholder="Harga Mobil $" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="gambar" class="form-label">Foto</label>
                            <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Warna" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" id="btn-submit" class="btn btn-dark">Tambah Mobil</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
