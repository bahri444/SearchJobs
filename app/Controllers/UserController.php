<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\PencakerModel;

use Config\Services;

class UserController extends BaseController
{
    protected $session;
    public function __construct()
    {
        $this->session = \Config\Services::session();
        $this->PencakerModel = new PencakerModel();
        $this->validation = \Config\Services::validation();
        $this->userModel = new UserModel();
    }
    public function index()
    {
        helper(['form']);
        $data = [
            'validation' => $this->validation
        ];
        echo view('auth/register', $data);
    }

    public function register()
    {
        $data = [
            'validation' => $this->validation
        ];
        echo view('auth/register', $data);
    }

    public function validreg()
    {
        $dataForm = $this->request->getPost();
        if (!$this->validate([
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'require' => '{field} harus diisi'
                ]
            ],
            'email' => [
                'rules' => 'is_unique[users.email]|required',
                'errors' => [
                    'is_unique' => 'Data yang anda masukkan sudah ada',
                    'require' => '{field} harus diisi'

                ]
            ]
        ])) {
            return redirect()->to('register')->withInput();
        }


        $this->userModel->save([
            "username" => $dataForm['username'],
            "email"    => $dataForm['email'],
            "password" => password_hash($dataForm['password'], PASSWORD_DEFAULT),
            "role"     => $dataForm['role']
        ]);
        return redirect()->to('login');
    }
    private function setUserSession($user)
    {
        $data = [
            'user_id' => $user['user_id'],
            'username' => $user['username'],
            'email' => $user['email'],
            'user_image' => $user['user_image'],
            "role" => $user['role'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function login()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {

                return view('auth/login', [
                    "validation" => $this->validator,
                ]);
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getPost('email'))
                    ->first();


                // Stroing session values
                $this->setUserSession($user);

                // Redirecting to dashboard after login
                if ($user['role'] == 'admin') {
                    return redirect()->to(base_url('admin/dashboard'));
                } elseif ($user['role'] == 'instansi') {
                    return redirect()->to(base_url('instansi/dashboard'));
                } elseif ($user['role'] == 'pencaker') {
                    return redirect()->to(base_url('pencaker/dashboard'));
                }
            }
        }
        return view('auth/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function profile()
    {
        return view('pencaker/profile');
    }
}
