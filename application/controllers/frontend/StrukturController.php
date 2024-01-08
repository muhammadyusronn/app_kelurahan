<?php
class StrukturController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KontenModel');
    }

    public function index()
    {
        $data['title'] = 'SMP N 37 OKU';
        $data['konten'] = $this->KontenModel->get(['jenis_konten'=>'2']);
        $this->renderpage('frontend/struktur', $data);
    }
}
