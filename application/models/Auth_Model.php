<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_Model extends CI_Model
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
    public function get($user_email = null)
    {
        $this->db->select('*');
        $this->db->from('tb_user_auth');
        if ($user_email != null) {
            $this->db->where('auth_email', $user_email);
        }
        $query = $this->db->get();
        return $query;
    }
}
