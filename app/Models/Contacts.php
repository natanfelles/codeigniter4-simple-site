<?php namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;

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

	public function __construct(
		ConnectionInterface &$db = null,
		ValidationInterface $validation = null
	) {
		parent::__construct($db, $validation);

		$this->validationRules['email']['label']   = lang('contacts.email');
		$this->validationRules['email']['subject'] = lang('contacts.subject');
		$this->validationRules['email']['message'] = lang('contacts.message');
	}
}