<div class="container">
	<div class="col-xl-12 col-lg-12">
		<div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
				<h4 class="m-0 font-weight-bold text-success">Background Login</h4>
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
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Foto</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="<?= base_url('img/background/' . $content->photo) ?>" target="_blank"><img src="<?= base_url('img/background/' . $content->photo) ?>" class="img-responsive" style=" max-width:400px" ; /></a>
								</td>
								<td>
									<a href="<?= base_url('background/edit/' . $content->id); ?>" class="btn btn-warning btn-sm text-light">
										<i class="fas fa fa-pencil-alt"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>