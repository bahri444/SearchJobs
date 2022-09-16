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

    public function getUser()
    {
        $query = $this->db->table('users')->orderBy('user_id', 'DESC');
        return $query->get()->getResult();
    }
    public function hapus($user_id)
    {
        return $this->db->table('users')->update(array('user_id' => $user_id));
    }
}
