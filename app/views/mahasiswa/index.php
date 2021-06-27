<div class="container mt-3">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
            <h3>Daftar <?= $data['judul'] ?></h3>
            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php Flasher::flash(); ?>
                </div>
            </div>

            <button type="button" class="btn btn-sm btn-success mt-2 tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data
            </button>

            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <tr>
                            <th><?= $no++ ?></th>
                            <th><?= $mhs['nama'] ?></th>
                            <th>
                                <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['nim']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-primary">Detail</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['nim']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-success tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-nim="<?= $mhs['nim']?>">Edit</a>
                                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['nim']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Hapus</a>
                            </th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalUtama">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <select class="form-select" aria-label="jurusan" id="jurusan" name="jurusan">
                            <option selected></option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informasi">Manajemen Informasi</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>