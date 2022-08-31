<?php

namespace App\Models;

use CodeIgniter\Model;

class PencakerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'pencaker';
    protected $primaryKey       = 'id_pencaker';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "user_id", "nm_lkp", "tgl_lhr", "jk", "usia", "alamat", "email", "pend_ter", "peng_ker", "bid_keahlian", "sertifikat", "created_at", "updated_at"
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // func for read data user
    public function getUser()
    {
        $query = $this->db->table('users');
        return $query->get();
    }

    // func for read data pencaker
    public function getPencaker()
    {
        $builder = $this->db->table('pencaker');
        $builder->join('users', 'users.user_id = pencaker.user_id');
        $query = $builder->get();
        return $query->getResult();
    }

    // func for insert data
    public function tambah($data)
    {
        return $this->db->table('pencaker')->insert($data);
    }

    // info
    public function getInfo($id_pencaker = false)
    {
        if ($id_pencaker = false) {
            $builder = $this->db->table('pencaker');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $builder = $this->db->table('pencaker');
        $builder->where('id_pencaker', $id_pencaker);
        $query = $builder->get();
        return $query->getResultArray();
    }

    // func edit
    public function edit($data, $id_pencaker)
    {
        return $this->db->table('pencaker')->update($data, array('id_pencaker' => $id_pencaker));
    }

    // func hapus
    public function hapus($id_pencaker)
    {
        return $this->db->table('pencaker')->delete(array('id_pencaker' => $id_pencaker));
    }

    // function for count data to dashboard
    public function countData()
    {
        $data = $this->db->table('pencaker')->countAllResults();
        return $data;
    }
}
