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
    
    // $this->db->select('user_id, COUNT(user_id) as total');
    // $this->db->group_by('user_id'); 
    // $this->db->order_by('total', 'desc'); 
    // $this->db->get('tablename', 10);

    public function totalDataCommentar2() {
		$this->db->select('discussion.url_quession, COUNT(discussion_commentar.url_quession) as total');
		$this->db->from('discussion_commentar');
		// $this->db->where('discussion_commentar.url_quession = discussion.url_quession');
		$this->db->join('discussion','discussion.url_quession=discussion_commentar.url_quession');
        $this->db->group_by('url_quession');
		$result = $this->db->get();

		return $result->result();
    }
    
    public function totalDataCommentar()
    {
        // $query = "SELECT `discussion_commentar`.*
        //             FROM `discussion_commentar` JOIN `discussion`
        //            WHERE `discussion_commentar`.`url_quession` = `discussion`.`url_quession`
        //         ";
        // return $this->db->query($query)->num_rows();
        
        $query = "SELECT `discussion_commentar`.`url_quession`, `discussion`.`url_quession`, `url_quession`, COUNT ( * ) as total 
                    FROM `discussion_commentar` JOIN `discussion`
                      ON `discussion`.`url_quession`, `discussion`.`url_quession`
                GROUP BY `url_quession` 
                ";
        return $this->db->query($query)->result();

        
    }

}