<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/authentication/login');
            $this->load->view('frontend/templates/footer');
        } else {
            
            $email = $this->input->post('email', true);
            $password = $this->input->post('password', true);

            $user = $this->db->get_where('user', ['email' => $email])->row_array();

            if ($user) {
                if( $user['is_active'] == 1 ) {
                    if( password_verify($password, $user['password']) ) {

                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];

                        $this->session->set_userdata($data);
                        if( $user['role_id'] == 1 ) {
                            redirect('dashboard');
                        } else {
                            redirect();
                        }
                        
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                        redirect('authentication');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Diaktifasi!</div>');
                    redirect('authentication');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Berlum Terrigestrasi!</div>');
                redirect('authentication');
            }
        }
    }

    public function registration()
    {
        $data['title'] = 'Registrasi';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered'
        ]);
        $this->form_validation->set_rules('password_one', 'Password', 'required|trim|min_length[3]|matches[password_two]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too shoort'
        ]);
        $this->form_validation->set_rules('password_two', 'Password', 'required|trim|matches[password_one]');

        if( $this->form_validation->run() == false ) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/authentication/registration');
            $this->load->view('frontend/templates/footer');
        } else {
            $data = [
                'name' => $this->input->post('name', true),
                'email' => $this->input->post('email', true),
                'image' => 'default.jpg',
                'password' => password_hash( $this->input->post('password_one', true), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diregistrasi!</div>');
            redirect('authentication');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role-id');
        $this->session->set_flashdata('message', 'Logout');
        redirect();
    }
}