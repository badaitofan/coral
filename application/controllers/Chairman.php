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
			$this->template->load('template','chairman/legal/legal_view',$data);
			// $this->load->view('dashboard_view');
		}


		
	// Load Page Permit  Document 
		public function perijinan_legal()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja Corporate Legal',
				'row'	=> $this->Chairman_Model->get_Doc_Permit()
			);
			$this->template->load('template','chairman/legal/legal_permit_view',$data);
		}

	// Load Page Peraturan Perusahaan
		public function peraturan_pemerintah_legal()
		{
			$data = array(
				'title' => 'Coral - Unit Kerja Corporate Legal',
				'row'	=> $this->Chairman_Model->get_Gov_Regulation()
			);
			$this->template->load('template','chairman/legal/legal_gov_regulation_view',$data);
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
			$this->template->load('template','chairman/qhse/qhse_view',$data);
			// $this->load->view('dashboard_view');
		}

		// Get All Data SOP
		public function sop_qhse()
		{
			$segmen = $this->uri->segment(3);
			$data = array(
				'title' => 'Coral - SOP QHSE',
				'row'	=> $this->Chairman_Model->get_SOP($segmen)
			);
			$this->template->load('template','chairman/qhse/qhse_sop_view',$data);
			// $this->load->view('dashboard_view');
		}
		// Get All Data SOP
		public function sop_qhse_K3L()
		{
			$data = array(
				'title' => 'Coral - SOP QHSE',
				'row'	=> $this->Chairman_Model->get_SOP_K3L()
			);
			$this->template->load('template','chairman/qhse/qhse_sop_k3l_view',$data);
			// $this->load->view('dashboard_view');
		}

		// Get Filtered Data SOP == tidak dipakai
		public function get_filtered_SOP()
		{
			$category = $this->input->post('category',TRUE);
			if($category != "ALL"){
				$this->db->select('*');
				$this->db->from('tb_sop');
				$this->db->where('sop_category',$category);
				$this->db->order_by('sop_seq',"DESC");
				$query =  $this->db->get();
				$row = $query->result_array();
				if($query->num_rows() > 0){
					$no=1;
                  foreach ($row as $dataSOP) {
                    echo "<tr>
                    <td>".$no++."</td>
                    <td><div class='user-data'><div><a><h4>".$dataSOP['sop_name']."</h4></a><span>".$dataSOP['sop_code']." | Terbit tgl. ".$dataSOP['sop_release']."</span></div></div></td>
                    <td>".$dataSOP['sop_category']."</td>
                    <td>".$dataSOP['sop_rev']."</td>
                    <td></td>
                    <td>asd</td>
                    </tr>";
                  }
				}
			}
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
			$this->template->load('template','chairman/secretary/secretary_view',$data);
			// $this->load->view('dashboard_view');
		}

	
	#===== .END Secretary FUNCTIONS =====


}
