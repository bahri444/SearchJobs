<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class LamaranModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'lamaran';
    protected $primaryKey       = 'id_lamaran';
    protected $foreignKey = true;
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "id_loker", "id_pencaker", "berkas", "tgl_lamar", "s_lamaran", "respons"

    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getlamaran()
    {
        $query = $this->db->table('lamaran');
        $query->join('pencaker', 'lamaran.id_pencaker = pencaker.id_pencaker');
        $query->join('loker', 'lamaran.id_loker = loker.id_loker');
        $query->join('perusahaan', 'loker.id_prshn = perusahaan.id_prshn');
        $query->orderBy('id_lamaran', 'DESC');
        return $query->get();
    }

    // func for insert data
    public function tambah($data)
    {
        return $this->db->table('lamaran')->insert($data);
    }

    // info
    public function getInfo($id_lamaran = false)
    {
        if ($id_lamaran) {
            $builder = $this->db->table('lamaran');
            $builder->where('id_lamaran', $id_lamaran);
            $query = $builder->get();
            return $query->getResultArray();
        }
        $builder = $this->db->table('lamaran');
        $query = $builder->get();
        return $query->getResultArray();
    }

    // func edit
    public function edit($data, $id_lamaran)
    {
        try {
            return $this->db->table('lamaran')->update($id_lamaran, $data);
        } catch (Exception $error) {
            dd($error);
        }
    }

    // func hapus
    public function hapus($id_lamaran)
    {
        try {
            return $this->db->table('lamaran')->delete($id_lamaran);
        } catch (Exception $error) {
            dd($error);
        }
        // return $this->db->table('perusahaan')->update(array('id_prshn' => $id_prshn));
    }

    // function for count data to dashboard
    public function countData()
    {
        $data = $this->db->table('lamaran')->countAllResults();
        return $data;
    }
    public function countDtFilters()
    {
        $query = $this->db->table('lamaran');
        $query->join('pencaker', 'lamaran.id_pencaker = pencaker.id_pencaker')
            ->join('loker', 'lamaran.id_loker = loker.id_loker')
            ->join('perusahaan', 'loker.id_prshn = perusahaan.id_prshn')
            ->join('users', 'perusahaan.user_id = users.user_id')
            ->where('users.user_id', session()->get('user_id'));
        $data = $query->get()->getResult();
        return $data;
    }

    public function status($id_lamaran, $data)
    {
        return $this->db->table('lamaran')->update($id_lamaran, $data);
    }
    public function responsInstansi($id_lam, $datas)
    {
        return $this->db->table('lamaran')->update($id_lam, $datas);
    }
}
