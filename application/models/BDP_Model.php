<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BDP_Model extends CI_Model
{

    // Get Laporan Laba Rugi
    public function get_Laporan_LabaRugi($comp)
    {

        $this->db->select('*');
        $this->db->where('acc_rep_group',"LR");
        $this->db->where('acc_rep_company',$comp);
        $data = $this->db->get('tb_accountancy_report');
        return $data->result_array();
    }

}
