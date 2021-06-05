<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\PenggunaModel;
use App\Models\Inventory_model;

class Admin extends BaseController
{
	public function index()
	{

		$segment = $this->request->uri->getSegment(2);
		 
		// if ($segment == "Dashboard") {
		// 	$data['content'] = "Dashboard";
		// }
		if ($segment == "" || $segment == "dashboard") {
			$segment = "dashboard";
		}
		else if ($segment == "inventory") {
			 $Inventory_model = new Inventory_model;
			 $data['getInventory']  = $Inventory_model->getInventory()->getResult();
		}
		else if ($segment == "transaction") {}
		else if ($segment == "user") {}
		else if ($segment == "report") {}
		else{
			$segment = "404";
			// 404
		}
		// echo $segment;
		$data['content_'] = $segment;
		$session = session();
	
		if($session->get('logged_in')){
			// print_r($session->get('namapengguna_clarafrozenfood'));
			$PenggunaModel = new PenggunaModel();
			$PenggunaData = $PenggunaModel->where('id_pengguna', ($session->get('iduser_clarafrozenfood')))->first();
			// print_r($PenggunaData);
			if($PenggunaData){
				$data['akses_pengguna_']   = $PenggunaData['akses_pengguna'];
				$data['username_']   = $PenggunaData['username'];
				$data['nama_pengguna_']   = $PenggunaData['nama_pengguna'];
				$data['id_user_']   = $session->get('iduser_clarafrozenfood');
			}	

			// if ($this->uri->segment(3) == "dashboard") {
			// 	$product_id = 0;
			// } else {
			// 	$product_id = $this->uri->segment(3);
			// }
			//  return view('welcome_message');
			echo view('admin/admin', $data);
		}else {
			return redirect()->to('/');
		}
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
