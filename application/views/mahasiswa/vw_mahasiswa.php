<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">

                <div class="table-responsive">
                    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">
                            <?php echo $judul; ?>
                        </h1>
                        <div class="col-md-6"><a href="<?= site_url("Mahasiswa/tambah") ?>"
                                class="btn btn-info mb-2">Tambah
                                Mahasiswa</a></div>
                                <?= $this->session->flashdata('message');?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <th>Nama</th>
                                    <th>Nim</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($mahasiswa as $us): ?>
                                    <tr>
                                        <td>
                                            <?= $i; ?>.
                                        </td>
                                        <td>
                                            <?= $us['nama']; ?>
                                        </td>
                                        <td>
                                            <?= $us['nim']; ?>
                                        </td>
                                        <td>
                                            <?= $us['email']; ?>
                                        </td>
                                        <td>
                                            <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>"
                                                class="badge badge-danger">Hapus</a>
                                            <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>"
                                                class="badge badge-warning">Edit</a>
                                            <a href="<?= base_url("Mahasiswa/detail/") . $us['id']; ?>"
                                                class="badge badge-info">Detail</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>