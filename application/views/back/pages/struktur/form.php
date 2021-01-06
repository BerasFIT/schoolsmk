<div class="panel-header panel-header-sm">
</div>
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('success') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>
				<div class="card-header">
					<h4 class="card-title">Struktur Organisasi</h4>
				</div>
				<div class="card-body">
					<?= form_open_multipart($form_action) ?>
					<?= isset($content->id) ? form_hidden('id', $content->id) : '' ?>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" id="label-photo">Foto</label>
						<div class="col-sm-8">
							<?php if (!empty($content->photo)) : ?>
								<img src="<?= base_url("img/struktur_organisasi/$content->photo") ?>" alt="" height="150">
							<?php else : ?>
								<p>No Photo</p>
							<?php endif; ?>
							<br>
							<small><span class="text-danger">*</span> Maksimal ukuran gambar adalah 3 MB</small>
						</div>
					</div>
					<div class="row">
						<label class="col-sm-2 col-form-label" id="label-photo"></label>
						<div class="col-sm-8">
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
							<a href="<?= base_url('struktur') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>Kembali</a>
							<button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> Simpan</button>
						</div>
					</div>
					<?= form_close() ?>
				</div>
			</div>
		</div>
	</div>