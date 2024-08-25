<?php
class HomeController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
    }
    public function index()
    {
        $data['title'] = 'Kecamatan Jakabaring';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        $this->renderpage('frontend/home', $data);
    }
}
