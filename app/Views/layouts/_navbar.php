<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?= route_to('home') ?>">Site</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-top">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar-top">
			<ul class="navbar-nav">
				<?php
				$route_path = current_url(true)->getPath();
				?>
				<li class="nav-item<?=
				$route_path === route_to('page-x') ? ' active' : '';
				?>">
					<a class="nav-link" href="<?= route_to('page-x') ?>">Page X</a>
				</li>
				<li class="nav-item<?=
				$route_path === route_to('about') ? ' active' : '';
				?>">
					<a class="nav-link" href="<?= route_to('about') ?>">About Us</a>
				</li>
				<li class="nav-item<?=
				$route_path === route_to('contact') ? ' active' : '';
				?>">
					<a class="nav-link" href="<?= route_to('contact') ?>">Contact</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
