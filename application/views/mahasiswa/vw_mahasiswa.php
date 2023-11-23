<div id="layoutSidenav_content">
    <div class="container-fluid">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Mahasiswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('Mahasiswa') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
            <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-info mb-2">Tambah Mahasiswa</a></div>
                <div class="col-md-12">
                    <?= $this->session->flashdata('message'); ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Nim</td>
                                <td>Email</td>
                                <td>aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($mahasiswa as $us) : ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $us['nama']; ?></td>
                                    <td><?= $us['nim']; ?></td>
                                    <td><?= $us['email']; ?></td>
                                    <td>
                                        <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                        <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
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