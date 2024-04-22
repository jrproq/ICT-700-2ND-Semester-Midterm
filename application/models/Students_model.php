<?php

class Students_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'students';
    }

    public function add($data)
    {
        $this->db->insert($this->table, $data);
        return true;
    }
    public function rows()
    {
        $where = array('is_deleted' => 0);

        $query =  $this->db->get_where($this->table, $where);
        return $query->result();
    }

    public function editstudent($id)
    {

        $query =  $this->db->get_where('students', ['id' => $id]);
        return $query->row();
    }
    public function updatestudent($data, $id)

    {
        return $this->db->update('students', $data, ['id' => $id]);
    }
    public function deletestudent($id)
    {
        return $this->db->delete('students', ['id' => $id]);
    }
}
