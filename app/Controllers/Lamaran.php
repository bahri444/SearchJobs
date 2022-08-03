<?php

namespace App\Controllers;

use App\Models\LamaranModel;
use App\Models\LokerModel;
use App\Models\PencakerModel;
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
            'info' => $this->lamaranModel->findAll()
        ];
        return view('lamaran', $data);
        // dd($pr);
    }

    // func for insert data

    public function tambah()
    {
        try{
            $data = $this->request->getPost();
            $this->lamaranModel->tambah($data);
            return redirect()->to(base_url('lamaran'));
        }catch(Exception $e){
            dd($e);
        }
        // $success = $this->lamaranModel->tambah($data);
        // if ($success) {
        //     return redirect()->to(base_url('lamaran'));
        // }
    }

    // func edit
    public function edit($id_lamaran)
    {
        try{

            $this->lamaranModel->save([
                'id_lamaran' => $id_lamaran,
                'berkas' => $this->request->getVar('berkas'),
                'tgl_lamar' => $this->request->getVar('tgl_lamar'),
    
            ]);
            return redirect()->to(base_url('lamaran'));
        }catch(Exception $e){
            dd($e);
        }
    }

    // func hapus
    public function hapus($id_lamaran)
    {
        try{
            $this->perusahaanModel->delete($id_lamaran);
            return redirect()->to(base_url('lamaran'));

        }catch(Exception $e){
            dd($e);
        }
    }
}
