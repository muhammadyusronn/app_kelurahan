<?php
class PengajuanModel extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'pengajuan';
        $this->data['primary_key'] = 'id';
    }

    public function get_all($level, $filters = array(), $dateRange = array())
    {
        $this->db->select('pengajuan.*,layanan.nama_layanan');
        $this->db->from('pengajuan');
        $this->db->join('layanan', 'layanan.id=pengajuan.id_layanan');
        if($level=="2"){
            $this->db->where('pengajuan.status',3);
        }else if($level=="1"){
            $this->db->where('pengajuan.status',2);
        }

        if (!empty($filters)) {
            if (isset($filters['status'])) {
                if($filters['status']!='-99'){
                $this->db->where('pengajuan.status', $filters['status']);
                }
            }
        }

        if (!empty($dateRange) && isset($dateRange['tanggal_mulai']) && isset($dateRange['tanggal_selesai'])) {
            $this->db->where('pengajuan.tanggal BETWEEN "' . $dateRange['tanggal_mulai'] . '" AND "' . $dateRange['tanggal_selesai'] . '"');
        }
        // $query = $this->db->get_compiled_select();
        
        // // Echo or log the compiled query
        // echo $query;exit;
        return $this->db->get()->result();
    }

    public function get_all_by_pemohon($pemohon)
    {
        $this->db->select('pengajuan.*,layanan.nama_layanan');
        $this->db->from('pengajuan');
        $this->db->join('layanan', 'layanan.id=pengajuan.id_layanan');
        $this->db->where('pengajuan.id_pemohon',$pemohon);
        return $this->db->get()->result();
    }

    public function get_detail_permohonan($id)
    {
        //         SELECT 
        //  a.*
        //  ,b.nama_layanan
        //  ,c.id_persyaratan
        //  ,d.nama_field
        //  ,d.code
        //  ,c.value
        //  ,e.type
        //  ,e.is_mandatory
        // FROM pengajuan a
        //INNER JOIN layanan b ON a.id_layanan=b.id
        //INNER JOIN berkas_pengajuan c ON c.id_pengajuan=a.id
        // INNER JOIN field_persyaratan d ON d.id = c.id_persyaratan
        // INNER JOIN persyaratan_layanan e ON e.id_layanan=a.id_layanan AND e.id_persyaratan=d.id
        // WHERE a.id=1;
        $this->db->select('
        pengajuan.*
        ,layanan.nama_layanan
        ,berkas_pengajuan.id_persyaratan
        ,field_persyaratan.nama_field
        ,field_persyaratan.code
        ,berkas_pengajuan.value
        ,persyaratan_layanan.type
        ,persyaratan_layanan.is_mandatory');
        $this->db->from('pengajuan');
        $this->db->join('layanan', 'layanan.id=pengajuan.id_layanan');
        $this->db->join('berkas_pengajuan', 'berkas_pengajuan.id_pengajuan=pengajuan.id');
        $this->db->join('field_persyaratan', 'field_persyaratan.id=berkas_pengajuan.id_persyaratan');
        $this->db->join('persyaratan_layanan', 'persyaratan_layanan.id_layanan=pengajuan.id_layanan AND persyaratan_layanan.id_persyaratan=field_persyaratan.id');
        $this->db->where('pengajuan.id', $id);
        return $this->db->get()->result();
    }
}
