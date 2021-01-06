<div class="panel-header panel-header-sm">
</div>
<div class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<?php if ($this->session->flashdata('success')) : ?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<?= $this->session->flashdata('success') ?>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				<?php endif ?>
				<div class="card-header">
					<h4 class="card-title">Struktur Organisasi</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<a href="<?= base_url('auth/create_user') ?>" class="btn btn-success btn-sm">
							<i class="fas fa-plus"></i> Tambah
						</a>
						<table class="table">
							<thead class=" text-primary">
								<th>Username</th>
								<th>Email</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Aksi</th>
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