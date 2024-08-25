<?php
class TeacherController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajarModel');
    }

    public function index()
    {
        $data['title'] = 'Kecamatan Jakabaring';
        $data['pengajar'] = $this->PengajarModel->get();
        $this->renderpage('frontend/teacher', $data);
    }
}
