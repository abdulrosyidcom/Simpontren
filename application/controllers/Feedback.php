<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIMPONTREN | Feedback Clients';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->db->order_by('id', 'DESC');
        $data['testimonials'] = $this->db->get_where('user_notes', ['is_active' => 'aktif'])->result_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/feedback/index', $data);
        $this->load->view('frontend/templates/footer');
    }
}