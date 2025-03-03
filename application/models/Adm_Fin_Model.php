<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adm_Fin_Model extends CI_Model
{
    private $db_ims_ga;

    public function __construct()
    {
        parent::__construct();
        $this->db_ims_ga = $this->load->database('IMS_GA',TRUE);
        $this->asset_ga = $this->load->database('asset_ga',TRUE);
    }
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

    //Get asset ATK dari tabel barang IMS
        public function get_Aset_Atk()
        {
            $this->db_ims_ga->select('*');
            $this->db_ims_ga->join('tbl_jenis', 'tbl_jenis.id_jenis=tbl_barang.jenis','left');
            $this->db_ims_ga->order_by('tbl_barang.id_barang',"ASC");
            $data = $this->db_ims_ga->get('tbl_barang');
            
            return $data->result_array();
        }

            //Get Kendaraan GA dari tb_kendaraan_ga
        public function getAsetDetail()
        {
            $this->db->select('*');
            $this->db->order_by('tb_kendaraan_ga.id_kendaraan',"ASC");
            $data = $this->db->get('tb_kendaraan_ga');
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