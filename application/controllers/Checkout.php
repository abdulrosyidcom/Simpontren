<?php

class Checkout extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'SIMPONTREN | Checkout';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/checkout/index', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function proccess_checkout()
    {
        $data['title'] = 'SIMPONTREN | Proccess Checkout';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $is_proccessed = $this->Checkout_model->checkout();

        if ($is_proccessed) {
            $this->cart->destroy();

            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/checkout/proccess_checkout', $data);
            $this->load->view('frontend/templates/footer');
        } else {
            echo 'Maaf, Pesanan Anda Gagal Diproses';
        }
    }
}
