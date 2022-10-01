<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PerusahaanModel;

class LengkapiPrshn extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->perusahaanModel = new PerusahaanModel();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $users = $this->userModel->findAll();
        $prs = $this->perusahaanModel->getPerusahaan();
        session();
        $data = [
            'user' => $users,
            'join_prs' => $prs,
            'title' => 'Profile Perusahaan',
            'validation' => \Config\Services::validation()
        ];
        return view('/instansi/lengkapiPrshn', $data);
    }
    public function tambah()
    {
        if (!$this->validate([
            'user_id' => [
                'rules' => 'is_unique[perusahaan.user_id]|required',
                'errors' => [
                    'is_unique' => 'Data perusahaan anda sudah terdaftar',
                    'require' => '{field} harus diisi'
                ]
            ],
            'nm_prshn' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama perusahaan tidak boleh kosong'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama perusahaan tidak boleh kosong'
                ]
            ],
            'tlp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama perusahaan tidak boleh kosong'
                ]
            ],
            'logo' => [
                'rules' => 'uploaded[logo]|max_size[logo,5000]|is_image[logo]|mime_in[logo,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'pilih logo terlebih dahulu',
                    'max_size' => 'ukuran logo terlalu besar',
                    'is_image' => 'yang anda pilihh bukan logo',
                    'mime-in' => 'yang anda pilihh bukan logo'
                ]
            ],
            'srt_izin' => [
                'rules' => 'uploaded[srt_izin]|mime_in[srt_izin,application/pdf,application/mword]',
                'errors' => [
                    'uploaded' => 'pilih File terlebih dahulu',
                    'mime_in' => 'yang anda masukkan bukan file'
                ]
            ],
            'strk_organis' => [
                'rules' => 'uploaded[strk_organis]|mime_in[strk_organis,application/pdf,application/mword]',
                'errors' => [
                    'uploaded' => 'pilih file terlebih dahulu',
                    'mime_in' => 'yang anda masukkan bukan file'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Data tidak lengkap atau perusahaan sudah terdaftar');
            if (session()->get('role') == 'instansi') {
                return redirect()->to('instansi/lengkapiPrshn')->withInput();
            }
        }

        // get image
        $fileLogo = $this->request->getFile('logo');
        $fileSurat = $this->request->getFile('srt_izin');
        $fileStruktur = $this->request->getFile('strk_organis');

        // pindahkan file
        $fileLogo->move('img2');
        $fileSurat->move('surat');
        $fileStruktur->move('strk_organis');

        // ambil nama file
        $namaLogo = $fileLogo->getName();
        $namaSurat = $fileSurat->getName();
        $namaStruktur = $fileStruktur->getName();

        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'nm_prshn' => $this->request->getPost('nm_prshn'),
            'alamat' => $this->request->getPost('alamat'),
            'tlp' => $this->request->getPost('tlp'),
            'logo' => $namaLogo,
            'srt_izin' => $namaSurat,
            'strk_organis' => $namaStruktur,
        ];
        $success = $this->perusahaanModel->tambah($data);
        if ($success) {
            if (session()->get('role') == 'instansi') {
                session()->setFlashdata('pesan2', 'data berhasil di lengkapi');
                return redirect()->to(base_url('/instansi/dashboard'));
            } else {
                echo 'Akses Di tolak';
            }
        }
    }
}
