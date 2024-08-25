<?php
class SejarahController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('SejarahModel');
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
    }

    public function index()
    {
        $data['title'] = 'Kecamatan Jakabaring';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        $data['konten'] = $this->SejarahModel->get(['jenis_konten'=>'6']);
        $this->renderpage('frontend/sejarah', $data);
    }
}
