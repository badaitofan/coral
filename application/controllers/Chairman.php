<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chairman extends CI_Controller {

	public function unit_ict()
	{
		$data = array(
			'title' => 'Coral - Unit Kerja ICT'
		);
		$this->template->load('template','chairman/ict_view',$data);
		// $this->load->view('dashboard_view');
	}

	public function jobdesc_ict()
	{
		$data = array(
			'title' => 'Coral - Jobdesk ICT'
		);
		$this->template->load('template','chairman/jobdesk_ict_view',$data);
		// $this->load->view('dashboard_view');
	}
	public function asset_ict()
	{
		$data = array(
			'title' => 'Coral - Asset ICT'
		);
		$this->template->load('template','chairman/asset_ict_view',$data);
	}
}
