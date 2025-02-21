<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('Dashboard_Model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Coral - Corporate Portal',
			'rowTelp'	=> $this->Dashboard_Model->get_Ext_List()
		);
		$this->template->load('template','dashboard/dashboard_view',$data);
		// $this->load->view('dashboard_view');
	}
}
