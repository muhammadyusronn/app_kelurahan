<?php
class ArtikelModel extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->data['table_name'] = 'artikel';
        $this->data['primary_key'] = 'id';
    }
}
