<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chairman extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('Chairman_Model');
	}

	#=== ICT FUNCTIONS ===
		public function unit_ict()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja ICT',
				'row'	=> $this->Chairman_Model->get_Personil_ICT()
			);
			$this->template->load('template','chairman/ict_view',$data);
			// $this->load->view('dashboard_view');
		}

		// Get Jobdesk
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

	#=== .END ICT FUNCTIONS ===

	#=== LEGAL FUNCTIONS ====
		public function unit_legal()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja Corporate Legal',
				'row'	=> $this->Chairman_Model->get_Personil_Legal()
			);
			$this->template->load('template','chairman/legal_view',$data);
			// $this->load->view('dashboard_view');
		}

	#=== .END LEGAL FUNCTIONS ====

	#===== QHSE FUNCTIONS =====
		// General
		public function unit_qhse()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja QHSE',
				'row'	=> $this->Chairman_Model->get_Personil_QHSE()
			);
			$this->template->load('template','chairman/qhse_view',$data);
			// $this->load->view('dashboard_view');
		}
	#===== .END QHSE FUNCTIONS =====

	#===== Secretary FUNCTIONS =====
	// General
		public function unit_secretary()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja Corporate Secretary',
				'row'	=> $this->Chairman_Model->get_Personil_Secretary()
			);
			$this->template->load('template','chairman/secretary_view',$data);
			// $this->load->view('dashboard_view');
		}

	
	// Load Page Permit  Document 
		public function perijinan_secretary()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja Corporate Secretary',
				'row'	=> $this->Chairman_Model->get_Doc_Permit()
			);
			$this->template->load('template','chairman/secretary_permit_view',$data);
		}

	#===== .END Secretary FUNCTIONS =====


}
