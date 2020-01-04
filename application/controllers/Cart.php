<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cart extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIMPONTREN | Cart';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/cart/index', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function add_cart($id)
    {
        $product = $this->Cart_model->find($id);

        $data = [
            'id' => $product->id,
            'qty' => 1,
            'price' => $product->price,
            'name' => $product->name,
            'image' => $product->image
        ];

        $this->cart->insert($data);
        redirect('products');
    }

    public function delete_cart()
    {
        $this->cart->destroy();
        redirect();
    }
}
