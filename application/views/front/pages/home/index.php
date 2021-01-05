<div class="wrapper">
	<div class="page-header clear-filter" filter-color="green">
		<div class="page-header-image" data-parallax="true" style="background-image:url('<?= base_url() ?>/asset/landing_assets/img/header.jpg');">
		</div>
		<div class="container">
			<div class="content-center brand">
				<img class="n-logo" src="<?= base_url() ?>/asset/landing_assets/img/smk-logo.png">
				<h1 class="h1-seo">SMK KESEHATAN DARUSSALAM BERGAS</h1>
			</div>
		</div>
	</div>
	<!-- Carousel -->
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<?php $no = 0; ?>
			<?php foreach ($banners as $banner) : ?>
				<?php $no++;  ?>
				<div class="carousel-item <?php if ($no <= 1) {
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
	<div class="section section-nucleo-icons">
		<div class="container">
			<div class="row">
				<div class="row mb-5">
					<div class="col-md-3 text-md-right">
						<img src="<?= base_url('img/sambutan/' . $sambutan->photo) ?>" alt="Circle Image" class="rounded-circle">
					</div>
					<div class="col-md-8 flex-valign">
						<h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
							Sambutan Kepala Sekolah
						</h3>
						<hr class="hr-primary w-70 ml-0 mb-3">
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
								<h4 class="title">Asisten Keperawatan</h4>
								<p class="category text-primary">Model</p>
								<p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
									<a href="#">links</a> for people to be able to follow them outside the site.
								</p>
								<a href="#pablo" class="btn btn-success btn-icon btn-round"><i class="fab fa-twitter"></i></a>
								<a href="#pablo" class="btn btn-success btn-icon btn-round"><i class="fab fa-instagram"></i></a>
								<a href="#pablo" class="btn btn-success btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
							</div>
						</div>
						<div class="col-md-6">
							<div class="team-player">
								<h4 class="title">Teknologi Laboratorium Medik</h4>
								<p class="category text-primary">Designer</p>
								<p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
									<a href="#">links</a> for people to be able to follow them outside the site.
								</p>
								<a href="#pablo" class="btn btn-success btn-icon btn-round"><i class="fab fa-twitter"></i></a>
								<a href="#pablo" class="btn btn-success btn-icon btn-round"><i class="fab fa-linkedin"></i></a>
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
					<div class="col">
						<h2 class="text-center">Berita Terbaru</h2>
						<hr>
					</div>
				</div>
				<div class="row mt-4">
					<?php foreach ($berita as $b) : ?>
						<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
							<div class="card" style="width: 15rem; height: 26rem;">
								<img style="height:150px" src="<?= base_url('img/berita/thumbs/' . $b->photo) ?>" class="card-img-top">
								<div class="card-body">
									<h6 class="card-title"><?= $b->title ?></h6>
									<p class="card-text"><?= character_limiter($b->content, 50) ?></p>
								</div>
								<div class="card-footer text-center">
									<a href="<?= base_url("blog/baca/$b->seo_title") ?>"><button class="btn btn-success">Baca Berita<i class="fa fa-angle-right ml-2"></i></button></a>
								</div>
							</div>
						</div>
					<?php endforeach ?>
				</div>
				<div class="row mt-4">
					<div class="col text-center">
						<a href="<?= base_url('blog') ?>" class="btn btn-secondary text-light">Lihat Selengkapnya<i class="fa fa-angle-double-right ml-2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- End of Berita -->