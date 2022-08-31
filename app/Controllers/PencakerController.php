<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\KtgrLokerModel;
use App\Models\PerusahaanModel;
use App\Models\LokerModel;

use App\Models\LamaranModel;
use App\Models\PencakerModel;

class PencakerController extends BaseController
{
    public function __construct()
    {
        // $this->ktgrLokerModel = new KtgrLokerModel();
        // $this->perusahaanModel = new PerusahaanModel();
        $this->lokerModel = new LokerModel();

        $this->lamaranModel = new LamaranModel();
        $this->pencakerModel = new PencakerModel();

        $this->session = \Config\Services::session();
    }
    public function index()
    {
        // $prs = $this->perusahaanModel->findAll();
        // $ktgr = $this->ktgrLokerModel->findAll();
        $pnckr = $this->pencakerModel->findAll();
        // $lamar = $this->lamaranModel->findAll();

        $lokers = $this->lokerModel->getLoker();
        $data = [
            // 'perusahaan' => $prs,
            // 'ktgrLoker' => $ktgr,
            'lokersJoin' => $lokers,
            'pnckr' => $pnckr,
            // 'lamar' => $lamar,
            'title' => 'Data Filter'
        ];
        // dd($data);
        return view('/pencaker/dashboard', $data);
    }
    public function tambah()
    {
        if (!$this->validate([
            'berkas' => [
                'rules' => 'uploaded[berkas]|mime_in[berkas,application/pdf,application/mword]',
                'errors' => [
                    'uploaded' => 'pilih File terlebih dahulu',
                    'mime_in' => 'yang anda masukkan bukan file'
                ]
            ],
            'tgl_lamar' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tanggal melamar harus di isi'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'berkas lamaran anda belum lengkap');
            if (session()->get('role') == 'pencaker') {
                return redirect()->to('/pencaker/dashboard');
            }
        }
        // ambil gambar
        $fileBerkas = $this->request->getFile('berkas');

        // pindahkan file
        $fileBerkas->move('berkas');

        // ambil nama file
        $namaberkas = $fileBerkas->getName();

        $pnckr = $this->pencakerModel->findAll();
        $data = [
            'id_pencaker' => $this->request->getPost('id_pencaker'),
            'id_loker' => $this->request->getPost('id_loker'),
            'berkas' => $namaberkas,
            'tgl_lamar' => $this->request->getPost('tgl_lamar')
        ];
        // dd($data);
        $success = $this->lamaranModel->tambah($data);
        if ($success) {
            session()->setFlashdata('pesan2', 'data lamaran Telah terkirim');
            return redirect()->to(base_url('/pencaker/dashboard'));
        }
    }
}
