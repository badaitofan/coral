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
		$this->db->where('cp_seq',$seqid);
		$query = $this->db->get('tb_contact_personil');
		$row = $query->result_array();
		foreach ($row as $data) {
			# code...
			echo "<div class='d-flex'><img class='img-100 img-fluid m-r-20 rounded-circle update_img_0' src='".base_url('assets/images/user/').$data['cp_photo']."' alt=''>
                <div class='flex-grow-1 mt-0'>
                  <h3><span class='first_name_0 f-w-600'>".$data['cp_name']."</span></h3>
                  <p class='email_add_0'>".$data['cp_email']."</p>
                </div>
              </div>
              <div class='email-general'>
                <h3 class='mb-3'>General</h3>
                <ul>
                  <li>Name <span class='font-primary first_name_0'>".$data['cp_name']."</span></li>
                  <li>Gender <span class='font-primary'>".ucfirst($data['cp_gender'])."</span></li>
                  <li>Birthday<span class='font-primary'> <span class='birth_day_0'>".$data['cp_birthday']."</span></li>
                  <li>Personality<span class='font-primary personality_0'>".$data['cp_personality']."</span></li>
                  <li>Address<span class='font-primary city_0'>".$data['cp_address']."</span></li>
                  <li>City<span class='font-primary city_0'>".$data['cp_city']."</span></li>
                  <li>Mobile No<span class='font-primary mobile_num_0'>".$data['cp_phone']."</span></li>
                  <li>Email Address <span class='font-primary email_add_0'>".$data['cp_email']." </span></li>
                  <li>Website<span class='font-primary url_add_0'>www.test.com</span></li>
                  <li>Interest<span class='font-primary interest_0'>".$data['cp_interest']."</span></li>
                </ul>
              </div>";
		}
	}
}
