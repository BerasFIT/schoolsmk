<div class="container">
	<div class="col-xl-12 col-lg-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h4 class="m-0 font-weight-bold text-success">Form <?= $title ?></h4>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="row mb-4">
					<div class="col">
					</div>
				</div>

				<?= form_open_multipart($form_action) ?>
				<?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>

				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">Nama Fasilitas</label>
					<div class="col-sm-8">
						<input type="text" name="name" id="name" value="<?= $input->name ?>" required class="form-control">
						<?= form_error('name', '<small class="form-text text-danger">', '</small>') ?>
					</div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label" id="label-photo">Foto</label>
					<div class="col-sm-8">
						<?php if (!empty($input->photo)) : ?>
							<img src="<?= base_url("img/fasilitas/$input->photo") ?>" alt="" height="150">
						<?php else : ?>
							<p>No Photo</p>
						<?php endif; ?>
						<br>
						<small><span class="text-danger">*</span> Maksimal ukuran gambar adalah 3 MB</small>
						<br> <br>
						<input name="photo" type="file" class="form-control-file">
						<?php if ($this->session->flashdata('image_error')) :  ?>
							<small class="form-text text-danger">
								<?= $this->session->flashdata('image_error') ?>
							</small>
						<?php endif ?>
					</div>
				</div>

				<div class="row mt-4">
					<div class="col-8 offset-2">
						<a href="<?= base_url('fasilitas') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>Kembali</a>
						<button type="submit" class="btn btn-sm btn-success float-right"><i class="fas fa-check mr-1"></i> Simpan</button>
					</div>
				</div>
				<?= form_close() ?>
			</div>
		</div>
	</div>
</div>