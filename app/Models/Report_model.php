<?php 

namespace App\Models;
use CodeIgniter\Model;
 
class Report_model extends Model
{
    public function getTransaksi()
    {
        $builder = $this->db->table('transaksi');
        $builder->select('*');
        return $builder->get();
    }

    public function getTransaksi_bycode($kode)
    {
        $data = $this->db->query("
        SELECT * FROM `transaksi` WHERE `transaksi_kode` = '$kode'
        ");
        $row   = $data->getRow();
        // $encode_data = json_encode($data);
        return $row;
        // $builder = $this->db->table('transaksi_item');
        // $builder->select('*');
        // return $builder->get();
    }
    public function getTransaksi_item($kode)
    {
        $data = $this->db->query("
        SELECT * FROM `transaksi_item` WHERE `transaksi_kode` = '$kode'
        ");
        // $encode_data = json_encode($data);
        return $data;
        // $builder = $this->db->table('transaksi_item');
        // $builder->select('*');
        // return $builder->get();
    }
   
}