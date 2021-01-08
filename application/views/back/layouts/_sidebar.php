<div class="sidebar" data-color="green">
	<!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
	<div class="logo">
		<a href="http://www.creative-tim.com" class="simple-text logo-mini">
			TU
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

				<li class="nav-item dropdown">
					<?php if ($submenu) : ?>
						<a class="nav-link dropdown-toggle" href="<?= base_url() ?>" id="navbarDropdownMenuLink<?= $menu->id ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="<?= $menu->icon ?>"></i>
							<span><?= $menu->title ?></span>
						</a>

						<div data-target="#navbarDropdownMenuLink<?= $menu->id ?>">
							<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdownMenuLink">
								<?php foreach ($submenu as $sm) : ?>
									<a class="dropdown-item" href="<?= base_url() . $sm->sub_url ?>"><?= $sm->sub_title ?></a>
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