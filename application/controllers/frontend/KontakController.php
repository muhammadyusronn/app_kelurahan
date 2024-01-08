<?php
class KontakController extends MY_Controller{
    
    public function index()
    {
        $data['title'] = 'SMP N 37 OKU';
        $this->renderpage('frontend/kontak', $data);
    }
}
