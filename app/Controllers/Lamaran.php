<?php

namespace App\Controllers;

use App\Models\LamaranModel;
use App\Models\LokerModel;
use App\Models\PencakerModel;
use CodeIgniter\HTTP\Files\UploadedFile;
use Exception;

class Lamaran extends BaseController
{
    public function __construct()
    {
        $this->lamaranModel = new LamaranModel();
        $this->lokerModel = new LokerModel();
        $this->pencakerModel = new PencakerModel();
    }
    public function lamaran()
    {
        $datalamaran = $this->lamaranModel->getlamaran()->getResult();
        // $pr = $this->perusahaanModel->findAll();
        $data = [
            "lamaran" => $datalamaran,
            "dataLoker"=> $this->lokerModel->findAll(),
            "dataPencaker"=>$this->pencakerModel->findAll(),
            "title" => "lamaran",
            'info' => $this->lamaranModel->findAll(),
            'validation'=> \config\Services::validation()
        ];
        return view('lamaran', $data);
        // dd($pr);
    }

    // func for insert data

    public function tambah()
    {
        if(!$this->validate([
            'berkas'=>[
                'rules'=>'uploaded[berkas]|mime_in[berkas,application/pdf,application/mword]',
                'errors' =>[
                    'uploaded'=>'pilih File terlebih dahulu',
                    'mime_in'=>'yang anda masukkan bukan file'
                ]
            ],
            'tgl_lamar'=>[
                'rules'=>'required',
                'errors'=>[
                    'required'=>'Nama perusahaan harus di isi '
                    ]
                ], 
        ])){
            session()->setFlashdata('pesan', 'Data Belum Lengkap !');
            return redirect()->to(base_url('lamaran'))->withInput();
        }
        // ambil gambar
        $fileBerkas=$this->request->getFile('berkas');

        // pindahkan file
        $fileBerkas->move('berkas');

        // ambil nama file
        $namaberkas = $fileBerkas->getName();
        $data = [
            'tgl_lmr' =>$this->request->getPost('tgl_lmr'),
            'berkas' => $namaberkas,
        ];
        $success = $this->perusahaanModel->tambah($data);
        if ($success) {
            session()->setFlashdata('pesan2', 'Data Berhasil Ditambah !');
            return redirect()->to(base_url('lamaran'));
            // dd($data);
        }
    }

    // func edit
    public function edit($id_lamaran)
    {
        try{
            $this->lamaranModel->update($id_lamaran,$this->request->getPost());
            return redirect()->to(base_url('lamaran'));
        }catch(Exception $e){
            dd($e);
        }
    }

    // func hapus
    public function hapus($id_lamaran)
    {
        try{
            $this->lamaranModel->delete($id_lamaran);
            return redirect()->to(base_url('lamaran'));
        }catch(Exception $e){
            dd($e);
        }
    }
}
