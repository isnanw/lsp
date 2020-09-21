<?php
class Sertifikasi extends CI_Controller{
    public function skemaSertifikasi(){
        $this->load->view('header');
        $this->load->view('skemaSertifikasi');
        $this->load->view('footer');
    }
    public function asesorKompetensi(){
        $this->load->view('header');
        $this->load->view('asesorKompetensi');
        $this->load->view('footer');
    }
}
?>