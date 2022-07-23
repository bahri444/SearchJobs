<?php

namespace App\MOdels;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Model;

class Pencaker extends Model
{
    protected $table = 'pncr_krj';
    protected $column_order = ['id_pencaker', 'nm_lengkap', 'bidang_keahlian', 'tgl_lahir', 'sertifikat_keahlian', 'pnglmn_krj', 'jk',, 'usia', 'no_tlp', 'alamat', 'pend_terakhir', 'email', 'created_at', 'updated_at'];
    protected $column_search = ['nm_lengkap', 'bidang_keahlian', 'tgl_lahir', 'sertifikat_keahlian', 'pnglmn_krj', 'jk',, 'usia', 'no_tlp', 'alamat', 'pend_terakhir', 'email'];
    protected $order = ['id' => 'DESC'];
    protected $request;
    protected $db;
    protected $dt;

    public function __construct(RequestInterface $request)
    {
        parent::__construct();
        $this->db = db_connect();
        $this->request = $request;
        $this->dt = $this->db->table($this->table);
    }
    private function getDataTablesQuery()
    {
        $i = 0;
        foreach ($this->column_search as $item) {
            if ($this->request->getPost('search')['value']) {
                if ($i === 0) {
                    $this->dt->groupStart();
                    $this->dt->like($item, $this->request->getPost('search')['value']);
                } else {
                    $this->dt->orLike($item, $this->request->getPost('seearch')['value']);
                }
                if (count($this->column_search) - 1 == $i) {
                    $this->dt->groupEnd();
                }
            }
            $i++;
        }
        if ($this->request->getPost('order')) {
            $this->dt->orderBy($this->column_order[$this->request->getPost('order')['0']['column']], $this->request->getPost('order')['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->dt->orderBy(key($order), $order[key($order)]);
        }
    }
}
