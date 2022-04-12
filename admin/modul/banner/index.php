<?php
include_once "sesi.php";

$modul=(isset($_GET['s']))?$_GET['s']:"awal";
switch($modul){
	case 'awal': default: include "modul/banner/tampil.php"; break;
	case 'tambah': include "modul/banner/tambah.php"; break;
	case 'simpan': include "modul/banner/simpan.php"; break;
	case 'edit': include "modul/banner/edit.php"; break;
	case 'update': include "modul/banner/update.php"; break;
	case 'hapus': include "modul/banner/hapus.php"; break;
	case 'detail': include "modul/banner/detail.php"; break;
	case 'profil': include "modul/banner/profil.php"; break;
}
?>
