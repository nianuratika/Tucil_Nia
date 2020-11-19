<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('pages/index');
	}
	public function register()
	{
		return view('pages/register');
	}

	public function login()
	{
		return view('pages/login');
	}
	public function BakPao()
	{
		return view('pages/detailProduk/BakPao');
	}

	public function about()
	{
		return view('pages/about');
	}

	public function verif()
	{
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        if ($email=="nianuratika@gmail.com" && $password=="12345678") {
            return redirect()->to('/pages/index'); 
        }
        else {
            return redirect()->to('/pages/login'); 
		}
	}

}



