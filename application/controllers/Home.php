<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIMPONTREN | Sistem Informasi Pondok Pesantren';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['testimonials'] = $this->db->get_where('user_notes', ['is_active' => 'aktif'], 5)->result_array();

        // get data
        $this->db->order_by('title', 'DESC');
        $data['articles'] = $this->db->get_where('article', ['is_active' => 'active'], 3)->result_array();

        $this->db->order_by('name', 'DESC');
        $data['products'] = $this->db->get('product', 6)->result_array();
        $data['productCategorys'] = $this->db->get('product_category')->result_array();

        // total data
        $data['member'] = $this->db->get('user')->num_rows();
        $data['article'] = $this->db->get('article')->num_rows();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/home/index', $data);
        $this->load->view('frontend/templates/footer');
    }
}
