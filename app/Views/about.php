<?php
/**
 * @var CodeIgniter\View\View $this
 * @var string                $title
 */

$this->extend('layouts/default');
$this->section('title');
echo $title;
$this->endSection();
$this->section('content');
?>
	<h1><?= lang('about.aboutUs') ?></h1>

	<img class="img-thumbnail" src="<?= base_url('assets/img/about-us.jpg') ?>" alt="Company X">

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequuntur cum dicta dolor ex illum ipsum iusto labore molestias, optio sint, temporibus. Adipisci corporis est exercitationem non perferendis quos voluptate.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad deserunt, dolorum earum error est explicabo, incidunt neque odio officiis pariatur praesentium, tempora velit veritatis vitae voluptas voluptate voluptatem voluptatum!</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi deleniti deserunt dignissimos, earum eius in iure necessitatibus officia optio perspiciatis ratione repellendus sunt vel velit veritatis. Cupiditate molestiae provident ullam.</p>
	<p><a href="<?= route_to('contact') ?>"><?= lang('about.contactUs') ?></a></p>
<?php
$this->endSection();