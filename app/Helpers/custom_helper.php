<?php

// use App\Models\AuthModel;


function userLogin() {
    // $authModel = new AuthModel();
    // $name = $authModel->request->getVar('name_admin');
    $db = \Config\Database::connect();
    return $db->table('tb_login')->where('id_login', session('id_login'))->get()->getRow();
} 
?>