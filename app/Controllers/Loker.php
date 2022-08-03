<?php

namespace App\Controllers;

use App\Models\LokerModel;
use App\Models\PerusahaanModel;
use App\Models\KtgrLokerModel;

class Loker extends BaseController
{
    protected $lokerModel;
    public function __construct()
    {
        $this->lokerModel = new LokerModel();
        $this->perusahaanModel = new PerusahaanModel();
        $this->ktgrLokerModel = new KtgrLokerModel();
    }

    public function loker()
    {
        $perusahaan = $this->perusahaanModel->findAll();
        $Dt = $this->ktgrLokerModel->findAll();
        $Data1 = $this->lokerModel->getLoker();
        $data = [
            "perusahaan" => $perusahaan,
            "ktgrLoker" => $Dt,
            "title" => "Loker",
            "joinAll" => $Data1
        ];
        return view('loker', $data);
    }
    public function tambah()
    {

        $data = [

            'id_ktgr' => $this->request->getPost('id_ktgr'),
            'id_prshn' => $this->request->getPost('id_prshn'),
            'judul_loker' => $this->request->getPost('judul_loker'),
            'posisi' => $this->request->getPost('posisi'),
            'tgl_buka' => $this->request->getPost('tgl_buka'),
            'tgl_tutup' => $this->request->getPost('tgl_tutup'),
            'syrt_pend' => $this->request->getPost('syrt_pend'),
            'gaji' => $this->request->getPost('gaji'),
            'detail_loker' => $this->request->getPost('detail_loker'),
        ];
        $success = $this->lokerModel->tambah($data);
        if ($success) {
            return redirect()->to(base_url('loker'));
        }
    }

    public function edit($id_loker)
    {
        $this->lokerModel->save([
            'id_loker' => $id_loker,
            'id_ktgr' => $this->request->getVar('id_ktgr'),
            'id_prshn' => $this->request->getVar('id_prshn'),
            'judul_loker' => $this->request->getVar('judul_loker'),
            'posisi' => $this->request->getVar('posisi'),
            'tgl_buka' => $this->request->getVar('tgl_buka'),
            'tgl_tutup' => $this->request->getVar('tgl_tutup'),
            'syrt_pend' => $this->request->getVar('syrt_pend'),
            'gaji' => $this->request->getVar('gaji'),
            'detail_loker' => $this->request->getVar('detail_loker'),
        ]);
        // $id_loker = $this->request->getVar('$id_loker');
        // $data = [
        //     'id_ktgr' => $this->request->getVar('id_ktgr'),
        //     'id_prshn' => $this->request->getVar('id_prshn'),
        //     'judul_loker' => $this->request->getVar('judul_loker'),
        //     'posisi' => $this->request->getVar('posisi'),
        //     'tgl_buka' => $this->request->getVar('tgl_buka'),
        //     'tgl_tutup' => $this->request->getVar('tgl_tutup'),
        //     'syrt_pend' => $this->request->getVar('syrt_pend'),
        //     'gaji' => $this->request->getVar('gaji'),
        //     'detail_loker' => $this->request->getVar('detail_loker')
        // ];
        // $success = $this->lokerModel->update($id_loker);
        // if ($success) {

        //     $id = $this->request->getVar('product_id');
        // $data = array(
        //     'product_name'        => $this->request->getPost('product_name'),
        //     'product_price'       => $this->request->getPost('product_price'),
        //     'product_category_id' => $this->request->getPost('product_category'),
        // );
        // $this->lokerModel->edit($data, $id_loker);
        return redirect()->to(base_url('/loker'));
        // }
    }

    public function hapus($id_loker)
    {
        $this->lokerModel->delete($id_loker);
        return redirect()->to(base_url('/loker'));
    }
}
