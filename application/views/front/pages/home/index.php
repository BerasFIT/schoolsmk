<!-- Carousel -->

<style>
	.img-gradient:after {
		content: '';
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		display: inline-block;
		background: -moz-linear-gradient(top, rgba(0, 47, 75, 0.5) 0%, rgba(29, 201, 89, 0.5) 100%);
		/* FF3.6+ */
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(29, 201, 89, 0.5)), color-stop(100%, rgba(0, 47, 75, 0.5)));
		/* Chrome,Safari4+ */
		background: -webkit-linear-gradient(top, rgba(0, 47, 75, 0.5) 0%, rgba(29, 201, 89, 0.5) 100%);
		/* Chrome10+,Safari5.1+ */
		background: -o-linear-gradient(top, rgba(0, 47, 75, 0.5) 0%, rgba(29, 201, 89, 0.5) 100%);
		/* Opera 11.10+ */
		background: -ms-linear-gradient(top, rgba(0, 47, 75, 0.5) 0%, rgba(29, 201, 89, 0.5) 100%);
		/* IE10+ */
		background: linear-gradient(to bottom, rgba(0, 47, 75, 0.5) 0%, rgba(29, 201, 89, 0.5) 100%);
		/* W3C */
		filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#002f4b', endColorstr='#00000000', GradientType=0);
		/* IE6-9 */
	}

	.img-gradient img {
		display: block;
	}
</style>

<div id="carouselExampleCaptions" class="carousel slide" data-ride=" carousel">
	<div class="carousel-inner" role="listbox">
		<?php $no = 0; ?>
		<?php foreach ($banners as $banner) : ?>
			<?php $no++;  ?>
			<div class="carousel-item img-gradient <?php if ($no <= 1) {
														echo "active";
													} ?>">
				<img src="<?= base_url("img/banner/$banner->photo") ?>" class="d-block w-100">
				<div class="carousel-caption d-none d-md-block">
					<h1><?= $banner->title ?></h1>
					<p><?= $banner->text ?></p>
				</div>
			</div>
		<?php endforeach ?>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		<i class="now-ui-icons arrows-1_minimal-left"></i>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		<i class="now-ui-icons arrows-1_minimal-right"></i>
	</a>
</div>
<!-- End of Carousel -->

<!-- Sambutan -->
<div class="sambutan mt-5 mb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-5 text-center">
				<img src="<?= base_url('img/sambutan/' . $sambutan->photo) ?>" class="img-thumbnail img-fluid rounded-circle">
			</div>
			<div class="col-lg-9 col-md-8">
				<h2 class="title">Sambutan Kepala Sekolah</h2>
				<hr>
				<p class="text-justify"><?= $sambutan->content ?></p>
			</div>
		</div>
	</div>
</div>
<!-- End of Sambutan -->

<!-- Jurusan -->
<div class="section section-tabs text-center">
	<div class="container">
		<h2 class="title">Jurusan</h2>
		<div class="team">
			<div class="row">
				<div class="col-md-6">
					<div class="team-player">
					    <img src="<?= base_url() ?>/img/icon/akplog.png">
						<h4 class="title">Asisten Keperawatan</h4>
						<p class="description">Detail penjelasan tentang jurusan asisten keperawatan dapat diakses dengan klik link
							<a href="<?= base_url('jurusan/ak') ?>">disini</a>.
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="team-player">
						<h4 class="title">Teknologi Laboratorium Medik</h4>
						<p class="description">Detail penjelasan tentang jurusan teknologi laboratorium medik dapat diakses dengan klik link
							<a href="<?= base_url('jurusan/ap') ?>">disini</a>.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End of Jurusan -->


<!-- Berita -->
<div class="last-news mt-5 mb-5">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<h2 class=" title text-center">Berita Terbaru</h2>
			<div class="col-lg-12 stretch-card grid-margin">
				<div class="card">
					<div class="card-body">
						<?php foreach ($berita as $b) : ?>
							<div class="row mt-5 mb-lg-5">

								<div class="col-sm-4 grid-margin">
									<div class="position-relative">
										<div class="rotate-img">
											<img src="<?= base_url('img/berita/thumbs/' . $b->photo) ?>" width="500px" class="img-fluid" />
										</div>
									</div>
								</div>
								<div class="col-sm-8  grid-margin">
									<h3 class="mb-2 font-weight-600">
										<?= $b->title ?>
									</h3>
									<div class="fs-13 mb-2">
										<i class="fa fa-calendar-alt mr-2" aria-hidden="true"></i><?= mediumdate_indo($b->date) ?>
									</div>
									<p class="mb-0"><?= character_limiter($b->content, 150) ?>
									</p>
									<p><a href="<?= base_url("blog/baca/$b->seo_title") ?>"><button class="btn btn-success">Baca Berita<i class="fa fa-angle-right ml-2"></i></button></a></p>
								</div>

							</div>
							<hr>
						<?php endforeach ?>
					</div>
				</div>
			</div>
			<a href="<?= base_url('blog') ?>" class="btn btn-success text-light">Lihat Selengkapnya<i class="fa fa-angle-double-right ml-2"></i></a>
		</div>
	</div>
</div>

<!-- End of Berita -->

<!-- Sosmed -->
<div class="section section-tabs text-center">
	<div class="container">
		<h2 class="title">Sosial Media</h2>
		<div class="team">
			<div class="row">
				<div class="col">
					<div class="team-player">
						<h4 class="title">Instagram</h4>
						<div class="instagram__widget" data-user="smkkesehatandarussalam" data-header="yes" data-color="#1CC98A" data-width="75vh"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End of Sosmed -->

<!-- Lokasi -->
<div class="last-news mt-5 mb-5">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col">
				<h2 class="title text-center">Lokasi</h2>
				<hr>
			</div>
		</div>
		<div class="col-md-12 mb-4">
			<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" style="width: 100% !important; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.598540753687!2d110.3974263140816!3d-7.172318794821471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70865daa6515db%3A0x8c2392c543f6b6ab!2sSMK%20KESEHATAN%20DARUSSALAM%2C%20BERGAS!5e0!3m2!1sid!2sid!4v1610513140630!5m2!1sid!2sid" aria-label="SMK Kesehatan Darussalam Bergas"></iframe>
		</div>
	</div>
</div>
<!-- End of Lokasi -->