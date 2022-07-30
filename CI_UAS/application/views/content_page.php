<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Dapoer Emak - Resep</title>
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
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('content/'.$temp) ?>">Resep</a>
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
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Kumpulan Resep</h4>
              <h2>Dapoer Emak</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active"><a href="<?php echo base_url('content/'.$temp.'/0')?>">Semua Resep</a></li>
                  <li><a href="<?php echo base_url('content_mod1/'.$temp)?>">Makanan Pembuka</a></li>
                  <li><a href="<?php echo base_url('content_mod2/'.$temp)?>">Makanan Utama</a></li>
                  <li><a href="<?php echo base_url('content_mod3/'.$temp)?>">Makanan Penutup</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    <?php
                        $i = 0;
                        foreach($result as $resep){
                            echo "<div class='col-lg-4 col-md-4 all des'>
                                <div class='product-item'>
                                <a href='".base_url('detail/'.$resep['idResep'])."'><img src='data:image/jpeg;base64,".base64_encode( $resep['foto'] )."' height='250px'></a>
                                <div class='down-content'>
                                  <a href='".base_url('detail/'.$resep['idResep'])."'><h4>".$resep['namaResep']."</h4></a>
                                  <p>".$resep['description']."</p>
                                  <ul class='stars'>";
                                            for($j = 0; $j < $resep['rating']; $j++)
                                            {
                                                  echo "<li><i class='fa fa-star'></i></li>";
                                            }
                                echo "<li>(".$resep['rating'].")</li>
                                 </ul>
                                </div>
                              </div>
                            </div>";
                        }
                    ?>
                </div>
            </div>
          </div>
          <div class="col-md-12">
            <ul class="pages">
                <?php 
                    $count = $this->db->count_all('resep');
                    $count = ceil($count/6);
                    if($list < 0){
                        
                    }
                    else if($list > 2){
                        $x1 = $list+1;
                        $x2 = $list-1;
                        if($list > 0)
                            echo "<li><a href='".base_url('content/'.$temp.'/'.$x2)."'><i class='fa fa-angle-double-left'></i></a></li>";
                        if($list > $count-4){
                            for($i = 3; $i <= $count; $i++){
                                $x = $i-1;
                                if($i == $list+1)
                                    echo "<li class='active'><a href='".base_url('content/'.$temp.$x)."'>".$i."</a></li>";
                                else
                                    echo "<li><a href='".base_url('content/'.$temp.'/'.$x)."'>".$i."</a></li>";
                            }
                                if($list < 5)
                                    echo "<li><a href='".base_url('content/'.$temp.'/'.$x1)."'><i class='fa fa-angle-double-right'></i></a></li>";
                        }
                        else{
                            for($i = $list+1; $i < $list+5; $i++){
                            $x = $i-1;
                            if($i == $list+1)
                                echo "<li class='active'><a href='".base_url('content/'.$temp.$x)."'>".$i."</a></li>";
                            else
                                echo "<li><a href='".base_url('content/'.$temp.'/'.$x)."'>".$i."</a></li>";
                            }
                        }
                            if($list < $count-1)
                                echo "<li><a href='".base_url('content/'.$temp.'/'.$x1)."'><i class='fa fa-angle-double-right'></i></a></li>";
                    }
                    else{
                        $x1 = $list+1;
                        $x2 = $list-1;
                        if($list > 0)
                            echo "<li><a href='".base_url('content/'.$temp.'/'.$x2)."'><i class='fa fa-angle-double-left'></i></a></li>";
                        for($i = $list+1; $i < $list+5; $i++){
                            $x = $i-1;
                            if($i == $list+1)
                                echo "<li class='active'><a href='".base_url('content/'.$temp.$x)."'>".$i."</a></li>";
                            else
                                echo "<li><a href='".base_url('content/'.$temp.'/'.$x)."'>".$i."</a></li>";
                        }
                            if($list <= $count-1)
                                echo "<li><a href='".base_url('content/'.$temp.'/'.$x1)."'><i class='fa fa-angle-double-right'></i></a></li>";
                    }
                ?>
            </ul>
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
