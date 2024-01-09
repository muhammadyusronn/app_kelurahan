<?php
class StrukturController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KontenModel');
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
    }

    public function index()
    {
        $data['title'] = 'Kelurahan Talang Kelapa';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        $data['konten'] = $this->KontenModel->get(['jenis_konten'=>'2']);
        $this->renderpage('frontend/struktur', $data);
    }
}
