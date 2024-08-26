<?php
class LayananController extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajuanModel');
        $this->load->model('BerkasPengajuanModel');
        $this->load->model('LayananModel');
        $this->load->model('PersyaratanLayananModel');
        
    }

    public function form()
    {
        if (isset($_POST['submit'])) {
            $data = [];

            $persyaratan = $this->PersyaratanLayananModel->get_data_join(['field_persyaratan'],['field_persyaratan.id=persyaratan_layanan.id_persyaratan'],['persyaratan_layanan.id_layanan='=>$this->post('id_layanan')]);
            
            try{
                $this->db->trans_start();
                $this->PengajuanModel->insert([
                    'tanggal'=> date('Y-m-d'),
                    'nama_pemohon'=> $this->POST('nama_pemohon'),
                    'kontak'=> $this->POST('nomor_hp'),
                    'status'=> 2,
                    'verified_by'=> NULL,
                    'verified_date'=> NULL,
                    'id_layanan'=> $this->POST('id_layanan'),
                    'id_pemohon'=> $this->session->userdata('token')['id_user']
                ]);
                $insert_id = $this->db->insert_id();
                foreach($persyaratan as $i):
                    if($i->type == "2"){
                        $path = './uploads/berkas/'.$insert_id.'-'.$this->POST('nama_pemohon');
                        if (!file_exists($path)) {
                            mkdir($path, 0777, true);
                        }
                        $config['upload_path']          = $path;
                        $config['allowed_types']        = 'jpeg|jpg|png|pdf';
                        $config['max_size']             = 100000;
                        $this->load->library('upload', $config);
                        if (!$this->upload->do_upload($i->code)) {
                            echo $i->code;
                            $error = array('error' => $this->upload->display_errors());
                            $this->dump($error);exit;
                            $this->flashmsg('Gagal upload file', 'danger');
                            redirect('home-page');
                            die();
                        } else {
                            $data = array('upload_data' => $this->upload->data());
                        }
                    }
                    $this->BerkasPengajuanModel->insert([
                        'id_pengajuan'=> $insert_id,
                        'id_persyaratan'=> $i->id_persyaratan,
                        'value'=> ($i->type == '1') ? $this->POST($i->code) : $data['upload_data']['file_name'],
                    ]);
                endforeach;
$message = "Kepada yth. Bapak/Ibu ".$this->POST('nama_pemohon').", Permohonan terkait ".$this->POST('nama_layanan')." anda sudah kami terima dan sedang dalam proses review dari admin kecamatan jakabaring. Mohon tunggu dalam waktu maksimal 1 x 24 jam untuk tindak lanjut dari permohonan yang sudah anda buat.
Terima Kasih sudah menggunakan layanan kami.
Salam sehat selalu!";
                    $this->send_wa($this->POST('nomor_hp'),$message);
                    $this->send_sms($this->POST('nomor_hp'),$message);
                    $this->db->trans_complete();
                if ($this->db->trans_status() === FALSE) {
                    exit;
                    $this->flashmsg('Gagal menambah data', 'danger');
                    redirect('home-page');
                } else {
                    $this->flashmsg('Sukses menambah data', 'success');
                    redirect('home-page');
                }
            }catch(Exception $e){
                $this->flashmsg($e->getMessage(), 'danger');
                exit;
                redirect('home-page');
            }
        }else{
            $data['token'] = $this->session->userdata('token');
            $data['title'] = 'Kecamatan Jakabaring';
            $data['sub_title'] = $this->input->get('name');
            $data['layanan'] = $this->LayananModel->get();
            $data['persyaratan_layanan'] = $this->PersyaratanLayananModel->get_data_join(['field_persyaratan'],['field_persyaratan.id=persyaratan_layanan.id_persyaratan'],['persyaratan_layanan.id_layanan='=>$this->input->get('id')]);
            // $this->dump($data);exit;
            $this->renderpage('frontend/layanan', $data);
        }
    }
}


