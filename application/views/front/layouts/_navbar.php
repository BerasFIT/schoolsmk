 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg bg-success fixed-top navbar-transparent " color-on-scroll="400">
 	<div class="container">
 		<div class="navbar-translate">
 			<a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
 				SMK Kesehatan Darussalam Bergas
 			</a>
 			<button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="navbar-toggler-bar top-bar"></span>
 				<span class="navbar-toggler-bar middle-bar"></span>
 				<span class="navbar-toggler-bar bottom-bar"></span>
 			</button>
 		</div>
 		<div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
 			<ul class="navbar-nav">
 				<li class="nav-item <?php if ($title == 'Beranda') echo "active"; ?>">
 					<a class="nav-link" href="<?= base_url() ?>">
 						<p>Beranda</p>
 					</a>
 				</li>
 				<li class="nav-item dropdown">
 					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
 						<p>Login</p>
 					</a>
 					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
 						<a class="dropdown-item" href="./index.html">Siswa
 						</a>
 						<a class="dropdown-item" target="_blank" href="#">Guru
 						</a>
 					</div>
 				</li>
 				<li class="nav-item dropdown <?php if ($title == 'Sejarah' || $title == 'Visi & Misi' || $title == 'Struktur' || $title == 'Fasilitas') echo "active"; ?>">
 					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
 						<p>Profil</p>
 					</a>
 					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
 						<a class="dropdown-item" href="<?= base_url('profil/sejarah') ?>"> Sejarah
 						</a>
 						<a class="dropdown-item" href="<?= base_url('profil/visimisi') ?>"> Visi & Misi
 						</a>
 						<a class="dropdown-item" href="<?= base_url('profil/struktur') ?>"> Struktur Organisasi
 						</a>
 						<a class="dropdown-item" href="<?= base_url('profil/fasilitas') ?>"> Fasilitas
 						</a>
 					</div>
 				</li>
 				<li class="nav-item dropdown">
 					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown">
 						<p>Jurusan</p>
 					</a>
 					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
 						<a class="dropdown-item" href="<?= base_url('jurusan/ap') ?>"> Asisten Keperawatan
 						</a>
 						<a class="dropdown-item" href="<?= base_url('jurusan/ak') ?>"> Teknologi Laboratorium Medik
 						</a>
 					</div>
 				</li>
 				<li class="nav-item <?php if ($title == 'Tata Tertib') echo "active"; ?>">
 					<a class="nav-link" href="<?= base_url('tatatertib') ?>">
 						<p>Tata Tertib</p>
 					</a>
 				</li>
 				<li class="nav-item <?php if ($title == 'Agenda') echo "active"; ?>">
 					<a class="nav-link" href="<?= base_url('agenda') ?>">
 						<p>Agenda</p>
 					</a>
 				</li>
 				<li class="nav-item <?php if ($title == 'Berita') echo "active"; ?>">
 					<a class="nav-link" href="<?= base_url('blog') ?>">
 						<p>Berita</p>
 					</a>
 				</li>
 			</ul>
 		</div>
 	</div>
 </nav>