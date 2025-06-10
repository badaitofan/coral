<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Portal - Berita'
		);
		$this->template->load('template','berita/berita_view',$data);
		// $this->load->view('dashboard_view');
	}
}
