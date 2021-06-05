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
 
    public function saveProduct($data){
        $query = $this->db->table('product')->insert($data);
        return $query;
    }
 
    public function updateProduct($data, $id)
    {
        $query = $this->db->table('product')->update($data, array('product_id' => $id));
        return $query;
    }
 
    public function deleteProduct($id)
    {
        $query = $this->db->table('product')->delete(array('product_id' => $id));
        return $query;
    } 
 
   
}