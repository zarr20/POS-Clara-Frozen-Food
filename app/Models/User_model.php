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
 
    public function addUser($data){
        $query = $this->db->table('pengguna')->insert($data);
        return $query;
    }
 
    public function updateUser($data, $id)
    {
        $query = $this->db->table('pengguna')->update($data, array('id_pengguna' => $id));
        return $query;
    }
 
    public function deleteUser($code)
    {
        $query = $this->db->table('pengguna')->delete(array('id_pengguna' => $code));
        return $query;
    } 


 
   
}