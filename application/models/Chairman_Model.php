<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chairman_Model extends CI_Model
{
    // Penamaan DB selain Database Utama
    // Datbase Helpdesk
    private $db_helpdesc;

    public function __construct()
    {
        parent::__construct();
        $this->db_helpdesc = $this->load->database('helpdesk',TRUE);
    }
    public function get_helpdesc(){
        $period = gmdate("Y-m", time() + 60 * 60 * 7);
        $this->db_helpdesc->select('*');
        $this->db_helpdesc->from('tb_helpdesk');
        $this->db_helpdesc->like('input_tgl',$period);
        $this->db_helpdesc->where('jenis_komplain',"TS");
        $this->db_helpdesc->order_by('input_tgl',"DESC");

        $data = $this->db_helpdesc->get();
        return $data->result_array();


    }
}
