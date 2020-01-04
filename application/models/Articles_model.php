<?php 

class Articles_model extends CI_Model
{
    public function searchDataArticle()
    {
        $keyword = $this->input->post('keyword', true);

        $this->db->like('title', $keyword);
        $this->db->or_like('author', $keyword);
        return $this->db->get('article')->result_array();
    }
}