<div class="content-wrapper">

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">

                <div class="table-responsive">
                    <div class="container-fluid">
                        <h1 class="h3 mb-4 text-gray-800">
                            <?php echo $judul; ?>
                        </h1>

                                    <div class="card-header justify-content-center">
                                        Form Tambah Data Peminjam Buku
                                    </div>
                                    <div class="card-body">
                                    <form action="<?= base_url('Perpustakaan/update'); ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $perpustakaan['id'];?>"> 
                                            <div class="form-group">
                                                <label for="nama">Nama Buku</label>
                                                <input type="text" name="nama_buku" value="<?= $perpustakaan['nama_buku'];?>" class="form-control"
                                                    id="nama_prodi" placeholder="Nama Buku">
                                            </div>
                                            <div class="form-group">
                                                <label for="nim">Genre Buku</label>
                                                <input type="text" name="genre_buku" value="<?= $perpustakaan['genre_buku'];?>" class="form-control" id="ruangan"
                                                    placeholder="Genre Buku">
                                            </div>
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Tanggal Peminjaman</label>
                                                <input type="date" name="tgl_pinjam" value="<?= $perpustakaan['tgl_pinjam'];?>" class="form-control" id="jurusan"
                                                    placeholder="Tanggal Peminjaman">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Tanggal Pengembalian</label>
                                                <input type="date" name="tgl_kembali" value="<?= $perpustakaan['tgl_kembali'];?>" class="form-control"
                                                    id="akreditasi" placeholder="Tanggal Pengembalian">
                                            </div>
                                            <div class="form-group">
                                                <label for="prodi">No Anggota</label>
                                                <input type="text" name="no_anggota" value="<?= $perpustakaan['no_anggota'];?>" class="form-control"
                                                    id="nama_kaprodi" placeholder="No Anggota">

                                            </div>
                                            <div class="form-group">
                                                <label for="asal_sekolah">Nama Peminjam</label>
                                                <input type="text" name="nama_peminjam" value="<?= $perpustakaan['nama_peminjam'];?>" class="form-control"
                                                    id="tahun_berdiri" placeholder="Nama Peminjam">
                                            </div>
                                            <a href="<?= base_url('Perpustakaan') ?>" class="btn btn-danger">Tutup</a>
                                            <button type="submit" name="tambah" class="btn btn-primary float-right">
                                                Simpan Data </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>