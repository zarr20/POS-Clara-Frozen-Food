<?php

namespace App\Controllers;

// use CodeIgniter\Controller;
use App\Models\PenggunaModel;
use App\Models\Inventory_model;
use App\Models\Transaction_model;
use App\Models\User_model;
use App\Models\Report_model;

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
		else if ($segment == "user") {
			$User_model = new User_model;
			$data['getUser']  = $User_model->getUser()->getResult();
		}
		else if ($segment == "report") {
			$Report_model = new Report_model;
			if($this->request->uri->getSegment(3)){
				$data['getTransaksi_bycode']  = $Report_model->getTransaksi_bycode($this->request->uri->getSegment(3));
				$data['getTransaksi_item']  = $Report_model->getTransaksi_item($this->request->uri->getSegment(3))->getResult();
			}else{
				$data['getTransaksi']  = $Report_model->getTransaksi()->getResult();
			}
			
		}
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

	public function inventory_add(){
		$request = \Config\Services::request();
		// var_dump($request->getPost());
		// echo $request->getPost('brgCode');
		$Transaction_model = new Transaction_model;
		$Inventory_model = new Inventory_model;

		$checkdata = json_decode($Transaction_model->check_data($request->getPost('brgCode')));
		if(!$checkdata){
			$data = [
				'barang_kode' => $request->getPost('brgCode'),
				'barang_nama'    => $request->getPost('brgName'),
				'harga' => $request->getPost('brgPrice'),
				'stok'    => $request->getPost('brgStock')
			];
			// var_dump($data);
			echo "Berhasil ditambahkan";
			
			$Inventory_model->addInventory($data);
	
			// return redirect()->to('/admin/inventory');
		}else{
			echo "Kode Sudah dipakai!";
		}
		
	}

	public function inventory_delete(){
		$segment = $this->request->uri->getSegment(3);
		echo $segment;

		$Inventory_model = new Inventory_model;
		$Inventory_model->deleteInventory($segment);

		return redirect()->to('/admin/inventory');
	
	}

}
