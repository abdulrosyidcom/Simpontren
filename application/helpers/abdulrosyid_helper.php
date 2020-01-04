<?php 

function is_logged_in() 
{
    $abdulrosyid = get_instance();
    if( !$abdulrosyid->session->userdata('email') ) {
        redirect('authentication');
    } else {
        $role_id = $abdulrosyid->session->userdata('role_id');
        $menu    = $abdulrosyid->uri->segment(1);

        $queryMenu = $abdulrosyid->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $abdulrosyid->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('authentication/blocked');
        }
    }
}


function check_access($role_id, $menu_id)
{
    $abdulrosyid = get_instance();

    $result = $abdulrosyid->db->get_where('user_access_menu', [
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ]);

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

