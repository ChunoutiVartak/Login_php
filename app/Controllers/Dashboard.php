<?php namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('template/header', $data);
		echo view('Dashboard');
		echo view('template/footer');
	}

	//--------------------------------------------------------------------

}
