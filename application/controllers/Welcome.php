<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends MY_controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
    }
    public function index()
    {
        $data['title'] = 'Kelurahan Talang Kelapa';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        // $this->dump($data);exit;
        $this->renderpage('frontend/home', $data);
    }
}
