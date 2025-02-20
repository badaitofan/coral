<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobdesk extends CI_Controller {

	public function jobdesk_ict()
	{
		$data = array(
			'title' => 'Rangkol - Jobdesk ICT'
		);
		$this->template->load('template','jobdesk/ict_view',$data);
		// $this->load->view('dashboard_view');
	}

	public function jobdesk_ga()
	{
		$data = array(
			'title' => 'Rangkol - Jobdesk GA'
		);
		$this->template->load('template','jobdesk/ga_view',$data);
		// $this->load->view('dashboard_view');
	}
}
