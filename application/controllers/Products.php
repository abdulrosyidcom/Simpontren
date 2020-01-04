<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIMPONTREN | Products';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['products'] = $this->db->get('product')->result_array();
        $data['categorys'] = $this->db->get('product_category')->result_array();
        $data['totalProduct'] = $this->db->get('product')->num_rows();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/products/index');
        $this->load->view('frontend/templates/footer');
    }

    public function category($category)
    {
        $data['title'] = 'SIMPONTREN | Products Category';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['products'] = $this->db->get_where('product', ['category' => $category])->result_array();
        $data['categorys'] = $this->db->get('product_category')->result_array();
        $data['totalProduct'] = $this->db->get('product')->num_rows();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/products/index');
        $this->load->view('frontend/templates/footer');
    }

    public function read($id)
    {
        $data['title'] = 'SIMPONTREN | Products Detail';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['product'] = $this->db->get_where('product', ['id' => $id])->row_array();
        $data['products'] = $this->db->get('product')->result_array();
        $data['categorys'] = $this->db->get('product_category')->result_array();

        $data['comments'] = $this->db->get_where('product_commentar', ['id_product' => $id])->result_array();

        $this->form_validation->set_rules('comment', 'comment', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/products/read');
            $this->load->view('frontend/templates/footer');
        } else {

            $data = [
                'comment' => $this->input->post('comment', true),
                'id_product' => $id,
                'author' => $data['user']['name'],
                'image' => $data['user']['image'],
                'date_created' => time(),
                'is_active' => 'aktif'
            ];

            $this->db->insert('product_commentar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Komentar Berhasil</div>');
            redirect('products/read/' . $id);
        }
    }
}
