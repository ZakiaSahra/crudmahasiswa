<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Layanan Akademik</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Profil') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('KP') ?>">Permohonan KP</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header justify-content-center">
                            Form Tambah Permohonan KP
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama_instansi">Nama Instansi KP</label>
                                    <input type="text" name="nama_instansi" class="form-control" 
                                    value="<?= set_value('nama_instansi') ?>" id="nama_instansi" placeholder="Nama Instansi tempat KP">
                                    <?= form_error('nama_instansi', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat Instansi KP</label>
                                    <input type="text" name="alamat" class="form-control" 
                                    value="<?= set_value('alamat') ?>" id="alamat" placeholder="Alamat Instansi KP">
                                    <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_mulai">Tanggal Mulai KP</label>
                                    <input type="date" name="tanggal_mulai" class="form-control" value="<?= set_value('tanggal_mulai') ?>"
                                    id="tanggal_mulai" placeholder="tanggal mulai KP">
                                    <?= form_error('tanggal_mulai', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="bidang_kerja">Bidang Kerja</label>
                                    <input type="text" name="bidang_kerja" class="form-control" value="<?= set_value('bidang_kerja') ?>"
                                    id="bidang_kerja" placeholder="Bidang Kerja">
                                    <?= form_error('bidang_kerja', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                        <label for="gambar" class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                                <a href="<?= base_url('KP') ?>" class="btn btn-danger">Tutup</a>
                                <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>