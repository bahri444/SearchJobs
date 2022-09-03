<?php

namespace App\Models;

use CodeIgniter\Model;

class PerusahaanModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'perusahaan';
    protected $primaryKey       = 'id_prshn';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "user_id", "nm_prshn", "alamat",    "tlp", "logo",    "srt_izin",    "strk_organis", "stts_prshn"
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // func for read data
    public function getUser()
    {
        $query = $this->db->table('users');
        return $query->get();
    }
    // func for read data
    public function getPerusahaan()
    {
        $builder = $this->db->table('perusahaan');
        $builder->join('users', 'users.user_id = perusahaan.user_id');
        $query = $builder->get();
        return $query->getResult();
    }

    // func for insert data
    public function tambah($data)
    {
        return $this->db->table('perusahaan')->insert($data);
    }

    // info
    public function getInfo($id_prshn = false)
    {
        if ($id_prshn = false) {
            $builder = $this->db->table('perusahaan');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $builder = $this->db->table('perusahaan');
        $builder->where('id_prshn', $id_prshn);
        $query = $builder->get();
        return $query->getResultArray();
    }

    // func edit
    public function edit($data, $id_prshn)
    {
        return $this->db->table('perusahaan')->update($data, array('id_prshn' => $id_prshn));
    }

    // func hapus
    public function hapus($id_prshn)
    {
        return $this->db->table('perusahaan')->delete(array('id_prshn' => $id_prshn));
        // return $this->db->table('perusahaan')->update(array('id_prshn' => $id_prshn));
    }

    // function for count data to dashboard
    public function countData()
    {
        $data = $this->db->table('perusahaan')->countAllResults();
        return $data;
    }

    // function status persetujuan perusahaan
    public function sttsPrshn($id_prshn, $data)
    {
        return $this->db->table('perusahaan')->update($id_prshn, $data);
    }
}
