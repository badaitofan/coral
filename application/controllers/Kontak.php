<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'Coral - Daftar Kontak'
		);
		$this->template->load('template','kontak/kontak_view',$data);
		// $this->load->view('dashboard_view');
	}
}
