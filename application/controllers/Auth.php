<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		cek_yeslogin();
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	// Checking Username or email 
	public function checking_user_login(){
		$name_email = $this->input->post('name_email');
		if($name_email != ''){
			$check = $this->db->query("SELECT * FROM tb_user_auth WHERE auth_uname = '$name_email' OR auth_email='$name_email'");
			if($check->num_rows() > 0){
				echo "1";
			}else{ echo "0" ; }
		}
	}

	public function login()
	{
		$email = $this->uri->segment(3);
		$upass = sha1($this->uri->segment(4));

		// echo $email . "/" . sha1($upass);
		if ($email != "" || $upass != "") {
			$this->load->model('Auth_Model');
			$query = $this->db->query("SELECT * FROM tb_user_auth WHERE auth_uname='$email' OR auth_email = '$email' AND auth_pass='$upass' ");
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$params = array(
					'auth_uname'			=> $row->auth_uname,
					'auth_email'			=> $row->auth_email
				);
				$this->session->set_userdata($params);
				$this->session->set_flashdata('flash', 'berhasil');
				redirect('Dashboard_Backend');
			} else {
				$this->session->set_flashdata('flash_error', 'gagal');
				redirect('Auth');
			}
		}
	}

}
