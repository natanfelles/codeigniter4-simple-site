<?php namespace App\Controllers;

use App\Models\Contacts;
use Config\Services;

class Contact extends BaseController
{
	public function index()
	{
		session()->start();
		return view('contact', [
			'errors'  => Services::validation()->getErrors(),
			'success' => session()->getFlashdata('success') ?? false,
		]);
	}

	public function create()
	{
		$validated = $this->validate([
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
		]);
		if ( ! $validated)
		{
			return redirect()->withInput()->route('contact');
		}
		$contacts = new Contacts();
		$id       = $contacts->insert($this->request->getPost());
		// TODO: Save on DB
		return redirect()->route('contact')->with('success', true);
	}
}