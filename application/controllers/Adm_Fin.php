<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_Fin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('Adm_Fin_Model');
	}

	#=== KEUANGAN FUNCTIONS ===
		// Get general
		public function keuangan_general()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja Keuangan',
				'row'	=> $this->Adm_Fin_Model->get_Personil_Keuangan()
			);
			$this->template->load('template','adm_fin/keuangan/keuangan_view',$data);
			// $this->load->view('dashboard_view');
		}

		public function keuangan_jobdesc()
		{
			$data = array(
				'title' => 'Coral - Jobdesc Keuangan'
			);
			$this->template->load('template','adm_fin/keuangan_jobdesc_view',$data);
			// $this->load->view('dashboard_view');
		}

	#=== .END KEUANGAN FUNCTIONS ===

	#=== AKUNTANSI FUNCTIONS ===
		// Get General
		public function akuntansi_general()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja Akuntansi',
				'row'	=> $this->Adm_Fin_Model->get_Personil_Accounting()
			);
			$this->template->load('template','adm_fin/accounting/accounting_view',$data);
			// $this->load->view('dashboard_view');
		}

	#=== .END AKUNTANSI FUNCTIONS ===

	#=== GENERAL AFFAIR FUNCTIONS ===
		// Get General
		public function unit_ga()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja GA',
				'row'	=> $this->Adm_Fin_Model->get_Personil_GA()
			);
			$this->template->load('template','adm_fin/general_affair/ga_view',$data);
			// $this->load->view('dashboard_view');
		}

		// Get Jobdesk
		public function asset_atk_ga()
		{
			$data = array(
				'title' => 'Coral - Aset ATK GA',
				'row'	=> $this->Adm_Fin_Model->get_Aset_Atk()
			);
			$this->template->load('template','adm_fin/general_affair/aset_atk_ga_view',$data);
		}

	#=== .ENDGENERAL AFFAIR FUNCTIONS ===
	
	#=== PURCHASING FUNCTIONS ===
		// Get General
		public function unit_purchasing()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja Purchasing',
				'row'	=> $this->Adm_Fin_Model->get_Personil_Purchasing()
			);
			$this->template->load('template','adm_fin/purchasing/purchasing_view',$data);
			// $this->load->view('dashboard_view');
		}

	#=== .END PURCHASING FUNCTIONS ===
	
	#=== HRD FUNCTIONS ===
		// Get General
		public function unit_hrd()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja HRD',
				'row'	=> $this->Adm_Fin_Model->get_Personil_HRD()
			);
			$this->template->load('template','adm_fin/hrd/hrd_view',$data);
			// $this->load->view('dashboard_view');
		}

	#=== .ENDPURCHASING HRD ===
	
}
