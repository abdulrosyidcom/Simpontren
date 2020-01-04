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
            'slug' => strtolower(url_title($this->input->post('name'))),
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
    | Dashboard Discussion
    |--------------------------------------------------------------------------
    */

    public function getEditDiscussion($id)
    {
        return $this->db->get_where('discussion', ['id' => $id])->row_array();
    }

    public function updateDiscussion()
    {
        $data = [
            'quession' => $this->input->post('question'),
            'is_active' => $this->input->post('is_active'),
            'description' => $this->input->post('description')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('discussion', $data);
    }

    /*
    |--------------------------------------------------------------------------
    | Dashboard Discussion Categorie
    |--------------------------------------------------------------------------
    */

    public function insertDataCategorieDiscussions()
    {
        $data = [
            'name' => $this->input->post('name', true),
            'slug' => strtolower(url_title($this->input->post('name', true))),
            'date_created' => time(),
            'is_active' => 'aktif'
        ];

        $this->db->insert('discussion_categorie', $data);
    }

    public function updateDiscussionCategorie()
    {
        $data = [
            'name' => $this->input->post('name', true),
            'slug' => strtolower(url_title($this->input->post('name'))),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('discussion_categorie', $data);
    }

    public function getEditDiscussionCategorie($id)
    {
        return $this->db->get_where('discussion_categorie', ['id' => $id])->row_array();
    }


    /*
    |--------------------------------------------------------------------------
    | Dashboard Feedback
    |--------------------------------------------------------------------------
    */

    public function getEditFeedback($id)
    {
        return $this->db->get_where('user_notes', ['id' => $id])->row_array();
    }

    public function updateFeedback()
    {
        $data = [
            'note' => $this->input->post('note', true),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_notes', $data);
    }


    /*
    |--------------------------------------------------------------------------
    | Dashboard Product
    |--------------------------------------------------------------------------
    */

    public function insertDataProductCategory()
    {
        $data = [
            'name' => $this->input->post('name', true),
            'slug' => strtolower(url_title($this->input->post('name', true))),
            'is_active' => $this->input->post('is_active'),
            'date_created' => time()
        ];

        $this->db->insert('product_category', $data);
    }


    public function getAllCheckout()
    {
        return $this->db->get('checkout')->result_array();
    }

    // public function takeIdCheckout($id)
    // {
    //     $result = $this->db->where('id', $id)
    //         ->limit(1)
    //         ->get('checkout');

    //     if ($result->num_rows() > 0) {
    //         return $result->row();
    //     } else {
    //         return false;
    //     }
    // }

    // public function takeIdOrder($id)
    // {
    //     return $this->db->get_where('order_product', ['id' => $id])->result_array();
    // }
}
