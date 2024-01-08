<?php
class PengajarController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajarModel');
        $this->data['token'] = $this->session->userdata('token');
        if (empty($this->data['token'])) {
            $this->flashmsg('Anda harus login dulu!', 'danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Pengajar';
        $data['pengajar'] = $this->PengajarModel->get();
        $this->render('backend/pengajar/data-pengajar', $data);
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $path = './uploads/foto-pengajar';
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $config['upload_path']          = $path;
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 10000;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file_foto')) {
                $error = array('error' => $this->upload->display_errors());
                $this->flashmsg('Gagal upload file', 'danger');
                redirect('pengajar');
                die();
            } else {
                $data = array('upload_data' => $this->upload->data());
            }
            $this->db->trans_start();
            $this->PengajarModel->insert([
                'nama' => $this->POST('nama'),
                'mata_pelajaran' => $this->POST('mata_pelajaran'),
                'motto' => $this->POST('motto'),
                'created_by' => $this->session->userdata('token')['id_user'],
                'foto' => $data['upload_data']['file_name']
            ]);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->flashmsg('Gagal menambah data', 'danger');
                redirect('pengajar');
            } else {
                $this->flashmsg('Sukses menambah data', 'success');
                redirect('pengajar');
            }
        } else {
            $data['title'] = "Tambah Pengajar";
            $this->render('backend/pengajar/create-pengajar', $data);
        }
    }

    public function edit($id)
    {
        if (isset($_POST['submit'])) {
            $datas = [];
            if (is_uploaded_file($_FILES['file_foto']['tmp_name'])) {
                $directory = 'foto-pengajar';
                $path = './uploads/' . $directory;
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                }
                $config['upload_path']          = $path;
                $config['allowed_types']        = 'jpeg|jpg|png';
                $config['max_size']             = 10000;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file_foto')) {
                    $error = array('error' => $this->upload->display_errors());
                    $this->flashmsg('Gagal upload data', 'danger');
                    redirect('konten');
                    die();
                }
                $dataFile = $this->upload->data();
                $datas = array_merge($datas, ['foto' => $dataFile['file_name']]);
            }
            $data = [
                'nama' => $this->POST('nama'),
                'mata_pelajaran' => $this->POST('mata_pelajaran'),
                'motto' => $this->POST('motto'),
                'created_by' => $this->session->userdata('token')['id_user']
            ];
            $data = array_merge($data, $datas);
            $this->db->trans_start();
            $insert = $this->PengajarModel->update($this->POST('id'), $data);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->flashmsg('Gagal mengubah data', 'danger');
                redirect('pengajar');
            } else {
                $this->flashmsg('Sukses mengubah data', 'success');
                redirect('pengajar');
            }
        } else {
            $data['title'] = 'Update Pengajar';
            $data['pengajar'] = $this->PengajarModel->get(['id' => $id]);
            $this->render('backend/pengajar/create-pengajar', $data);
        }
    }

    public function destroy($id)
    {
        $this->db->trans_start();
        $delete = $this->PengajarModel->delete($id);
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE) {
            $this->flashmsg('Gagal menghapus data', 'danger');
            redirect('pengajar');
        } else {
            $this->flashmsg('Sukses menghapus data', 'success');
            redirect('pengajar');
        }
    }
}
