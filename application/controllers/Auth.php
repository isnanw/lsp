<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model auth_model
        $this->load->model('auth_model');
        $this->load->model('dashboard_model');
    }

	public function login()
	{	
		$data = konfigurasi('Login');

		if($this->auth_model->logged_id()) {
			//jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
            redirect("dashboard");
            
		} else {
            //jika session belum terdaftar
            //set form validation
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            //set message form validation
            $this->form_validation->set_message('required', '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {field} tidak boleh kosong!</div>');

            //cek validasi
            if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $email = $this->input->post("email", TRUE);
                $password = MD5($this->input->post('password', TRUE));
                
                //checking data via model
                $checking = $this->auth_model->check_login('tbl_users', array('email' => $email), array('password' => $password));
                
                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {
                        $session_data = array(
                            'id'   => $apps->id,
                            'email' => $apps->email,
                            'name' => $apps->name,
                            'password' => $apps->password,
                            'created_at' => $apps->created_at
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);
                        redirect('dashboard');
                    }

                } else {
                    $data['error'] = '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Email atau Password salah!</div>';
                    $this->load->view('admin/login',$data);
                }

            } else {
                $this->load->view('admin/login',$data);
            }
	    }
    }
    
    public function logout()
	{
        date_default_timezone_set("ASIA/JAKARTA");
        $date = array('last_login' => date('Y-m-d H:i:s'));
        $id = $this->session->userdata('id');
        $this->auth_model->logout($date, $id);
		$this->session->sess_destroy();
		redirect('auth/login');
    }
    
    public function profile()
    {
        $data = konfigurasi('Profile');

        $this->load->view('admin/profile',$data);
    }

    public function update_profile()
    {
        if($this->auth_model->logged_id())
		{
			$config['upload_path']          = './assets/images';
			$config['allowed_types']        = 'jpg|png|jpeg';
			$config['max_size']             = 0;
			$config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['encrypt_name']			= TRUE;
			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar')) {
				$_data = array('upload_data' => $this->upload->data());
                $tanggal = date('Y-m-d');
				$image = $this->input->post('gambar');

				$data = array(
					'name' => $this->input->post('fullname'),
					'email' => $this->input->post('email'),
					'image' => $_data['upload_data']['file_name'],
					'phone' => $this->input->post('phone'),
					'address' => $this->input->post('address'),
					'about' => $this->input->post('description'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id',$this->input->post('id'));
				unlink("assets/images/".$image);
                $this->db->update('tbl_users',$data);
				$this->session->set_flashdata('sukses',"Profile successfully updated, please login again.");
				redirect('dashboard/profile.html');
			} elseif (!$this->upload->do_upload('gambar')) {
				$_data = array('upload_data' => $this->upload->data());
				$tanggal = date('Y-m-d');

				$data = array(
					'name' => $this->input->post('fullname'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'address' => $this->input->post('address'),
					'about' => $this->input->post('description'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id',$this->input->post('id'));
				$this->db->update('tbl_users',$data);
				$this->session->set_flashdata('sukses',"Profile successsfully updated, please login again.");
				redirect('dashboard/profile.html');
			} else {
				$this->session->set_flashdata('error',"Profile failed to update");
				redirect('dashboard/profile.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
    }

    public function update_password()
    {
        if($this->auth_model->logged_id())
		{
			$this->form_validation->set_rules('newpass', 'Password Baru', 'trim|required');
			$this->form_validation->set_rules('repass', 'Password Konfirmasi', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
                if($this->input->post('newpass') == $this->input->post('repass')) {

                    $tanggal = date('Y-m-d');
                    $passnew = MD5($this->input->post('newpass'));

                    $data = array(
                        'password' => $passnew,
                        'updated_at' => $tanggal,
                    );
                    $this->db->where('id',$this->input->post('id'));
                    $this->db->update('tbl_users',$data);
                    $this->session->set_flashdata('sukses',"Password successfully updated, please login again.");
                    redirect('dashboard/profile.html');
                } else {
                    $this->session->set_flashdata('error',"Password is not the same.");
                    redirect('dashboard/profile.html');
                }
            } else {
                $this->session->set_flashdata('error',"Password failed to update.");
                redirect('dashboard/profile.html');
            }
        } else {
            //jika session belum terdaftar, maka redirect ke halaman login
            redirect("auth/login");
        }
    }

    public function update_sosmed()
    {
        if($this->auth_model->logged_id())
		{
            $tanggal = date('Y-m-d');
            $data = array(
                'facebook' => $this->input->post('fb'),
                'twitter' => $this->input->post('twt'),
                'instagram' => $this->input->post('ig'),
                'google_plus' => $this->input->post('gplus'),
                'updated_at' => $tanggal,
            );
            $this->db->where('id',$this->input->post('id'));
            $this->db->update('tbl_users',$data);
            $this->session->set_flashdata('sukses',"Social Media successfully updated");
            redirect('dashboard/profile.html');
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
    }

    public function update_website()
    {
        if($this->auth_model->logged_id())
		{
			$this->form_validation->set_rules('web_name', 'Web Name', 'trim|required');
			$this->form_validation->set_rules('keyword', 'Keyword', 'trim|required');
			$this->form_validation->set_rules('style', 'Homepage', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				$tanggal = date('Y-m-d');
				$data = array(
					'homepage' => $this->input->post('style'),
					'web_name' => $this->input->post('web_name'),
					'web_description' => $this->input->post('description'),
					'web_keyword' => $this->input->post('keyword'),
					'updated_at' => $tanggal,
				);
				$this->db->where('id_setting',$this->input->post('id'));
				$this->db->update('tbl_settings',$data);
				$this->session->set_flashdata('sukses',"Setting successfully updated");
				redirect('dashboard/profile.html');
			} else {
				$this->session->set_flashdata('error',"Setting failed to update");
				redirect('dashboard/profile.html');
			}
		} else {
			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("auth/login");
		}
    }
}
