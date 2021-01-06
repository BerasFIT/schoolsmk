<div class="main-panel" id="main-panel">
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
		<div class="container-fluid">
			<div class="navbar-wrapper">
				<div class="navbar-toggle">
					<button type="button" class="navbar-toggler">
						<span class="navbar-toggler-bar bar1"></span>
						<span class="navbar-toggler-bar bar2"></span>
						<span class="navbar-toggler-bar bar3"></span>
					</button>
				</div>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-bar navbar-kebab"></span>
				<span class="navbar-toggler-bar navbar-kebab"></span>
				<span class="navbar-toggler-bar navbar-kebab"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navigation">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="now-ui-icons users_single-02"></i>
							<p>
								<span class="d-lg-none d-md-block">Some Actions</span>
							</p>
						</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?= base_url('auth/edit_user/' . $this->session->userdata('id')) ?>">Profile</a>
							<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Log Out</a>
					</li>
				</ul>
			</div>
		</div>