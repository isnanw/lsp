<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			//load model dashboard
			$this->load->model('dashboard_model');
			//load model pagination
			$this->load->model('pagination_model');
			//load library pagination
			$this->load->library('pagination');
			//load model auth
			$this->load->model('auth_model');
	}

	public function index()
	{
		if($this->auth_model->logged_id())
		{
			$data = konfigurasi('Dashboard');
			$data['blog'] = $this->dashboard_model->get_blog();
			$data['project'] = $this->dashboard_model->get_project();
			$data['category'] = $this->dashboard_model->get_category();

			$this->load->view('admin/dashboard',$data);
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	//Upload image summernote article
	function upload_image_post_article(){
		if($this->auth_model->logged_id())
		{
			// load library upload
			$this->load->library('upload');

			if(isset($_FILES["image"]["name"])){
				$config['upload_path'] = './assets/images/post/articles/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('image')){
					$this->upload->display_errors();
					return FALSE;
				} else {
					$data = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/images/post/articles/'.$data['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= TRUE;
					$config['quality']= '60%';
					$config['width']= 800;
					$config['height']= 800;
					$config['new_image']= './assets/images/post/articles/'.$data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					echo base_url().'assets/images/post/articles/'.$data['file_name'];
				}
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	//Delete image summernote article
	function delete_image_post_article(){
		if($this->auth_model->logged_id())
		{
			$src = $this->input->post('src');
			$file_name = str_replace(base_url(), '', $src);

			if(unlink("assets/images/post/articles/".$file_name)){
				echo 'File Delete Successfully';
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	//Upload image summernote project
	function upload_image_post_project(){
		if($this->auth_model->logged_id())
		{
			// load library upload
			$this->load->library('upload');

			if(isset($_FILES["image"]["name"])){
				$config['upload_path'] = './assets/images/post/projects/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif';
				$this->upload->initialize($config);
				if(!$this->upload->do_upload('image')){
					$this->upload->display_errors();
					return FALSE;
				} else {
					$data = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/images/post/projects/'.$data['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= TRUE;
					$config['quality']= '60%';
					$config['width']= 800;
					$config['height']= 800;
					$config['new_image']= './assets/images/post/projects/'.$data['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					echo base_url().'assets/images/post/projects/'.$data['file_name'];
				}
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	//Delete image summernote project
	function delete_image_post_project(){
		if($this->auth_model->logged_id())
		{
			$src = $this->input->post('src');
			$file_name = str_replace(base_url(), '', $src);

			if(unlink("assets/images/post/projects/".$file_name)){
				echo 'File Delete Successfully';
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function articles($rowno=0)
	{	
		if($this->auth_model->logged_id())
		{
			$data = konfigurasi('Articles');
			// $data['blog'] = $this->dashboard_model->blog();

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
			$rowperpage = 5;

			// Row position
			if($rowno != 0){
				$rowno = ($rowno-1) * $rowperpage;
			}
			
			// All records count
			$allcount = $this->pagination_model->get_article($search_text);

			// Get  records
			$users_record = $this->pagination_model->get_result_article($rowno, $rowperpage, $search_text);
			
			// Pagination Configuration
			$config['base_url'] = base_url('dashboard/articles');
			$config['use_page_numbers'] = TRUE;
			$config['total_rows'] = $allcount;
			$config['per_page'] = $rowperpage;
			
			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
			$config['full_tag_open']   = '<div class="clearfix"><ul class="pagination pagination-md no-margin pull-left">';
			$config['full_tag_close']  = '</ul></div>';
			
			$config['first_link']      = 'First'; 
			$config['first_tag_open']  = '<li>';
			$config['first_tag_close'] = '</li>';
			
			$config['last_link']       = 'Last'; 
			$config['last_tag_open']   = '<li>';
			$config['last_tag_close']  = '</li>';
			
			$config['next_link']       = '&raquo;'; 
			$config['next_tag_open']   = '<li>';
			$config['next_tag_close']  = '</li>';
			
			$config['prev_link']       = '&laquo;'; 
			$config['prev_tag_open']   = '<li>';
			$config['prev_tag_close']  = '</li>';
			
			$config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']   = '<span class="sr-only">(current)</span></span></li>';
			
			$config['num_tag_open']    = '<li>';
			$config['num_tag_close']   = '</li>';
			// End style pagination

			// Initialize
			$this->pagination->initialize($config);

			$data['pagination'] = $this->pagination->create_links();
			$data['result'] = $users_record;
			$data['row'] = $rowno;
			$data['search'] = $search_text;

			$this->load->view('admin/crud/articles',$data);
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function create_article()
	{
		if($this->auth_model->logged_id())
		{
			$data = konfigurasi('Article');
			$data['tag'] = $this->dashboard_model->blogtag();

			$this->load->view('admin/create/articles',$data);
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function save_blog()
	{
		if($this->auth_model->logged_id())
		{
			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('isi', 'Isi', 'trim|required');

			$config['upload_path']          = './assets/images/blog';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2024;
			$config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar') and $this->form_validation->run() == TRUE) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');
				$fitur = '0';

				// Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $this->input->post('judul')); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug = $pre_slug; // tambahkan ektensi .html pada slug

				$data = array(
					'title_article' => $this->input->post('judul'),
					'slug_article' => $slug,
					'id_category' => $this->input->post('kategori'),
					'thumb_article' => $_data['upload_data']['file_name'],
					'content_article' => $this->input->post('isi'),
					'featured' => $fitur,
					'article_active' => $this->input->post('status'),
					'created_at' => $tanggal,
					'updated_at' => $tanggal,
				);
				$this->db->insert('tbl_blog',$data);
				$this->session->set_flashdata('sukses',"Article successfully published");
				redirect('dashboard/articles.html');
			} elseif (!$this->upload->do_upload('gambar') and $this->form_validation->run() == TRUE) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');
				$fitur = '0';

				// Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $this->input->post('judul')); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug = $pre_slug; // tambahkan ektensi .html pada slug

				$data = array(
					'title_article' => $this->input->post('judul'),
					'slug_article' => $slug,
					'id_category' => $this->input->post('kategori'),
					'content_article' => $this->input->post('isi'),
					'featured' => $fitur,
					'article_active' => $this->input->post('status'),
					'created_at' => $tanggal,
					'updated_at' => $tanggal,
				);
				$this->db->insert('tbl_blog',$data);
				$this->session->set_flashdata('sukses',"Article successfully published");
				redirect('dashboard/articles.html');
			} else {
				$this->session->set_flashdata('error',"Article failed to publish");
				redirect('dashboard/articles.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function edit_article($permalink)
	{
		if($this->auth_model->logged_id())
		{
			$data = konfigurasi('Article');
			$data['tag'] = $this->dashboard_model->blogtag();

			$query = $this->dashboard_model->getarticle($permalink);
			// validasi jika data ditemukan
			if ($query->num_rows() > 0){
				$data['article']= $query;

				// load view
				$this->load->view('admin/update/articles', $data);
			} else {
				//jika data tidak ditemukan
				$this->load->view('404');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function update_blog()
	{
		if($this->auth_model->logged_id())
		{
			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			$this->form_validation->set_rules('isi', 'Isi', 'trim|required');

			$config['upload_path']          = './assets/images/blog';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2024;
			$config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar') and $this->form_validation->run() == TRUE) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');
				$image = $this->input->post('gambar');

				// Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $this->input->post('judul')); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug = $pre_slug; // tambahkan ektensi .html pada slug

				$data = array(
					'title_article' => $this->input->post('judul'),
					'slug_article' => $slug,
					'id_category' => $this->input->post('kategori'),
					'thumb_article' => $_data['upload_data']['file_name'],
					'content_article' => $this->input->post('isi'),
					'featured' => $this->input->post('fitur'),
					'article_active' => $this->input->post('status'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id_article',$this->input->post('id'));
				unlink("assets/images/blog/".$image);
				$this->db->update('tbl_blog',$data);
				$this->session->set_flashdata('sukses',"Article successfully updated");
				redirect('dashboard/articles.html');
			} elseif (!$this->upload->do_upload('gambar') and $this->form_validation->run() == TRUE) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');

				// Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $this->input->post('judul')); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug = $pre_slug; // tambahkan ektensi .html pada slug

				$data = array(
					'title_article' => $this->input->post('judul'),
					'slug_article' => $slug,
					'id_category' => $this->input->post('kategori'),
					'content_article' => $this->input->post('isi'),
					'featured' => $this->input->post('fitur'),
					'article_active' => $this->input->post('status'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id_article',$this->input->post('id'));
				$this->db->update('tbl_blog',$data);
				$this->session->set_flashdata('sukses',"Article successfully updated");
				redirect('dashboard/articles.html');
			} else {
				$this->session->set_flashdata('error',"Article failed to update");
				redirect('dashboard/articles.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function delete_article($id)
	{
		if($this->auth_model->logged_id())
		{
			$image = $this->input->post('gambar');
			if($id=="")
			{
				$this->session->set_flashdata('error',"Article cannot be deleted");
				redirect('dashboard/articles.html');
			} else {
				$this->db->where('id_article', $id);
				unlink("assets/images/blog/".$image);
				$this->db->delete('tbl_blog');
				$this->session->set_flashdata('sukses',"Article was successfully deleted");
				redirect('dashboard/articles.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function projects($rowno=0)
	{
		if($this->auth_model->logged_id())
		{
			$data = konfigurasi('Projects');
			// $data['projects'] = $this->dashboard_model->projects();

			// Search text
			$search_text = "";
			if($this->input->post('submit') != NULL ){
				$search_text = $this->input->post('search');
				$this->session->set_userdata(array("search"=>$search_text));
			}else{
				if($this->session->userdata('search') != NULL){
					$search_text = $this->session->userdata('search');
				}
			}

			// Row per page
			$rowperpage = 5;

			// Row position
			if($rowno != 0){
				$rowno = ($rowno-1) * $rowperpage;
			}
			
			// All records count
			$allcount = $this->pagination_model->get_project($search_text);

			// Get  records
			$users_record = $this->pagination_model->get_result_project($rowno, $rowperpage, $search_text);
			
			// Pagination Configuration
			$config['base_url'] = base_url('dashboard/projects');
			$config['use_page_numbers'] = TRUE;
			$config['total_rows'] = $allcount;
			$config['per_page'] = $rowperpage;
			
			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
			$config['full_tag_open']   = '<div class="clearfix"><ul class="pagination pagination-md no-margin pull-left">';
			$config['full_tag_close']  = '</ul></div>';
			
			$config['first_link']      = 'First'; 
			$config['first_tag_open']  = '<li>';
			$config['first_tag_close'] = '</li>';
			
			$config['last_link']       = 'Last'; 
			$config['last_tag_open']   = '<li>';
			$config['last_tag_close']  = '</li>';
			
			$config['next_link']       = '&raquo;'; 
			$config['next_tag_open']   = '<li>';
			$config['next_tag_close']  = '</li>';
			
			$config['prev_link']       = '&laquo;'; 
			$config['prev_tag_open']   = '<li>';
			$config['prev_tag_close']  = '</li>';
			
			$config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']   = '<span class="sr-only">(current)</span></span></li>';
			
			$config['num_tag_open']    = '<li>';
			$config['num_tag_close']   = '</li>';
			// End style pagination

			// Initialize
			$this->pagination->initialize($config);

			$data['pagination'] = $this->pagination->create_links();
			$data['result'] = $users_record;
			$data['row'] = $rowno;
			$data['search'] = $search_text;
			
			$this->load->view('admin/crud/projects',$data);
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function save_project()
	{
		if($this->auth_model->logged_id())
		{
			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			// $this->form_validation->set_rules('web', 'Website', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
			$this->form_validation->set_rules('isi', 'Isi', 'trim|required');

			$config['upload_path']          = './assets/images/projects';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2024;
			$config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar') and $this->form_validation->run() == TRUE) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');
				$fitur = '0';

				// Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $this->input->post('judul')); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug = $pre_slug; // tambahkan ektensi .html pada slug

				$data = array(
					'project_name' => $this->input->post('judul'),
					'slug_project' => $slug,
					'id_category' => $this->input->post('kategori'),
					'thumb_project' => $_data['upload_data']['file_name'],
					'project_desc' => $this->input->post('isi'),
					'short_desc' => $this->input->post('deskripsi'),
					'client_web' => $this->input->post('web'),
					'price' => $this->input->post('price'),
					'project_active' => $this->input->post('status'),
					'created_at' => $tanggal,
					'updated_at' => $tanggal,
				);
				$this->db->insert('tbl_project',$data);
				$this->session->set_flashdata('sukses',"Project successfully published");
				redirect('dashboard/projects.html');
			} elseif (!$this->upload->do_upload('gambar') and $this->form_validation->run() == TRUE) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');
				$fitur = '0';

				// Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $this->input->post('judul')); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug = $pre_slug; // tambahkan ektensi .html pada slug

				$data = array(
					'project_name' => $this->input->post('judul'),
					'slug_project' => $slug,
					'id_category' => $this->input->post('kategori'),
					'project_desc' => $this->input->post('isi'),
					'short_desc' => $this->input->post('deskripsi'),
					'client_web' => $this->input->post('web'),
					'price' => $this->input->post('price'),
					'project_active' => $this->input->post('status'),
					'created_at' => $tanggal,
					'updated_at' => $tanggal,
				);
				$this->db->insert('tbl_project',$data);
				$this->session->set_flashdata('sukses',"Project successfully published");
				redirect('dashboard/projects.html');
			} else {
				$this->session->set_flashdata('error',"Project failed to publish");
				redirect('dashboard/projects.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function create_project()
	{
		if($this->auth_model->logged_id())
		{
			$data = konfigurasi('Project');
			$data['tag'] = $this->dashboard_model->projecttag();

			$this->load->view('admin/create/projects',$data);
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function edit_project($permalink)
	{
		if($this->auth_model->logged_id())
		{
			$data = konfigurasi('Project');
			$data['tag'] = $this->dashboard_model->projecttag();

			$query = $this->dashboard_model->getproject($permalink);
			// validasi jika data ditemukan
			if ($query->num_rows() > 0){
				$data['project']= $query;

				// load view
				$this->load->view('admin/update/projects', $data);
			} else {
				//jika data tidak ditemukan
				$this->load->view('404');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function update_project()
	{
		if($this->auth_model->logged_id())
		{
			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');
			// $this->form_validation->set_rules('web', 'Website', 'trim|required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'trim|required');
			$this->form_validation->set_rules('isi', 'Isi', 'trim|required');

			$config['upload_path']          = './assets/images/projects';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2024;
			$config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar') and $this->form_validation->run() == TRUE) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');
				$fitur = '0';
				$image = $this->input->post('gambar');

				// Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $this->input->post('judul')); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug = $pre_slug; // tambahkan ektensi .html pada slug

				$data = array(
					'project_name' => $this->input->post('judul'),
					'slug_project' => $slug,
					'id_category' => $this->input->post('kategori'),
					'thumb_project' => $_data['upload_data']['file_name'],
					'project_desc' => $this->input->post('isi'),
					'short_desc' => $this->input->post('deskripsi'),
					'client_web' => $this->input->post('web'),
					'price' => $this->input->post('price'),
					'project_active' => $this->input->post('status'),
					'created_at' => $tanggal,
					'updated_at' => $tanggal,
				);
				$this->db->where('id_project',$this->input->post('id'));
				unlink("assets/images/projects/".$image);
				$this->db->update('tbl_project',$data);
				$this->session->set_flashdata('sukses',"Project successfully updated");
				redirect('dashboard/projects.html');
			} elseif (!$this->upload->do_upload('gambar') and $this->form_validation->run() == TRUE) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');
				$fitur = '0';

				// Buat slug
				$string = preg_replace('/[^a-zA-Z0-9 \&%|{.}=,?!*()"-_+$@;<>\']/', '', $this->input->post('judul')); //filter karakter unik dan replace dengan kosong ('')
				$trim = trim($string); // hilangkan spasi berlebihan dengan fungsi trim
				$pre_slug = strtolower(str_replace(" ", "-", $trim)); // hilangkan spasi, kemudian ganti spasi dengan tanda strip (-)
				$slug = $pre_slug; // tambahkan ektensi .html pada slug

				$data = array(
					'project_name' => $this->input->post('judul'),
					'slug_project' => $slug,
					'id_category' => $this->input->post('kategori'),
					'project_desc' => $this->input->post('isi'),
					'short_desc' => $this->input->post('deskripsi'),
					'client_web' => $this->input->post('web'),
					'price' => $this->input->post('price'),
					'project_active' => $this->input->post('status'),
					'created_at' => $tanggal,
					'updated_at' => $tanggal,
				);
				$this->db->where('id_project',$this->input->post('id'));
				$this->db->update('tbl_project',$data);
				$this->session->set_flashdata('sukses',"Project successfully updated");
				redirect('dashboard/projects.html');
			} else {
				$this->session->set_flashdata('error',"Project failed to update");
				redirect('dashboard/projects.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function delete_project($id)
	{
		$image = $this->input->post('gambar');

		if($this->auth_model->logged_id())
		{
			if($id=="")
			{
				$this->session->set_flashdata('error',"Project cannot be deleted");
				redirect('dashboard/projects.html');
			} else {
				$this->db->where('id_project', $id);
				unlink("assets/images/projects/".$image);
				$this->db->delete('tbl_project');
				$this->session->set_flashdata('sukses',"Project was successfully deleted");
				redirect('dashboard/projects.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}
	
	public function category($rowno=0)
	{
		if($this->auth_model->logged_id())
		{
			$data = konfigurasi('Category');
			// $data['category'] = $this->dashboard_model->category();

			// Search text
			$search_text = "";
			if($this->input->post('submit') != NULL ){
				$search_text = $this->input->post('search');
				$this->session->set_userdata(array("search"=>$search_text));
			}else{
				if($this->session->userdata('search') != NULL){
					$search_text = $this->session->userdata('search');
				}
			}

			// Row per page
			$rowperpage = 5;

			// Row position
			if($rowno != 0){
				$rowno = ($rowno-1) * $rowperpage;
			}
			
			// All records count
			$allcount = $this->pagination_model->get_category($search_text);

			// Get  records
			$users_record = $this->pagination_model->get_result_category($rowno, $rowperpage, $search_text);
			
			// Pagination Configuration
			$config['base_url'] = base_url('dashboard/category');
			$config['use_page_numbers'] = TRUE;
			$config['total_rows'] = $allcount;
			$config['per_page'] = $rowperpage;
			
			// Style Pagination
			// Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
			$config['full_tag_open']   = '<div class="clearfix"><ul class="pagination pagination-md no-margin pull-left">';
			$config['full_tag_close']  = '</ul></div>';
			
			$config['first_link']      = 'First'; 
			$config['first_tag_open']  = '<li>';
			$config['first_tag_close'] = '</li>';
			
			$config['last_link']       = 'Last'; 
			$config['last_tag_open']   = '<li>';
			$config['last_tag_close']  = '</li>';
			
			$config['next_link']       = '&raquo;'; 
			$config['next_tag_open']   = '<li>';
			$config['next_tag_close']  = '</li>';
			
			$config['prev_link']       = '&laquo;'; 
			$config['prev_tag_open']   = '<li>';
			$config['prev_tag_close']  = '</li>';
			
			$config['cur_tag_open']    = '<li class="page-item active"><span class="page-link">';
			$config['cur_tag_close']   = '<span class="sr-only">(current)</span></span></li>';
			
			$config['num_tag_open']    = '<li>';
			$config['num_tag_close']   = '</li>';
			// End style pagination

			// Initialize
			$this->pagination->initialize($config);

			$data['pagination'] = $this->pagination->create_links();
			$data['result'] = $users_record;
			$data['row'] = $rowno;
			$data['search'] = $search_text;
			
			$this->load->view('admin/crud/category',$data);
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function save_category()
	{
		if($this->auth_model->logged_id())
		{
			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$tanggal = date('Y-m-d');
				$data = array(
					'category_name' => $this->input->post('judul'),
					'category' => $this->input->post('kategori'),
					'category_active' => $this->input->post('status'),
					'created_at' => $tanggal,
					'updated_at' => $tanggal,
				);
				$this->db->insert('tbl_category',$data);
				$this->session->set_flashdata('sukses',"Category successfully published");
				redirect('dashboard/category.html');
			} else {
				$this->session->set_flashdata('error',"Category failed to publish");
				redirect('dashboard/category.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function edit_category()
	{
		if($this->auth_model->logged_id())
		{
			$this->form_validation->set_rules('judul', 'Judul', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$tanggal = date('Y-m-d');
				$data = array(
					'category_name' => $this->input->post('judul'),
					'category' => $this->input->post('kategori'),
					'category_active' => $this->input->post('status'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id_category',$this->input->post('id'));
				$this->db->update('tbl_category',$data);
				$this->session->set_flashdata('sukses',"Category successfully updated");
				redirect('dashboard/category.html');
			} else {
				$this->session->set_flashdata('error',"Category failed to update");
				redirect('dashboard/category.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}

	public function delete_category($id)
	{
		if($this->auth_model->logged_id())
		{
			if($id=="")
			{
				$this->session->set_flashdata('error',"Category cannot be deleted");
				redirect('dashboard/category.html');
			} else {
				$this->db->where('id_category', $id);
				$this->db->delete('tbl_category');
				$this->session->set_flashdata('sukses',"Category was successfully deleted");
				redirect('dashboard/category.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}
	
}
