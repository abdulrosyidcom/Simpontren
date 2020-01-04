<?php

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/users/profile/index');
        $this->load->view('frontend/templates/footer');
    }

    public function dashboard()
    {
        $data['title']  = 'Dashboard';

        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menus'] = $this->User_model->getAllMenu();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/users/templates/menu', $data);
        $this->load->view('frontend/users/dashboard/index');
        $this->load->view('frontend/templates/footer');
    }

    public function setting()
    {
        $data['title'] = 'Setting';
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menus'] = $this->User_model->getAllMenu();

        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim');
        $this->form_validation->set_rules('mobile', 'mobile', 'trim');
        $this->form_validation->set_rules('address', 'address', 'trim');
        $this->form_validation->set_rules('number_home', 'number home', 'trim');
        $this->form_validation->set_rules('about', 'about', 'trim');
        $this->form_validation->set_rules('facebook', 'facebook', 'trim');
        $this->form_validation->set_rules('twitter', 'twitter', 'trim');
        $this->form_validation->set_rules('instagram', 'instagram', 'trim');
        $this->form_validation->set_rules('website', 'website', 'trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/users/templates/menu', $data);
            $this->load->view('frontend/users/settings/index');
            $this->load->view('frontend/templates/footer');
        } else {

            // $this->User_model->updateDataUsers();

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

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                // $config['max_size'] = '6400';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->where('email', $email);
            $this->db->update('user', $data);

            $this->session->set_flashdata('message', 'Diubah');
            redirect('user/setting');
        }
    }

    public function article()
    {
        $data['title'] = 'Article';
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menus'] = $this->User_model->getAllMenu();
        $data['articles'] = $this->db->get_where('article', ['author' => $data['user']['name']])->result_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|trim');
        $this->form_validation->set_rules('content', 'content', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/users/templates/menu', $data);
            $this->load->view('frontend/users/articles/index');
            $this->load->view('frontend/templates/footer');
        } else {

            $data = [
                'title'        => $this->input->post('title', true),
                'url_title'    => strtolower(url_title($this->input->post('title', true))),
                'category'     => $this->input->post('category', true),
                'content'      => $this->input->post('content', true),
                'author'       => $data['user']['name'],
                'date_created' => time(),
                'is_active'    => 'proccess'
            ];

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '6400';
                $config['upload_path'] = './assets/img/article/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['article']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/article' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->insert('article', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Artikel Berhasil Ditambahakan</div>');
            redirect('user/article');
        }
    }

    public function updateArticle($id)
    {
        $data['title'] = 'Update Article';

        $data['user']      = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();
        $data['article']   = $this->db->get_where('article', ['id' => $id])->row_array();
        $data['menus']     = $this->User_model->getAllMenu();

        $this->form_validation->set_rules('title', 'title', 'required|trim');
        $this->form_validation->set_rules('content', 'content', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/users/templates/menu', $data);
            $this->load->view('frontend/users/articles/update');
            $this->load->view('frontend/templates/footer');
        } else {

            $data = [
                'title'     => $this->input->post('title'),
                'url_title' => strtolower(url_title($this->input->post('title'))),
                'category'  => $this->input->post('category'),
                'content'   => $this->input->post('content'),
            ];

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '6400';
                $config['upload_path'] = './assets/img/article/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['article']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/article' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->where('id', $id);
            $this->db->update('article', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Artikel Berhasil Diubah</div>');
            redirect('user/article');
        }
    }


    public function deleteArticle($id)
    {
        $this->db->delete('article', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data Artikel Berhasil Dihapus</div>');
        redirect('user/article');
    }


    /*
    |--------------------------------------------------------------------------
    | Dashboard User Discussions
    |--------------------------------------------------------------------------
    */

    public function discussions()
    {
        $data['title'] = 'Discussions';

        $data['user']        = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus']       = $this->User_model->getAllMenu();
        $data['discussions'] = $this->db->get_where('discussion', ['author' => $data['user']['name']])->result_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/users/templates/menu', $data);
        $this->load->view('frontend/users/discussions/index', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function notes()
    {
        $data['title'] = 'Notes';
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->User_model->getAllMenu();
        $data['notes'] = $this->db->get('user_notes')->result_array();

        $this->form_validation->set_rules('note', 'note', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/users/templates/menu', $data);
            $this->load->view('frontend/users/notes/index', $data);
            $this->load->view('frontend/templates/footer');
        } else {

            $data = [
                'name' => $data['user']['name'],
                'email' => $data['user']['email'],
                'image' => $data['user']['image'],
                'note' => $this->input->post('note', true),
                'date_created' => time(),
                'is_active' => 'aktif'
            ];

            $this->db->insert('user_notes', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Catatan Berhasil Disimpan</div>');
            redirect('user/notes');
        }
    }

    public function editnotes()
    {
        echo json_encode($this->User_model->getEditNotes($this->input->post('id')));
    }

    public function updateNotes()
    {
        $this->User_model->updateDataNotes($this->input->post('id'));
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data Catatan Berhasil Diubah</div>');
        redirect('user/notes');
    }

    public function delete_note($id)
    {
        $this->db->delete('user_notes', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data Berhasil Dihapus</div>');
        redirect('user/notes');
    }

    /*
    |--------------------------------------------------------------------------
    | Dashboard User Product
    |--------------------------------------------------------------------------
    */

    public function checkout()
    {
        $data['title'] = 'Checkout';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->User_model->getAllMenu();

        $data['checkout'] = $this->db->get_where('checkout', ['email' => $this->session->userdata('email')])->result_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/users/templates/menu', $data);
        $this->load->view('frontend/users/checkout/index', $data);
        $this->load->view('frontend/templates/footer');
    }

    public function confirm_checkout($id)
    {
        $view = __FUNCTION__;

        $data['title'] = 'Checkout';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->User_model->getAllMenu();

        $data['ckout'] = $this->db->get_where('checkout', ['id' => $id])->row_array();

        $this->form_validation->set_rules('confirm', 'confirm', 'rqeuired');

        if ($this->form_validation->run() == false) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/users/templates/menu', $data);
            $this->load->view('frontend/users/checkout/' . $view, $data);
            $this->load->view('frontend/templates/footer');
        } else {

            $upload_image = $_FILES['confirm']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '204000';
                $config['upload_path'] = './assets/img/checkout/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('confirm')) {

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('confirm', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $this->db->where('id', $id);
            $this->db->update('checkout');
            $this->session->set_flashdata('message', '<div class="alert alert-success">Pemesanan Berhasil Dikonfirmasi</div>');
            redirect('user/checkout');
        }
    }

    public function show_product($id)
    {
        $data['title'] = 'Checkout';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['menus'] = $this->User_model->getAllMenu();

        $data['order_product'] = $this->db->get_where('order_product', ['id_checkout' => $id])->result_array();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/users/templates/menu', $data);
        $this->load->view('frontend/users/checkout/show', $data);
        $this->load->view('frontend/templates/footer');
    }
}
