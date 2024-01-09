<?php
class LayananController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
    }

    public function form()
    {
        $data['title'] = 'Kelurahan Talang Kelapa';
        $data['sub_title'] = $this->input->get('name');
        $data['layanan'] = $this->LayananModel->get();
        $data['persyaratan_layanan'] = $this->PersyaratanLayananModel->get_data_join(['field_persyaratan'],['field_persyaratan.id=persyaratan_layanan.id_persyaratan'],['persyaratan_layanan.id_layanan='=>$this->input->get('id')]);
        // $this->dump($data);exit;

        $this->renderpage('frontend/layanan', $data);
    }
}
