<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PencakerModel;
use App\Models\KtgrLokerModel;

class LengkapiData extends BaseController
{
    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->pencakerModel = new PencakerModel();
        $this->ktgrLokerModel = new KtgrLokerModel();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $user = $this->userModel->findAll();
        $pencaker = $this->pencakerModel->findAll();
        $ktgrLoks = $this->ktgrLokerModel->getKtgrLoker()->getResult();
        $data = [
            'user' => $user,
            'pencaker' => $pencaker,
            'ktgr' => $ktgrLoks,
            'title' => 'Pencaker Profile',
            'validation' => \Config\Services::validation()
        ];
        // dd($data);
        if (session()->get('role') == 'pencaker') {
            return view('pencaker/lengkapiData', $data);
        } else {
            echo 'akses di tolak';
        }
    }
    public function tambah()
    {
        if (!$this->validate([
            'user_id' => [
                'rules' => 'is_unique[pencaker.user_id]|required',
                'errors' => [
                    'is_unique' => 'Data perusahaan anda sudah terdaftar',
                    'require' => '{field} harus diisi'
                ]
            ],
            'nm_lkp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'nama lengkap harus di isi'
                ]
            ],
            'fas_foto' => [
                'rules' => 'uploaded[fas_foto]|max_size[fas_foto,5000]|is_image[fas_foto]|mime_in[fas_foto,image/jpg,image/png,image/jpeg]',
                'errors' => [
                    'uploaded' => 'pilih logo terlebih dahulu',
                    'max_size' => 'ukuran logo terlalu besar',
                    'is_image' => 'yang anda pilihh bukan logo',
                    'mime-in' => 'yang anda pilihh bukan logo'
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
        ])) {
            session()->setFlashdata('pesan', 'data tidak lengkap atau anda sudah terdaftar');
            if (session()->get('role') == 'pencaker') {
                return redirect()->to('/pencaker/lengkapiData')->withInput(); //jika gagal akan di kembalikan ke dalam form lengkapi data
            }
        }
        $fasFoto = $this->request->getFile('fas_foto'); //ambil gambar
        $fasFoto->move('img2'); //pindahkan file
        $namaFasFoto = $fasFoto->getName(); //mengambil nama file
        $data = [
            'user_id' => $this->request->getPost('user_id'),
            'nm_lkp' => $this->request->getPost('nm_lkp'),
            'fas_foto' => $namaFasFoto,
            'tgl_lhr' => $this->request->getPost('tgl_lhr'),
            'jk' => $this->request->getPost('jk'),
            'usia' => $this->request->getPost('usia'),
            'alamat' => $this->request->getPost('alamat'),
            'tlp' => $this->request->getPost('tlp'),
            'pend_ter' => $this->request->getPost('pend_ter'),
            'peng_ker' => $this->request->getPost('peng_ker'),
            'bid_keahlian' => $this->request->getPost('bid_keahlian'),
        ];
        $success = $this->pencakerModel->tambah($data);
        if ($success) {
            session()->setFlashdata('pesan2', 'Data berhasil di simpan');
            return redirect()->to(base_url('pencaker/dashboard'));
        }
    }
}
