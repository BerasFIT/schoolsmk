
<!-- Fasilitas -->
<div class="fasilitas mt-5 mb-5 pb-5 pt-5">
	<div class="container">
	<h1 class="display-4 my-auto text-center">Fasilitas</h1>
		<div class="row text-center">
			<?php foreach ($fasilitas as $f) : ?>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 p-2 my-4">
					<h5 class="text-center"><?= $f->name ?></h5>
					<a href="<?= base_url('img/fasilitas/' . $f->photo) ?>" target="_blank">
						<img style="height:180px" src="<?= base_url('img/fasilitas/' . $f->photo) ?>" class="img-thumbnail">
					</a>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<!-- End of Fasilitas -->