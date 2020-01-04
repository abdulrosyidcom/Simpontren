<?php

class Checkout_model extends CI_Model
{
    public function checkout()
    {
        date_default_timezone_set('Asia/Jakarta');

        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'delivery_service' => $this->input->post('delivery_service'),
            'bank' => $this->input->post('bank'),
            'confirm' => 'default.jpg',
            'date_created' => date('Y-m-d H:i:s'),
            'pay_limit' => date('Y-m-d H:i:s', mktime(date('H'),  date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
        ];

        $this->db->insert('checkout', $data);
        $id_checkout = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $result = [
                'id_checkout' => $id_checkout,
                'id_product' => $item['id'],
                'name' => $item['name'],
                'qty' => $item['qty'],
                'price' => $item['price']
            ];

            $this->db->insert('order_product', $result);
        }
        return true;
    }
}
