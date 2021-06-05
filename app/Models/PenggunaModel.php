<?php

namespace App\Models;
use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna';
    protected $allowedFields = ['user_name', 'user_password'];
}
