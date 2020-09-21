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
    public function tempatUjiKompetensi(){
        $this->load->view('header');
        $this->load->view('tempatUjiKompetensi');
        $this->load->view('footer');
    }
    public function pemegangSertifikat(){
        $this->load->view('header');
        $this->load->view('pemegangSertifikat');
        $this->load->view('footer');
    }
    public function smkJejaringKerja(){
        $this->load->view('header');
        $this->load->view('smkJejaringKerja');
        $this->load->view('footer');
    }
}
?>