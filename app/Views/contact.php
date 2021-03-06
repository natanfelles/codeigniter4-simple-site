<?php
/**
 * @var CodeIgniter\View\View $this
 * @var array                 $errors
 * @var bool                  $success
 * @var string                $title
 */

$this->extend('layouts/default');
$this->section('title');
echo $title;
$this->endSection();
$this->section('content');
?>

	<h1><?= lang('contacts.contact') ?></h1>

<?php
if ($errors):
	?>
	<div class="alert alert-danger">
		<?= lang('contacts.messageErrors') ?>
	</div>
<?php
elseif ($success):
	?>
	<div class="alert alert-success">
		<?= lang('contacts.messageSent') ?>
	</div>
<?php
endif;
?>

	<form action="<?= route_to('contact.create') ?>" method="post">
		<?= csrf_field() ?>
		<div class="form-group">
			<label for="email"><?= lang('contacts.email') ?></label>
			<input class="form-control<?=
			isset($errors['email']) ? ' is-invalid' : ''
			?>" type="email" name="email" id="email" value="<?= old('email') ?>" required>
			<?php if (isset($errors['email'])): ?>
				<div class="invalid-feedback">
					<?= esc($errors['email']) ?>
				</div>
			<?php endif ?>
		</div>
		<div class="form-group">
			<label for="subject"><?= lang('contacts.subject') ?></label>
			<input class="form-control<?=
			isset($errors['subject']) ? ' is-invalid' : ''
			?>" type="text" name="subject" id="subject" value="<?= old('subject') ?>" minlength="10" required>
			<?php if (isset($errors['subject'])): ?>
				<div class="invalid-feedback">
					<?= esc($errors['subject']) ?>
				</div>
			<?php endif ?>
		</div>
		<div class="form-group">
			<label for="message"><?= lang('contacts.message') ?></label>
			<textarea class="form-control<?=
			isset($errors['message']) ? ' is-invalid' : ''
			?>" name="message" id="message" rows="5" minlength="10" required><?= old('message') ?></textarea>
			<?php if (isset($errors['message'])): ?>
				<div class="invalid-feedback">
					<?= esc($errors['message']) ?>
				</div>
			<?php endif ?>
		</div>
		<button class="btn btn-primary"><?= lang('contacts.submit') ?></button>
	</form>
<?php
$this->endSection();