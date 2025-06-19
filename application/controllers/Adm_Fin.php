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
				'title' => 'Portal - Unit Kerja Keuangan',
				'row'	=> $this->Adm_Fin_Model->get_Personil_Keuangan()
			);
			$this->template->load('template','adm_fin/keuangan/keuangan_view',$data);
			// $this->load->view('dashboard_view');
		}

		public function keuangan_jobdesc()
		{
			$data = array(
				'title' => 'Portal - Jobdesc Keuangan',
				'row_jd_keu'=> $this->Adm_Fin_Model->get_jobdesc_keu()//Get data jobdesc Unit Keuangan
			);
			$this->template->load('template','adm_fin/keuangan/keuangan_jobdesk_view',$data);
			// $this->load->view('dashboard_view');
		}

	#=== .END KEUANGAN FUNCTIONS ===

	#=== AKUNTANSI FUNCTIONS ===
		// Get General
		public function akuntansi_general()
		{
			$data = array(
				'title' => 'Portal - Unit Kerja Akuntansi',
				'row'	=> $this->Adm_Fin_Model->get_Personil_Accounting()
			);
			$this->template->load('template','adm_fin/accounting/accounting_view',$data);
			// $this->load->view('dashboard_view');
		}

		// Show Report Akuntansi
		public function akuntansi_laporan_labarugi()
		{
			$comp = $this->uri->segment(3);
			// echo "<h1>".$comp."</h1>" ;
			$data = array(
				'title' => 'Portal - Unit Kerja Akuntansi',
				'row'	=> $this->Adm_Fin_Model->get_Laporan_LabaRugi($comp),
				'comp' => $comp
			);
			$this->template->load('template','adm_fin/accounting/accounting_lb_view',$data);
		}

		// Get Jobdesk
		public function akuntansi_jobdesc()
		{
			$data = array(
				'title' => 'Portal - Jobdesk Accounting',
				'row_jd_acct'=> $this->Adm_Fin_Model->get_jobdesc_acct()//Get data jobdesc Unit ACCOunting
			);
			$this->template->load('template','adm_fin/accounting/accounting_jobdesk_view',$data);
		}

		// Show Report Audit Internal
		public function akuntansi_audit_internal()
		{
			// echo "<h1>".$comp."</h1>" ;
			$data = array(
				'title' => 'Portal - Unit Kerja Akuntansi',
				'row'	=> $this->Adm_Fin_Model->get_Laporan_Audit_Internal(),
				// 'comp' => $comp
			);
			$this->template->load('template','adm_fin/accounting/accounting_ai_view',$data);
		}
	#=== .END AKUNTANSI FUNCTIONS ===

	#=== GENERAL AFFAIR FUNCTIONS ===
		// Get General
		public function unit_ga()
		{
			$data = array(
				'title' => 'Portal - Unit Kerja GA',
				'row'	=> $this->Adm_Fin_Model->get_Personil_GA()
			);
			$this->template->load('template','adm_fin/general_affair/ga_view',$data);
			// $this->load->view('dashboard_view');
		}

		// Get Jobdesk
		public function jobdesc_ga()
		{
			$data = array(
				'title' => 'Portal - Jobdesk Accounting',
				'row_jd_ga'=> $this->Adm_Fin_Model->get_jobdesc_ga()//Get data jobdesc Unit GA
			);
			$this->template->load('template','adm_fin/general_affair/ga_jobdesk_view',$data);
		}

		// Get Jobdesk
		public function asset_atk_ga()
		{
			$data = array(
				'title' => 'Portal - Aset ATK GA',
				'row'	=> $this->Adm_Fin_Model->get_Aset_Atk()
			);
			$this->template->load('template','adm_fin/general_affair/aset_atk_ga_view',$data);
		}

		//Get Data Kendaraan GA
		public function aset_kendaraan_ga()
		{
			$data = array(
				'title' => 'Portal - Aset Kendaraan',
				'row'	=> $this->Adm_Fin_Model->getAsetDetail()
			);
			$this->template->load('template','adm_fin/general_affair/aset_kendaraan_view',$data);
		}

		//Get Data Trailer GA
		public function aset_trailer_ga()
		{
			$data = array(
				'title' => 'Portal - Aset Ekor Trailer',
				'row'	=> $this->Adm_Fin_Model->getAsetTrailerDetail()
			);
			$this->template->load('template','adm_fin/general_affair/aset_trailer_view',$data);
		}

	#=== .END GENERAL AFFAIR FUNCTIONS ===
	
	#=== PURCHASING FUNCTIONS ===
		// Get General
		public function unit_purchasing()
		{
			$data = array(
				'title' => 'Portal - Unit Kerja Purchasing',
				'row'	=> $this->Adm_Fin_Model->get_Personil_Purchasing()
			);
			$this->template->load('template','adm_fin/purchasing/purchasing_view',$data);
			// $this->load->view('dashboard_view');
		}

		// Get Jobdesk
		public function jobdesc_purchasing()
		{
			$data = array(
				'title' => 'Portal - Jobdesk Accounting',
				'row_jd_purc'=> $this->Adm_Fin_Model->get_jobdesc_purchasing()//Get data jobdesc Unit Purchasing
			);
			$this->template->load('template','adm_fin/purchasing/purchasing_jobdesk_view',$data);
		}

		//Get Data Vendor
		public function data_vendor_purchasing()
		{
			$data = array(
				'title' => 'Portal - Data Vendor',
				'row'	=> $this->Adm_Fin_Model->getDataVendorDetail()
			);
			$this->template->load('template','adm_fin/purchasing/data_vendor_view',$data);
		}


	#=== .END PURCHASING FUNCTIONS ===
	
	#=== HRD FUNCTIONS ===
		// Get General
		public function unit_hrd()
		{
			$data = array(
				'title' => 'Portal - Unit Kerja HRD',
				'row'	=> $this->Adm_Fin_Model->get_Personil_HRD()
			);
			$this->template->load('template','adm_fin/hrd/hrd_view',$data);
		}
		
		// Get data Peraturan Perusahaan
		public function perautan_perusahaan_hrd()
		{
			$data = array(
				'title' => 'Portal - Peraturan Perusahaan',
				'row_peraturan_peraturan'	=> $this->Adm_Fin_Model->get_Peraturan_Perusahaan_HRD()
			);
			$this->template->load('template','adm_fin/hrd/hrd_peraturan_perusahaan',$data);
		}
		
		// Get data Pelamar
		public function data_pelamar_hrd()
		{
			$data = array(
				'title' => 'Portal - Data Pelamar',
				'row_pelamar'	=> $this->Adm_Fin_Model->get_Pelamar_HRD()
			);
			$this->template->load('template','adm_fin/hrd/hrd_data_pelamar',$data);
		}

		// Get Jobdesk
		public function jobdesc_hrd()
		{
			$data = array(
				'title' => 'Portal - Jobdesk HRD',
				'row_jd_hrd'=> $this->Adm_Fin_Model->get_jobdesc_hrd()//Get data jobdesc Unit HRD
			);
			$this->template->load('template','adm_fin/hrd/hrd_jobdesk_view',$data);
		}

	#=== .END HRD FUNCTIONS===
	
}
