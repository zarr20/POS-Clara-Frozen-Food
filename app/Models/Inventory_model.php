<?php 

namespace App\Models;
use CodeIgniter\Model;
 
class Inventory_model extends Model
{
    public function getInventory()
    {
        $builder = $this->db->table('barang');
        $builder->select('*');
        return $builder->get();
    }
 
    public function addInventory($data){
        $query = $this->db->table('barang')->insert($data);
        return $query;
    }
 
    public function updateInventory($data, $id)
    {        
        // print_r($id);
        $builder = $this->db->table('barang');
        $builder->where('barang_kode', $id);
        return $builder->update($data);
    }
 
    public function deleteInventory($code)
    {
        $query = $this->db->table('barang')->delete(array('barang_kode' => $code));
        return $query;
    } 


 
   
}