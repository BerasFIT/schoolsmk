<!-- Content -->
<div class="last-news mt-5 mb-5">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col">
				<h1 class="text-center mt-5">Tenaga Kependidikan</h1>
			</div>
		</div>
		<div class="col-md-12 text-left">

			<h3 class="mt-5"><b><?= $kepsek->jabatan ?> SMK Kesehatan Darussalam Bergas</b></h3>
			<div class="row mb-5">
				<div class="col-md-3 text-md-left">
					<img src="<?= base_url('img/kepsek/' . $kepsek->photo) ?>" alt="Personal Trainer 2" class="img-responsive">
				</div>
				<div class="col-md-8 flex-valign">
					<h4 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
						<?= $kepsek->nama ?>
					</h4>
					<h5 class="my-0 font-weight-normal">
						Pendidikan : <?= $kepsek->pendidikan ?>
					</h5>
					<h5 class="my-0 font-weight-normal">
						Jabatan : <?= $kepsek->jabatan ?>
					</h5>
				</div>
			</div>

			<h3 class="mt-5"><b>Guru SMK Kesehatan Darussalam Bergas</b></h3>

			<?php foreach ($guru as $g) : ?>
				<div class="row mb-5">
					<div class="col-md-3 text-md-left">
						<img src="<?= base_url('img/guru/' . $g->photo) ?>" alt="Personal Trainer 2" class="img-responsive">
					</div>
					<div class="col-md-8 flex-valign">
						<h4 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
							<?= $g->nama ?>
						</h4>
						<h5 class="my-0 font-weight-normal">
							Pendidikan : <?= $g->pendidikan ?>
						</h5>
						<h5 class="my-0 font-weight-normal">
							Pelajaran : <?= $g->pelajaran ?>
						</h5>
						<h5 class="my-0 font-weight-normal">
							Jabatan : <?= $g->jabatan ?>
						</h5>
					</div>
				</div>
			<?php endforeach ?>

			<h3 class="mt-5"><b>Pegawai SMK Kesehatan Darussalam Bergas</b></h3>

			<?php foreach ($pegawai as $p) : ?>
				<div class="row mb-5">
					<div class="col-md-3 text-md-left">

						<img src="<?= base_url('img/pegawai/' . $p->photo) ?>" alt="Personal Trainer 2" class="img-responsive">
					</div>
					<div class="col-md-8 flex-valign">
						<h4 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
							<?= $p->nama ?>
						</h4>
						<h5 class="my-0 font-weight-normal">
							Pendidikan : <?= $p->pendidikan ?>
						</h5>
						<h5 class="my-0 font-weight-normal">
							Pelajaran : <?= $p->pelajaran ?>
						</h5>
						<h5 class="my-0 font-weight-normal">
							Jabatan : <?= $p->jabatan ?>
						</h5>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<!-- End of Content -->