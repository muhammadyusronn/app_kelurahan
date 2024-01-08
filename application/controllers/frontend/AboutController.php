<?php
class AboutController extends MY_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KontenModel');
    }

    public function index()
    {
        $data['title'] = 'SMP N 37 OKU';
        $data['konten'] = $this->KontenModel->get(['jenis_konten'=>'3']);
        $this->renderpage('frontend/about', $data);
    }
}
