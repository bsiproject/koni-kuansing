<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>Sistem Informasi KONI Kabupaten Kuantan Singingi</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <link rel="icon" type="image/png" href="images/logokoni.png" sizes="16x16">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loading-img.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="footer-logo">
                              <a href="index.html"><img src="images/koni-bg.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a class="pinterest" href="#"><i class="fa fa-instagram"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                 <nav class="navbar navbar-inverse">
                                    <div class="navbar-header">
                                       <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       </button>
                                       <a class="navbar-brand" href="#">Menu</a>
                                    </div>
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                       <ul class="nav navbar-nav">
                                          <li class="active"><a href="index.php">Home</a></li>
                                          <li><a href="tentang.php">Tentang</a></li>
                                          <li><a href="galeri.php">Galeri</a></li>
                                          <li><a href="venue.php">Venue</a></li>
                                          <li><a href="kontak.php">Kontak</a></li>
                                       </ul>
                                    </div>
                                    <!-- /.nav-collapse -->
                                 </nav>
                                
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>
         <div class="inner-page-banner">
            <div class="container">
            </div>
         </div>
         <div class="inner-information-text">
            <div class="container">
               <h3>Tentang</h3>
               <ul class="breadcrumb">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Tentang</li>
               </ul>
            </div>
         </div>
      </section>

         <div class="container">
            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <br>
                  <h2>Profil KONI Kabupaten Kuantan Singingi</h2>
               </div>
            </div>
         <div id="team-slider">
               <div class="container">
                  <?php
               include 'koneksi.php';
                 $no = 1;
                 $query = "SELECT * FROM tentang ORDER BY id ASC";
                 $koni = $db->prepare($query);
                 $koni->execute();
                 $res1 = $koni->get_result();

                 if ($res1->num_rows > 0) {
                    while ($row = $res1->fetch_assoc()) {
                     $id = $row['id'];
                      $nama = $row['nama'];
                      $jabatan = $row['jabatan'];
                      $galeri = $row['galeri'];
            ?>
               
                  <div class="col-md-3">
                     <div class="team-column style-2">
                        <div class="feature-img">
                           <div class="post-heading">
                        <img src="../admindashboard/upload/<?php echo $galeri; ?>" width="268px" height="368px">
                     </div>
                  </div>
                        <div class="player-name">
                           <div class="desination-2"><?=$jabatan?></div>
                           <h5><?=$nama?></h5>
                        </div>
                     </div>
                  </div>
                     
                <?php } } else { ?> 
                <tr>
                  <td colspan='7'>Tidak ada data ditemukan</td>
                </tr>
             <?php } ?>
            </div>
         </div><br><br>

               <div class="container">
                  <div class="main-heading-holder">
                     <div class="main-heading sytle-2">
                        <center><h2>Struktur Organisasi</center></h2>
                           <div class="col">
                              <div class="contact-info">
                              <center><img src="images/struktur.jpg" width="800px" height="600px"></center>
                           </div>
                        </div>
                     </div>
                  </div> 
               </div>

         <div class="container">
            <div class="main-heading-holder">
               <div class="main-heading sytle-2">
                  <center><br><br><h2>Visi & Misi</h2>
                  <div class="contact-info">
                  <P><b><u>VISI</u></b></P>
                  <p>MENJADIKAN KONI SEBAGAI ORGANISASI YANG INDEPENDEN DAN PROFESIONAL, <br>UNTUK MEMBANGUN PRESTASI OLAHRAGA NASIONAL, <br>GUNA MENGANGKAT HARKAT DAN MARTABAT BANGSA INDONESIA</p>
                  <p><b><u>MISI</u></b></p>
                  <p>MEMBANGUN SINERGITAS, INDEPENDENSI DAN PROFESIONALISME KEPENGURUSAN KONI KABUPATEN KUANTAN SINGINGI.<br>
                  MENGEMBANGKAN SISTEM PEMBINAAN CABANG OLAHRAGA YANG TERTIB, TERATUR DAN BERKELANJUTAN.<br>
                  MENGGALI DAN MENGEMBANGKAN SUMBER-SUMBER PENDANAAN YANG POTENSIAL MENDORONG DAN <br>MEMAJUKAN AKTIVITAS DAN PRESTASI OLAHRAGA.<br>
                  MEMBANGUN KARAKTER OLAHRAGAWAN, BAIK ATLET, PELATIH DAN MANAJER GUNA MEMPERBESAR <br>SEMANGAT JUANG, RASA NASIONALISME DAN MILITANSI DALAM SETIAP USAHA MERAIH PRESTASI TERBAIK.
                  </p>
               </div>
            </div>
      </center>
   </div>
