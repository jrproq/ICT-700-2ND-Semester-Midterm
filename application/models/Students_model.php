<?php

class Students_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'students';
    }

    public function rows()
    {
        $where = array ('is_deleted' => 0);

        $query =  $this->db->get_where($this->table, $where);

        return $query->result();
    }

    public function row($id)
    {

    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }

    public function update()
    {

    }

    public function delete() 
    {

    }
}