<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Dapoer Emak - tentang</title>
      <link rel="icon" href="<?php echo base_url('images/favicon.png')?>">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/templatemo-sixteen.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/owl.css') ?>">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php 
                    date_default_timezone_set("Asia/Jakarta");
                    $temp = date("G"); 
                    echo base_url('home/'.$temp) ?>"><h2>Dapoer <em>Emak</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="<?php 
                    date_default_timezone_set("Asia/Jakarta");
                    $temp = date("G"); 
                    echo base_url('home/'.$temp) ?>">
                    Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('content/'.$temp.'/0') ?>">Resep</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('about/'.$temp) ?>">About Us</a>
              </li>
              <li class="nav-item">
              <?php
                    if(($time <= 10)&&($time >= 7))
                        echo "<img src='".base_url('images/morning.png')."' width=50px' style='margin-bottom : 30px;' title='Morning Time'>";
                    else if(($time <= 14)&&($time >= 10))
                        echo "<img src='".base_url('images/day.png')."' width=50px' style='margin-bottom : 30px;' alt='Day Time'>";
                    else if(($time <= 18)&&($time >= 14))
                        echo "<img src='".base_url('images/afternoon.png')."' width=50px' style='margin-bottom : 30px;' title='Afternoon Time'>";
                  else
                        echo "<img src='".base_url('images/night.png')."' width=50px' style='margin-bottom : 30px;' title='Night Time'>";
              ?>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Tentang Kami</h4>
              <h2>Kelompok6 SI4</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latar Belakang Kami</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?php echo base_url('images/Fasilkom.jpg') ?>" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Siapakah kami?</h4>
              <p>Kami merupakan mahasiswa jurusan Ilmu Komputer stambuk 2019 Fakultas Teknologi Informasi Universitas Sumatera Utara, tepatnya di Medan Sumatera Utara. Kami sekarang berada di semester 4, kami melakukan perkuliahan daring saat ini. Ya itu sangat membosankan!<br><br>Jika user yang membaca website kami ini ingin memberikan saran atau kritik bisa mengubungi kami di sosial media yang tertera dibawah ini, Terima kasih!</p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Team Members</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="<?php echo base_url('images/team_01.jpg') ?>" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Mhd Fikri Akbar Simatupang</h4>
                <span>191401080</span>
                <p>Si Asisten laboratorium IKLC yang pake kacamata</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="<?php echo base_url('images/team_02.jpg') ?>" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Rhisa Adika Putri</h4>
                <span>191401119</span>
                <p>Si Manusia yang super keter kalo ngerjain tugas</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="<?php echo base_url('images/team_03.jpg') ?>" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Pratama Aditya Putra S</h4>
                <span>191401131</span>
                <p>Si Jenius yang diam-diam tapi luar biazaahh</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Kelompok6 UTS SI4</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>


    <!-- Additional Scripts -->
    <script src="<?php echo base_url('js/custom.js') ?>"></script>
    <script src="<?php echo base_url('js/owl.js') ?>"></script>
    <script src="<?php echo base_url('js/slick.js') ?>"></script>
    <script src="<?php echo base_url('js/isotope.js') ?>"></script>
    <script src="<?php echo base_url('js/accordions.js') ?>"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
