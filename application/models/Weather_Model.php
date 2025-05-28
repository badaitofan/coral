<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Weather_Model extends CI_Model{
    function get()
	{

		// $api_key = 'e16958efb35e6f865dcb7e49b9272842'; // data BMKG
		// $api_key = '4c359c73dce8d8bbe7e41d8a6bf3ffe2'; // Weatherstack

        // // Koordinat (Ganti dengan koordinat Batu Merah, Kota Batam)
        $latitude = '1.1623883012407488';
        $longitude = '104.0057488158572';
		 //get JSON
		
		 $json = file_get_contents("https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4=21.71.02.1003", false);
		//  $json = file_get_contents("https://api.weatherstack.com/current?access_key=".$api_key."&query=".$latitude.",".$longitude."", false);

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data;
    }
}