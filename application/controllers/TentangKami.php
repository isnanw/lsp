<?php
class TentangKami extends CI_Controller{

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

    // ======================= FRONT END ===========================
    public function profil(){
        $this->load->view('header');
        $this->load->view('FrontEnd/About/profil');
        $this->load->view('footer');
    }
    public function visiMisi(){
        $this->load->view('header');
        $this->load->view('FrontEnd/About/visiMisi');
        $this->load->view('footer');
    }
    public function strukturOrganisasi(){
        $this->load->view('header');
        $this->load->view('FrontEnd/About/strukturOrganisasi');
        $this->load->view('footer');
    }

    // ======================= BACK END ===========================
    public function homeAbout(){
        $data = konfigurasi('Setting About');

        $this->load->view('admin/about',$data);
    }

    public function update_instansi()
	{
		if($this->auth_model->logged_id())
		{
			$config['upload_path']          = './assets/images/about/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2024;
			$config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$_data = array('upload_data' => $this->upload->data());
                $tanggal = date('Y-m-d');
				$image = $this->input->post('gambar');
                // die($image);
				$data = array(
					'title' => $this->input->post('namaSekolah'),
					'NPSN' => $this->input->post('NPSN'),
					'image' => $_data['upload_data']['file_name'],
					'deskripsi' => $this->input->post('deskripsi'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id',$this->input->post('id'));
				unlink("assets/images/about/".$image);
                $this->db->update('tbl_profile',$data);
				$this->session->set_flashdata('sukses',"Data successfully updated,");
				redirect('dashboard/about.html');
			} elseif (!$this->upload->do_upload('gambar')) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');

				$data = array(
					'title' => $this->input->post('namaSekolah'),
					'NPSN' => $this->input->post('NPSN'),
					'deskripsi' => $this->input->post('deskripsi'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_profile',$data);
				$this->session->set_flashdata('sukses',"Data successsfully updated,");
				redirect('dashboard/about.html');
			} else {
				$this->session->set_flashdata('error',"Profile failed to update");
				redirect('dashboard/about.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
    }
    
     public function update_visimisi()
	{
		if($this->auth_model->logged_id())
		{
			$config['upload_path']          = './assets/images/about/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2024;
			$config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$_data = array('upload_data' => $this->upload->data());
                $tanggal = date('Y-m-d');
				$image = $this->input->post('gambar');

				$data = array(
					'visi' => $this->input->post('visi'),
					'misi' => $this->input->post('misi'),
					'image' => $_data['upload_data']['file_name'],
					'updated_at' => $tanggal,
				);
				$this->db->where('id',$this->input->post('id'));
				unlink("assets/images/about/".$image);
                $this->db->update('tbl_visimisi',$data);
				$this->session->set_flashdata('sukses',"Data successfully updated,");
				redirect('dashboard/about.html');
			} elseif (!$this->upload->do_upload('gambar')) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');

				$data = array(
					'visi' => $this->input->post('visi'),
					'misi' => $this->input->post('misi'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_visimisi',$data);
				$this->session->set_flashdata('sukses',"Data successsfully updated,");
				redirect('dashboard/about.html');
			} else {
				$this->session->set_flashdata('error',"Profile failed to update");
				redirect('dashboard/about.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
    }
    
    public function update_organisasi()
	{
		if($this->auth_model->logged_id())
		{
			$config['upload_path']          = './assets/images/about/';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 2024;
			$config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$_data = array('upload_data' => $this->upload->data());
                $tanggal = date('Y-m-d');
				$image = $this->input->post('gambar');

				$data = array(
					'deskripsi' => $this->input->post('organisasi'),
					'image' => $_data['upload_data']['file_name'],
					'updated_at' => $tanggal,
				);
				$this->db->where('id',$this->input->post('id'));
				unlink("assets/images/about/".$image);
                $this->db->update('tbl_organisasi',$data);
				$this->session->set_flashdata('sukses',"Data successfully updated,");
				redirect('dashboard/about.html');
			} elseif (!$this->upload->do_upload('gambar')) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');

				$data = array(
					'deskripsi' => $this->input->post('organisasi'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_organisasi',$data);
				$this->session->set_flashdata('sukses',"Data successsfully updated,");
				redirect('dashboard/about.html');
			} else {
				$this->session->set_flashdata('error',"Profile failed to update");
				redirect('dashboard/about.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
	}
}
?>