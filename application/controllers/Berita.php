<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('Berita_Model');
	}


	public function index()
	{
		$data = array(
			'title' => 'Portal - Berita',
			'row_news' => $this->Berita_Model->get_News()
		);
		$this->template->load('template','berita/berita_view',$data);
		// $this->load->view('dashboard_view');
	}

	public function berita_()
	{
		$id = $this->uri->segment(3);
		$data = array(
			'title' => 'Portal - Berita Detail',
			'news_id' => $id,
			'row_news' => $this->Berita_Model->get_News()
		);
		$this->template->load('template','berita/berita_detail_view',$data);
	}
}
