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
                            Form Tambah Data Prodi
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nama">Nama Prodi</label>
                                    <input type="text" name="nama" class="form-control" id="nama_prodi" value="<?= set_value('nama'); ?>" 
                                    placeholder="Nama prodi">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nim">Ruangan</label>
                                    <input type="text" name="ruangan" class="form-control" id="ruangan" value="<?= set_value('ruangan'); ?>" 
                                    placeholder="Ruangan">
                                    <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jurusan</label>
                                    <input type="text" name="jurusan" class="form-control" id="jurusan" value="<?= set_value('jurusan'); ?>"
                                    placeholder="Jurusan">
                                    <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">Akreditasi</label>
                                    <input type="text" name="akreditasi" class="form-control" id="akreditasi" value="<?= set_value('akreditasi'); ?>" 
                                    placeholder="Akreditasi">
                                    <?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="prodi">Nama Kaprodi</label>
                                    <input type="text" name="nama_kaprodi" class="form-control" id="nama_kaprodi" value="<?= set_value('nama_kaprodi'); ?>" 
                                    placeholder="Nama kaprodi">
                                    <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>

                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Tahun Berdiri</label>
                                    <input type="text" name="tahun_berdiri" class="form-control" id="tahun_berdiri" value="<?= set_value('tahun_berdiri'); ?>" 
                                    placeholder="Tahun berdiri">
                                    <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">Output Lulusan</label>
                                    <input type="text" name="output_jurusan" class="form-control" id="lulusan" value="<?= set_value('output_jurusan'); ?>" 
                                    placeholder="Output Lulusan">
                                    <?= form_error('output_jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="asal_sekolah">Gambar</label>
                                    <input type="file" name="gambar" class="form-control" id="lulusan" value="<?= set_value('gambar'); ?>" 
                                    placeholder="Choose File">
                                    <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">
                                    Tambah Prodi </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
