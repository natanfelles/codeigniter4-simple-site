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
}