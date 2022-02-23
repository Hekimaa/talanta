<?php

namespace App\Controllers;

class Contacts extends BaseController
{
	public function index()
	{

	   return view('contacts/contacts');
	  // return view('errors/html/error_404');


	}
}
