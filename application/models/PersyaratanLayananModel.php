<?php
class PersyaratanLayananModel extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'persyaratan_layanan';
        $this->data['primary_key'] = 'id';
    }
}
