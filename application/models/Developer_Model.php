<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Developer_Model extends CI_Model
{

    // Hitung total row
    public function get_contact_row()
    {
        $query = $this->db->get_where('');
    }

    // Get Kontak Personil
    public function get_Team()
    {
        $this->db->select('*');
        $this->db->from('tb_personil');
        $this->db->join('tb_contact_personil','tb_contact_personil.cp_email=tb_personil.personil_email',"LEFT");
        $this->db->where('personil_group',"ICT");
        $this->db->order_by('personil_code',"ASC");
        $data = $this->db->get();
        return $data->result_array();
    }

}
