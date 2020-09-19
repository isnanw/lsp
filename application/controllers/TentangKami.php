<?php
class TentangKami extends CI_Controller{
    public function profil(){
        $this->load->view('header');
        $this->load->view('profil');
        $this->load->view('footer');
    }
    public function visiMisi(){
        $this->load->view('header');
        $this->load->view('visiMisi');
        $this->load->view('footer');
    }
    public function strukturOrganisasi(){
        $this->load->view('header');
        $this->load->view('strukturOrganisasi');
        $this->load->view('footer');
    }
}
?>