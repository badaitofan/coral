<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('Kontak_Model');
	}

	public function index()
	{
		$data = array(
			'title' => 'Coral - Daftar Kontak',
			'row'	=> $this->Kontak_Model->get_data_kontak()
		);
		$this->template->load('template','kontak/kontak_view',$data);
		// $this->load->view('dashboard_view');
	}

	// Get Detail Kontak
	public function getDetailKontak()
	{
		$seqid = $this->input->post('seqid',TRUE);

		$this->db->select('*');
		$this->db->from('tb_contact_personil');
		$this->db->where('tb_contact_personil.cp_seq',$seqid);
		$this->db->join('tb_company','tb_company.company_code=tb_contact_personil.cp_company','LEFT');
		$query = $this->db->get();
		$row = $query->result_array();
		foreach ($row as $data) {
			// $gender = $data['cp_gender'];
			if($data['cp_gender'] == "L"){
				$gender = "Laki-laki"; }
				else{ $gender = "Perempuan";}
			# code...
			echo "<div class='d-flex'><img class='img-100 img-fluid m-r-20 rounded-circle update_img_0' src='".base_url('assets/images/user/').$data['cp_photo']."' alt=''>
                <div class='flex-grow-1 mt-0'>
                  <h3><span class='first_name_0 f-w-600'>".$data['cp_name']."</span></h3>
                  <!-- <p class='email_add_0'>".$data['cp_email']."</p> --!>
                  <p class='email_add_0'>".$data['cp_nik']." - ".$data['company_name']."</p>
                </div>
              </div>
              <div class='email-general'>
                <h3 class='mb-3'>General</h3>
                <ul>
                  <li>Nama <span class='font-primary first_name_0'>".$data['cp_name']."</span></li>
                  <li>Gender <span class='font-primary'>".$gender."</span></li>
                  <li>Tempat / Tgl Lahir<span class='font-primary'> <span class='birth_day_0'>".$data['cp_place_birth']." / ".date("d-M-Y",strtotime($data['cp_birthday']))."</span></li>
                  <li>Agama<span class='font-primary personality_0'>".$data['cp_religion']."</span></li>
                  <li>Alamat<span class='font-primary city_0'>".$data['cp_address']."</span></li>
                  <li>Mobile No<span class='font-primary mobile_num_0'>".$data['cp_phone']."</span></li>
                  <li>Email Address <span class='font-primary email_add_0'>".$data['cp_email']." </span></li>
                  <li>Jabatan<span class='font-primary city_0'>".$data['cp_position']."</span></li>
                  <li>Penempatan<span class='font-primary url_add_0'>".$data['cp_office']."</span></li>
                  
                </ul>
              </div>";
		}
	}
}
