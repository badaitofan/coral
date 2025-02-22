<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chairman_Model extends CI_Model
{
    // Penamaan DB selain Database Utama
    // Datbase Helpdesk
    private $db_helpdesk;

    public function __construct()
    {
        parent::__construct();
        $this->db_helpdesk = $this->load->database('helpdesk',TRUE);
    }

    // Get data Helpdesk from database server 31.220.22.191
    // Aplication ICT HElpdesk
    public function get_helpdesc(){
        $period = gmdate("Y-m", time() + 60 * 60 * 7);
        $this->db_helpdesk->select('*');
        $this->db_helpdesk->from('tb_helpdesk');
        $this->db_helpdesk->like('input_tgl',$period);
        $this->db_helpdesk->where('jenis_komplain',"TS");
        $this->db_helpdesk->order_by('input_tgl',"DESC");

        $data = $this->db_helpdesk->get();
        return $data->result_array();
    }

    // Get data Jobdesc ICT

    public function get_jobdesc_ict()
    {
        $this->db->select('*');
        $this->db->where('jobdesc_unit',"ICT");
        $data = $this->db->get('tb_jobdesc');
        return $data->result_array();
    }
}
