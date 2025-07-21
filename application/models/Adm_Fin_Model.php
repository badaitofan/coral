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

    // Get Job Desc
        public function get_jobdesc_keu()
        {
            $this->db->select('*');
            $this->db->from('tb_jobdesc');
            $this->db->join('tb_contact_personil','tb_contact_personil.cp_email=tb_jobdesc.pic_email',"LEFT");
            $this->db->where('jobdesc_unit',"KEU");
            $data = $this->db->get();
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

    // Get Laporan Laba Rugi
    public function get_Laporan_LabaRugi($comp)
    {

        $this->db->select('*');
        $this->db->where('acc_rep_group',"LR");
        $this->db->where('acc_rep_company',$comp);
        $data = $this->db->get('tb_accountancy_report');
        return $data->result_array();
    }

    // Get Laporan Audit Internal
    public function get_Laporan_Audit_Internal()
    {

        $this->db->select('*');
        $this->db->where('acc_rep_group',"LAI");
        // $this->db->where('acc_rep_company',$comp);
        $data = $this->db->get('tb_accountancy_report');
        return $data->result_array();
    }

    // Get Job Desc
    public function get_jobdesc_acct()
    {
        $this->db->select('*');
        $this->db->from('tb_jobdesc');
        $this->db->join('tb_contact_personil','tb_contact_personil.cp_email=tb_jobdesc.pic_email',"LEFT");
        $this->db->where('jobdesc_unit',"ACCT");
        $data = $this->db->get();
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

     // Get Job Desc
        public function get_jobdesc_ga()
        {
            $this->db->select('*');
            $this->db->from('tb_jobdesc');
            $this->db->join('tb_contact_personil','tb_contact_personil.cp_email=tb_jobdesc.pic_email',"LEFT");
            $this->db->where('jobdesc_unit',"GA");
            $data = $this->db->get();
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


          //Get data Trailer GA dari tb_trailer_ga
          public function getAsetTrailerDetail()
          {
              $this->db->select('*');
              $this->db->order_by('tb_trailer_ga.id_trailer',"ASC");
              $data = $this->db->get('tb_trailer_ga');
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

        // Get Job Desc
        public function get_jobdesc_purchasing()
        {
            $this->db->select('*');
            $this->db->from('tb_jobdesc');
            $this->db->join('tb_contact_personil','tb_contact_personil.cp_email=tb_jobdesc.pic_email',"LEFT");
            $this->db->where('jobdesc_unit',"PURCHASING");
            $data = $this->db->get();
            return $data->result_array();
        }

        // Get Data Vendor
        public function getDataVendorDetail()
        {
            $this->db->select('*');
            $this->db->order_by('tb_vendor_purchasing.id_vendor',"ASC");
            $data = $this->db->get('tb_vendor_purchasing');
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

    // Get Data Pelamar
        public function get_Peraturan_Perusahaan_HRD()
        {
            $this->db->select('*');
            $this->db->order_by('pperusahaan_seq',"ASC");
            $data = $this->db->get('tb_pperusahaan_hrd');
            return $data->result_array();
        }
    
        // Get Data Pelamar
        public function get_Pelamar_HRD()
        {
            $this->db->select('*');
            $this->db->order_by('pelamar_seq',"ASC");
            $data = $this->db->get('tb_pelamar_hrd');
            return $data->result_array();
        }

        // Get data Jobdesc HRD
        public function get_jobdesc_hrd()
        {
            $this->db->select('*');
            $this->db->from('tb_jobdesc');
            $this->db->join('tb_contact_personil','tb_contact_personil.cp_email=tb_jobdesc.pic_email',"LEFT");
            $this->db->where('jobdesc_unit',"HRD");
            $data = $this->db->get();
            return $data->result_array();
        }

    #=== .END GENERAL HRD FUNCTIONS ===
}