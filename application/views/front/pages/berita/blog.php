<!--================Home Banner Area =================-->
<div class="jumbotron banner_area jumbotron-fluid bg-white">
	<div class="container">
		<br>
		<h1 class="display-4 my-auto text-center mt-5">Berita</h1>
	</div>
</div>
<!--================End Home Banner Area =================-->

<!-- Berita -->
<div class="last-news">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-12 stretch-card grid-margin">
				<div class="card mb-5">
					<div class="card-body">
						<?php foreach ($news as $n) : ?>
							<div class="row mt-5 mb-lg-5">
								<div class="col-sm-4 grid-margin">
									<div class="position-relative">
										<div class="rotate-img">
											<img src="<?= base_url('img/berita/thumbs/' . $n->photo) ?>" width="500px" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-sm-8  grid-margin">
									<h3 class="mb-2 font-weight-600">
										<?= $n->title ?>
									</h3>
									<div class="fs-13 mb-2">
										<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i><?= mediumdate_indo($n->date) ?>
									</div>
									<p class="mb-0"><?= character_limiter($n->content, 50) ?>
									</p>
									<p><a href="<?= base_url("blog/baca/$n->seo_title") ?>"><button class="btn btn-success">Lanjutkan Membaca<i class="fa fa-angle-right ml-2"></i></button></a></p>
								</div>

							</div>
							<hr>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- End of Berita -->