<div class="container mt-3">

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h3>Daftar <?= $data['judul'] ?></h3>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <tr>
                            <th><?= $mhs['nama'] ?></th>
                            <th><a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['nim']; ?>" style="text-decoration: none;" class="badge rounded-pill bg-primary">Detail</a></th>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

</div>