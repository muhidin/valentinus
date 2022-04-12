<?php
session_start();
include_once "sesi.php";
$modul=(isset($_GET['m']))?$_GET['m']:"awal";
$jawal="Admin Aplikasi | Valentinus Moreno";
switch($modul){
	case 'awal': default: $aktif="Beranda"; $judul="Beranda $jawal"; include "awal.php"; break;
	case 'admin': $aktif="Admin"; $judul="Modul $jawal"; include "modul/administrator/index.php"; break;
	case 'banner': $aktif="Banner"; $judul="Modul Banner $jawal"; include "modul/banner/index.php"; break;
}

?>
