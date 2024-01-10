<?php
class BerkasPengajuanModel extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'berkas_pengajuan';
        $this->data['primary_key'] = 'id';
    }
}
