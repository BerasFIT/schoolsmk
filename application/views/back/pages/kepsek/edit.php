<div class="container">
	<div class="row mb-4">
		<div class="col">
			<h3>Form Update Kepala Sekolah</h3>
		</div>
	</div>

	<?= form_open_multipart($form_action) ?>
		<?= isset($content->id) ? form_hidden('id', $content->id) : '' ?>

		<div class="form-group row">
			<label for="nip" class="col-sm-2 col-form-label">NIP</label>
			<div class="col-sm-8" id="editor">
                <input type="text" name="nip" id="nip" value="<?= $content->nip ?>" required class="form-control">
				<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
			</div>
		</div>

        <div class="form-group row">
			<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-sm-8" id="editor">
                <input type="text" name="nama" id="nama" value="<?= $content->nama ?>" required class="form-control">
				<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
			</div>
		</div>

        <div class="form-group row">
			<label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
			<div class="col-sm-8" id="editor">
                <input type="text" name="pendidikan" id="pendidikan" value="<?= $content->pendidikan ?>" required class="form-control">
				<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
			</div>
		</div>

        <div class="form-group row">
			<label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
			<div class="col-sm-8" id="editor">
                <input type="text" name="jabatan" id="jabatan" value="<?= $content->jabatan ?>" required class="form-control">
				<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label" id="label-photo">Foto</label>
			<div class="col-sm-8">
				<?php if(!empty($content->photo)) : ?>
					<img src="<?= base_url("img/kepsek/$content->photo") ?>" alt="" height="150">
				<?php else: ?>
					<p>No Photo</p>
				<?php endif; ?>
				<br> 
				<small><span class="text-danger">*</span>	Maksimal ukuran gambar adalah 3 MB</small>
				<br> <br>
				<input name="photo" type="file" class="form-control-file">
				<?php if($this->session->flashdata('image_error')) :  ?>
                <small class="form-text text-danger">
                  <?= $this->session->flashdata('image_error') ?>
                </small>
				<?php endif ?>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-8 offset-2">
				<a href="<?= base_url('kepsek') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>Kembali</a>
				<button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> Simpan</button>
			</div>
		</div>
	<?= form_close() ?>
</div>
