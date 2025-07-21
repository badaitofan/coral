<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_Model extends CI_Model
{

    // Get List Telp Extention

    public function get_Ext_List()
    {
        $this->db->select('*');
        $data = $this->db->get('tb_telp_ext');
        return $data->result_array();
    }

    // Get News 
    public function get_News()
    {
        $this->db->select('*');
        $this->db->order_by('news_date',"DESC");
        $this->db->where('news_status',"publish");
        $data = $this->db->get('tb_news');
        return $data->result_array();;
    }

    //fungsi untuk cetak session
    public function get($user_email = null)
    {
        $this->db->select('*');
        $this->db->from('tb_user_auth');
        if ($user_email != null) {
            $this->db->where('auth_email', $user_email);
        }
        $data = $this->db->get();
        return $data;
    }

    public function get_data_with_row_number() {
        $query = $this->db->query("SELECT * FROM tb_news"); // Perhatikan penggunaan array untuk parameter
    
        return $query->result_array();
    }
}