</div>
</div>

       <section id="contant" class="contant main-heading" style="padding-bottom:0;margin-bottom:-1px;position:relative;z-index:1;">
         <div class="dark-section" style="background:url(images/walle.jpg)">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-12">
                     <div class="heading-main">
                        <h2>Sejarah Komite Olahraga Nasional Indonesia (KONI)</h2>
                     </div>
                     <div class="testimonial-slider">
                           <!-- Carousel Slides / Quotes -->
                           <div class="carousel-inner text-justify">
                              <!-- Quote 1 -->
                              <div class="item active">
                                 <blockquote>
                                    <div class="row">
                                       <div class="col-sm-10 col-sm-offset-1">
                                          <p align="justify">Komite Olahraga Nasional Indonesia (KONI) adalah lembaga otoritas keolahragaan di Indonesia. 
                                          Polemic mengenai penamaan KONI muncul karena terbitnya Undang-Undang Nomor 3 Tahun 2005
                                          tentang Sistem Keolahragaan Nasional dan Peraturan Pemerintah Nomor 16 Tahun 2007
                                          tentang penyelenggaraan Keolahragaan yang tidak menyebutkan nama KONI dan Komite Olimpiade Indonesia (KOI). 
                                          Kantor Komite Olahraga Nasional Indonesia (KONI) Kabupaten Kuantan Singingi terletak di (Gor) Hall B Sport Centre Kabupaten Kuantan Singingi.
                                          Peran KONI KUANSING adalah Mengembangkan sistem pembinaan cabang Olahraga yang tertib, 
                                          teratur dan membangun prestasi Olahraga Nasional. Bahkan KONI KUANSING juga Membangun karakter olahragawan
                                          baik atlet, pelatih, dan manajer agar memperbesar semangat rasa nasionalisme dan militansi dalam setiap usaha meraih prestasi terbaik.
                                          </p>
                                       <h1><b>- KONI KUANSING -</b></h1>
                                       </div>
                                    </div>
                                 </blockquote>
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer id="footer" class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="full">
                     <div class="footer-widget">
                        <div class="footer-logo">
                           <a href="index.html"><img src="images/koni-bg.png" alt="#" /></a>
                        </div>
                        <p>KONI Bermarwah Kuansing Juara</p>
                        <ul class="social-icons style-4 pull-left">
                           <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                           <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Menu</h3>
                        <ul class="footer-menu">
                           <li><a href="index.php">Home</a></li>
                           <li><a href="tentang.php">Tentang</a></li>
                           <li><a href="galeri.php">Galeri</a></li>
                           <li><a href="venue.php">Venue</a></li>
                           <li><a href="kontak.php">Kontak</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="full">
                     <div class="footer-widget">
                        <h3>Kontak KONI</h3>
                        <ul class="address-list">
                           <li><i class="fa fa-map-marker"></i> Hall. B Sport Centre Kabupaten Kuantan Singingi..</li>
                           <li><i class="fa fa-phone"></i> 0812100880 – 081371984302</li>
                           <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> konikuansing@yahoo.com</li>
                        </ul>
                     </div>
                  </div>
               </div><br>
               <div class="col-md-3">
                  <div class="full">
                     <div class="contact-footer">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.826452761723!2d101.53157750791041!3d-0.5217347678050264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2a4dfa5343e5e5%3A0xc3d35d6a557420e!2sGOR%20B%20sport%20Centre%20Kuansing!5e0!3m2!1sid!2sid!4v1657958379431!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="footer-bottom">
            <div class="container">
               <p>Copyright © 2022 | KONI Kabupaten Kuantan Singingi</p>
            </div>
         </div>
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
   </body>
</html>