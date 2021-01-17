<!-- Content -->
<div class="content mt-5 mb-5 pb-5 pt-5">
	<div class="container">
	<h1 class="display-4 my-auto text-center">Tenaga Kependidikan</h1>

		<table>
			<tr>
				<td colspan="2">Profil <?= $kepsek->jabatan ?></td>
			</tr>
			<tr>
				<td><img height="100px" width="100px" src="<?= base_url('img/kepsek/' . $kepsek->photo) ?>"></td>
				<td>
					<table>
						<tr><td>NIP</td><td>:</td><td><?= $kepsek->nip ?></td></tr>
						<tr><td>Nama</td><td>:</td><td><?= $kepsek->nama ?></td></tr>
						<tr><td>Pendidikan Terkahir</td><td>:</td><td><?= $kepsek->pendidikan ?></td></tr>
						<tr><td>Jabatan</td><td>:</td><td><?= $kepsek->jabatan ?></td></tr>
					</table>
				</td>
			</tr>
		</table><br>

		<table>
			<tr>
				<td colspan="2">Profil Pegawai</td>
			</tr>
			<?php foreach ($pegawai as $p) : ?>
			<tr>
				<td><img height="100px" width="100px" src="<?= base_url('img/pegawai/' . $p->photo) ?>"></td>
				<td>
					<table>
						<tr><td>NIP</td><td>:</td><td><?= $p->nip ?></td></tr>
						<tr><td>Nama</td><td>:</td><td><?= $p->nama ?></td></tr>
						<tr><td>Pendidikan Terkahir</td><td>:</td><td><?= $p->pendidikan ?></td></tr>
						<tr><td>Pelajaran</td><td>:</td><td><?= $p->pelajaran ?></td></tr>
						<tr><td>Jabatan</td><td>:</td><td><?= $p->jabatan ?></td></tr>
					</table>
				</td>
			</tr>
			<?php endforeach ?>
		</table><br>	

		<table>
			<tr>
				<td colspan="2">Profil Guru</td>
			</tr>
			<?php foreach ($guru as $g) : ?>
			<tr>
				<td><img height="100px" width="100px" src="<?= base_url('img/guru/' . $g->photo) ?>"></td>
				<td>
					<table>
						<tr><td>NIP</td><td>:</td><td><?= $g->nip ?></td></tr>
						<tr><td>Nama</td><td>:</td><td><?= $g->nama ?></td></tr>
						<tr><td>Pendidikan Terkahir</td><td>:</td><td><?= $g->pendidikan ?></td></tr>
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
