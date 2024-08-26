<?php
class LayananController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PengajuanModel');
        $this->load->model('LayananModel');
        $this->data['token'] = $this->session->userdata('token');
        if (empty($this->data['token'])) {
            $this->flashmsg('Anda harus login dulu!', 'danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data['title'] = 'Data Layanan User';
        $data['layanan'] = $this->PengajuanModel->get_all($this->session->userdata('token')['level']);
        $this->render('backend/layanan/data-layanan', $data);
    }

    public function detail($id)
    {
        if (!isset($_POST['submit'])) {
            $data['title'] = 'Data Permohonan';
            $data['layanan'] = $this->PengajuanModel->get_detail_permohonan($id);
            // $this->dump($data['layanan']);exit;
            $this->render('backend/layanan/detail-layanan', $data);
        } else {
            $this->db->trans_start();
            $insert = $this->PengajuanModel->update($id, [
                'verified_by' => $this->session->userdata('token')['nip'],
                'verified_date' => date("Y-m-d H:i:s"),
                'status' => $this->post('status'),
                'deskripsi' => $this->post('deskripsi')
            ]);

$status="";
if($this->session->userdata('token')['level'] == "1"){
$status = ($this->post('status')=="3") ? "anda sudah diterima dan semua berkas yang anda lampirkan valid. Untuk tahap berikutnya mohon menunggu proses verifikasi dari Camat Jakabaring dan setelah itu berkas tanda terima anda akan kami terbitkan." : "kami tolak. Mohon maaf atas ketidaknyamanan yang anda rasakan. Berkas anda kami tolak dengan alasan ".$this->POST("deskripsi").". Anda bisa melakukan perbaikan dan kembali melakukan pengajuan permohonan lagi.";
}else{
$status = ($this->post('status')=="1") ? "anda sudah diterima dan semua berkas yang anda lampirkan valid. Surat keterangan anda sudah ditandatangan secara elektronik oleh Camat Jakabaring dan dinyatakan sah untuk digunakan. Berikut link download berkas elektronik anda : ".base_url('soft-file/'.$id) : "kami tolak. Mohon maaf atas ketidaknyamanan yang anda rasakan. Berkas anda kami tolak dengan alasan ".$this->POST("deskripsi").". Anda bisa melakukan perbaikan dan kembali melakukan pengajuan permohonan lagi.";
}
$message="Kepada yth. Bapak/Ibu ".$this->POST('nama_pemohon').", Permohonan terkait ".$this->POST('nama_layanan')." ".$status."
Terima Kasih sudah menggunakan layanan kami.
Salam sehat selalu!";
            $this->send_wa($this->POST('nomor_hp'),$message);
            $this->send_sms($this->POST('nomor_hp'),$message);
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->flashmsg('Gagal melakukan approval', 'danger');
                redirect('layanan');
            } else {
                $this->flashmsg('Berhasil Melakukan Approval', 'success');
                redirect('layanan');
            }
        }
    }

}
