<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_Fin extends CI_Controller {

    public function keuangan_general()
	{
		$data = array(
			'title' => 'Coral - Unit Kerja Keuangan'
		);
		$this->template->load('template','adm_fin/keuangan_view',$data);
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
	
}
