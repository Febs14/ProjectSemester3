<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">
                            <?php echo $judul; ?>
                        </h1>
                        <div class="col-md-6"><a href="<?= site_url("Perpustakaan/tambah") ?>" class="btn btn-info mb-2">Tambah
                                Data</a></div>

                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Buku</td>
                                    <td>Genre Buku</td>
                                    <td>Tanggal Peminjaman</td>
                                    <td>Tanggal Pengembalian</td>
                                    <td>No Anggota</td>
                                    <td>Nama Peminjam</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($perpustakaan as $pp): ?>
                                <tr>
                                    <td><?= $i; ?>.</td>
                                    <td><?= $pp['nama_buku']; ?></td>
                                    <td><?= $pp['genre_buku']; ?></td>
                                    <td><?= $pp['tgl_pinjam']; ?></td>
                                    <td><?= $pp['tgl_kembali']; ?></td>
                                    <td><?= $pp['no_anggota']; ?></td>
                                    <td><?= $pp['nama_peminjam']; ?></td>
                                    <td>
                                        <a href="<?= site_url("Perpustakaan/hapus/") . $pp['id'];?>" class="badge badge-danger">Hapus</a>
                                        <a href="<?= site_url("Perpustakaan/edit/") . $pp['id'];?> " class="badge badge-warning">Edit</a>
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