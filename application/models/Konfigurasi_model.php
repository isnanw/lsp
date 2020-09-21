<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    // Konfigurasi User
    public function user()
    {
        $this->db->select('*');
        $this->db->from('tbl_users');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Konfigurasi Setting
    public function setting()
    {
        $this->db->select('*');
        $this->db->from('tbl_settings');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Konfigurasi About
    public function profile()
    {
        $this->db->select('*');
        $this->db->from('tbl_profile');
        $query = $this->db->get();
        return $query->row_array();
    }

    // Konfigurasi Visi Misi
    public function visiMisi()
    {
        $this->db->select('*');
        $this->db->from('tbl_visimisi');
        $query = $this->db->get();
        return $query->row_array();
    }

     // Konfigurasi Organisasi
    public function organisasi()
    {
        $this->db->select('*');
        $this->db->from('tbl_organisasi');
        $query = $this->db->get();
        return $query->row_array();
    }

}
