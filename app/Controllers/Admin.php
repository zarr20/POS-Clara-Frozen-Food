<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\PenggunaModel;
use App\Models\Inventory_model;
use App\Models\Transaction_model;

class Admin extends BaseController
{
	public function index()
	{
		$segment = $this->request->uri->getSegment(2);
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
		}
		$data['content_'] = $segment;
		$session = session();
	
		if($session->get('logged_in')){
			$PenggunaModel = new PenggunaModel();
			$PenggunaData = $PenggunaModel->where('id_pengguna', ($session->get('iduser_clarafrozenfood')))->first();
			if($PenggunaData){
				$data['akses_pengguna_']   = $PenggunaData['akses_pengguna'];
				$data['username_']   = $PenggunaData['username'];
				$data['nama_pengguna_']   = $PenggunaData['nama_pengguna'];
				$data['id_user_']   = $session->get('iduser_clarafrozenfood');
			}	
			echo view('admin/admin', $data);
		}else {
			return redirect()->to('/');
		}
	}

	public function check_product(){
		$kodeBrg =  isset($_POST['query']) ? $_POST['query'] : NULL;
        // if($this->input->post('query'))
        // {
        //     $query = $this->input->post('query');
        //     // print_r($this->input->post('query'));
        // }else{
		// 	$query = "";
		// }
		$Transaction_model = new Transaction_model;
        print_r($Transaction_model->check_data($kodeBrg)) ;
    }


	// public function pages($halaman = "dashboard")
	// {
	// 	$session = session();
	// 	if ($halaman == "") {
	// 		$halaman = "dashboard";
	// 	}
	// 	$data['content_']   = $halaman;
	// 	return view('admin', $data);
	// }

	public function getTransactionProduct($kodeBrg){
		return "asdasd";
	}
}
