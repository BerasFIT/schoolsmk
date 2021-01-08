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
					<h4 class="card-title">Identitas Website</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table">
							<thead class=" text-primary">
								<th>Deskripsi</th>
								<th>Keyword</th>
								<th>Action</th>
							</thead>
							<tbody>
								<tr>
									<!-- <td><?= $content->meta_title ?></td> -->
									<td><?= $content->meta_description ?></td>
									<td><?= $content->meta_keyword ?></td>
									<!-- <td>
								<img src="<?= base_url('img/identitas/' . $content->photo) ?>" class="img-responsive" style="max-height:150px; max-width:150px";>
							</td> -->
									<td>
										<a href="<?= base_url('identitas/edit/' . $content->id); ?>" class="btn btn-warning btn-sm text-light">
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