<!-- Content -->
<div class="content mt-5 mb-5 pb-5 pt-5">
	<div class="container">
	<h1 class="display-4 my-auto text-center">Tenaga Kependidikan</h1>

		<h4>Profil <?= $kepsek->jabatan ?></h4>
		<hr>

		<table>
			<tr>
				<td><img class="img-responsive" height="125px=" width="125px" src="<?= base_url('img/kepsek/' . $kepsek->photo) ?>"></td>
				<td>
					<table>
						<tr><td>NIP</td><td>:</td><td><?= $kepsek->nip ?></td></tr>
						<tr><td>Nama</td><td>:</td><td><?= $kepsek->nama ?></td></tr>
						<tr><td>Pendidikan</td><td>:</td><td><?= $kepsek->pendidikan ?></td></tr>
						<tr><td>Jabatan</td><td>:</td><td><?= $kepsek->jabatan ?></td></tr>
					</table>
				</td>
			</tr>
		</table>

		<h4>Profil Pegawai</h4>
		<hr>

		<table>
			<?php foreach ($pegawai as $p) : ?>
			<tr>
				<td><img class="img-responsive" height="100px" width="100px" src="<?= base_url('img/pegawai/' . $p->photo) ?>"></td>
				<td>
					<table>
						<tr><td>NIP</td><td>:</td><td><?= $p->nip ?></td></tr>
						<tr><td>Nama</td><td>:</td><td><?= $p->nama ?></td></tr>
						<tr><td>Pendidikan</td><td>:</td><td><?= $p->pendidikan ?></td></tr>
						<tr><td>Pelajaran</td><td>:</td><td><?= $p->pelajaran ?></td></tr>
						<tr><td>Jabatan</td><td>:</td><td><?= $p->jabatan ?></td></tr>
					</table>
				</td>
			</tr>
			<?php endforeach ?>
		</table>

		<h4>Profil Guru</h4>
		<hr>

		<table>
			<?php foreach ($guru as $g) : ?>
			<tr>
				<td><img class="img-responsive" height="100px" width="100px" src="<?= base_url('img/guru/' . $g->photo) ?>"></td>
				<td>
					<table>
						<tr><td>NIP</td><td>:</td><td><?= $g->nip ?></td></tr>
						<tr><td>Nama</td><td>:</td><td><?= $g->nama ?></td></tr>
						<tr><td>Pendidikan</td><td>:</td><td><?= $g->pendidikan ?></td></tr>
						<tr><td>Pelajaran</td><td>:</td><td><?= $g->pelajaran ?></td></tr>
						<tr><td>Jabatan</td><td>:</td><td><?= $g->jabatan ?></td></tr>
					</table>
				</td>
			</tr>
			<?php endforeach ?>
		</table>	
		
	</div>
</div>
<!-- End of Content -->
