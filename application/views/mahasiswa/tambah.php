<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Tambah data mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <?php if( validation_errors() ): ?>
                            <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="nrp">Nrp</label>
                            <input type="text" class="form-control" id="nrp" name="nrp">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="custom-select" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Ekonomi">Ekonomi</option>
                                <option value="Manajemen">Manajemen</option>
                                <option value="Akutansi">Akutansi</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>