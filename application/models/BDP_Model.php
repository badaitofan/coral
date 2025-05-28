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

    // Get Laporan Layup
    public function get_laporan_layup()
    {
        $this->db->select('*');
        $this->db->order_by('act_id','ASC');
        $data = $this->db->get('tb_vessel_layup');
        return $data->result_array();
    }

    public function get_laporan_agent()
    {
        $this->db->select('agent_name');
        $this->db->group_by('agent_name');
        // $this->db->order_by('agent_name',"ASC");
        $data = $this->db->get('tb_vessel_layup');
        return $data->result_array();
    }

}
