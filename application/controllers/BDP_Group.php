<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BDP_Group extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// cek_nologin();
		$this->load->model('BDP_Model');
	}

    public function struktur()
    {
        $data = array(
            'title' => 'Portal - Struktur BDP Group',
            // 'row'	=> $this->Chairman_Model->get_Personil_ICT()
        );
        $this->template->load('template','bdp/bdp_view',$data);
        // $this->load->view('dashboard_view');
    }

    // Get Jobdesk
		public function jobdesc_bdp()
		{
			$data = array(
				'title' => 'Portal - Jobdesk BSG',
				'row_jd_bdp'=> $this->BDP_Model->get_jobdesc_bdp()//Get data jobdesc Unit BDP
			);
			$this->template->load('template','bdp/jobdesc_bdp_view',$data);
		}

    public function getPersonil()
    {
        $group = $this->input->post('group');

        $this->db->select('*');
        $this->db->where('personil_group',$group);
        $this->db->where('personil_email !=',"null");
        $this->db->order_by('personil_code',"ASC");
        $query = $this->db->get('tb_personil');
        $row= $query->result_array();
        foreach ($row as $data) {

            echo "<a class='list-group-item list-group-item-action list-hover-primary' href='#' aria-current='true'>
            <div class='list-wrapper gap-0'><img class='list-img' src='".base_url()."assets/images/user/". $data['personil_photo']."' alt='profile'>
                <div class='list-content'>
                <h4 class='f-w-600'>".$data['personil_name']."</h4>
                <p>". $data['personil_position']."</p><small>". $data['personil_email']."</small>
                </div>
            </div>
        </a>";
        //     echo "<li> 
        //     <div class='user-notification'>
        //         <div><img src='".base_url()."assets/images/user/". $data['personil_photo']."' alt='avatar'></div>
        //         <div class='user-description'><a href='letter-box.html'>
        //             <h4>".$data['personil_name']."</h4></a> <h4>". $data['personil_position']."</h4><span>". $data['personil_email']."</span>
        //         </div>
        //     </div>
        // </li>";
        }

    }


     // LabaRugi
     public function laporan_labarugi()
     {
         $comp = $this->uri->segment(3);
         $data = array(
             'title' => 'Portal - Laporan Laba Rugi BDP Group',
             'row'	=> $this->BDP_Model->get_Laporan_LabaRugi($comp),
             'comp' => $comp
         );
         $this->template->load('template','bdp/laporan_lb_view',$data);
     }

    //  Get Kapal Layup
     // LabaRugi
     public function kapal_layup()
     {
         $data = array(
             'title' => 'Portal - Laporan Kapal Layup',
             'row'	=> $this->BDP_Model->get_laporan_layup(),
             'agent' => $this->BDP_Model->get_laporan_agent()
         );
         $this->template->load('template','bdp/laporan_layup_view',$data);
     }


// MARKETING
    // Get Contract
    public function mkt_bdp_contract()
    {
        $data = array(
            'title' => 'Portal - Marketing BDP',
            'row'	=> $this->BDP_Model->get_mkt_contract(),
            // 'comp'  => $comp
        );
        $this->template->load('template','bdp/mkt/contract_view',$data);
    }

    // Get Quotation
    public function mkt_bdp_quotation()
    {
        $data = array(
            'title' => 'Portal - Marketing BDP',
            'row'	=> $this->BDP_Model->get_mkt_quotation(),
            // 'comp'  => $comp
        );
        $this->template->load('template','bdp/mkt/quotation_view',$data);
    }

}