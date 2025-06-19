<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BDP_Model extends CI_Model
{

    // Get Job Desc
    public function get_jobdesc_bdp()
    {
        $this->db->select('*');
        $this->db->from('tb_jobdesc');
        $this->db->join('tb_contact_personil','tb_contact_personil.cp_email=tb_jobdesc.pic_email',"LEFT");
        $this->db->where('jobdesc_unit',"BDP");
        $data = $this->db->get();
        return $data->result_array();
    }

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

// MARKETING
    // Get Contract
    public function get_mkt_contract()
    {
        $this->db->select('*');
        $this->db->where('contract_owner_group',"BDP");
        $this->db->order_by('contract_seq',"DESC");
        $data = $this->db->get('tb_contract');
        return $data->result_array();
    }

    // Get Quotation
    public function get_mkt_quotation()
    {
        $this->db->select('*');
        $this->db->where('quote_owner_group',"BDP");
        $this->db->join('tb_company','tb_quotation.quote_owner=tb_company.company_code','LEFT');
        $this->db->order_by('quote_seq',"DESC");
        $data = $this->db->get('tb_quotation');
        return $data->result_array();
    }

}
