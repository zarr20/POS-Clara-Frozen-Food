<?php

namespace App\Controllers;

class Admin extends BaseController
{
	public function index()
	{

		$segment = $this->request->uri->getSegment(2);
		// echo $segment;
		// if ($segment == "Dashboard") {
		// 	$data['content'] = "Dashboard";
		// }
		if ($segment == "") {
			$segment = "dashboard";
		}
		$data['content_']   = $segment;
		$session = session();
		$data['nama_pengguna_']   = $session->get('user_name');
		$data['akses_pengguna_']   = $session->get('user_name');

		// if ($this->uri->segment(3) == "dashboard") {
		// 	$product_id = 0;
		// } else {
		// 	$product_id = $this->uri->segment(3);
		// }
		//  return view('welcome_message');
		echo view('admin', $data);
	}

	public function pages($halaman = "dashboard")
	{
		$session = session();
		if ($halaman == "") {
			$halaman = "dashboard";
		}
		$data['content_']   = $halaman;
		return view('admin', $data);
	}
}
