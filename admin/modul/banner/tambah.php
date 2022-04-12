<?php include "atas.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Banner
			<small>Banner pada Slider</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="."><i class="fa fa-dashboard"></i> Beranda</a></li>
			<li><a href="?m=admin"><i class="fa fa-laptop"></i> Banner</a></li>
			<li class="active">Tambah</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Form Tambah Banner</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<!--Mulai buat form-->
						<form action="?m=banner&s=simpan" method="post" enctype="multipart/form-data">
							<table id="pilkasis1" class="table table-bordered table-hover table-striped">
								<tbody>
									<tr>
										<td width=174>No Urut Banner*</td>
										<td><input type="number" name="no" size="25px" maxlength="2px" required /></td>
									</tr>
									<tr>
										<td>Image*</td>
										<td><input type="file" name="foto" accept="image/*" required /><small>Ukuran gambar sebaiknya 1920x1080</small></td>
									</tr>
									<tr>
										<td>Judul*</td>
										<td><input type="text" name="title"  size="50px" required /></td>
									</tr>
									<tr>
										<td>Keterangan*</td>
										<td><input type="text" name="description"  size="50px" required /></td>
									</tr>
									<tr>
										<td colspan=3>
											<input type="submit" name="simpan" value="Save" class="btn btn-large btn-primary" />&nbsp;&nbsp;&nbsp;
											<input type="reset" name="reset" value="Reset" class="btn btn-large btn-warning" />&nbsp;&nbsp;&nbsp;
											<a href="?m=banner" class="btn btn-large btn-danger"><i class="fa fa-times"></i> List</a>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
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