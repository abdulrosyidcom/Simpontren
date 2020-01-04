<?php

class Discussions extends CI_Controller
{
    public function index()
    {
        $data['subTitle'] = 'Semua';
        $data['title'] = 'SIMPONTREN | Diskusi ' . $data['subTitle'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menuDiscussions'] = $this->Discussions_model->menuDiscussions();
        $data['discussions'] = $this->db->get('discussion')->result_array();

        $data['answer'] = $this->Discussions_model->totalDataCommentar();

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/discussions/templates/menu', $data);
        $this->load->view('frontend/discussions/index');
        $this->load->view('frontend/discussions/templates/component', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function unanswered()
    {
        $data['subTitle'] = 'Belum Terjawab';
        $data['title'] = 'SIMPONTREN | Diskusi ' . $data['subTitle'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menuDiscussions'] = $this->Discussions_model->menuDiscussions();
        $data['discussions'] = $this->db->get_where('discussion', ['status' => 'Not Solved'])->result_array();
        $data['answer'] = $this->Discussions_model->totalDataCommentar();

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/discussions/templates/menu', $data);
        $this->load->view('frontend/discussions/index');
        $this->load->view('frontend/discussions/templates/component', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function finish()
    {
        $data['subTitle'] = 'Selesai';
        $data['title'] = 'SIMPONTREN | Diskusi ' . $data['subTitle'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menuDiscussions'] = $this->Discussions_model->menuDiscussions();
        $data['discussions'] = $this->db->get_where('discussion', ['status' => 'solved'])->result_array();
        $data['answer'] = $this->Discussions_model->totalDataCommentar();

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/discussions/templates/menu', $data);
        $this->load->view('frontend/discussions/index');
        $this->load->view('frontend/discussions/templates/component', $data);
        $this->load->view('frontend/templates/footer');
    }


    /*
    |--------------------------------------------------------------------------
    | Discussion CRUD
    |--------------------------------------------------------------------------
    */

    public function quession()
    {
        $data['title'] = 'SIMPONTREN | Quession';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['categories'] = $this->db->get('discussion_categorie')->result_array();

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

        $this->form_validation->set_rules('quession', 'quession', 'required|trim');
        $this->form_validation->set_rules('description', 'description', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/discussions/quession', $data);
            $this->load->view('frontend/discussions/templates/component', $data);
            $this->load->view('frontend/templates/footer');
        } else {

            $data = [
                'author'       => $data['user']['name'],
                'image'        => $data['user']['image'],
                'quession'     => $this->input->post('quession'),
                'url_quession' => strtolower(url_title($this->input->post('quession'))),
                'description'  => $this->input->post('description'),
                'status'       => 'Not Solved',
                'categorie'    => $this->input->post('categorie'),
                'date_created' => time(),
                'is_active'    => 'aktif'
            ];

            $this->db->insert('discussion', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Diskusi Berhasil Ditambahakan</div>');
            redirect('discussions');
        }
    }

    public function read($url_quession)
    {
        $data['quession'] = $this->db->get_where('discussion', ['url_quession' => $url_quession])->row_array();
        $data['title'] = 'Detail Quession | ' . $data['quession']['quession'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['commentars'] = $this->db->get_where('discussion_commentar', ['url_quession' => $url_quession])->result_array();
        $data['answer'] = $this->db->get_where('discussion_commentar', ['url_quession' => $url_quession])->num_rows();

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

        $this->form_validation->set_rules('commentar', 'commentar', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/discussions/read', $data);
            $this->load->view('frontend/discussions/templates/component', $data);
            $this->load->view('frontend/templates/footer');
        } else {
            $data = [
                'commentar'    => $this->input->post('commentar', true),
                'url_quession' => $url_quession,
                'author'       => $data['user']['name'],
                'image'        => $data['user']['image'],
                'date_created' => time(),
                'is_active'    => 'aktif'
            ];

            $this->db->insert('discussion_commentar', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Terimakasih Sudah Menjawab</div>');
            redirect('discussions/read/' . $url_quession);
        }
    }

    public function update_quession($id)
    {
        $data['title'] = 'Update Quession';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['quession'] = $this->db->get_where('discussion', ['id' => $id])->row_array();
        $data['categories'] = $this->db->get('discussion_categorie')->result_array();

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

        $this->form_validation->set_rules('quession', 'quession', 'required|trim');
        $this->form_validation->set_rules('description', 'description', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/discussions/update', $data);
            $this->load->view('frontend/discussions/templates/component', $data);
            $this->load->view('frontend/templates/footer');
        } else {

            $this->Discussions_model->updateDataQuession($id);

            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Diubah</div>');
            redirect('user/discussions');
        }
    }

    public function delete_quession($id)
    {
        $this->db->delete('discussion', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus</div>');
        redirect('user/discussions');
    }


    public function categorie($slug)
    {
        $data['discussions'] = $this->db->get_where('discussion', ['categorie' => $slug])->result_array();
        $data['subTitle'] = $slug;
        $data['title'] = 'Discussion categorie ' . $data['subTitle'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['answer'] = $this->Discussions_model->totalDataCommentar();
        $data['menuDiscussions'] = $this->Discussions_model->menuDiscussions();

        // cart Products
        $data['carts'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->result_array();
        $data['totalCart'] = $this->db->get_where('cart', ['session_email' => $data['user']['email']])->num_rows();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/discussions/templates/menu', $data);
        $this->load->view('frontend/discussions/index');
        $this->load->view('frontend/discussions/templates/component', $data);
        $this->load->view('frontend/templates/footer');
    }
}
