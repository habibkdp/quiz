<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('user/index');
    }

    public function detailakun($username)
    {
        $this->load->model('UserModel');
        $data['dataUser'] = $this->UserModel->getUserByUsername($username);
        $this->load->view('user/detailakun', $data);
    }

    public function beginner()
    {
        $this->load->view('user/coursebeginner');
    }

    public function intermediate()
    {
        $this->load->view('user/courseintermediate');
    }

    public function advance()
    {
        $this->load->view('user/courseadvance');
    }

    public function html()
    {
        $this->load->view('user/coursepagehtml');
    }

    public function php()
    {
        $this->load->view('user/coursepagephp');
    }

    public function python()
    {
        $this->load->view('user/coursepagepython');
    }

    public function quiz()
    {
        if ($this->session->userdata('id_role') == '') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            Anda Belum Login!</div>');
            redirect('auth');
        }

        $course = $this->input->get('course');
        $level = $this->input->get('level');
        $soal = $this->db->query("SELECT soal.soal, jenis_soal.*, jawaban.*
        FROM soal
        INNER JOIN jenis_soal ON soal.id_jenis = jenis_soal.id_jenis
        INNER JOIN jawaban ON soal.id_jawaban = jawaban.id_jawaban
        WHERE jenis_soal.course = '$course' AND jenis_soal.level = '$level'")->result();

        $data['soal'] = $soal;
        $this->load->view('user/pp', $data);
    }

    public function penilaian()
    {
        $this->load->model('UserModel');
        if ($this->input->post('submit') != NULL) {
            $postData = $this->input->post();
            $idUser = $this->UserModel->getUserByUsername($this->session->userdata('username'))->row();
            $cekNilai = $this->db->query("SELECT * FROM nilai WHERE id_username = " . $idUser->id_username . " AND id_jenis = " . $postData['kode'] . " ")->row();
            $nilai = 0;

            foreach ($postData["pilihan"] as $data) {
                $cek = $this->db->query("SELECT * FROM jawaban WHERE jawab_benar = '$data' ")->num_rows();
                if ($cek > 0) {
                    $nilai += 10;
                }
            }

            $data = array(
                'id_username' => $idUser->id_username,
                'id_jenis' => $postData['kode'],
                'nilai' => $nilai,
            );

            $where = array(
                'id'        => $cekNilai->id
            );

            if ($nilai < 20) {
                echo "Nilai anda : $nilai <br>";
                echo "<a href='" . base_url('user') . "'>Mohon ulangi test kembali";
            } else {
                echo "Nilai anda : $nilai <br>";
                echo 'Selamat Anda lulus <br>';
                echo "<a href='" . base_url('user') . "'>Kembali ke halaman quiz";
                if (count((array) $cekNilai) > 1) {
                    if ($cekNilai->nilai < $nilai) {
                        $this->UserModel->updateData('nilai', $data, $where);
                    }
                } else {
                    $this->UserModel->tambahData('nilai', $data);
                }
            }
        }
    }
}
