<?php

namespace App\Models;

use CodeIgniter\Model;

class LokerModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'loker';
    protected $primaryKey       = 'id_loker';
    // return view('partials/modal');
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        "id_kategor",    "id_prshn",    "judul_loker",    "posisi",    "tgl_upload", "syrt_pend",    "gaji",    "detail_loker",    "bts_waktu",    "created_at",    "updated_at"
    ];
}
