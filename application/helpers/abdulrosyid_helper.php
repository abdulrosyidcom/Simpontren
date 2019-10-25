<?php 


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