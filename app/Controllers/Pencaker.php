<?php

namespace App\Controllers;

use App\Models\PencakerModel;
use Exception;

class Pencaker extends BaseController
{
    public function __construct()
    {
        $this->PencakerModel = new PencakerModel();
    }
    public function Pencaker()
    {
        $datapencaker = $this->PencakerModel->getPencaker()->getResult();
        // $pr = $this->perusahaanModel->findAll();
        // dd($datapencaker);
        $data = [
            "pencaker" => $datapencaker,
            "title" => "pencaker",
            'info' => $this->PencakerModel->findAll()
        ];
        return view('pencaker', $data);
        // dd($pr);
    }

    // func for insert data

    public function tambah()
    {
        $data = [
            'nm_lkp' => $this->request->getPost('nm_lkp'),
            'tgl_lhr' => $this->request->getPost('tgl_lhr'),
            'jk' => $this->request->getPost('jk'),
            'usia' => $this->request->getPost('usia'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'pend_ter' => $this->request->getPost('pend_ter'),
            'peng_ker' => $this->request->getPost('peng_ker'),
            'bid_keahlian' => $this->request->getPost('bid_keahlian'),
            'sertifikat' => $this->request->getPost('sertifikat'),
            // 'id_prshn' =>$this->request->getPost()
        ];
        
        try{
            $this->PencakerModel->tambah($data);
                return redirect()->to(base_url('pencaker'));
        }catch(Exception $e){
            dd($e);
        }
    }

    // func edit
    public function edit($id_pencaker)
    {
        try{
            $this->PencakerModel->update($id_pencaker,[
                'id_pencaker' => $id_pencaker,
                'nm_lkp' => $this->request->getVar('nm_lkp'),
                'tgl_lhr' => $this->request->getVar('tgl_lhr'),
                'jk' => $this->request->getVar('jk'),
                'usia' => $this->request->getVar('usia'),
                'alamat' => $this->request->getVar('alamat'),
                'email' => $this->request->getVar('email'),
                'pend_ter' => $this->request->getVar('pend_ter'),
                'peng_ker' => $this->request->getVar('peng_ker'),
                'bid_keahlian' => $this->request->getVar('bid_keahlian'),
                'sertifikat' => $this->request->getVar('sertifikat'),
    
            ]);
            return redirect()->to(base_url('pencaker'));
        }catch(Exception $e){
            dd($e);
        }
    }

    // func hapus
    public function hapus($id_pencaker)
    {
        // $this->PencakerModel->delete($id_pencaker);
        // return redirect()->to(base_url('pencaker'));
        try{
            $this->PencakerModel->delete($id_pencaker);
            return redirect()->to(base_url('pencaker'));
        }catch(Exception $e){
            dd($e);
        }
    }
    
    


}
