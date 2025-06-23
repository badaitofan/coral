<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita_Model extends CI_Model
{
    // get User to check data
    // public function login($uname, $upass)
    // {
    //     $this->db->select('*');
    //     $this->db->from('tb_user_auth');
    //     $this->db->where('user_name', $uname);
    //     $this->db->where('user_pass', sha1($upass));
    //     // $this->db->where('status !=', 'NONAKTIF');
    //     $query = $this->db->get();
    //     return $query;
    // }

    //fungsi untuk cetak session
    public function get_News()
    {
        $this->db->select('*');
        $this->db->order_by('news_date',"DESC");
        $this->db->where('news_status',"publish");
        $this->db->limit(5);
        $data = $this->db->get('tb_news');
        return $data->result_array();;
    }
}
