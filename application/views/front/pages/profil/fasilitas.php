<!-- Fasilitas -->
<div class="fasilitas mt-5 mb-5 pb-5 pt-5">
	<div class="container">
		<h1 class="display-4 my-auto text-center">Fasilitas</h1>
		<div class="row text-center mt-3">
			<?php foreach ($fasilitas as $f) : ?>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 p-2 my-4">
					<h5 class="text-center"><?= $f->name ?></h5>
					<img style="height:180px" src="<?= base_url('img/fasilitas/' . $f->photo) ?>" class="img-thumbnail" data-toggle="modal" data-target="#<?= $f->unik ?>">
				</div>
				<!-- Modal -->
				<div class="modal fade" id="<?= $f->unik ?>" tabindex="-1" role="dialog" aria-labelledby="<?= $f->unik ?>Title" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle"><?= $f->name ?></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<img src="<?= base_url('img/fasilitas/' . $f->photo) ?>" class="text-center" height="100%" width="100%" data-toggle="modal" data-target="#<?= $f->unik ?>">
								<hr>
								<h5>Keterangan</h5>
								<div class="text-justify">
								<p><?= $f->content ?></p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</div>
<!-- End of Fasilitas -->