<?php
/**
 * @var CodeIgniter\View\View $this
 */

$this->extend('layouts/default');
$this->section('title');
echo $title;;
$this->endSection();
$this->section('content');
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<a href="<?= route_to('about') ?>">
				<img src="<?= base_url('assets/img/about-us.jpg') ?>" class="d-block w-100">
			</a>
		</div>
		<div class="carousel-item">
			<img src="<?= base_url('assets/img/codeigniter.jpg') ?>" class="d-block w-100" alt="...">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<?php
$this->endSection();
?>


