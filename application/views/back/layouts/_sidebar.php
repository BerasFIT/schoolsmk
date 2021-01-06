<div class="sidebar" data-color="green">
	<!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
	<div class="logo">
		<a href="http://www.creative-tim.com" class="simple-text logo-mini">
			ADMIN
		</a>
		<a href="http://www.creative-tim.com" class="simple-text logo-normal">
			SMK KESDA BERGAS
		</a>
	</div>
	<div class="sidebar-wrapper" id="sidebar-wrapper">
		<ul class="nav">
			<li>
				<a href="<?= base_url('admin') ?>">
					<i class="now-ui-icons design_app"></i>
					<p>Dashboard</p>
				</a>
			</li>

			<?php
			$menus = $this->menu->getMenu();

			foreach ($menus as $menu) :
				$submenu = $this->menu->getSubmenu($menu->id);
			?>

				<li class="nav-item">
					<?php if ($submenu) : ?>
						<a class="nav-link collapsed" href="<?= base_url() ?>" data-toggle="collapse" data-target="#collapse<?= $menu->id ?>" aria-expanded="true" aria-controls="collapse">
							<i class="<?= $menu->icon ?>"></i>
							<span><?= $menu->title ?></span>
						</a>

						<div id="collapse<?= $menu->id ?>" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
							<div class="bg-white py-2 collapse-inner rounded">
								<?php foreach ($submenu as $sm) : ?>
									<a class="collapse-item" href="<?= base_url() . $sm->sub_url ?>"><?= $sm->sub_title ?></a>
								<?php endforeach ?>
							</div>
						</div>
					<?php else : ?>
						<a class="nav-link" href="<?= base_url() . $menu->url ?>">
							<i class="<?= $menu->icon ?>"></i>
							<span><?= $menu->title ?></span>
						</a>
					<?php endif; ?>
				</li>

			<?php endforeach ?>

		</ul>
	</div>
</div>