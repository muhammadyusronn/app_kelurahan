<?php
class ArtikelController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ArtikelModel');
    }

    public function index()
    {
        $data['title'] = 'SMP N 37 OKU';
        // $data['artikel'] = $this->ArtikelModel->get(['is_published'=>1]);
        $data['artikel'] = $this->ArtikelModel->get_data_join(['user'],['user.id_user=artikel.created_by']);
        $data['recent_artikel'] = $this->ArtikelModel->getRecentsArticle();
        // $this->dump($data);exit;
        $this->renderpage('frontend/artikel', $data);
    }

    public function detail($id=null)
    {
        $data['title'] = 'SMP N 37 OKU';
        // $data['artikel'] = $this->ArtikelModel->get([
        //     'id'=>$id
        // ]);
        $data['artikel'] = $this->ArtikelModel->get_data_join(['user'],['user.id_user=artikel.created_by'],['id'=>$id]);
        $this->renderpage('frontend/artikel-detail', $data);
    }
}
