<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIMPONTREN | Sistem Informasi Pondok Pesantren';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['member'] = $this->db->get('user')->num_rows();
        $data['article'] = $this->db->get('article')->num_rows();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/home/index', $data);
        $this->load->view('frontend/templates/footer');
    }
}