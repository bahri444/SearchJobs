<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Files\UploadedFile;
use Exception;
use App\Models\UserModel;
use App\Models\PencakerModel;

class Pencaker extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->pencakerModel = new PencakerModel();
        $this->session = \Config\Services::session();
    }
    public function pencaker()
    {
        $datausers = $this->userModel->findAll();
        $datapencaker = $this->pencakerModel->getPencaker();
        session();
        $data = [
            "user" => $datausers,
            "Joins" => $datapencaker,
            "title" => "pencaker",
            'info' => $this->pencakerModel->findAll(),
            'validation' => \config\Services::validation()
        ];
        // dd($data);
        if (session()->get('role') == 'admin') {
            return view('/admin/pencaker', $data);
        } elseif (session()->get('role') == 'instansi') {
            return view('/instansi/pencaker', $data);
        } //elseif (session()->get('role') == 'pencaker') {
        //     return view('/pencaker/dashboard', $data);
        // }
    }

    // func for insert data

    public function tambah()
    {
        if (!$this->validate([
            'nm_lkp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama lengkap harus di isi'
                ]
            ],
            'tgl_lhr' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'tanggal lahir harus di isi'
                ]
            ],
            'usia' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'umur harus di isi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'alamat harus di isi'
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'email harus di isi'
                ]
            ],
            'tlp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No telpon harus di isi'
                ]
            ],
            'peng_ker' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'pengalaman kerja harus di isi'
                ]
            ],
            'bid_keahlian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'bidang keahlian harus di isi'
                ]
            ],
            'sertifikat' => [
                'rules' => 'uploaded[sertifikat]|mime_in[sertifikat,application/pdf,application/mword]',
                'errors' => [
                    'uploaded' => 'pilih FIle terlebih dahulu',
                    'mime_in' => 'yang anda masukkan bukan file'
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Data Belum Lengkap !');
            return redirect()->to(base_url('/admin/pencaker'))->withInput();
        }
        // ambil gambar
        $Sertifikat = $this->request->getFile('sertifikat');

        // pindahkan file
        $Sertifikat->move('sertifikat1');

        // ambil nama file
        $namaSertifikat = $Sertifikat->getName();
        $data = [
            'nm_lkp' => $this->request->getPost('nm_lkp'),
            'tgl_lhr' => $this->request->getPost('tgl_lhr'),
            'jk' => $this->request->getPost('jk'),
            'usia' => $this->request->getPost('usia'),
            'alamat' => $this->request->getPost('alamat'),
            'email' => $this->request->getPost('email'),
            'tlp' => $this->request->getPost('tlp'),
            'pend_ter' => $this->request->getPost('pend_ter'),
            'peng_ker' => $this->request->getPost('peng_ker'),
            'bid_keahlian' => $this->request->getPost('bid_keahlian'),
            'sertifikat' => $namaSertifikat,
        ];
        // dd($data);
        $success = $this->PencakerModel->tambah($data);
        if ($success) {
            session()->setFlashdata('pesan2', 'Data Berhasil Ditambah !');
            return redirect()->to(base_url('/admin/pencaker'));
            // dd($data);
        }
    }

    // func edit
    public function edit($id_pencaker)
    {
        try {
            $this->PencakerModel->update($id_pencaker, [
                'id_pencaker' => $id_pencaker,
                'nm_lkp' => $this->request->getVar('nm_lkp'),
                'tgl_lhr' => $this->request->getVar('tgl_lhr'),
                'jk' => $this->request->getVar('jk'),
                'usia' => $this->request->getVar('usia'),
                'alamat' => $this->request->getVar('alamat'),
                'email' => $this->request->getVar('email'),
                'tlp' => $this->request->getVar('tlp'),
                'pend_ter' => $this->request->getVar('pend_ter'),
                'peng_ker' => $this->request->getVar('peng_ker'),
                'bid_keahlian' => $this->request->getVar('bid_keahlian'),
                'sertifikat' => $this->request->getVar('sertifikat'),

            ]);
            return redirect()->to(base_url('/admin/pencaker'));
        } catch (Exception $e) {
            dd($e);
        }
    }

    // func hapus
    public function hapus($id_pencaker)
    {
        // $this->PencakerModel->delete($id_pencaker);
        // return redirect()->to(base_url('pencaker'));
        try {
            $this->PencakerModel->delete($id_pencaker);
            return redirect()->to(base_url('/admin/pencaker'));
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function download($id_pencaker)
    {

        $datapencaker = $this->PencakerModel->where(['id_pencaker' => $id_pencaker])->first();
        $data = [
            'no' => $datapencaker,
        ];
        return view('pencaker/kartu', $data);
    }
    public function sttsAkun($id_pencaker)
    {
        $frmDt = $this->request->getPost('stts_akun');
        $result = $this->pencakerModel->where('id_pencaker', $id_pencaker)->get()->getResultArray();
        $data = [
            'id_pencaker' => $id_pencaker,
            'user_id' => $result[0]['user_id'],
            'nm_lkp' => $result[0]['nm_lkp'],
            'fas_foto' => $result[0]['fas_foto'],
            'tgl_lhr' => $result[0]['tgl_lhr'],
            'jk' => $result[0]['jk'],
            'usia' => $result[0]['usia'],
            'tlp' => $result[0]['tlp'],
            'alamat' => $result[0]['alamat'],
            'pend_ter' => $result[0]['pend_ter'],
            'peng_ker' => $result[0]['peng_ker'],
            'bid_keahlian' => $result[0]['bid_keahlian'],
            'stts_akun' => $frmDt,
        ];
        // dd($data);
        $this->pencakerModel->save($data);
        return redirect()->to('admin/pencaker');
    }
}
