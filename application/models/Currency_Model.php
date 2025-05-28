<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Currency_Model extends CI_Model{
    function get()
	{

		$api_key = '14dd331d0b84b2fc621a1c3c4877f968'; // currencylayer
		 //get JSON
		
		//  $json = file_get_contents("https://api.bmkg.go.id/publik/prakiraan-cuaca?adm4=21.71.02.1003", false);
		 $json = file_get_contents("https://apilayer.net/api/live?access_key=14dd331d0b84b2fc621a1c3c4877f968&currencies=EUR,SGD,IDR&source=USD&format=1");

		 //decode JSON to array
		 $data = json_decode($json,true);
		 
		 //return data array()
		 return $data;
    }
}