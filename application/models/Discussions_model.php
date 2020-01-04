<?php

class Discussions_model extends CI_Model
{
    public function menuDiscussions()
    {
        $data = [
            [
                'title' => 'Semua',
                'url'   => 'discussions'
            ],
            [
                'title' => 'Belum Terjawab',
                'url'   => 'discussions/unanswered'
            ],
            [
                'title' => 'Selesai',
                'url'   => 'discussions/finish'
            ]
        ];

        return $data;
    }

    public function updateDataQuession($id)
    {
        $data = [
            'quession'    => $this->input->post('quession', true),
            'url_quession' => strtolower(url_title($this->input->post('quession'))),
            'categorie'   => $this->input->post('categorie', true),
            'description' => $this->input->post('description', true),
        ];

        $this->db->where('id', $id);
        $this->db->update('discussion', $data);
    }

    public function totalDataCommentar()
    {
        $query = "SELECT `discussion_commentar`.*
                    FROM `discussion_commentar` JOIN `discussion`
                   WHERE `discussion_commentar`.`url_quession` = `discussion`.`url_quession`
                ";
        return $this->db->query($query)->num_rows();   
    }

}