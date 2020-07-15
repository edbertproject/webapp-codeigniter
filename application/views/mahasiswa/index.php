<div class="container mt-3">

    <?php if($this->session->flashdata('flash')): ?>
        <div class="row">
            <div class="col-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-6">
            <a class="btn btn-primary" href="<?= base_url() ?>mahasiswa/tambah">Tambah Data</a>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($mahasiswa as $mhs) :?>
                <li class="list-group-item">
                    <?= $mhs['nama'] ?>
                    <a class="badge badge-danger float-right" href="<?= base_url()?>mahasiswa/hapus/<?= $mhs['id'] ?>" onclick="return confirm('yakin?')">Hapus</a>
                </li>
                <?php endforeach?>
            </ul>
        </div>
    </div>
</div>