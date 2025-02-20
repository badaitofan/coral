<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('login_view');
	}
}
