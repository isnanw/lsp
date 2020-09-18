<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website_model extends CI_Model
{

	function homeblog()
	{
		$query = "SELECT * FROM tbl_blog WHERE article_active = '1' ORDER BY id_article DESC LIMIT 1"; // Query untuk menampilkan semua data project
		$data['blog'] = $this->db->query($query)->result();

		return $data;
	}

	function homeblog2()
	{
		$query = "SELECT * FROM tbl_blog WHERE article_active = '1' ORDER BY id_article DESC LIMIT 0,6"; // Query untuk menampilkan semua data project
		$data['blog2'] = $this->db->query($query)->result();

		return $data;
	}

	function homeproject()
	{
		$query = "SELECT a.*, b.category_name FROM tbl_project AS a INNER JOIN tbl_category AS b ON a.id_category = b.id_category WHERE project_active = '1' ORDER BY id_project DESC LIMIT 0,3"; // Query untuk menampilkan semua data project
		$data['project'] = $this->db->query($query)->result();

		return $data;
	}

	function projects()
	{
		$query = "SELECT a.*, b.category_name FROM tbl_project AS a INNER JOIN tbl_category AS b ON a.id_category = b.id_category WHERE project_active = '1' ORDER BY id_project DESC"; // Query untuk menampilkan semua data project
		$data['projects'] = $this->db->query($query)->result();

		return $data;
	}

	function projecttag()
	{
		$query = "SELECT * FROM tbl_category WHERE category = '0' and category_active = '1' ORDER BY id_category DESC"; // Query untuk menampilkan semua data project
		$data['tag'] = $this->db->query($query)->result();

		return $data;
	}

	//fungsi untuk menampilkan data project berdasarkan permalink
	function getprojectlink($permalink)
	{ 
		$query = $this->db->query("SELECT * FROM tbl_project WHERE slug_project = '$permalink' and project_active = '1'");
		return $query;
	}

	// function blog()
	// {
	// 	$query = "SELECT * FROM tbl_blog WHERE article_active = '1' ORDER BY id_article DESC"; // Query untuk menampilkan semua data blog
	// 	$data['blog'] = $this->db->query($query)->result();

	// 	return $data;
	// }

	function blogpin()
	{
		$query = "SELECT * FROM tbl_blog WHERE article_active = '1' and featured = '1' ORDER BY id_article DESC LIMIT 0,1"; // Query untuk menampilkan semua data blog
		$data['pinned'] = $this->db->query($query)->result();

		return $data;
	}

	//fungsi untuk menampilkan data blog berdasarkan permalink
	function getpostlink($permalink)
	{ 
		$query = $this->db->query("SELECT a.*, b.category_name FROM tbl_blog AS a INNER JOIN tbl_category AS b ON a.id_category = b.id_category  WHERE slug_article = '$permalink' and article_active = '1'");
		return $query;
	}
}