<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PencakerModel;
use App\Models\LamaranModel;
use App\Models\KtgrLokerModel;
use Exception;

class Profile extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->pencakerModel = new PencakerModel();
        $this->lamaranModel = new LamaranModel();
        $this->ktgrLokerModel = new KtgrLokerModel();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $dataUsers = $this->userModel->findAll();
        $lmr = $this->lamaranModel->getlamaran()->getResultArray();
        $dataPencaker = $this->pencakerModel->getPencaker();
        $ktgrLok = $this->ktgrLokerModel->findAll();
        $data = [
            'users' => $dataUsers,
            'pencaker_join' => $dataPencaker,
            'lamaran' => $lmr,
            'ktgr' => $ktgrLok,
            'title' => 'Pencaker Profile'
        ];
        // dd($data);
        return view('/pencaker/profile', $data);
    }
    // func edit profile
    public function edit($id_pencaker)
    {
        $fasFoto = $this->request->getFile('fas_foto'); //ambil gambar
        $fasFoto->move('img2'); //pindahkan file
        $namaFasFoto = $fasFoto->getName(); //mengambil nama file
        try {
            $data = $this->pencakerModel->update($id_pencaker, [
                'user_id' => $this->request->getVar('user_id'),
                'nm_lkp' => $this->request->getVar('nm_lkp'),
                'fas_foto' => $namaFasFoto,
                'tgl_lhr' => $this->request->getVar('tgl_lhr'),
                'jk' => $this->request->getVar('jk'),
                'usia' => $this->request->getVar('usia'),
                'tlp' => $this->request->getVar('tlp'),
                'alamat' => $this->request->getVar('alamat'),
                'pend_ter' => $this->request->getVar('pend_ter'),
                'peng_ker' => $this->request->getVar('peng_ker'),
                'bid_keahlian' => $this->request->getVar('bid_keahlian'),
            ]);
            if ($data == true) {
                session()->setFlashdata('pesan2', 'Data berhasil di edit');
                return redirect()->to(base_url('pencaker/profile'));
            } elseif ($data == false) {
                session()->setFlashdata('pesan', 'data gagal di edit');
                return redirect()->to('/pencaker/profile');
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    // function hapus
    public function hapus($id_pencaker)
    {
        $this->pencakerModel->delete($id_pencaker);
        return redirect()->to(base_url('/pencaker/profile'));
    }
}
