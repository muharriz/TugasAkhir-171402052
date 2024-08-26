<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=utf-8>
	<meta name=description content="Tugas Akhir">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>Tugas Akhir</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/mycss.css')?>">
</head>
<body>
	<!--Navbar-->
	<div class="navbar fixed-top navbar-expand-sm bg-secondary navbar-dark">
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
	<div class="row mt-5 pt-5">
		<div class="col-md-6">
			<a class="ms-3 btn btn-secondary" href="<?=base_url('public')?>">Halaman Utama</a>
		</div>
		<div class="col-md-6">
			<a class="float-end me-3 btn btn-secondary" href="<?=base_url('public/upload-csv')?>">Upload CSV lainnya</a>
		</div>
	</div>
	<div class="row d-flex align-items-center text-center">
		<div class="container pt-5 px-3">
			<p class="h5"> Hasil Analisis Sentimen <?=$file_name?> </p>
			<table class="table table-striped table-bordered" id="table-demo">
				<thead>
					<tr>
						<th class="align-middle" rowspan="2">No</th>
						<th class="align-middle" rowspan="2">Ulasan</th>
						<th colspan="3">Prediksi</th>
					</tr>
					<tr>
						<th>Usability</th>
						<th>Credibility</th>
						<th>Availability</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$number = 1;
						foreach ($result as $key) {
					?>

					<tr>
						<td><?=$number?></td>
						<td class="text-start"><?=$key->ulasan?></td>
						<td><?=$key->usability?></td>
						<td><?=$key->credibility?></td>
						<td><?=$key->availability?></td>
					</tr>

					<?php 
						 $number++;
						} ?>
				</tbody>
			</table>
		</div>
	</div>

	<div class="row d-flex align-items-center mt-5">
		<div class="col-md-6">
			<table class="table">
				<tr>
					<td colspan="2" class="text-center">Jumlah Data</td>
					<td>: <?=$total_data?></td>
				</tr>
				<tr>
					<td rowspan="3" class="text-center align-middle">Usability</td>
					<td>Positif</td>
					<td>: <?=$us_pos_count?></td>
				</tr>
				<tr>
					<td>Netral</td>
					<td>: <?=$us_net_count?></td>
				</tr>
				<tr>
					<td>Negatif</td>
					<td>: <?=$us_neg_count?></td>
				</tr>
				<tr>
					<td rowspan="3" class="text-center align-middle">Credibility</td>
					<td>Positif</td>
					<td>: <?=$cr_pos_count?></td>
				</tr>
				<tr>
					<td>Netral</td>
					<td>: <?=$cr_net_count?></td>
				</tr>
				<tr>
					<td>Negatif</td>
					<td>: <?=$cr_neg_count?></td>
				</tr>
				<tr>
					<td rowspan="3" class="text-center align-middle">Availability</td>
					<td>Positif</td>
					<td>: <?=$av_pos_count?></td>
				</tr>
				<tr>
					<td>Netral</td>
					<td>: <?=$av_net_count?></td>
				</tr>
				<tr>
					<td>Negatif</td>
					<td>: <?=$av_neg_count?></td>
				</tr>
			</table>
			<a class="ms-4 btn btn-secondary mb-2" href="<?=base_url('public')?>">Halaman Utama</a>

			<a class="float-end me-4 btn btn-secondary mb-2" href="<?=base_url('public/upload-csv')?>">Upload CSV lainnya</a>
		</div>

	<!--/Body-->
</body>
	<script src="<?=base_url('assets/css/bootstrap.min.js')?>"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
	<script src="<?=base_url('assets/js/paging.js')?>"></script>
	<script src="<?=base_url('assets/js/myjs.js')?>"></script>
</html>