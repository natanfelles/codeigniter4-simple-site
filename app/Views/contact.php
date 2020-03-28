<?php
/**
 * @var CodeIgniter\View\View $this
 * @var array                 $errors
 * @var bool                  $success
 */

$this->extend('layouts/default');
$this->section('title');
echo 'Contact';
$this->endSection();
$this->section('content');
?>

	<h1>Contact</h1>

<?php
if ($errors):
	?>
	<div class="alert alert-danger">
		Please, correct the errors below.
	</div>
<?php
elseif ($success):
	?>
	<div class="alert alert-success">
		Message successful sent!
	</div>
<?php
endif;
?>

	<form action="<?= route_to('contact.create') ?>" method="post">
		<?= csrf_field() ?>
		<div class="form-group">
			<label for="email">Email</label>
			<input class="form-control<?=
			isset($errors['email']) ? ' is-invalid' : ''
			?>" type="email" name="email" id="email" value="<?= old('email') ?>">
			<?php if (isset($errors['email'])): ?>
				<div class="invalid-feedback">
					<?= esc($errors['email']) ?>
				</div>
			<?php endif ?>
		</div>
		<div class="form-group">
			<label for="subject">Subject</label>
			<input class="form-control<?=
			isset($errors['subject']) ? ' is-invalid' : ''
			?>" type="text" name="subject" id="subject" value="<?= old('subject') ?>">
			<?php if (isset($errors['subject'])): ?>
				<div class="invalid-feedback">
					<?= esc($errors['subject']) ?>
				</div>
			<?php endif ?>
		</div>
		<div class="form-group">
			<label for="message">Message</label>
			<textarea class="form-control<?=
			isset($errors['message']) ? ' is-invalid' : ''
			?>" name="message" id="message" rows="5"><?= old('message') ?></textarea>
			<?php if (isset($errors['message'])): ?>
				<div class="invalid-feedback">
					<?= esc($errors['message']) ?>
				</div>
			<?php endif ?>
		</div>
		<button class="btn btn-primary">Submit</button>
	</form>
<?php
$this->endSection();