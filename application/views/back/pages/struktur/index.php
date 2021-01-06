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
						<table class="table">
							<thead class=" text-primary">
								<th>
									Foto
								</th>
								<th>
									Action
								</th>
							</thead>
							<tbody>
								<tr>
									<td>
										<a href="<?= base_url('img/struktur_organisasi/' . $content->photo) ?>" target="_blank"><img src="<?= base_url('img/struktur_organisasi/' . $content->photo) ?>" class="img-responsive" style=" max-width:400px" ; /></a>
									</td>
									<td>
										<a href="<?= base_url('struktur/edit/' . $content->id); ?>" class="btn btn-warning btn-sm text-light">
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