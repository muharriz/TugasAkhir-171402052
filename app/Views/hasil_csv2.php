<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tugas Akhir</title>
        <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?=base_url()?>assets/css/styles2.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/mycss.css')?>">
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
            	<button class="btn btn-light rounded-pill">
            		<a class="navbar-brand fw-bold" href="<?=base_url('public')?>">
	                	<img src="<?=base_url()?>assets/img/usu_logo.png" alt="logo" width="40px">
	                	Tugas Akhir
                	</a>	
            	</button>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?=base_url()?>public/upload-csv">Upload CSV</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?=base_url()?>public/manual-input">Manual Input</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5 my-5">
                <h1 class="display-6 lh-1 mb-3 text-center">Hasil Analisis Sentimen <?=$file_name?></h1>
                <div class="row gx-5 align-items-center text-center">
                    
                    <table class="table table-bordered mx-3 my-3"  id="table-demo">
                        <thead class="table-dark text-white">
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
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center" id="usu_bg">
            <div class="container px-5">
                <div class="row gx-1 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white">Rekap Data Hasil Analisis</div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <table class="table table-borderless text-center">
            <tbody>
                <tr>
                    <td><h3 class="font-alt mb-5 mt-5 text-end">Total Data</h3></td>
                    <td><h3 class="font-alt mb-5 mt-5">:</h3></td>
                    <td colspan="2"><h3 class="font-alt ms-4 mb-5 mt-5 text-start" id="total_data"><?=$total_data?></h3></td>
                </tr>
                <!-- Usability -->
                <tr>
                    <td rowspan="4" class="text-end"><img src="<?=base_url()?>assets/img/mobile.png" alt="usability" width="150px">
                    <h3 class="font-alt me-3">Usability</h3></td>
                </tr>
                <tr>
                    <td><img class="mt-2" src="<?=base_url()?>assets/img/happy.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="us_pos_count"><?=$us_pos_count?></h3></td>
                    <td rowspan="3" class="text-end ms-2 mw-25"><canvas id="us_chart" style="width:100%;max-width:450px"></canvas></td>
                </tr>
                <tr>
                    <td><img src="<?=base_url()?>assets/img/neutral.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="us_net_count"><?=$us_net_count?></h3></td>
                </tr>
                <tr>
                    <td><img src="<?=base_url()?>assets/img/angry.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="us_neg_count"><?=$us_neg_count?></h3></td>
                </tr>

                <!-- Credibility -->
                <tr>
                    <td rowspan="4" class="text-end"><img src="<?=base_url()?>assets/img/security.png" alt="usability" width="150px">
                    <h3 class="font-alt me-3">Credibility</h3></td>
                </tr>
                <tr>
                    <td><img src="<?=base_url()?>assets/img/happy.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="cr_pos_count"><?=$cr_pos_count?></h3></td>
                    <td rowspan="3" class="text-end ms-2 mw-25"><canvas id="cr_chart" style="width:100%;max-width:450px"></canvas></td>
                </tr>
                <tr>
                    <td><img src="<?=base_url()?>assets/img/neutral.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="cr_net_count"><?=$cr_net_count?></h3></td>
                </tr>
                <tr>
                    <td><img src="<?=base_url()?>assets/img/angry.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="cr_neg_count"><?=$cr_neg_count?></h3></td>
                </tr>
                <!-- Availability -->
                <tr>
                    <td rowspan="4" class="text-end"><img src="<?=base_url()?>assets/img/servers.png" alt="usability" width="150px" class="me-2">
                    <h3 class="font-alt me-3">Availability</h3></td>
                </tr>
                <tr>
                    <td><img src="<?=base_url()?>assets/img/happy.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="av_pos_count"><?=$av_pos_count?></h3></td>
                    <td rowspan="3" class="text-end ms-2 mw-25"><canvas id="av_chart" style="width:100%;max-width:450px"></canvas></td>
                </tr>
                <tr>
                    <td><img src="<?=base_url()?>assets/img/neutral.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="av_net_count"><?=$av_net_count?></h3></td>
                </tr>
                <tr>
                    <td><img src="<?=base_url()?>assets/img/angry.png" alt="positif_us" width="33px"></td>
                    <td><h3 class="font-alt" id="av_neg_count"><?=$av_neg_count?></h3></td>
                </tr>
            </tbody>
        </table>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">Teknologi Informasi</div>
                    <div class="mb-2">Universitas Sumatera Utara</div>
                    <div class="mb-2">Jalan Dr. T. Mansur No.9</div>
                    <div href="#!">(061) 8211633</div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script src="<?=base_url('assets/js/paging.js')?>"></script>
        <script src="<?=base_url('assets/js/chart.js')?>"></script>
        <script src="<?=base_url('assets/js/chart_rekap.js')?>"></script>
        <script src="<?=base_url('assets/js/myjs.js')?>"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->
    </body>
</html>
