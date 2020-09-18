<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		//load model website
        $this->load->model('website_model');
    }

	public function index()
	{
		$data = konfigurasi('');
		$tanggal = date('Y-m-d');

		$data['blog'] = $this->website_model->homeblog();
		$data['blog2'] = $this->website_model->homeblog2();
		$data['project'] = $this->website_model->homeproject();

		$this->load->view('homepage',$data);
	}

	public function projects($rowno=0)
	{
		//load model pagination
		$this->load->model('pagination_model');
		//load library pagination
		$this->load->library('pagination');

		$data = konfigurasi('Projects');
		// $data['projects'] = $this->website_model->projects();
		// $data['tag'] = $this->website_model->projecttag();

		// Search text
		$search_text = "";
		if($this->input->post('submit') != NULL ){
			$search_text = $this->input->post('search');
			$this->session->set_userdata(array("search"=>$search_text));
		} else {
			if($this->session->userdata('search') != NULL){
				$search_text = $this->session->userdata('search');
			}
		}

		// Row per page
		$rowperpage = 6;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
		
		// All records count
		$allcount = $this->pagination_model->get_portofolio($search_text);

		// Get  records
		$users_record = $this->pagination_model->get_result_portofolio($rowno, $rowperpage, $search_text);
		
		// Pagination Configuration
		$config['base_url'] = base_url('projects');
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		
		// Style Pagination
		// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
		$config['full_tag_open']   = '<div class="clearfix"><ul class="pagination">';
		$config['full_tag_close']  = '</ul></ul>';
		
		$config['first_link']      = 'First'; 
		$config['first_tag_open']  = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		
		$config['last_link']       = 'Last'; 
		$config['last_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';
		
		$config['next_link']       = '&raquo;'; 
		$config['next_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '</span></li>';
		
		$config['prev_link']       = '&laquo;'; 
		$config['prev_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		
		$config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']   = '<span class="sr-only">(current)</span></span></li>';
		
		$config['num_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']   = '</span></li>';
		// End style pagination

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['search'] = $search_text;

	    //load view project
		$this->load->view('project',$data);
	}

	public function detailproject($permalink)
    {
        $data = konfigurasi('Projects');
		$query = $this->website_model->getprojectlink($permalink);
        // validasi jika data ditemukan
        if ($query->num_rows() > 0){
            $data['projects']= $query;

            // insert ip to database per day
			$user_ip = $_SERVER['REMOTE_ADDR'];
			$tanggal = date('Y-m-d');
			$page = "Projects";

            // load view
			$this->load->view('view_project', $data);
		} else {
			//jika data tidak ditemukan
			$this->load->view('404');
		}
    }

	public function blog($rowno=0)
	{
		//load model pagination
		$this->load->model('pagination_model');
		//load library pagination
		$this->load->library('pagination');

		$data = konfigurasi('Blog');
		// $data['blog'] = $this->website_model->blog();
		$data['pinned'] = $this->website_model->blogpin();

		// Search text
		$search_text = "";
		if($this->input->post('submit') != NULL ){
			$search_text = $this->input->post('search');
			$this->session->set_userdata(array("search"=>$search_text));
		} else {
			if($this->session->userdata('search') != NULL){
				$search_text = $this->session->userdata('search');
			}
		}

		// Row per page
		$rowperpage = 6;

		// Row position
		if($rowno != 0){
			$rowno = ($rowno-1) * $rowperpage;
		}
		
		// All records count
		$allcount = $this->pagination_model->get_blog($search_text);

		// Get  records
		$users_record = $this->pagination_model->get_result_blog($rowno, $rowperpage, $search_text);
		
		// Pagination Configuration
		$config['base_url'] = base_url('blog');
		$config['use_page_numbers'] = TRUE;
		$config['total_rows'] = $allcount;
		$config['per_page'] = $rowperpage;
		
		// Style Pagination
		// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
		$config['full_tag_open']   = '<div class="clearfix"><ul class="pagination">';
		$config['full_tag_close']  = '</ul></ul>';
		
		$config['first_link']      = 'First'; 
		$config['first_tag_open']  = '<li class="page-item"><span class="page-link">';
		$config['first_tag_close'] = '</span></li>';
		
		$config['last_link']       = 'Last'; 
		$config['last_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['last_tag_close']  = '</span></li>';
		
		$config['next_link']       = '&raquo;'; 
		$config['next_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['next_tag_close']  = '</span></li>';
		
		$config['prev_link']       = '&laquo;'; 
		$config['prev_tag_open']   = '<li class="page-item"><span class="page-link">';
		$config['prev_tag_close']  = '</span></li>';
		
		$config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']   = '<span class="sr-only">(current)</span></span></li>';
		
		$config['num_tag_open']    = '<li class="page-item"><span class="page-link">';
		$config['num_tag_close']   = '</span></li>';
		// End style pagination

		// Initialize
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['result'] = $users_record;
		$data['row'] = $rowno;
		$data['search'] = $search_text;

		// insert ip to database per day
		$user_ip = $_SERVER['REMOTE_ADDR'];
		$tanggal = date('Y-m-d');
		$page = "Blog";

	    //load view project
	    $this->load->view('blog',$data);
	}

	public function detailpost($permalink)
    {
        $data = konfigurasi('');

		$query = $this->website_model->getpostlink($permalink);
        // validasi jika data ditemukan
        if ($query->num_rows() > 0){
            $data['blog']= $query;

            // insert ip to database per day
			$user_ip = $_SERVER['REMOTE_ADDR'];
			$tanggal = date('Y-m-d');
			$page = "Blog";

            // load view
			$this->load->view('view_post', $data);
		} else {
			//jika data tidak ditemukan
			$this->load->view('404');
		}
    }

}
