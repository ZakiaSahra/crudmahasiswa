<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Layanan Akademik</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Profil') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Permohonan KP</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>KP/tambah" class="btn btn-info mb-2">Pengajuan Layanan</a></div>
                <div class="col-md-12">
                <?= $this->session->flashdata('message'); ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Instansi KP</td>
                                <td>Alamat Instansi KP</td>
                                <td>Tanggal Mulai KP</td>
                                <td>Bidang Kerja</td>
                                <td>Gambar</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($kp as $us) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $us['nama_instansi']; ?></td>
                                    <td><?= $us['alamat']; ?></td>
                                    <td><?= $us['tanggal_mulai']; ?></td>
                                    <td><?= $us['bidang_kerja']; ?></td>
                                    <td>
                                        <img src="<?= base_url('assets/img/kp/') . $us['gambar']; ?>" style="width: 100px;" 
                                        class="img-thumbnail">
                                    </td>
                                    <td>
                                        <a href="<?= base_url('KP/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                        <a href="<?= base_url('KP/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
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