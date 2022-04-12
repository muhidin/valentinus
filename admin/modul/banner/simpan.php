<?php
include "sesi.php";
if (isset($_POST['simpan'])) {
    include "../sambungan.php";
    include "../fungsi/upload.php";
    $no          = $_POST['no'];
    $title       = $_POST['title'];
    $description = $_POST['description'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $namafile = $_FILES['foto']['name'];
    $tipefile = $_FILES['foto']['type'];

    if (empty($lokasi)) {
        $sql = "INSERT INTO banner SET no='$no', title='$title',description='$description'";
    } else {
        $folder = "../img/";
        $ukuran = 100;
        $namafile = "banner_" . $namafile;
        UploadFoto($namafile, $folder, $ukuran);

        $sql = "INSERT INTO banner SET no='$no', title='$title',description='$description', image='$namafile'";
    }
    $simpan = mysqli_query($koneksi, $sql);
    if ($simpan) {
        header('Location:?m=banner&s=awal');
        //echo "berhasil";
    } else {
        include "?m=banner&s=awal";
        echo '<script language="JavaScript">';
        echo 'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}
