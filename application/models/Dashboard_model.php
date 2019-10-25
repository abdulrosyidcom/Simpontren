<?php 

class Dashboard_model extends CI_Model
{
    /*
    |--------------------------------------------------------------------------
    | Dashboard Menu Management
    |--------------------------------------------------------------------------
    */
    public function getEditMenu($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function updateMenuManagement($id)
    {
        $data = [
            'menu' => $this->input->post('menu')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', $data);
    }

    public function deleteDataMenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
    }


    /*
    |--------------------------------------------------------------------------
    | Dashboard Submenu Management
    |--------------------------------------------------------------------------
    */
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                    FROM `user_sub_menu` JOIN `user_menu`
                      ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                 ";
        return $this->db->query($query)->result_array();
    }

    public function insertDataSubmenu()
    {
        $data = [
            'menu_id' => $this->input->post('menu_id'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->insert('user_sub_menu', $data);
    }

    public function getEditSubmenu($id)
    {
        return $this->db->get_where('user_sub_menu', ['id' => $id])->row_array();
    }

    public function updateSubmenuManagement($id)
    {
        $data = [
            'menu_id' => $this->input->post('menu_id'),
            'title' => $this->input->post('title'),
            'url' => $this->input->post('url'),
            'icon' => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_sub_menu', $data);
    }

    public function deleteDataSubmenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }


    /*
    |--------------------------------------------------------------------------
    | Dashboard Category Article
    |--------------------------------------------------------------------------
    */

    public function insertDataCategoryArticle()
    {
        $data = [
            'name' => $this->input->post('name'),
            'slug' => strtolower( url_title( $this->input->post('name') )),
            'date_created' => time(),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->insert('article_category', $data);
    }

    public function getEditCategoryArticle($id)
    {
        return $this->db->get_where('article_category', ['id' => $id])->row_array();
    }

    public function updateArticleCategory()
    {
        $data = [
            'name' => $this->input->post('name'),
            'is_active' => $this->input->post('is_active'),
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('article_category', $data);
    }



    /*
    |--------------------------------------------------------------------------
    | Dashboard Category Discussion
    |--------------------------------------------------------------------------
    */

    public function insertDataCategorieDiscussions()
    {
        $data = [
            'name' => $this->input->post('name', true),
            'slug' => strtolower(url_title( $this->input->post('name', true ))),
            'date_created' => time(),
            'is_active' => 'aktif'
        ];

        $this->db->insert('discussion_categorie', $data);
    }
}