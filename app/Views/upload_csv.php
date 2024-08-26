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
			<a href="<?=base_url('public')?>">
				<span class="navbar-brand flex-grow-1">
							<img src="<?=base_url('assets/images/usu_logo.png')?>" alt="logo" width="30px">
							Tugas Akhir
				</span>
			</a>
			<ul class="navbar-nav ms-auto mb-2 mb-lg-0">		
				<li class="nav-item">
					<a class="nav-link active" style ="background-color: white;color: black;"href="#">Upload CSV</a>
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
			<form method="POST" action="<?=base_url('public/predict-csv')?>" enctype="multipart/form-data">
				<p class="h4">Upload CSV</p>
				<input type="file" name="csv_upload" accept=".csv" required/>
				<button type="submit" class="btn btn-secondary">Upload</button>	
			</form>
		</div>
		<div class="col-md-6 text-center px-3">
			<p class="h4">Upload File dengan Ekstensi CSV untuk memulai Prediksi</p>
			<p class="h6">Untuk melihat format csv, silahkan klik <a href="<?=base_url('assets/contoh_csv.csv')?>" download="contoh_csv.csv">disini</a></p>
		</div>
	</div>

	<!--/Body-->
</body>
</html>