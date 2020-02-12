<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Login before setup
 */
class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    public function index()
    {
        if(isset($_POST['submit'])){
            $email      = $this->input->post('email',true);
            $password   = $this->input->post('password',true);
            $row        = $this->login_model->cek_login($email,$password);

            if($row->num_rows() >0){
                $this->session->set_userdata('login','1');
                redirect('setup');
            }
            else {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger">Email atau password yang anda masukan salah!!</div>');
                redirect('login');
            }

        }
        else {
            $this->load->view('login');
        }
    }
}
