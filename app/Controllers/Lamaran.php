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
        $dataLok = $this->lokerModel->findAll();
        $dataPenc = $this->pencakerModel->findAll();
        // $res = $this->lamaranModel->findAll();
        $datalamaran = $this->lamaranModel->getlamaran()->getResultArray();
        // $pr = $this->perusahaanModel->findAll();
        session();
        $data = [
            "dataLoker" => $dataLok,
            "dataPencaker" => $dataPenc,
            "lamaran" => $datalamaran,
            // "res" => $res,
            "title" => "Data lamaran",
            'validation' => \config\Services::validation()
            // 'info' => $this->lamaranModel->findAll(),
        ];
        // dd($data);
        if (session()->get('role') == 'admin') {
            return view('/admin/lamaran', $data);
        } elseif (session()->get('role') == 'instansi') {
            return view('/instansi/lamaran', $data);
        } elseif (session()->get('role') == 'pencaker') {
            return view('/pencaker/lamaran', $data);
        }
    }

    // func for insert data
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
                    'required' => 'tanggal melamar harus di isi '
                ]
            ],
        ])) {
            session()->setFlashdata('pesan', 'Data Belum Lengkap !');
            if (session()->get('role') == 'admin') {
                return redirect()->to(base_url('/admin/lamaran'));
            } elseif (session()->get('role') == 'instansi') {
                return redirect()->to(base_url('/instansi/lamaran'));
            } elseif (session()->get('role') == 'pencaker') {
                return redirect()->to(base_url('/pencaker/lamaran'));
            }
        }
        // ambil gambar
        $fileBerkas = $this->request->getFile('berkas');

        // pindahkan file
        $fileBerkas->move('berkas');

        // ambil nama file
        $namaberkas = $fileBerkas->getName();

        $data = [
            'id_lamaran' => $this->request->getPost('id_lamaran'),
            'id_pencaker' => $this->request->getPost('id_pencaker'),
            'id_loker' => $this->request->getPost('id_loker'),
            'tgl_lamar' => $this->request->getPost('tgl_lamar'),
            'berkas' => $namaberkas,
        ];
        // dd($data);

        $success = $this->lamaranModel->tambah($data);
        if ($success) {
            session()->setFlashdata('pesan2', 'Data Berhasil Ditambah !');
            if (session()->get('role') == 'admin') {
                return redirect()->to(base_url('/admin/lamaran'));
            } elseif (session()->get('role') == 'instansi') {
                return redirect()->to(base_url('/instansi/lamaran'));
            } elseif (session()->get('role') == 'pencaker') {
                return redirect()->to(base_url('/pencaker/lamaran'));
            }
        }
    }

    // func edit
    public function edit($id_lamaran)
    {
        try {
            $this->lamaranModel->update($id_lamaran, $this->request->getPost());
            if (session()->get('role') == 'admin') {
                return redirect()->to(base_url('/admin/lamaran'));
            } elseif (session()->get('role') == 'instansi') {
                return redirect()->to(base_url('/instansi/lamaran'));
            } elseif (session()->get('role') == 'pencaker') {
                return redirect()->to(base_url('/pencaker/lamaran'));
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    // func hapus
    public function hapus($id_lamaran)
    {
        try {
            $this->lamaranModel->delete($id_lamaran);
            if (session()->get('role') == 'admin') {
                return redirect()->to(base_url('/admin/lamaran'));
            } elseif (session()->get('role') == 'instansi') {
                return redirect()->to(base_url('/instansi/lamaran'));
            } elseif (session()->get('role') == 'pencaker') {
                return redirect()->to(base_url('/pencaker/lamaran'));
            }
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function validasi($id_lamaran)
    {
        $dataform = $this->request->getPost('blm_lngkp');
        $curData = $this->lamaranModel->where('id_lamaran', $id_lamaran)->get()->getResultArray();
        // dd($curData[0]);

        $data = [
            'id_lamaran' => $id_lamaran,
            'id_loker' => $curData[0]['id_loker'],
            'id_pencaker' => $curData[0]['id_pencaker'],
            'berkas' => $curData[0]['berkas'],
            'tgl_lamar' => $curData[0]['tgl_lamar'],
            's_lamaran' => $dataform,

        ];
        // dd($id_lamaran);
        // dd($this->request->getPost('blm_lngkp'));
        // dd($data);

        $this->lamaranModel->save($data);
        return redirect()->to('/admin/lamaran');
    }

    public function rekomendasi($id)
    {
        $dataform = $this->request->getPost('rekomendasi');
        // dd($dataform);
        $curData = $this->lamaranModel->where('id_lamaran', $id)->get()->getResultArray();
        // dd($curData[0]);

        $data = [
            'id_lamaran' => $id,
            'id_loker' => $curData[0]['id_loker'],
            'id_pencaker' => $curData[0]['id_pencaker'],
            'berkas' => $curData[0]['berkas'],
            'tgl_lamar' => $curData[0]['tgl_lamar'],
            's_lamaran' => $dataform,

        ];
        // dd($id_lamaran);
        // dd($this->request->getPost('blm_lngkp'));
        $this->lamaranModel->save($data);
        return redirect()->to('/admin/lamaran');
    }
    public function responsInstansi($id_lam)
    {
        $indata = $this->request->getPost('respons');
        $result = $this->lamaranModel->where('id_lamaran', $id_lam)->get()->getResultArray();
        $datas = [
            'id_lamaran' => $id_lam,
            'id_loker' => $result[0]['id_loker'],
            'id_pencaker' => $result[0]['id_pencaker'],
            'berkas' => $result[0]['berkas'],
            'tgl_lamar' => $result[0]['tgl_lamar'],
            's_lamaran' => $result[0]['s_lamaran'],
            'respons' => $indata,
        ];
        // dd($datas);
        $this->lamaranModel->save($datas);
        return redirect()->to('/instansi/lamaran');
    }
}
