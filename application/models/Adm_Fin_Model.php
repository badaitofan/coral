<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adm_Fin_Model extends CI_Model
{
    #=== KEUANGAN FUNCTIONS ===
    // Get Personil Member Keuangan
        public function get_Personil_Keuangan()
        {
            $this->db->select('*');
            $this->db->where('personil_group',"KEUANGAN");
            $this->db->or_where('personil_group',"INVOICING");
            $this->db->where('personil_email !=',"null");
            // $this->db->group_by('personil_email');
            $this->db->order_by('personil_seq',"ASC");
            $data = $this->db->get('tb_personil');
            return $data->result_array();
        }
    #=== .END KEUANGAN FUNCTIONS ===

    #=== ACCOUNTING FUNCTIONS ===
    // Get Personil Member Keuangan
        public function get_Personil_Accounting()
        {
            $this->db->select('*');
            $this->db->where('personil_group',"ACCOUNTING");
            // $this->db->or_where('personil_group',"INVOICING");
            $this->db->where('personil_email !=',"null");
            // $this->db->group_by('personil_email');
            $this->db->order_by('personil_seq',"ASC");
            $data = $this->db->get('tb_personil');
            return $data->result_array();
        }
    #=== .END ACCOUNTING FUNCTIONS ===

    #=== GENERAL AFFAIR FUNCTIONS ===
    // Get Personil Member Keuangan
        public function get_Personil_GA()
        {
            $this->db->select('*');
            $this->db->where('personil_group',"GA");
            $this->db->where('personil_email !=',"null");
            $this->db->order_by('personil_seq',"ASC");
            $data = $this->db->get('tb_personil');
            return $data->result_array();
        }
    #=== .END GENERAL AFFAIR FUNCTIONS ===

    #=== GENERAL PURCHASING FUNCTIONS ===
    // Get Personil Member Keuangan
        public function get_Personil_Purchasing()
        {
            $this->db->select('*');
            $this->db->where('personil_group',"PURCHASING");
            $this->db->where('personil_email !=',"null");
            $this->db->order_by('personil_seq',"ASC");
            $data = $this->db->get('tb_personil');
            return $data->result_array();
        }
    #=== .END GENERAL PURCHASING FUNCTIONS ===

    #=== GENERAL HRD FUNCTIONS ===
    // Get Personil Member Keuangan
        public function get_Personil_HRD()
        {
            $this->db->select('*');
            $this->db->where('personil_group',"HR");
            $this->db->where('personil_email !=',"null");
            $this->db->order_by('personil_seq',"ASC");
            $data = $this->db->get('tb_personil');
            return $data->result_array();
        }
    #=== .END GENERAL HRD FUNCTIONS ===
}