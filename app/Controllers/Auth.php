<?php namespace App\Controllers;

class Auth extends BaseController
{
	public function login()
	{
		return view('auth/login');
	}

	public function register()
	{
		return view('auth/register');
	}

	public function index()
	{
		return view('auth/index');
	}

	public function admin()
	{
		return view('auth/admin');
	}

	public function aboutme()
	{
		return view('auth/aboutme');
	}
	//--------------------------------------------------------------------

}
