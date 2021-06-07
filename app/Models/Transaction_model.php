<?php 

namespace App\Models;
use CodeIgniter\Model;
 
class Transaction_model extends Model
{
    public function check_data($kodebrg)
    {
        $data = $this->db->query("
        SELECT * FROM `barang` WHERE `barang_kode` = '$kodebrg'
        ")->getResult();;
        $encode_data = json_encode($data);
        return $encode_data;
    }

    public function addTransaction($data){
        $query = $this->db->table('transaksi')->insert($data);
        return $query;
    }
    public function addTransaction_item($data){
        $query = $this->db->table('transaksi_item')->insert($data);
        return $query;
    }
 
   
}