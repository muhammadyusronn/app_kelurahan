<?php
class PermohonanController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajuanModel');
        $this->load->model('LayananModel');
    }

    public function index()
    {
        $data['title'] = 'Kecamatan Jakabaring';
        $data['sub_title'] = 'History Permohonan User';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        $data['pengajuan'] = $this->PengajuanModel->get_all_by_pemohon($this->session->userdata('token')['id_user']);
        $this->renderpage('frontend/history', $data);
    }
}
