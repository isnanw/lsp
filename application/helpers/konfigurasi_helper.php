<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function konfigurasi($title)
{
    $CI = get_instance();
    $CI->load->model('Konfigurasi_model');
    $user = $CI->Konfigurasi_model->user();
    $setting = $CI->Konfigurasi_model->setting();
    $data = array(
      'title'       => $setting['web_name'],
      'description' => $setting['web_description'],
      'keyword'     => $setting['web_keyword'],
      'homepage'    => $setting['homepage'],
      'id_setting'  => $setting['id_setting'],
      'pagetitle'   => $title.' - '.$setting['web_name'],
      'headtitle'   => $title,
      'nama'        => $user['name'],
      'email'       => $user['email'],
      'foto'        => $user['image'],
      'tentang'     => $user['about'],
      'twitter'     => $user['twitter'],
      'facebook'    => $user['facebook'],
      'instagram'   => $user['instagram'],
      'google_plus' => $user['google_plus'],
      'alamat'      => $user['address'],
      'telepon'     => $user['phone'],
      'last_login'  => $user['last_login'],
      'id'          => $user['id'],
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