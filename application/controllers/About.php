<?php

class About extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIMPONTREN | About';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/about/index', $data);
        $this->load->view('frontend/templates/footer');
    }
}
