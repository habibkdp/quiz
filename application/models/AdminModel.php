<?php

class AdminModel extends CI_Model
{
    public function get_data()
    {
        return $this->db
            ->query('SELECT user.*, user_role.role FROM user JOIN user_role ON user.id_role = user_role.id_role')
            ->result_array();
    }

    public function getUserByID($id)
    {
        return $this->db
            ->query("SELECT user.*, user_role.role FROM user JOIN user_role ON user.id_role = user_role.id_role WHERE id = $id")
            ->result_array();
    }

    public function tambahData($data)
    {
        $this->db->insert('user', $data);
    }

    public function update_data_user($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data_user($where)
    {
        $this->db->where($where);
        $this->db->delete('user');
    }
    public function get_data_quiz()
    {
        // return $this->db->get('quiz')->result_array();
        return $this->db->query("SELECT * FROM quiz ORDER BY course ASC")->result_array();
    }

    public function getQuizByID($id)
    {
        return $this->db->get_where('quiz', array('id' => $id))->result();
    }

    public function tambahDataQuiz($data)
    {
        $this->db->insert('quiz', $data);
    }

    public function update_data_quiz($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data_quiz($where)
    {
        $this->db->where($where);
        $this->db->delete('quiz');
    }
}
