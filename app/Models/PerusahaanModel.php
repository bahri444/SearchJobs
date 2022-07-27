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
        "nm_prshn",    "alamat",    "email",    "no_tlp	logo",    "srt_izin",    "strk_organis",    "created_at",    "updated_at"
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getPerusahaan(){
        $builder = $this->db->table('perusahaan');
        $builder->select('*');
        return $builder->get();
    }

    public function savePerusahaan($dataPerusahaan){
        $query = $this->db->table('perusahaan')->insert($dataPerusahaan);
            return $query;

    }
    public function updatePerusahaan($dataPerusahaan,$idPrshn){
        $query=$this->db->table('perusahaan')->update($dataPerusahaan, array('id_prshn'=>$idPrshn));
        return $query;
    }
    public function deletePerusahaan($idPrshn){
        $query = $this->db->table('perusahaan')->delete(array('id_prshn'=>$idPrshn));
        return $query;
    }
}
