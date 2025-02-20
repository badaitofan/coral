<?php

class Fungsi
{

    protected $CI;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    function user_login()
    {
        $this->ci->load->model('Auth_Model');
        $user_email = $this->ci->session->userdata('auth_email'); //email adalah session yang di dapat dari param controller Auth
        $user_data = $this->ci->Auth_Model->get($user_email)->row();  // parsing ke Model
        return $user_data;
    }
}
