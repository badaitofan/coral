<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Backend extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Coral - Dasboard'
		);
		$this->template->load('template_backend','admin_backend/dashboard_backend_view',$data);
		// $this->load->view('dashboard_view');
	}

	// Proses Logout start
	function logout()
	{
		$this->session->sess_destroy();
		//$url=base_url('');
		redirect('Auth');
	}

}
