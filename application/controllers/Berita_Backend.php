<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_Backend extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Coral - Berita'
		);
		$this->template->load('template_backend','admin_backend/berita_backend_view',$data);
		// $this->load->view('dashboard_view');
	}

    public function berita_baru()
	{
		$data = array(
			'title' => 'Coral - Berita'
		);
		$this->template->load('template_backend','admin_backend/berita_baru_backend_view',$data);
		// $this->load->view('dashboard_view');
	}
}
