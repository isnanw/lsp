<?php
class Informasi extends CI_Controller{
    public function agendaKegiatan(){
        $this->load->view('header');
        $this->load->view('FrontEnd/Informasi/agendaKegiatan');
        $this->load->view('footer');
    }
}
?>