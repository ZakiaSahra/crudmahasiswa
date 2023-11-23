<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Prodi</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Mahasiswa') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('Prodi') ?>">Prodi</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Tambah Data Prodi
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="prodi">Prodi</label>
                                    <select name="prodi" id="prodi" class="form-control" value="<?= set_value('prodi') ?>">
                                        <option value="">Pilih Prodi</option>
                                        <option value="Teknik Informatika">Teknik Informatika</option>
                                        <option value="Sistem Informasi">Sistem Informasi</option>
                                    </select>
                                    <?= form_error('prodi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="ruangan">Ruangan</label>
                                    <input type="text" name="ruangan" class="form-control" value="<?= set_value('ruangan') ?>" 
                                    id="ruangan" placeholder="ruangan">
                                    <?= form_error('ruangan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select name="jurusan" id="jurusan" class="form-control" value="<?= set_value('jurusan') ?>">
                                        <option value="">Jurusan</option>
                                        <option value="JTI">JTI</option>
                                        <option value="JTIN">JTIN</option>
                                    </select>
                                    <?= form_error('jurusan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">Akreditasi</label>
                                    <select name="akreditasi" id="akreditasi" class="form-control" value="<?= set_value('akreditasi') ?>">
                                        <option value="">Akreditasi</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                    </select>
                                    <?= form_error('akreditasi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kaprodi">Nama Kaprodi</label>
                                    <input type="text" name="nama_kaprodi" class="form-control" value="<?= set_value('nama_kaprodi') ?>"
                                     id="nama_kaprodi" placeholder="nama_kaprodi">
                                    <?= form_error('nama_kaprodi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_berdiri">Tahun Berdiri</label>
                                    <input type="text" name="tahun_berdiri" class="form-control" value="<?= set_value('tahun_berdiri') ?>" 
                                    id="tahun_berdiri" placeholder="Tahun Berdiri">
                                    <?= form_error('tahun_berdiri', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="output_lulusan">Output Lulusan</label>
                                    <input type="text" name="output_lulusan" class="form-control" value="<?= set_value('output_lulusan') ?>" 
                                    id="output_lulusan" placeholder="Output Lulusan">
                                    <?= form_error('output_lulusan', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                        <label for="gambar" class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>