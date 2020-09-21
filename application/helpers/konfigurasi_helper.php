<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function konfigurasi($title)
{
    $CI = get_instance();
    $CI->load->model('Konfigurasi_model');
    $user = $CI->Konfigurasi_model->user();
    $setting = $CI->Konfigurasi_model->setting();
    $profile = $CI->Konfigurasi_model->profile();
    $visimisi = $CI->Konfigurasi_model->visiMisi();
    $organisasi = $CI->Konfigurasi_model->organisasi();
    $data = array(
      'id_setting'  => $setting['id_setting'],
      'title'       => $setting['web_name'],
      'description' => $setting['web_description'],
      'keyword'     => $setting['web_keyword'],
      'homepage'    => $setting['homepage'],
      'info_fb'    => $setting['info_fb'],
      'info_ig'    => $setting['info_ig'],
      'info_twt'    => $setting['info_twt'],
      'info_yt'    => $setting['info_yt'],
      'info_telp'    => $setting['info_telp'],
      'info_fax'    => $setting['info_fax'],
      'info_email'    => $setting['info_email'],
      'info_peta'    => $setting['info_peta'],
      'info_alamat'    => $setting['info_alamat'],

      'pagetitle'   => $title.' - '.$setting['web_name'],
      'headtitle'   => $title,

      'nama'        => $user['name'],
      'email'       => $user['email'],
      'foto'        => $user['image'],
      'tentang'     => $user['about'],
      'twitter'     => $user['twitter'],
      'facebook'    => $user['facebook'],
      'instagram'   => $user['instagram'],
      'youtube'     => $user['youtube'],
      'alamat'      => $user['address'],
      'telepon'     => $user['phone'],
      'last_login'  => $user['last_login'],
      'id'          => $user['id'],

      'id_profile'  => $profile['id'],
      'NPSN'        => $profile['NPSN'],
      'nama_profile'=> $profile['title'],
      'deskripsi'   => $profile['deskripsi'],
      'fotoInstansi'=> $profile['image'],

      'id_visimisi' => $visimisi['id'],
      'visi'        => $visimisi['visi'],
      'misi'        => $visimisi['misi'],
      'fotoVM'      => $visimisi['image'],

      'id_organisasi' => $organisasi['id'],
      'deskripsiOrg'  => $organisasi['deskripsi'],
      'fotoOrganisasi'=> $organisasi['image'],
    );

    return $data;
}

if (!function_exists('format_indo')) {
  function format_indo($date){
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun."".$waktu;

    return $result;
  }
}

function format_size($bytes){
  if($bytes >= 1073741824){
    $bytes = number_format($bytes / 1073741824, 2) . ' TB';
  }
  elseif($bytes >= 1048576){
    $bytes = number_format($bytes / 1048576, 2) . ' GB';
  }
  elseif($bytes >= 1024){
    $bytes = number_format($bytes / 1024, 2) . ' MB';
  }
  elseif($bytes > 1){
    $bytes = $bytes . ' KB';
  }
  elseif($bytes == 1){
    $bytes = $bytes . ' byte';
  }
  else{
    $bytes = '0 bytes';
  }

  return $bytes;
}