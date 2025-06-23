<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('Dashboard_Model');
		$this->load->model('Currency_Model');
		$this->load->model('Weather_Model');
	}

	public function index()
	{

		// $api_key = 'e16958efb35e6f865dcb7e49b927284';

        // // Koordinat (Ganti dengan koordinat Batu Merah, Kota Batam)
        // $latitude = '-1.0195';
        // $longitude = '103.9670';

        // // URL API OpenWeatherMap
        // $url = "http://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&appid=$api_key";

        // // Lakukan permintaan HTTP
        // $ch = curl_init();
        // curl_setopt($ch, CURLOPT_URL, $url);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // $response = curl_exec($ch);
        // curl_close($ch);
		$kota = 'Batam';

		$data = array(
			'title' => 'Corporate Portal',
			'rowTelp'	=> $this->Dashboard_Model->get_Ext_List(),
			'row_news'  => $this->Dashboard_Model->get_News(),
			// 'cuaca'		=> $this->Weather_Model->get(),
			// 'bmkg'		=> $this->Weather_Model->bmkg(),
			// 'currency'	=> $this->Currency_Model->get(),
		);
		$this->template->load('template','dashboard/dashboard_view',$data);
		// $this->load->view('dashboard_view');
	}
}
