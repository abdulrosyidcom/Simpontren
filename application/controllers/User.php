<?php 

class User extends CI_Controller
{
    public function __construct() {
		parent::__construct();
		
		
		if($this->session->userdata('role_id') != '2' &&
			$this->session->userdata('logged_in') != TRUE) {

			$this->session->set_flashdata('msg', 'Anda Harus Login ');
			redirect(site_url('authentication'));
		}
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

        $data['menus'] =$this->User_model->getAllMenu();

        $this->load->view('frontend/templates/header', $data);
        $this->load->view('frontend/users/templates/menu', $data);
        $this->load->view('frontend/users/dashboard/index');
        $this->load->view('frontend/templates/footer');
    }
    
    public function setting()
    {
        $data['title'] = 'Setting';
        $data['user']  = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menus'] =$this->User_model->getAllMenu();

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

        if( $this->form_validation->run() == false ) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/users/templates/menu', $data);
            $this->load->view('frontend/users/settings/index');
            $this->load->view('frontend/templates/footer');
        } else {
            
            $this->User_model->updateDataUsers();
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

        if( $this->form_validation->run() == false ) {
            $this->load->view('frontend/templates/header', $data);
            $this->load->view('frontend/users/templates/menu', $data);
            $this->load->view('frontend/users/articles/index');
            $this->load->view('frontend/templates/footer');
        } else {
            
            $data = [
                'title'        => $this->input->post('title', true),
                'url_title'    => strtolower( url_title( $this->input->post('title', true) ) ),
                'category'     => $this->input-> post('category', true),
                'content'      => $this->input->post('content', true),
                'author'       => $data['user']['name'],
                'date_created' => time(),
                'is_active'    => 'proccess'
            ];

            $upload_image = $_FILES['image']['name'];
    
            if( $upload_image ) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '6400';
                $config['upload_path'] = './assets/img/article/';

                $this->load->library('upload', $config);

                if( $this->upload->do_upload('image') ) {
                    $old_image = $data['article']['image'];
                    if( $old_image != 'default.jpg' ) {
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
                'url_title' => strtolower( url_title( $this->input->post('title'))),
                'category'  => $this->input->post('category'),
                'content'   => $this->input->post('content'),
            ];

            $upload_image = $_FILES['image']['name'];

            if( $upload_image ) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '6400';
                $config['upload_path'] = './assets/img/article/';

                $this->load->library('upload', $config);

                if( $this->upload->do_upload('image') ) {
                    $old_image = $data['article']['image'];
                    if( $old_image != 'default.jpg' ) {
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
    

}