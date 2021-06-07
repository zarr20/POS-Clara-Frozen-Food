<?php 

namespace App\Models;
use CodeIgniter\Model;
 
class User_model extends Model
{
    public function getUser()
    {
        $builder = $this->db->table('pengguna');
        $builder->select('*');
        return $builder->get();
    }
 
    public function addInventory($data){
        $query = $this->db->table('pengguna')->insert($data);
        return $query;
    }
 
    public function updateProduct($data, $id)
    {
        $query = $this->db->table('product')->update($data, array('product_id' => $id));
        return $query;
    }
 
    public function deleteInventory($code)
    {
        $query = $this->db->table('barang')->delete(array('barang_kode' => $code));
        return $query;
    } 


 
   
}