<?php include "atas.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Administrator Pilkasis
            <small>Pemilihan Ketua OSIS</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="."><i class="fa fa-dashboard"></i> Beranda</a></li>
            <li><a href="?m=banner"><i class="fa fa-laptop"></i> Banner</a></li>
            <li class="active">Daftar</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="?m=banner&s=tambah" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Tambah Banner</a>
                        <h3 class="box-title">Daftar Banner</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="pilkasis1" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include "../sambungan.php";
                                $sql = "SELECT * FROM banner";
                                $query = mysqli_query($koneksi, $sql);
                                if (mysqli_num_rows($query) == 0) {
                                    echo "<td colspan='6'>Data Masih Kosong</td>";
                                } else {
                                    $no = 1;
                                    while ($r = mysqli_fetch_assoc($query)) {
                                        echo "<tr>";
                                        echo "<td>$no</td>";
                                        echo "<td><a href='?m=banner&s=detail&id=" . $r['id'] . "'>" . $r['no'] . "</a></td>";
                                        echo "<td><a href='?m=banner&s=detail&id=" . $r['id'] . "'><img src='../img/small_" . $r['image'] . "' width='100'></td>";
                                        echo "<td>" . $r['title'] . "</td>";
                                        echo "<td>" . $r['description'] . "</td>";
                                        echo '<td><a href="index.php?m=banner&s=edit&id=' . $r['id'] . '">Edit</a> | <a href="index.php?m=banner&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Yakin Akan dihapus?\')">Hapus</a></td>';
                                        echo "</tr>";
                                        $no++;
                                    }
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>No</th>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                    <th>Opsi</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    <?php include "bawah.php"; ?>