<?php

class Cart_model extends CI_Model
{
    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('product');

        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return [];
        }
    }
}
