<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdminModel');

        if ($this->session->userdata('id_role') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            Anda Belum Login!</div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $this->load->view('admin/dist/index');
    }

    public function user_data()
    {
        $data['dataUser'] = $this->AdminModel->get_data();
        $this->load->view('admin/dist/user', $data);
    }

    public function insertUser()
    {
        $this->load->view('admin/dist/inputuser');
    }

    public function insert_user_action()
    {
        if ($this->input->post('save')) {
            $id                         = $this->input->post('id');
            $fullname                   = $this->input->post('fullname');
            $username                   = $this->input->post('username');
            $password                   = $this->input->post('password');
            $config['max_size']             = 2048;
            $config['allowed_types']        = "png|jpg|jpeg";
            $config['remove_spaces']        = TRUE;
            $config['overwrite']            = TRUE;
            $config['upload_path']          = FCPATH . 'assets/images';
            $this->load->library('upload');
            $this->upload->initialize($config);
            $this->upload->do_upload('avatar');
            $data_image = $this->upload->data('file_name');
            $location = base_url() . 'assets/images/';
            $pict = $location . $data_image;
            $id_role = $this->input->post('id_role');

            $data = array(
                'id'       => $id,
                'fullname' => $fullname,
                'username' => $username,
                'password' => $password,
                'avatar'   => $pict,
                'id_role'  => $id_role
            );

            $this->AdminModel->tambahData($data, 'user');

            redirect('admin/user_data');
        } else {
            echo 'data gagal';
            redirect('user');
        }
    }

    public function editUser($id)
    {
        $data['dataUser'] = $this->db->query("SELECT * FROM user WHERE id = '$id'")->result();
        $this->load->view('admin/dist/edituser', $data);
    }

    public function updateUser()
    {
        $id         = $this->input->post('id');
        $fullname   = $this->input->post('fullname');
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $config['max_size']             = 2048;
        $config['allowed_types']        = "png|jpg|jpeg";
        $config['remove_spaces']        = TRUE;
        $config['overwrite']            = TRUE;
        $config['upload_path']          = FCPATH . 'assets/images';
        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->upload->do_upload('avatar');
        $data_image = $this->upload->data('file_name');
        $location = base_url() . 'assets/images/';
        $pict = $location . $data_image;
        $id_role    = $this->input->post('id_role');

        $data = array(
            'fullname'  => $fullname,
            'username'  => $username,
            'password'  => $password,
            'avatar'    => $pict,
            'id_role'   => $id_role
        );

        $where = array(
            'id'        => $id
        );

        $this->AdminModel->update_data_user('user', $data, $where);
        redirect('admin/user_data');
    }

    public function deleteUser($id)
    {
        $where = array('id' => $id);
        $this->AdminModel->delete_data_user($where);
        redirect('admin/user_data');
    }

    public function detailUser($id)
    {
        $data['dataUser'] = $this->AdminModel->getUserByID($id);
        $this->load->view('admin/dist/detailuser', $data);
    }

    public function dataQuiz()
    {
        $data['dataQuiz'] = $this->AdminModel->get_data_quiz();
        $this->load->view('admin/dist/quiz', $data);
    }

    public function insertQuiz()
    {
        $this->load->view('admin/dist/inputquiz');
    }

    public function insert_quiz_action()
    {
        if ($this->input->post('save')) {
            $id      = $this->input->post('id');
            $soal    = $this->input->post('soal');
            $course  = $this->input->post('course');
            $level   = $this->input->post('level');

            $data = array(
                'id'      => $id,
                'soal'    => $soal,
                'course'  => $course,
                'level'   => $level
            );

            $this->AdminModel->tambahDataQuiz($data, 'quiz');

            redirect('admin/dataQuiz');
        } else {
            echo 'data gagal';
            redirect('quiz');
        }
    }

    public function editQuiz($id)
    {
        $data['dataQuiz'] = $this->db->query("SELECT * FROM quiz WHERE id = '$id'")->result();
        $this->load->view('admin/dist/editquiz', $data);
    }

    public function updateQuiz()
    {
        $id      = $this->input->post('id');
        $soal    = $this->input->post('soal');
        $course  = $this->input->post('course');
        $level   = $this->input->post('level');

        $data = array(
            'soal'    => $soal,
            'course'  => $course,
            'level'   => $level
        );

        $where = array(
            'id'        => $id
        );

        $this->AdminModel->update_data_quiz('quiz', $data, $where);
        redirect('admin/dataQuiz');
    }

    public function deleteQuiz($id)
    {
        $where = array('id' => $id);
        $this->AdminModel->delete_data_quiz($where);
        redirect('admin/dataQuiz');
    }
}
