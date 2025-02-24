<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chairman extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('Chairman_Model');
	}

	public function unit_ict()
	{
		$data = array(
			'title' => 'Coral - Unit Kerja ICT',
			'row'	=> $this->Chairman_Model->get_Personil_ICT()
		);
		$this->template->load('template','chairman/ict_view',$data);
		// $this->load->view('dashboard_view');
	}

	public function jobdesc_ict()
	{
		$data = array(
			'title' => 'Coral - Jobdesk ICT',
			'row_jd_ict'=> $this->Chairman_Model->get_jobdesc_ict()//Get data jobdesc Unit ICT
		);
		$this->template->load('template','chairman/jobdesk_ict_view',$data);
		// $this->load->view('dashboard_view');
	}
	public function asset_ict()
	{
		$data = array(
			'title' => 'Coral - Asset ICT',
			'row'	=> $this->Chairman_Model->get_asset_ict()
		);
		$this->template->load('template','chairman/asset_ict_view',$data);
	}

	// Page Helpdesk ICT
	public function helpdesc_ict()
	{
		$data = array(
			'title' => 'Coral - Helpdesk ICT',
			'row'	=> $this->Chairman_Model->get_helpdesc()
		);
		$this->template->load('template','chairman/helpdesc_ict_view',$data);
	}

	// Page Helpdesk ICT
	public function helpdesc_ict_filter()
	{
		$data = array(
			'title' => 'Coral - Helpdesk ICT',
			// 'row'	=> $this->Chairman_Model->get_helpdesc()
		);
		$this->template->load('template','chairman/helpdesc_ict_view_filter',$data);
	}

	// LEGAL
	public function unit_legal()
	{
		$data = array(
			'title' => 'Coral - Unit Kerja Legal',
			'row'	=> $this->Chairman_Model->get_Personil_Legal()
		);
		$this->template->load('template','chairman/legal_view',$data);
		// $this->load->view('dashboard_view');
	}

}
