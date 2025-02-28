<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak_Model extends CI_Model
{

    // Hitung total row
    public function get_contact_row()
    {
        $query = $this->db->get_where('');
    }

    // Get Kontak Personil
    public function get_data_kontak()
    {
        $this->db->select('*');
        $this->db->order_by('cp_name',"ASC");
        $data = $this->db->get('tb_contact_personil');
        return $data->result_array();
    }

}
