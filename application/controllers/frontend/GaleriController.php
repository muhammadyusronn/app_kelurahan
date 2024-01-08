<?php
class GaleriController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GaleriModel');
    }

    public function index()
    {
        $data['title'] = 'SMP N 37 OKU';
        $data['galeri'] = $this->GaleriModel->get();
        // $this->dump($data);exit;
        $this->renderpage('frontend/galeri', $data);
    }
}
