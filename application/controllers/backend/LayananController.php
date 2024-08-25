<?php
class LayananController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajuanModel');
        $this->load->model('LayananModel');
        $this->data['token'] = $this->session->userdata('token');
        if (empty($this->data['token'])) {
            $this->flashmsg('Anda harus login dulu!', 'danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Layanan User';
        $data['layanan'] = $this->PengajuanModel->get_all($this->session->userdata('token')['level']);
        $this->render('backend/layanan/data-layanan', $data);
    }

    public function detail($id)
    {
        if (!isset($_POST['submit'])) {
            $data['title'] = 'Data Permohonan';
            $data['layanan'] = $this->PengajuanModel->get_detail_permohonan($id);
            $this->render('backend/layanan/detail-layanan', $data);
        } else {
            $this->db->trans_start();
            $insert = $this->PengajuanModel->update($id, [
                'verified_by' => $this->session->userdata('token')['nip'],
                'verified_date' => date("Y-m-d H:i:s"),
                'status' => $this->post('status'),
                'deskripsi' => $this->post('deskripsi')
            ]);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->flashmsg('Gagal melakukan approval', 'danger');
                redirect('layanan');
            } else {
                $this->flashmsg('Berhasil Melakukan Approval', 'success');
                redirect('layanan');
            }
        }
    }

}
