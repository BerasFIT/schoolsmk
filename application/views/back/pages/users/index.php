<div class="container">
	<div class="col-xl-12 col-lg-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h4 class="m-0 font-weight-bold text-success">Data Users</h4>
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('success') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>
			</div>
			<!-- Card Body -->
			<div class="card-body">
				<div class="row mt-2">
					<div class="col">
						<a href="<?= base_url('auth/create_user') ?>" class="btn btn-success btn-sm">
							<i class="fas fa-plus"></i> Tambah
						</a>
					</div>
				</div>
				<div class="table-responsive mt-3">
					<table class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Username</th>
								<th>Email</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($users as $user) : ?>
								<tr>
									<td><?= $user->username ?></td>
									<td><?= $user->email ?></td>
									<td><?= $user->first_name ?></td>
									<td><?= $user->last_name ?></td>
									<td>
										<a href="<?= base_url('auth/edit_user/' . $user->id) ?>" class="btn btn-sm btn-warning text-light">Edit</a>
										<a href="<?= base_url('user/delete/' . $user->id) ?>" class="btn btn-sm btn-danger">Delete</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>