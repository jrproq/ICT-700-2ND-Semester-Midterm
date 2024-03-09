<?php

class Users_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'users';
    }

    public function rows()
    {

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