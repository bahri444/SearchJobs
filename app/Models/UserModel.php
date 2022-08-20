<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'users';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ["username", "email", "password", "user_image", "role"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

<<<<<<< HEAD:app/Models/User.php
    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    
    public function get_data($email, $password)
        {
          return $this->db->table('user')
          ->where(array('user_email' => $email, 'user_pass' => $password))
          ->get()->getRowArray();
        }
=======

    public function getUser()
    {
        $query = $this->db->table('users');
        return $query->get();
    }
    public function hapus($user_id)
    {
        return $this->db->table('users')->update(array('user_id' => $user_id));
    }
>>>>>>> bahri:app/Models/UserModel.php
}
