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
                        <li class="nav-item"><a class="btn btn-light rounded-pill me-lg-3">Upload CSV</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?=base_url('public/manual-input')?>">Manual Input</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 py-5 my-5">
                        <!-- Mashead text and app badges-->
                        <form method="POST" action="<?=base_url('public/predict-csv')?>" enctype="multipart/form-data">
                            <div class="mb-5 mb-lg-0 text-center text-lg-start">
                                <input class="form-control" type="file" name="csv_upload" accept=".csv"  id="formFile" required/>
                            </div>
                            <button type="submit" class="btn btn-dark text-white mt-3">Upload</button>
                        </form>
                        
                    </div>
                    <div class="col-lg-6 py-5 my-5">
                        <!-- Masthead device mockup feature-->
                        <h1 class="ms-5 display-5 lh-1 mb-3 text-center">Silahkan upload file CSV anda</h1>
                        <p class="lh-1 mb-3 text-end">Untuk melihat format csv yang bisa diterima anda bisa <a class="btn btn-dark rounded-pill mt-3" href="<?=base_url('assets/contoh_csv.csv')?>">klik disini<a></p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center" id="usu_bg">
            <div class="container px-5">
                <div class="row gx-1 justify-content-center">
                    <div class="col-xl-8">
                        <div class="h2 fs-1 text-white mb-4">Analisis Sentimen Terhadap Aplikasi Sirekap Mobile Berbasis Aspek</div>
                        <div class="h3 fs-2 text-white mb-4">Pada Pemilihan Umum 2024 Dengan Metode Naïve Bayes</div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
            	<h3 class="font-alt text-center mb-5">Aspek Analisis Sentimen</h3>
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                    	<img src="<?=base_url()?>assets/img/mobile.png" alt="usability" width="100px">                                    
                                        <h3 class="font-alt">Usability</h3>
                                        <p class="text-muted mb-0">Terkait seberapa baik aplikasi Sirekap Mobile dapat digunakan dengan efektivitas, efisiensi, dan kepuasan oleh penggunanya</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <img src="<?=base_url()?>assets/img/security.png" alt="usability" width="100px">   
                                        <h3 class="font-alt">Credibility</h3>
                                        <p class="text-muted mb-0">Menyangkut tingkat kepercayaan pengguna & masyarakat dan tingkat akurasi Sirekap Mobile membaca sebuah data</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9 mb-md-0 ms-5 ps-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <img src="<?=base_url()?>assets/img/servers.png" alt="usability" width="100px">   
                                        <h3 class="font-alt">Availability</h3>
                                        <p class="text-muted mb-0">Aspek mengenai kemampuan aplikasi Sirekap Mobile untuk tetap tersedia dan dapat diakses oleh pengguna pada setiap saat yang diperlukan.</p>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <div class="device-wrapper">
                                <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                    <div class="screen bg-white">
                                        <!-- PUT CONTENTS HERE:-->
                                        <!-- * * This can be a video, image, or just about anything else.-->
                                        <!-- * * Set the max width of your media to 100% and the height to-->
                                        <!-- * * 100% like the demo example below.-->
                                      <img class="ms-1 mt-5 pt-5" src="assets/img/kpu_logo.png" alt="kpu_logo" width="200px" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        <script src="<?=base_url()?>js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
