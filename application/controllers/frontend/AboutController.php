<?php
class AboutController extends MY_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KontenModel');
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
    }

    public function index()
    {
        $$data['title'] = 'Kecamatan Talang Kelapa';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        $data['konten'] = $this->KontenModel->get(['jenis_konten'=>'3']);
        $this->renderpage('frontend/about', $data);
    }
}
