<?php $this->load->view('auth/templates/header') ?>

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

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-success fixed-top navbar-transparent " color-on-scroll="350">
   <div class="container">
      <div class="navbar-translate">
         <img class="n-logo" src="<?= base_url() ?>/asset/landing_assets/img/smk-logo.png" width="40px">
         <a class="navbar-brand" href="<?= base_url() ?>" rel="tooltip" data-placement="bottom">
            SMK KESEHATAN DARUSSALAM BERGAS
         </a>
         <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar top-bar"></span>
            <span class="navbar-toggler-bar middle-bar"></span>
            <span class="navbar-toggler-bar bottom-bar"></span>
         </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="<?= base_url() ?>/asset/landing_assets/img/blurred-image-1.jpg">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- End Navbar -->
<div class="page-header clear-filter img-gradient">
   <div class="page-header-image" style="background-image: url(<?= base_url('img/background/' . $jurusan->photo) ?>)"></div>
   <div class="content">
      <div class="container">
         <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-login card-plain">
               <?= form_open("auth/login", ["class" => "form-signin"]) ?>
               <div class="card-header text-center">
                  <div class="logo-container">
                     <img src="<?= base_url() ?>/asset/landing_assets/img/smk-logo.png" alt="">
                  </div>
               </div>
               <div class="card-body">
                  <div class="input-group no-border input-lg">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="now-ui-icons users_circle-08"></i>
                        </span>
                     </div>
                     <input type="text" name="identity" class="form-control" id="inputEmail" placeholder="Email.." required autofocus />
                  </div>
                  <div class="input-group no-border input-lg">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="now-ui-icons text_caps-small"></i>
                        </span>
                     </div>
                     <input type="password" name="password" id="inputPassword" placeholder="Password.." class="form-control" required autofocus />
                  </div>
               </div>
               <div class="card-footer text-center">
                  <button class="btn btn-success btn-round btn-lg btn-block" type="submit">Masuk</button>

                  <?= form_close() ?>
               </div>
            </div>
         </div>
      </div>
   </div>

   <?php $this->load->view('auth/templates/footer') ?>