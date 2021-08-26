<?php

class UserModel extends CI_Model
{
    public function get_data()
    {
        return $this->db
            ->get('user')
            ->result_array();
    }

    public function getUserByUsername($username)
    {
        return $this->db->get_where('user', array('username' => $username));
    }

    public function tambahData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function updateData($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }
}
