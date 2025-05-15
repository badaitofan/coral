<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Weather_Model extends CI_Model{
    function get()
	{

		$api_key = 'e16958efb35e6f865dcb7e49b9272842';

        // // Koordinat (Ganti dengan koordinat Batu Merah, Kota Batam)
        $latitude = '1.1623883012407488';
        $longitude = '104.0057488158572';
		 //get JSON
		//  $json = file_get_contents("https://api.openweathermap.org/data/2.5/weather?lat=$latitude&lon=$longitude&appid=$api_key", false);
		 $json = file_get_contents("https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4=21.71.02.1003", false);

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data;
    }
}