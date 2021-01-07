<?php $this->load->view('auth/templates/admin_header') ?>

<body id="">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<?php $this->load->view('back/layouts/_sidebar') ?>
		<!-- End of Sidebar -->

		<?php $this->load->view('back/layouts/_topbar') ?>
		</nav>
		<!-- End of Topbar -->

		<!-- End Navbar -->
		<div class="panel-header panel-header-sm">
		</div>
		<div class="content">
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h5 class="title">Edit Profile</h5>
						</div>
						<div class="card-body">
							<!-- <div class="row">
					<div class="col-md-6">
					<?php if ($message) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<div id="infoMessage"><?= $message; ?></div>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php endif ?>
					</div>
				</div> -->
							<?= form_open(uri_string()); ?>
							<div class="row">
								<div class="col-md-6 pr-1">
									<div class="form-group">
										<label for="inputEmail4">Nama Depan</label>
										<?= form_input($first_name, '', ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										<?= form_error('first_name', '<small class="form-text text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-md-6 pl-1">
									<div class="form-group">
										<label for="inputPassword4">Nama Belakang</label>
										<?= form_input($last_name, '', ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										<?= form_error('last_name', '<small class="form-text text-danger">', '</small>') ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 pr-1">
									<div class="form-group">
										<label for="inputEmail4">Email</label>
										<?= form_input($email, '', ['class' => 'form-control', 'autocomplete' => 'off']); ?>
										<?= form_error('email', '<small class="form-text text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-md-6 pl-1">
									<div class="form-group">
										<label for="inputPassword4">No. Telepon</label>
										<?= form_input($phone, '', ['class' => 'form-control', 'autocomplete' => 'off']); ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 pr-1">
									<div class="form-group">
										<label for="inputEmail4">Password (jika ingin diubah)</label>
										<?= form_input($password, '', ['class' => 'form-control']); ?>
										<?= form_error('password', '<small class="form-text text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-md-6 pl-1">
									<div class="form-group">
										<label for="inputPassword4">Konfirmasi Password</label>
										<?= form_input($password_confirm, '', ['class' => 'form-control']); ?>
										<?= form_error('password_confirm', '<small class="form-text text-danger">', '</small>') ?>
									</div>
								</div>
							</div>
							<?php if ($this->ion_auth->is_admin()) : ?>

								<h3><?= lang('edit_user_groups_heading'); ?></h3>
								<?php foreach ($groups as $group) : ?>
									<label class="checkbox">
										<?php
										$gID = $group['id'];
										$checked = null;
										$item = null;
										foreach ($currentGroups as $grp) {
											if ($gID == $grp->id) {
												$checked = ' checked="checked"';
												break;
											}
										}
										?>
										<input type="checkbox" name="groups[]" value="<?= $group['id']; ?>" <?= $checked; ?>>
										<?= htmlspecialchars($group['name'], ENT_QUOTES, 'UTF-8'); ?>
									</label>
								<?php endforeach ?>

							<?php endif ?>

							<?= form_hidden('id', $user->id); ?>
							<?= form_hidden($csrf); ?>
							<div class="row">
								<div class="col-8">
									<a href="<?= base_url('admin'); ?>" class="btn btn-secondary btn-sm"><i class="fas fa-angle-left mr-1"></i>Kembali</a>
									<?= form_submit('submit', 'Simpan', ['class' => 'btn btn-success btn-sm float-right']); ?>

								</div>
							</div>
							<?= form_close(); ?>
						</div>
					</div>
				</div>
			</div>



			<?php $this->load->view('auth/templates/footer') ?>
		</div>
	</div>