<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Coral - Corporate Portal'
		);
		$this->template->load('template','dashboard/dashboard_view',$data);
		// $this->load->view('dashboard_view');
	}
}
