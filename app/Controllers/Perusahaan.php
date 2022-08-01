<?php

namespace App\Controllers;

use App\Models\PerusahaanModel;

class Perusahaan extends BaseController
{
    public function __construct()
    {
        $this->perusahaanModel = new PerusahaanModel();
    }
    public function perusahaan()
    {
        $dataPerusahaan = $this->perusahaanModel->getPerusahaan()->getResult();
        // $pr = $this->perusahaanModel->findAll();
        $data = [
            "perusahaan" => $dataPerusahaan,
            "title" => "Perusahaan",
            'info' => $this->perusahaanModel->findAll()
        ];
        return view('perusahaan', $data);
        // dd($pr);
    }

    // func for insert data

    public function tambah()
    {
        $data = [
            'nm_prshn' => $this->request->getPost('nm_prshn'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'tlp' => $this->request->getPost('tlp'),
            'logo' => $this->request->getPost('logo'),
            'srt_izin' => $this->request->getPost('srt_izin'),
            'strk_organis' => $this->request->getPost('strk_organis'),
            // 'id_prshn' =>$this->request->getPost()
        ];
        $success = $this->perusahaanModel->tambah($data);
        if ($success) {
            return redirect()->to(base_url('perusahaan'));
        }
    }

    // func edit
    public function edit($id_prshn)
    {
        $this->perusahaanModel->save([
            'id_prshn' => $id_prshn,
            'nm_prshn' => $this->request->getVar('nm_prshn'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'tlp' => $this->request->getVar('tlp'),
            'logo' => $this->request->getVar('logo'),
            'srt_izin' => $this->request->getVar('srt_izin'),
            'strk_organis' => $this->request->getVar('strk_organis')

        ]);
        return redirect()->to(base_url('perusahaan'));
    }

    // func hapus
    public function hapus($id_prshn)
    {
        $this->perusahaanModel->delete($id_prshn);
        return redirect()->to(base_url('perusahaan'));
    }
}
