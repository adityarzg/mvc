<div class="container mt-3">

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h3>Daftar <?= $data['judul'] ?></h3>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nim</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($data['mhs'] as $mhs) : ?>
                    <tr>
                        <th><?= $mhs['nim'] ?></th>
                        <td><?= $mhs['nama']?></td>
                        <td><?= $mhs['jurusan']?></td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>

        </div>
    </div>

</div>