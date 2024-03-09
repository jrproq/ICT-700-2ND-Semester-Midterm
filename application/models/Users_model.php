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

       $query =  $this->db->get_where('users', $where);
        
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
    public function edituser($id)
    {
        
        $query =  $this->db->get_where('users', ['id' => $id]);
        return $query->row();    


    }
    public function updateuser($data, $id)
    
    {
        return $this->db->update('users', $data, ['id' => $id]);
    }
    public function deleteuser ($id)
    {
        return $this->db->delete('users', ['id' => $id]);
    }
}
