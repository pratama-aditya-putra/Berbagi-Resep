<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Dapoer Emak - Beranda</title>
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
                    echo base_url('home/'.$temp) ?>" style="padding-left : 30px;">
      <h2>Dapoer <em>Emak</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
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
              <li class="nav-item">
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Di DAPOER EMAK</h4>
            <h2>Mudah untuk masak apa saja</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Di DAPOER EMAK</h4>
            <h2>Lengkap bahan dan cara membuatnya</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Di DAPOER EMAK</h4>
            <h2>Resep makanan banyak</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Resep Populer</h2>
              <a href="<?php echo base_url('content/'.$temp.'/0') ?>">lihat semua resep<i class="fa fa-angle-right"></i></a>
            </div>
          </div>
            <?php
                $i = 0;
                foreach($result as $resep){
                    if($i > 5)
                        break;
                    echo "<div class='col-md-4'>
                            <div class='product-item'>
                              <a href='#'><img src='data:image/jpeg;base64,".base64_encode( $resep['foto'] )."' height='250px'></a>
                              <div class='down-content'>
                                <a href='#'><h4>".$resep['namaResep']."</h4></a>
                                <p>".$resep['description'].".</p>
                                <ul class='stars'>";
                            for($j = 0; $j < $resep['rating']; $j++)
                            {
                                  echo "<li><i class='fa fa-star'></i></li>";
                            }
                    echo        "<li>(".$resep['rating'].")</li>
                                </ul>
                              </div>
                            </div>
                          </div>";
                    $i++;
                }
            ?>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Tentang Dapoer Emak</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Mau nyari ide untuk masakan di rumah hari ini?</h4>
              <p>Website ini menyediakan kumpulan-kumpulan aneka resep masakan rumahan yang anda dapat lakukan sendiri. Dilengkapi dengan tahapan-tahapan memasak secara detail dan bahasa sehari-hari sehingga lebih mudah dimengerti. Ayo, mulai hari ini mari belajar masak.</p>
              <ul class="featured-list">
                <li><a href="#">Bahasa yang mudah dimengerti</a></li>
                <li><a href="#">Tahapan yang dibuat secara detail</a></li>
                <li><a href="#">Dilengkapi dengan gambar</a></li>
                <li><a href="#">Terdapat semua tipe masakan</a></li>
                <li><a href="#">Bahan-bahan yang dapat dijangkau dengan mudah</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?php echo base_url('images/feature-image.jpg') ?>" alt="">
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
