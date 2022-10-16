<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PerusahaanModel;
use App\Models\UserModel;
use Exception;

class ProfilePrshn extends BaseController
{
    public function __construct()
    {
        $this->perusahaanModel = new PerusahaanModel();
        $this->userModel = new UserModel();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $dataUsers = $this->userModel->findAll();
        $dataPrs = $this->perusahaanModel->getPerusahaan();
        session();
        $data = [
            'user' => $dataUsers,
            'join_prs' => $dataPrs,
            'title' => 'Profile Perusahaan'
        ];
        // dd($data);

        return view('/instansi/profilePrshn', $data);
    }
    public function edit($id_prshn)
    {
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

        try {
            $data = $this->perusahaanModel->update($id_prshn, [
                'user_id' => $this->request->getVar('user_id'),
                'nm_prshn' => $this->request->getVar('nm_prshn'),
                'alamat' => $this->request->getVar('alamat'),
                'tlp' => $this->request->getVar('tlp'),
                'logo' => $namaLogo,
                'srt_izin' => $namaSurat,
                'strk_organis' => $namaStruktur,
            ]);
            // dd($data);
            if ($data == true) {
                session()->setFlashdata('pesan2', 'Data berhasil di edit');
                return redirect()->to(base_url('instansi/profilePrshn'));
            } elseif ($data == false) {
                session()->setFlashdata('pesan', 'data gagal di edit');
                return redirect()->to('/instansi/profilePrshn');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
    // function hapus
    public function hapus($id_prshn)
    {
        $this->perusahaanModel->delete($id_prshn);
        return redirect()->to(base_url('/instansi/profilePrshn'));
    }
}
