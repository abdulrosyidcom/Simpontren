<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Login';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

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
                if ($user['is_active'] == 1) {
                    if (password_verify($password, $user['password'])) {

                        $data = [
                            'email' => $user['email'],
                            'role_id' => $user['role_id']
                        ];

                        $this->session->set_userdata($data);
                        if ($user['role_id'] == 1) {
                            redirect('dashboard');
                        } else {
                            redirect();
                        }
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah!</div>');
                        redirect('authentication');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Diaktivasi!</div>');
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

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered'
        ]);
        $this->form_validation->set_rules('password_one', 'Password', 'required|trim|min_length[3]|matches[password_two]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too shoort'
        ]);
        $this->form_validation->set_rules('password_two', 'Password', 'required|trim|matches[password_one]');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/authentication/registration', $data);
            $this->load->view('frontend/templates/footer');
        } else {
            $email = $this->input->post('email', true);

            $data = [
                'name' => $this->input->post('name', true),
                'email' => $email,
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password_one', true), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 0,
                'date_created' => time()
            ];

            // token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->db->insert('user_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diregistrasi. Aktivasi akun anda</div>');
            redirect('authentication');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'abdulrosyidit@gmail.com',
            'smtp_pass' => 'anjam765',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);

        $this->email->from('abdulrosyidit@gmail.com', 'Abdul Rosyid');
        $this->email->to($this->input->post('email'));

        if ($type = 'verify') {
            $this->email->subject('Account Verification');
            $this->email->message('Click this link to verify you account : <a href="' . base_url() . 'authentication/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">Activate</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 24)) {

                    $this->db->set('is_active', 1);
                    $this->db->where('email', $email);
                    $this->db->update('user');

                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">' . $email . ' berhasil diaktivasi! Silahkan login</div>');
                    redirect('authentication');
                } else {

                    $this->db->delete('user', ['email' => $email]);
                    $this->db->delete('user_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun gagal diaktivasi! Token kadaluarsa</div>');
                    redirect('authentication');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun gagal diaktivasi! Token tidak valid</div>');
                redirect('authentication');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun gagal diaktivasi! Email salah</div>');
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


    public function blocked()
    {
        $data['title'] = 'Access Blocked';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/blocked/index', $data);
        $this->load->view('frontend/templates/footer');
    }




    // public function verifycation()
    // {
    //     $this->load->view('frontend/authentication/verify');
    // }
}
