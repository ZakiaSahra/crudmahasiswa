<div id="layoutSidenav_content">
	<div class="container-fluid">
		<div class="container-fluid px-4">
			<h1 class="mt-4">Mahasiswa</h1>
			<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item"><a href="<?= base_url('Mahasiswa') ?>">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url('Profil') ?>">Mahasiswa</a></li>
                <li class="breadcrumb-item active">Profil</li>
			</ol>
			<h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
		</div>
		<div class="container-fluid">
			<div class="card mb-3" style="max-width: 900px;">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="" style="max-width: 100%">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?= $user['nama'] ?></h5>
							<p class="card-text"><?= $user['email'] ?></p>
							<p class="card-text"><small class="text-muted">Anggota sejak <?= date('Y-m-d', $user['date_created']) ?></small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>