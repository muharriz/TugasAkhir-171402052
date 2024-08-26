<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8>
	<meta name=description content="Tugas Akhir">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
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
					<a class="nav-link"href="<?=base_url('public/upload-csv')?>">Upload CSV</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" style ="background-color: white;color: black;" href="#">Manual Input</a>
				</li>
			</ul>		
		</div>
	</div>
	<!--/Navbar-->
	<!--Body-->
	<div class="row pt-5 d-flex align-items-center">
		<div class="col-md-6 text-center">
			<form method="POST" id="form-ulasan" autocomplete="off">
				<div class="input-group mb-3 px-3">
			
					<span class="input-group-text">Manual Input</span>
					<input class="form-control" type="text" name="ulasan" placeholder="Ketik Ulasanmu Disini" required/>		
			
				</div>
				<button type="submit" class="btn btn-secondary">Submit</button>
			</form>
		</div>
		<div class="col-md-6 text-center">
			<p class="h4">Manual input Ulasan Aplikasi Sirekap Mobile</p>
		</div>
	</div>
	<div class="row pt-5 d-flex align-items-center">
		<p class="h4 text-center" id="sentimen">
		
		</p>
	</div>

	<!--/Body-->
</body>
	<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
	<script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
	<script src="<?=base_url('assets/js/myjs.js')?>"></script>
</html>