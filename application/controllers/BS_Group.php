<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BS_Group extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('BSG_Model');
	}

    public function struktur()
    {
        $data = array(
            'title' => 'Portal - Struktur BS Group',
            // 'row'	=> $this->Chairman_Model->get_Personil_ICT()
        );
        $this->template->load('template','bsg/bsg_view',$data);
        // $this->load->view('dashboard_view');
    }

    // LabaRugi
    public function laporan_labarugi()
    {
        $comp = $this->uri->segment(3);
        $data = array(
            'title' => 'Portal - Laporan Laba Rugi BS Group',
            'row'	=> $this->BSG_Model->get_Laporan_LabaRugi($comp)
        );
        $this->template->load('template','bsg/laporan_lb_view',$data);
    }
    // public function getPersonil()
    // {
    //     $group = $this->input->post('group');

    //     $this->db->select('*');
    //     $this->db->where('personil_group',$group);
    //     $this->db->where('personil_email !=',"null");
    //     $this->db->order_by('personil_code',"ASC");
    //     $query = $this->db->get('tb_personil');
    //     $row= $query->result_array();
    //     foreach ($row as $data) {

    //         echo "<a class='list-group-item list-group-item-action list-hover-primary' href='#' aria-current='true'>
    //         <div class='list-wrapper gap-0'><img class='list-img' src='".base_url()."assets/images/user/". $data['personil_photo']."' alt='profile'>
    //             <div class='list-content'>
    //             <h4 class='f-w-600'>".$data['personil_name']."</h4>
    //             <p>". $data['personil_position']."</p><small>". $data['personil_email']."</small>
    //             </div>
    //         </div>
    //     </a>";
    //     }

    // }

}