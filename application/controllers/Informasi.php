<?php
class Informasi extends CI_Controller{
    public function agendaKegiatan(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Informasi/agendaKegiatan');
        $this->load->view('footer');
    }
    public function fotoKegiatan(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Informasi/fotoKegiatan');
        $this->load->view('footer');
    }
    public function berita(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Informasi/berita');
        $this->load->view('footer');
    }
    public function FAQ(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Informasi/FAQ');
        $this->load->view('footer');
    }
}
?>