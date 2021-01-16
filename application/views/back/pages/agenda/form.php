<script src="<?= base_url("asset/tinymce/js/tinymce/tinymce.min.js") ?>"></script>
	<script>
		tinymce.init({
			selector: '.textEditor',
			plugins: 'link lists image advlist fullscreen media code table emoticons textcolor codesample hr preview',
			menubar: false,
			toolbar: [
				'undo redo | bold italic underline strikethrough forecolor backcolor bullist numlist | blockquote subscript superscript | alignleft aligncenter alignright alignjustify | image media link',
				' formatselect | cut copy paste selectall | table emoticons hr | removeformat | preview code | fullscreen',
			],
		});
	</script>

<div class="container">
	<div class="row mb-4">
		<div class="col">
			<h3>Form Update Agenda</h3>
		</div>
	</div>

	<?= form_open_multipart($form_action) ?>
		<?= isset($content->id) ? form_hidden('id', $content->id) : '' ?>

		<div class="form-group row">
			<label for="agenda" class="col-sm-2 col-form-label">Agenda</label>
			<div class="col-sm-8" id="editor">
				<textarea name="content" id="content" class="textEditor form-control" rows="10" value="<?= $content->content ?>"><?= $content->content ?></textarea>
				<?= form_error('content', '<small class="form-text text-danger">', '</small>') ?>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label" id="label-photo">Foto</label>
			<div class="col-sm-8">
				<?php if(!empty($content->photo)) : ?>
					<img src="<?= base_url("img/agenda/$content->photo") ?>" alt="" height="150">
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
				<a href="<?= base_url('agenda') ?>" class="btn btn-sm btn-secondary"><i class="fas fa-angle-left mr-1"></i>Kembali</a>
				<button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-check mr-1"></i> Simpan</button>
			</div>
		</div>
	<?= form_close() ?>
</div>
