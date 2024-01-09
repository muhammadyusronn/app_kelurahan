<?php
class ArtikelController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ArtikelModel');
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
    }

    public function index()
    {
        $data['title'] = 'Kelurahan Talang Kelapa';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        // $data['artikel'] = $this->ArtikelModel->get(['is_published'=>1]);
        $cond = [];
        if(empty($this->input->get('cat')) ){ 
            $cond=['is_published'=>1];
        }else{ 
            $cond = ['is_published'=>1, 'jenis_artikel'=>$this->input->get('cat')]; 
        };
        $data['artikel'] = $this->ArtikelModel->get_data_join(['user'],['user.id_user=artikel.created_by'],$cond);
        $data['recent_artikel'] = $this->ArtikelModel->getRecentsArticle();
        // $this->dump($data);exit;
        $this->renderpage('frontend/artikel', $data);
    }

    public function detail($id=null)
    {
        $data['title'] = 'Kelurahan Talang Kelapa';
        $data['layanan'] = $this->LayananModel->get(['is_active'=>'1']);
        $data['artikel'] = $this->ArtikelModel->get_data_join(['user'],['user.id_user=artikel.created_by'],['id'=>$id]);
        $this->renderpage('frontend/artikel-detail', $data);
    }
}
