<?php namespace App\Controllers;

use App\Models\Contacts;
use Config\Services;

class Contact extends BaseController
{
	public function index()
	{
		session()->start();
		return view('contact', [
			'errors'  => session()->getFlashdata('errors') ?? [],
			'success' => session()->getFlashdata('success') ?? false,
			'title'   => lang('contacts.contact'),
		]);
	}

	public function create()
	{
		$contacts = new Contacts();
		$id       = $contacts->insert($this->request->getPost());

		if ($id === false)
		{
			return redirect()
				->route('contact')
				->withInput()
				->with('errors', $contacts->errors());
		}

		return redirect()->route('contact')->with('success', true);
	}
}