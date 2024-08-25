<?php
class GaleriController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GaleriModel');
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
    }

    public function index()
    {
        $data['title'] = 'Kecamatan Jakabaring';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        $data['galeri'] = $this->GaleriModel->get();
        // $this->dump($data);exit;
        $this->renderpage('frontend/galeri', $data);
    }
}
