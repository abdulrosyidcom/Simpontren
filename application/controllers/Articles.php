<?php

class Articles extends CI_Controller
{
    public function index()
    {
        $data['title']     = 'SIMPONTREN | Blog Sistem Informasi Pondok Pesantren';
        $data['user']      = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['articles']  = $this->db->get_where('article', ['is_active' => 'active'])->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        if ( $this->input->post('keyword') ) {
            $data['articles'] = $this->Articles_model->searchDataArticle();
        }

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/articles/index', $data);
        $this->load->view('frontend/templates/footer');
    }
    
    public function category($category)
    {
        $data['title']     = 'SIMPONTREN | Blog Sistem Informasi Pondok Pesantren';
        $data['user']      = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['articles']  = $this->db->get_where('article', ['category' => $category])->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        if ( $this->input->post('keyword') ) {
            $data['articles'] = $this->Articles_model->searchDataArticle();
        }

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/articles/index', $data);
        $this->load->view('frontend/templates/footer');
    }
    
    public function read($url_title)
    {
        $data['article']    = $this->db->get_where('article', ['url_title' => $url_title])->row_array();
        $data['title']      = 'SIMPONTREN | ' . $data['article']['title'];
        $data['user']       = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['commentars'] = $this->db->get_where('article_commentar', ['url_title' => $url_title])->result_array();
        $data['commentar']  = $this->db->get_where('article_commentar', ['url_title' => $url_title])->num_rows();
        $data['articles']   = $this->db->get('article')->result_array();
        $data['categorys']  = $this->db->get('article_category')->result_array();

        $this->form_validation->set_rules('commentar', 'commentar', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/articles/read', $data);
            $this->load->view('frontend/templates/footer');
        } else {
            
            $data = [
                'commentar'    => $this->input->post('commentar', true),
                'url_title'    => $url_title,
                'author'       => $data['user']['name'],
                'image'        => $data['user']['image'],
                'date_created' => time(),
                'is_active'    => 'Aktif'
            ];

            $this->db->insert('article_commentar', $data);
            redirect('articles/read/' . $url_title);
        }
    }


}