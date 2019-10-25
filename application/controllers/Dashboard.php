<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{   
    public function __construct() {
		parent::__construct();
		
		
		// if($this->session->userdata('role_id') != '1' &&
		// 	$this->session->userdata('logged_in') != TRUE) {

		// 	$this->session->set_flashdata('msg', 'Anda Harus Login ');
		// 	redirect(site_url('authentication'));
        // }
        
        if( !$this->session->userdata('email')) {
            redirect('authentication');
        }
	}
    
    public function index()
    {
        $data['title'] = 'Dashboard';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->db->get('user')->num_rows();
        $data['menu'] = $this->db->get('user_menu')->num_rows();
        $data['subMenu'] = $this->db->get('user_sub_menu')->num_rows();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/dashboard/index', $data);
        $this->load->view('backend/templates/footer');
    }
    
    public function role()
    {
        $data['title'] = 'Dashboard | Role';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();
        
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/role/index', $data);
        $this->load->view('backend/templates/footer');
    }
    
    public function roleAccess($role_id)
    {
        $data['title'] = 'Dashboard | Role Access';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        
        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/role/role-access', $data);
        $this->load->view('backend/templates/footer');
    }
    
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', 'Diubah');
    }

    public function user()
    {
        echo 'ok';
    }


    /*
    |--------------------------------------------------------------------------
    | Dashboard Menu Management
    |--------------------------------------------------------------------------
    */
    public function menu()
    {
        $data['title'] = 'Menu Management';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['menus'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'menu', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/menu/index', $data);
            $this->load->view('backend/templates/footer');
        } else {
            $data = [
                'menu' => $this->input->post('menu', true)
            ];

            $this->db->insert('user_menu', $data);
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('dashboard/menu');
        }
    }

    public function editmenu()
    {
        echo json_encode ($this->Dashboard_model->getEditMenu($this->input->post('id')));
    }

    public function updatemenu()
    {
        $this->Dashboard_model->updateMenuManagement($this->input->post('id'));
        $this->session->set_flashdata('message', 'Diubah');
        redirect('dashboard/menu');
    }

    public function deleteMenu($id)
    {
        $this->Dashboard_model->deleteDataMenu($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('dashboard/menu');
    }


    /*
    |--------------------------------------------------------------------------
    | Dashboard Submenu Management
    |--------------------------------------------------------------------------
    */
    public function subMenu()
    {
        $data['title'] = 'Submenu Management';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['subMenu'] = $this->Dashboard_model->getSubMenu();
        $data['menus'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu_id', 'menu', 'required');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('url', 'url', 'required');
        $this->form_validation->set_rules('icon', 'icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/submenu/index', $data);
            $this->load->view('backend/templates/footer');
        } else {
            
            $this->Dashboard_model->insertDataSubmenu();
            $this->session->set_flashdata('message', 'Ditambahkan');
            redirect('dashboard/submenu');
        }
    }

    public function editsubmenu()
    {
        echo json_encode ($this->Dashboard_model->getEditSubmenu($this->input->post('id')));
    }

    public function updatesubmenu()
    {
        $this->Dashboard_model->updateSubmenuManagement($this->input->post('id'));
        $this->session->set_flashdata('message', 'Diubah');
        redirect('dashboard/submenu');
    }

    public function deleteSubmenu($id)
    {
        $this->Dashboard_model->deleteDataSubmenu($id);
        $this->session->set_flashdata('message', 'Dihapus');
        redirect('dashboard/submenu');
    }



    /*
    |--------------------------------------------------------------------------
    | Dashboard Articles
    |--------------------------------------------------------------------------
    */

    public function articles()
    {
        $data['title'] = 'Dashboard | Articles';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['articles'] = $this->db->get('article')->result_array();

        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/articles/index', $data);
        $this->load->view('backend/templates/footer');
    }


    public function create_article()
    {
        $data['title'] = 'Dashboard | Create Articles';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->form_validation->set_rules('title', 'judul', 'required');
        $this->form_validation->set_rules('category', 'kategori', 'required');
        $this->form_validation->set_rules('content', 'konten', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/articles/create', $data);
            $this->load->view('backend/templates/footer');
        } else {
            
            $data = [
                'title' => $this->input->post('title', true),
                'url_title' => strtolower( url_title($this->input->post('title', true))),
                'category' => $this->input->post('category', true),
                'content' => $this->input->post('content', true),
                'author' => $data['user']['email'],
                'date_created' => time(),
                'is_active' => 'active'
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

            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Artikel Berhasil Dtambahkan</div>');
            redirect('dashboard/articles');
        }
    }

    public function update_article($url_title)
    {
        $data['article'] = $this->db->get_where('article', ['url_title' => $url_title])->row_array();

        $data['title'] = 'Update ' . $data['article']['title'];

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/articles/update', $data);
            $this->load->view('backend/templates/footer');
        } else {
            
            $data = [
                'title' => $this->input->post('title', true),
                'category' => $this->input->post('category', true),
                'content' => $this->input->post('content', true),
                'is_active' => $this->input->post('is_active')
            ];

            $upload_image = $_FILES['image']['name'];
    
            if( $upload_image ) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
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

            $this->db->where('url_title', $url_title);
            $this->db->update('article', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Artikel Berhasil Diubah</div>');
            redirect('dashboard/articles');
        }
    }

    public function delete_article($url_title)
    {
        $this->db->delete('article', ['url_title' => $url_title]);
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data Artikel Berhasil Dihapus</div>');
        redirect('dashboard/articles');
    }
    
    
    /*
    |--------------------------------------------------------------------------
    | Dashboard Article Category
    |--------------------------------------------------------------------------
    */

    public function article_category()
    {
        $data['title'] = 'Dashboard | Article Category';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['categorys'] = $this->db->get('article_category')->result_array();

        $this->form_validation->set_rules('name', 'category', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/articles/category/index', $data);
            $this->load->view('backend/templates/footer');
        } else {

            $this->Dashboard_model->insertDataCategoryArticle();
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Kategori Berhasil Ditambahkan</div>');
            redirect('dashboard/article_category');
        }
    }

    public function editcategoryarticle()
    {
        echo json_encode ($this->Dashboard_model->getEditCategoryArticle($this->input->post('id')));
    }

    public function updatearticlecategory()
    {
        $this->Dashboard_model->updateArticleCategory($this->input->post('id'));
        $this->session->set_flashdata('message', '<div class="alert alert-success">Data Kategori Berhasil Diubah</div>');
        redirect('dashboard/article_category');
    }

    public function deleteArticleCategory($id)
    {
        $this->db->delete('article_category', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger">Data Kategori Berhasil Dihapus</div>');
        redirect('dashboard/article_category');
    }

    public function discussions()
    {
        $data['title'] = 'Dashboard | Discussions';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->load->view('backend/templates/header', $data);
        $this->load->view('backend/templates/sidebar', $data);
        $this->load->view('backend/templates/topbar', $data);
        $this->load->view('backend/discussions/index', $data);
        $this->load->view('backend/templates/footer');

    }
    
    public function discussion_categorie()
    {
        $data['title'] = 'Dashboard | Discussions';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['categories'] = $this->db->get('discussion_categorie')->result_array();

        $this->form_validation->set_rules('name', 'name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/templates/header', $data);
            $this->load->view('backend/templates/sidebar', $data);
            $this->load->view('backend/templates/topbar', $data);
            $this->load->view('backend/discussions/categorie', $data);
            $this->load->view('backend/templates/footer');
        } else {
           
            $this->Dashboard_model->insertDataCategorieDiscussions();
            $this->session->set_flashdata('message', '<div class="alert alert-success">Data Kategori Berhasil Ditambahakan</div>');
            redirect('dashboard/discussions');
        }
    }


}