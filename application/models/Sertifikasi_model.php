<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikasi_model extends CI_Model
{
    //hitung total data blog
    public function get_skemasertifikasi(){
      $query = $this->db->get('tbl_skemasertifikasi');
      return $query->result_array();
    }

    //hitung total data project
    public function get_project()
    {
        $sql = "SELECT count(id_project) as id FROM tbl_project";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    //hitung total data feature
    public function get_feature()
    {
        $sql = "SELECT count(id_feature) as id FROM tbl_feature";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    //hitung total data category
    public function get_category()
    {
        $sql = "SELECT count(id_category) as id FROM tbl_category";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    //hitung total data skill
    public function get_skill()
    {
        $sql = "SELECT count(id_skill) as id FROM tbl_skill";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    //hitung total data file
    public function get_file()
    {
        $sql = "SELECT count(id_file) as id FROM tbl_files";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    //hitung total data message
    public function get_message()
    {
        $sql = "SELECT count(id_message) as id FROM tbl_message";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    //hitung total data visitor
    public function get_visitor()
    {
        $date = date('Y-m-d');
        $sql = "SELECT count(id_visitor) as id FROM tbl_visitor WHERE created_at = '$date'";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    // function blog()
	// {
	// 	$query = "SELECT a.*, b.category_name FROM tbl_blog AS a INNER JOIN tbl_category AS b ON a.id_category = b.id_category ORDER BY id_article DESC"; // Query untuk menampilkan semua data blog
	// 	$data['blog'] = $this->db->query($query)->result();

	// 	return $data;
	// }

    function blogtag()
	{
		$query = "SELECT * FROM tbl_category WHERE category = '1' and category_active = '1' ORDER BY id_category ASC"; // Query untuk menampilkan semua data tag create article
		$data['tag'] = $this->db->query($query)->result();

		return $data;
    }
    
    // function projects()
	// {
	// 	$query = "SELECT a.*, b.category_name FROM tbl_project AS a INNER JOIN tbl_category AS b ON a.id_category = b.id_category ORDER BY id_project DESC"; // Query untuk menampilkan semua data project
	// 	$data['projects'] = $this->db->query($query)->result();

	// 	return $data;
    // }

    function projecttag()
	{
		$query = "SELECT * FROM tbl_category WHERE category = '0' and category_active = '1' ORDER BY id_category ASC"; // Query untuk menampilkan semua data tag create project
		$data['tag'] = $this->db->query($query)->result();

		return $data;
    }
    
    // function feature()
	// {
	// 	$query = "SELECT * FROM tbl_feature ORDER BY id_feature DESC"; // Query untuk menampilkan semua data feature
	// 	$data['feature'] = $this->db->query($query)->result();

	// 	return $data;
    // }
    
    // function skills()
	// {
	// 	$query = "SELECT * FROM tbl_skill ORDER BY id_skill DESC"; // Query untuk menampilkan semua data skill
	// 	$data['skill'] = $this->db->query($query)->result();

	// 	return $data;
    // }
    
    // function category()
	// {
	// 	$query = "SELECT * FROM tbl_category ORDER BY id_category DESC"; // Query untuk menampilkan semua data category
	// 	$data['category'] = $this->db->query($query)->result();

	// 	return $data;
    // }
    
    // function files()
	// {
	// 	$query = "SELECT * FROM tbl_files ORDER BY id_file DESC"; // Query untuk menampilkan semua data files
	// 	$data['files'] = $this->db->query($query)->result();

	// 	return $data;
    // }
    
    // function messages()
	// {
	// 	$query = "SELECT * FROM tbl_message ORDER BY status_read ASC"; // Query untuk menampilkan semua data messages
	// 	$data['message'] = $this->db->query($query)->result();

	// 	return $data;
    // }
    
    //fungsi untuk menampilkan data message berdasarkan permalink
	function getmessage($permalink){ 
		$query = $this->db->query("SELECT * FROM tbl_message WHERE slug_message = '$permalink'");
		return $query;
    }

    //fungsi untuk menampilkan data article berdasarkan permalink
	function getarticle($permalink){ 
		$query = $this->db->query("SELECT a.*, b.category_name FROM tbl_blog AS a INNER JOIN tbl_category AS b ON a.id_category = b.id_category WHERE slug_article = '$permalink'");
		return $query;
    }
    
    function getproject($permalink){ 
		$query = $this->db->query("SELECT a.*, b.category_name FROM tbl_project AS a INNER JOIN tbl_category AS b ON a.id_category = b.id_category WHERE slug_project = '$permalink'");
		return $query;
    }

    //fungsi untuk menampilkan data file berdasarkan permalink
	function getfile($permalink){ 
		$query = $this->db->query("SELECT * FROM tbl_files WHERE slug_file = '$permalink'");
		return $query;
	}

    // get data visitor homepage
    public function getvisitor_homepage()
    {
        $sql = "SELECT count(id_visitor) as id FROM tbl_visitor WHERE onpage = 'Homepage'";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    // get data visitor blog
    public function getvisitor_blog()
    {
        $sql = "SELECT count(id_visitor) as id FROM tbl_visitor WHERE onpage = 'Blog'";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    // get data visitor projects
    public function getvisitor_projects()
    {
        $sql = "SELECT count(id_visitor) as id FROM tbl_visitor WHERE onpage = 'Projects'";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    // get data visitor contact
    public function getvisitor_contact()
    {
        $sql = "SELECT count(id_visitor) as id FROM tbl_visitor WHERE onpage = 'Contact'";
        $result = $this->db->query($sql);
        return $result->row()->id;
    }

    // get data total visitor
    public function get_totalvisitor()
    {
        $bulan = date('m');
        $sql = "SELECT count(id_visitor) as id FROM tbl_visitor WHERE MONTH(created_at) = '$bulan'";
        $result = $this->db->query($sql);
        return $result->row()->id;

    }
}