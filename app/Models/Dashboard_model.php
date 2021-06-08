<?php 

namespace App\Models;
use CodeIgniter\Model;
 
class Dashboard_model extends Model
{
    public function getIncome($date)
    {
        $date = date("Y-m");
        $data = $this->db->query("
        SELECT total_transaksi FROM transaksi WHERE tanggal_transaksi LIKE '$date%';
        ")->getResult();
        $total = 0;
        foreach($data as $item){
            $total = intval($total) + intval($item->total_transaksi);
			
		}
        return $total;
    }

    public function getProductTotal()
    {
        $data = $this->db->query("
        SELECT * FROM `barang`
        ")->getResult();
        $total = 0;
        foreach($data as $item){
            $total = intval($total) + 1;
			
		}
        return $total;
    }

    public function getOperatorTotal()
    {
        $data = $this->db->query("
        SELECT * FROM `pengguna`
        ")->getResult();
        $total = 0;
        foreach($data as $item){
            $total = intval($total) + 1;
			
		}
        return $total;
    }

    public function getProductHabis()
    {
        $data = $this->db->query("
        SELECT * FROM `barang` WHERE `stok` <= 0
        ")->getResult();
        // print_r($data);
        $total = 0;
        // foreach($data as $item){
        //     $total = intval($total) + 1;
			
		// }
        return $data;
    }
   
}