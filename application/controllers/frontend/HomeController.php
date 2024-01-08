<?php
class HomeController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajarModel');
    }
    public function index()
    {
        $data['title'] = 'SMP N 37 OKU';
        $this->renderpage('frontend/home', $data);
    }
}
