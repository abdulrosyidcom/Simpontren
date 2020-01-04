<?php

class User_model extends CI_Model
{
    public function getAllMenu()
    {
        $data = [
            [
                'url'   => 'dashboard',
                'icon'  => 'lnr lnr-home',
                'title' => 'Dashboard'
            ],
            [
                'url'   => 'setting',
                'icon'  => 'lnr lnr-cog',
                'title' => 'Setting'
            ],
            [
                'url'   => 'article',
                'icon'  => 'lnr lnr-pencil',
                'title' => 'Article'
            ],
            [
                'url'   => 'discussions',
                'icon'  => 'lnr lnr-list',
                'title' => 'Discussions'
            ],
            [
                'url'   => 'notes',
                'icon'  => 'lnr lnr-pencil',
                'title' => 'Notes'
            ],
            [
                'url'   => 'checkout',
                'icon'  => 'lnr lnr-cart',
                'title' => 'Checkout'
            ]
        ];

        return $data;
    }


    public function updateDataUsers()
    {
        $email = $this->input->post('email');

        $data = [
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'mobile' => $this->input->post('mobile', true),
            'address' => $this->input->post('address', true),
            'number_home' => $this->input->post('number_home', true),
            'about' => $this->input->post('about', true),
            'facebook' => $this->input->post('facebook', true),
            'twitter' => $this->input->post('twitter', true),
            'instagram' => $this->input->post('instagram', true),
            'website' => $this->input->post('website', true),
        ];

        $this->db->where('email', $email);
        $this->db->update('user', $data);
    }

    public function getEditNotes($id)
    {
        return $this->db->get_where('user_notes', ['id' => $id])->row_array();
    }

    public function updateDataNotes()
    {
        $data = [
            'note' => $this->input->post('note')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_notes', $data);
    }

    public function getConfirmCheckout($id)
    {
        return $this->db->get_where('checkout', ['id' => $id])->row_array();
    }
}
