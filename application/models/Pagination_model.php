<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination_model extends CI_Model
{
	public function __construct() {
		parent::__construct(); 
	}

    // Query Get Data and Search Article
	public function get_result_article($rowno, $rowperpage, $search="")
	{
		$this->db->select('a.*, b.category_name as category_name');
        $this->db->from('tbl_blog as a');
        $this->db->join('tbl_category as b', 'b.id_category = a.id_category');
        $this->db->order_by('id_article', 'DESC');

		if($search != ''){
        	$this->db->like('title_article', $search);
        }

        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_article($search = '')
	{
    	$this->db->select('count(*) as allcount');
        $this->db->from('tbl_blog as a');
        $this->db->join('tbl_category as b', 'b.id_category = a.id_category');
        $this->db->order_by('id_article', 'DESC');
      
      	if($search != ''){
       		$this->db->like('title_article', $search);
      	}

      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
	}
	
	// Query Get Data and Search Blog
	public function get_result_blog($rowno, $rowperpage, $search="")
	{
		$this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('article_active = 1');
        $this->db->order_by('id_article', 'DESC');

		if($search != ''){
        	$this->db->like('title_article', $search);
        }

        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_blog($search = '')
	{
    	$this->db->select('count(*) as allcount');
        $this->db->from('tbl_blog');
        $this->db->where('article_active = 1');
        $this->db->order_by('id_article', 'DESC');

		if($search != ''){
        	$this->db->like('title_article', $search);
        }

      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
	}
	
	// Query Get Data and Search Blog
	public function get_result_portofolio($rowno, $rowperpage, $search="")
	{
		$this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('project_active = 1');
        $this->db->order_by('id_project', 'DESC');

		if($search != ''){
        	$this->db->like('project_name', $search);
        }

        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_portofolio($search = '')
	{
    	$this->db->select('count(*) as allcount');
        $this->db->from('tbl_project');
        $this->db->where('project_active = 1');
        $this->db->order_by('id_project', 'DESC');

		if($search != ''){
        	$this->db->like('project_name', $search);
        }

      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }

    // Query Get Data and Search Project
	public function get_result_project($rowno, $rowperpage, $search="")
	{
		$this->db->select('a.*, b.category_name as category_name');
        $this->db->from('tbl_project as a');
        $this->db->join('tbl_category as b', 'b.id_category = a.id_category');
        $this->db->order_by('id_project', 'DESC');

		if($search != ''){
        	$this->db->like('project_name', $search);
        }

        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_project($search = '')
	{
    	$this->db->select('count(*) as allcount');
        $this->db->from('tbl_project as a');
        $this->db->join('tbl_category as b', 'b.id_category = a.id_category');
        $this->db->order_by('id_project', 'DESC');
      
      	if($search != ''){
       		$this->db->like('project_name', $search);
      	}

      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }

    // Query Get Data and Search Feature
	public function get_result_feature($rowno, $rowperpage, $search="")
	{
		$this->db->select('*');
        $this->db->from('tbl_feature');
        $this->db->order_by('id_feature', 'DESC');

		if($search != ''){
        	$this->db->like('feature_name', $search);
        }

        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_feature($search = '')
	{
    	$this->db->select('count(*) as allcount');
        $this->db->from('tbl_feature');
        $this->db->order_by('id_feature', 'DESC');
      
      	if($search != ''){
       		$this->db->like('feature_name', $search);
      	}

      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }

    // Query Get Data and Search Category
	public function get_result_category($rowno, $rowperpage, $search="")
	{
		$this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->order_by('id_category', 'DESC');

		if($search != ''){
        	$this->db->like('category_name', $search);
        }

        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_category($search = '')
	{
    	$this->db->select('count(*) as allcount');
        $this->db->from('tbl_category');
        $this->db->order_by('id_category', 'DESC');
      
      	if($search != ''){
       		$this->db->like('category_name', $search);
      	}

      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }

    // Query Get Data and Search Category
	public function get_result_skill($rowno, $rowperpage, $search="")
	{
		$this->db->select('*');
        $this->db->from('tbl_skill');
        $this->db->order_by('id_skill', 'DESC');

		if($search != ''){
        	$this->db->like('skill_name', $search);
        }

        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_skill($search = '')
	{
    	$this->db->select('count(*) as allcount');
        $this->db->from('tbl_skill');
        $this->db->order_by('id_skill', 'DESC');
      
      	if($search != ''){
       		$this->db->like('skill_name', $search);
      	}

      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }

    // Query Get Data and Search Files
	public function get_result_files($rowno, $rowperpage, $search="")
	{
		$this->db->select('*');
        $this->db->from('tbl_files');
        $this->db->order_by('id_file', 'DESC');

		if($search != ''){
        	$this->db->like('file_name', $search);
        }

        $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_files($search = '')
	{
    	$this->db->select('count(*) as allcount');
        $this->db->from('tbl_files');
        $this->db->order_by('id_file', 'DESC');
      
      	if($search != ''){
       		$this->db->like('file_name', $search);
      	}

      	$query = $this->db->get();
      	$result = $query->result_array();
      
      	return $result[0]['allcount'];
    }

  // Query Get Data and Search Message
	public function get_result_message($rowno, $rowperpage, $search="")
	{
		$this->db->select('*');
    $this->db->from('tbl_message');
    $this->db->order_by('status_read', 'ASC');

		if($search != ''){
    	$this->db->like('guest_name', $search);
    	$this->db->or_like('email', $search);
    }

    $this->db->limit($rowperpage, $rowno);  
		$query = $this->db->get();
       	
		return $query->result_array();
	}

	public function get_message($search = '')
	{
  	$this->db->select('count(*) as allcount');
    $this->db->from('tbl_message');
    $this->db->order_by('status_read', 'ASC');
  
  	if($search != ''){
   		$this->db->like('guest_name', $search);
   		$this->db->or_like('email', $search);
  	}

  	$query = $this->db->get();
  	$result = $query->result_array();
  
  	return $result[0]['allcount'];
  }

  // Query Get Data and Search Visitor
  public function get_result_visitors($rowno, $rowperpage, $search="")
  {
    $this->db->select('*');
    $this->db->from('tbl_visitor');
    $this->db->order_by('id_visitor', 'DESC');

    if($search != ''){
      $this->db->like('ip_address', $search);
      $this->db->or_like('onpage', $search);
    }

    $this->db->limit($rowperpage, $rowno);  
    $query = $this->db->get();
        
    return $query->result_array();
  }

  public function get_visitors($search = '')
  {
    $this->db->select('count(*) as allcount');
    $this->db->from('tbl_visitor');
    $this->db->order_by('id_visitor', 'DESC');

    if($search != ''){
      $this->db->like('ip_address', $search);
      $this->db->or_like('onpage', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
  
    return $result[0]['allcount'];
  }

}