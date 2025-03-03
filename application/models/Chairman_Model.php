<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Chairman_Model extends CI_Model
{
    // Penamaan DB selain Database Utama
    // Datbase Helpdesk
    private $db_helpdesk;
    private $db_assets;

    public function __construct()
    {
        parent::__construct();
        $this->db_helpdesk = $this->load->database('helpdesk',TRUE);
        $this->db_assets = $this->load->database('asset_ict',TRUE);
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

    // Get Personil ICT Member
    public function get_Personil_ICT()
    {
        $this->db->select('*');
        $this->db->where('personil_group',"ICT");
        $this->db->where('personil_email !=',"null");
        $this->db->order_by('personil_code',"ASC");
        $data = $this->db->get('tb_personil');
        return $data->result_array();
    }

    // Get data Helpdesk from database server 10.10.10.23
    // Aplication Asset BMG - ICT
    public function get_asset_ict()
    {
        $this->db_assets->select('*');
        $this->db_assets->from('asets');
        $this->db_assets->join('barang','barang.id_barang=asets.id_barang','LEFT');
        $this->db_assets->join('kategori_barang','kategori_barang.id_kategori=barang.id_kategori','LEFT');
        $this->db_assets->join('lokasi_aset','lokasi_aset.id_lokasi=asets.id_lokasi','LEFT');
        $this->db_assets->join('users','users.id_user=asets.id_user','LEFT');
        $this->db_assets->join('dept','dept.id_dept=asets.id_dept','LEFT');
        $this->db_assets->order_by('users.nama_user',"ASC");
        $data = $this->db_assets->get();
        return $data->result_array();
    }

    // LEGAL
    // Get Personil Legal Member
    public function get_Personil_Legal()
    {
        $this->db->select('*');
        $this->db->where('personil_group',"LEGAL");
        $this->db->where('personil_email !=',"null");
        $this->db->order_by('personil_code',"ASC");
        $data = $this->db->get('tb_personil');
        return $data->result_array();
    }
    
    #==== QHSE ====
    // Get Personil QHSE Member
    public function get_Personil_QHSE()
    {
        $this->db->select('*');
        $this->db->where('personil_group',"QHSE");
        $this->db->where('personil_email !=',"null");
        $this->db->order_by('personil_code',"ASC");
        $data = $this->db->get('tb_personil');
        return $data->result_array();
    }

    #==== Secretary ====
        // Get Personil Secretary Member
        public function get_Personil_Secretary()
        {
            $this->db->select('*');
            $this->db->where('personil_group',"SECRETARY");
            $this->db->where('personil_email !=',"null");
            $this->db->order_by('personil_code',"ASC");
            $data = $this->db->get('tb_personil');
            return $data->result_array();
        }

        // Get Document Permit
        public function get_Doc_Permit()
        {
            $this->db->select('*');
            $this->db->from('tb_document_permit');
            $this->db->join('tb_company','tb_company.company_code=tb_document_permit.permit_company_code',"LEFT");
            $this->db->order_by('permit_seq',"ASC");
            $data = $this->db->get();
            return $data->result_array();
        }


    #==== .END Secretary ====
}
