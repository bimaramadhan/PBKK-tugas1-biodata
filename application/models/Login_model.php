<?php
class Login_model extends CI_Model
{
    public function cek_login($email,$pwd){
        return $this->db->get_where('profil', array('email' => $email, 'password' => $pwd));
    }
}
