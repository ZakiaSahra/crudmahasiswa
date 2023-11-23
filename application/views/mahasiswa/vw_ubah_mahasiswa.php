<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Mahasiswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Mahasiswa') ?>">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('Mahasiswa') ?>">Mahasiswa</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Form Edit Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" value="<?= $mahasiswa['nama']; ?>" 
                                class="form-control" id="nama" placeholder="Nama">
                                <?= form_error('nama', '<small class="text-danger p-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" name="nim" value="<?= $mahasiswa['nim']; ?>" 
                                class="form-control" id="nim" placeholder="NIM">
                                <?= form_error('nim', '<small class="text-danger p-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                    <option value="Laki-laki" <?php if ($mahasiswa['jenis_kelamin'] == "Laki-laki") {
                                        echo "selected";
                                    } ?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if ($mahasiswa['jenis_kelamin'] == "Perempuan") {
                                        echo "selected";
                                    } ?>>Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin', '<small class="text-danger p-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" value="<?= $mahasiswa['email']; ?>" 
                                class="form-control" id="email" placeholder="Email">
                                <?= form_error('email', '<small class="text-danger p-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="prodi">Prodi</label>
                                <select name="prodi" class="form-control" id="prodi">
                                    <?php foreach ($prodi as $p) : ?>
                                        <option value="<?= $p['id']; ?>" <?php if ($mahasiswa['prodi'] == $p['id']) {
                                            echo "selected";
                                        } ?>><?= $p['prodi']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('prodi', '<small class="text-danger p-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" value="<?= $mahasiswa['asal_sekolah']; ?>" 
                                class="form-control" id="asal_sekolah" placeholder="Asal Sekolah">
                                <?= form_error('asal_sekolah', '<small class="text-danger p-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No HP</label>
                                <input type="text" name="no_hp" value="<?= $mahasiswa['no_hp']; ?>" 
                                class="form-control" id="no_hp" placeholder="No HP">
                                <?= form_error('no_hp', '<small class="text-danger p-1">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" value="<?= $mahasiswa['alamat']; ?>" 
                                class="form-control" id="alamat" placeholder="Alamat">
                                <?= form_error('alamat', '<small class="text-danger p-1">', '</small>'); ?>
                            </div>
                            <a href="<?= base_url('Mahasiswa') ?>" class="btn btn-danger">Tutup</a>
                            <button type="submit" name="edit" class="btn btn-primary float-right">Edit Mahasiswa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>