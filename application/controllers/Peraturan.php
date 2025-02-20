<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan extends CI_Controller {

	public function pemerintah()
	{
		$data = array(
			'title' => 'Coral - Peraturan Pemerintah'
		);
		$this->template->load('template','peraturan/peraturan_pemerintah_view',$data);
		// $this->load->view('dashboard_view');
	}
	public function perusahaan()
	{
		$data = array(
			'title' => 'Coral - Peraturan Perusahaan'
		);
		$this->template->load('template','peraturan/peraturan_perusahaan_view',$data);
		// $this->load->view('dashboard_view');
	}
}
