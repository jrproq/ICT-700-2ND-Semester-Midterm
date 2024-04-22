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

        $where = array('isDeleted' => 0);
        $query = $this->db->get_where($this->table, $where);
        return $query->result();
    }

    public function row($id)
    {
        $where = array('id' => $id);
        $query = $this->db->get_where($this->table, $where);
        return $query->row();
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }

    public function edituser($id)
    {

        $query =  $this->db->get_where('users', ['id' => $id]);
        return $query->row();
    }
    public function updateuser($data, $id)

    {
        return $this->db->update('users', $data, ['id' => $id]);
    }
    public function deleteuser($id)
    {
        $this->db->where('id', $id);
        $where = array(
            'isDeleted' => 1,
            'date_deleted' => date('Y-m-d')
        );
        return $this->db->update($this->table, $where);
    }
}
