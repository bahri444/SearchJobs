<?php

namespace App\Models;

use CodeIgniter\Model;
use Countable;

class LokerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'loker';
    protected $primaryKey       = 'id_loker';
    protected $foreignKey       = true;
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "id_ktgr",  "id_prshn",    "judul_loker",    "posisi",    "tgl_buka",    "tgl_tutup",    "syrt_pend",    "gaji",    "detail_loker", "status"
    ];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getLoker()
    {
        $builder = $this->db->table('loker');
        $builder->join('perusahaan', 'perusahaan.id_prshn = loker.id_prshn');
        $builder->join('ktgr_loker', 'ktgr_loker.id_ktgr = loker.id_ktgr');
        $builder->orderBy('id_loker', 'DESC');
        return $builder->get()->getResultArray();
    }

    public function filterData()
    {
        $builder = $this->db->table('loker')->where(['status' => 'valid']);
        $builder->join('perusahaan', 'perusahaan.id_prshn = loker.id_prshn');
        $builder->join('ktgr_loker', 'ktgr_loker.id_ktgr = loker.id_ktgr');
        $builder->orderBy('id_loker', 'DESC');
        return $builder->get()->getResultArray();
    }

    // function tambah data
    public function tambah($data)
    {
        return $this->db->table('loker')->insert($data);
    }

    public function info($id_loker)
    {
        if ($id_loker) {
            $builder = $this->db->table('loker');
            $query = $builder->get();
            return $query->getResultArray();
        }
        $builder = $this->db->table('loker');
        $builder->where('id_loker', $id_loker);
        $query = $builder->get();
        return $query->getResultArray();
    }

    public function edit($data, $id_loker)
    {
        // return $this->id_loker->query($this->prepQuery($data), $this->$id_loker);
        return $this->db->table('loker')->update($data, array('id_loker' => $id_loker));
    }

    public function hapus($id_loker)
    {
        return $this->table('loker')->delete(array('id_loker' => $id_loker));
    }

    public function countData()
    {
        $data = $this->db->table('loker')->countAllResults();
        return $data;
    }
    public function countDtFilters()
    {
        $data = $this->db->table('loker');
        $data->join('perusahaan', 'perusahaan.id_prshn = loker.id_prshn')
            ->join('ktgr_loker', 'ktgr_loker.id_ktgr = loker.id_ktgr')
            ->join('users', 'perusahaan.user_id = users.user_id')
            ->where('users.user_id', session()->get('user_id'));
        $new = $data->get()->getResult();
        return $new;
    }

    public function status($id_loker, $dataLok)
    {
        return $this->db->table('loker')->update($id_loker, $dataLok);
    }
}
