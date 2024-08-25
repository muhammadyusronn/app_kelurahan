<?php
class AuthController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        $token = $this->session->userdata('token');
        $this->load->model('AdminModel');
    }

    public function login()
    {
        if (isset($token)) {
            redirect('dash');
        }
        if (!isset($_POST['submit'])) {
            $data['title'] = 'Halaman Login';
            $this->load->view('backend/page-login', $data);
        } else {
            $nip = $this->POST('nip');
            $pass = $this->POST('password');
            $cek_user = $this->AdminModel->get(['nip' => $nip]);
            if (count($cek_user) == 0) {
                $this->flashmsg('Data tidak ditemukan', 'danger');
                redirect('login');
            } else {
                if (password_verify($pass, $cek_user[0]->password)) {
                    $data = [
                        'nip'       => $nip,
                        'password'  => $cek_user[0]->password
                    ];
                    $user = $this->AdminModel->get($data);
                    if (count($user) == 1) {
                        $resource = [
                            'id_user'    => $user[0]->id_user,
                            'nip'        => $user[0]->nip,
                            'level'      => $user[0]->level_user,
                            'nama'       => $user[0]->nama,
                            'kontak'     => $user[0]->kontak
                        ];
                        $this->data['resess']     = $resource;
                        $this->data['message']     = 'Auth success';
                        $this->data['info']     = [
                            'status'     => 'ok',
                            'response'    => 200
                        ];
                        $update = $this->AdminModel->update($user[0]->id_user, ['last_login' => date("Y-m-d H:i:s")]);
                    } else {
                        $this->data['message']     = 'Wrong username or password';
                        $this->data['info']     = [
                            'status'    => 'fail',
                            'response'    => 502
                        ];
                        $this->flashmsg($this->data['message'], 'danger');
                        redirect('login');
                    }
                } else {
                    $this->data['message']     = 'Wrong username or password';
                    $this->data['info']     = [
                        'status'    => 'fail',
                        'response'    => 502
                    ];
                    $this->flashmsg($this->data['message'], 'danger');
                    redirect('login');
                }
                if ($this->data['info']['status'] == 'ok') {
                    $this->flashmsg($this->data['message'], 'success');
                    $this->session->set_userdata(['token' => $this->data['resess']]);
                    if($this->data['resess']['level']=="3"){
                        redirect('/');
                    }else{
                        redirect('dash');
                    }
                } else {
                    $this->flashmsg($this->data['message'], 'danger');
                }
            }
        }
    }

    public function register()
    {
        if (isset($token)) {
            redirect('dash');
        }
        if (!isset($_POST['submit'])) {
            $data['title'] = 'Halaman Register';
            $this->load->view('backend/page-register', $data);
        }else if(isset($_POST['submit'])) {
            $options = [
                'cost' => 10,
            ];
            $data = [
                'nip' => $this->post('nik'),
                'nama' => $this->post('nama'),
                'kontak' => $this->post('kontak'),
                'level_user' => 3,
                'password' => password_hash($this->post('password'), PASSWORD_DEFAULT, $options),
                'original_pass' => $this->post('password')

            ];
            $this->db->trans_start();
            $insert = $this->AdminModel->insert($data);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->flashmsg('Registrasi gagal, mohon cek data anda', 'danger');
                redirect('register');
            } else {
                $this->flashmsg('Registrasi berhasi, silahkan login', 'success');
                redirect('login');
            }
        }else{
            $data['title'] = 'Halaman Register';
            $this->load->view('backend/page-register', $data);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
