
<!-- Content -->
<div class="content mt-5 mb-5 pb-5 pt-5">
	<div class="container">
	<h1 class="display-4 my-auto text-center">Agenda</h1>
		<div class="row pt-5 pb-5">
			<img src="<?= base_url('img/agenda/' . $agenda->photo) ?>" class="img-fluid">
		</div>
		<div class="row text-justify">
			<?= $agenda->content ?>
		</div>
	</div>
</div>
<!-- End of Content -->
