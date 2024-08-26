<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8>
	<meta name=description content="Tugas Akhir">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<script src="<?=base_url('assets/css/bootstrap.min.js')?>"></script>
</head>
<body>
	<!--Navbar-->
	<div class="navbar navbar-expand-sm bg-secondary navbar-dark">
		<div class="container-fluid">
			<a href="#">
				<span class="navbar-brand flex-grow-1">
							<img src="<?=base_url('assets/images/usu_logo.png')?>" alt="logo" width="30px">
							Tugas Akhir
				</span>
			</a>
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">		
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('public/upload-csv')?>">Upload CSV</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('public/manual-input')?>">Manual Input</a>
				</li>
			</ul>		
		</div>
	</div>
	<!--/Navbar-->
	<!--Body-->
	<div class="row pt-5 d-flex align-items-center">
		<div class="col-md-6 text-center">
			<img src="<?=base_url('assets/images/pemilu.png')?>" alt="pemilu" width="500px" class="image-fluid rounded-circle">
		</div>
		<div class="col-md-6 text-center">
			<h4>Analisis Sentimen Berbasis Aspek Pada Ulasan Pengguna Sirekap Mobile</h4>

			<p>Ananda Muharriz Sinaga 171402052</p>

			<p>Program Studi Teknologi Informasi<br/>
			   Fakultas Ilmu Komputer dan Teknologi Informasi<br/>
			   Universita Sumatera Utara<br/>
			   2024
			</p>
			<a class="btn btn-secondary" href="<?=base_url('public/upload-csv')?>">Upload CSV</a>
			<a class="btn btn-secondary" href="<?=base_url('public/manual-input')?>">Manual Input</a>
		</div>
	</div>
	<!--/Body-->
</body>
</html>