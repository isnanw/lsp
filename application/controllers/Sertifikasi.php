<?php
class Sertifikasi extends CI_Controller{
    public function skemaSertifikasi(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Sertifikasi/skemaSertifikasi');
        $this->load->view('footer');
    }
    public function asesorKompetensi(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Sertifikasi/asesorKompetensi');
        $this->load->view('footer');
    }
    public function tempatUjiKompetensi(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Sertifikasi/tempatUjiKompetensi');
        $this->load->view('footer');
    }
    public function pemegangSertifikat(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Sertifikasi/pemegangSertifikat');
        $this->load->view('footer');
    }
    public function smkJejaringKerja(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Sertifikasi/smkJejaringKerja');
        $this->load->view('footer');
    }
}
?>