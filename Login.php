d<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Login extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function index()
        {
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|trim');

            $this->load->view('login/index');
        }

        public function dologin()
        {
            // Ambil input dari form
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Query untuk mendapatkan user berdasarkan email
            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                // Memverifikasi password yang di-hash
                if (password_verify($password, $user['password'])) {
                    // Buat session dengan data user
                    $data = [
                        'id' => $user['id'],
                        'email' => $user['email'],
                        'username' => $user['username'],
                        'role' => $user['role']
                    ];

                    $this->session->set_userdata($data);

                    // Redirect berdasarkan role
                    if ($user['role'] == 'PEMILIK') {
                        $this->_updateLastLogin($user['id']);
                        redirect('menu');
                    } else if ($user['role'] == 'ADMIN') {
                        $this->_updateLastLogin($user['id']);
                        redirect('user');
                    } else if ($user['role'] == 'KASIR') {
                        $this->_updateLastLogin($user['id']);
                        redirect('kasir');
                    } else {
                        redirect('login');
                    }
                } else {
                    // Password salah
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> <b>Error :</b> Password Salah.</div>');
                    redirect('/');
                }
            } else {
                // User tidak ditemukan
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> <b>Error :</b> User Tidak Terdaftar. </div>');
                redirect('/');
            }
        }

        private function _updateLastLogin($userid)
        {
            $sql = "UPDATE user SET last_login=now() WHERE id=$userid";
            $this->db - query($sql);
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect(site_url('login'));
        }
        public function block()
        {
            $data = array(
                'user'  => infoLogin(),
                'title' => 'Access Denied!'
            );
            $this->load - view('login/error404', $data);
        }
    }
