<?php namespace App\Models;

use CodeIgniter\Model;

class Contacts extends Model
{
	protected $table = 'contacts';
	protected $allowedFields = [
		'email',
		'subject',
		'message',
	];
	protected $useTimestamps = true;
	protected $validationRules = [
		'email'   => [
			'label' => 'Email',
			'rules' => 'required|valid_email',
		],
		'subject' => [
			'label' => 'Subject',
			'rules' => 'required|min_length[10]',
		],
		'message' => [
			'label' => 'Message',
			'rules' => 'required|min_length[10]',
		],
	];
}