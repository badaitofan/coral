<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer_Team extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('Developer_Model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Coral - Tim Pengembang',
			'row'	=> $this->Developer_Model->get_Team()
		);
		$this->template->load('template','developer/developer_view',$data);
	}
}
