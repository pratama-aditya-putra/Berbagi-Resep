<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>Admin - Home</title>
      <link rel="icon" href="<?php echo base_url('images/favicon.png')?>">
<!--
Reflux Template
https://templatemo.com/tm-531-reflux
-->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/fontawesome.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/templatemo-style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lightbox.css') ?>">
      
      <style>
      
    ul.pages {
        margin-top: 30px;
        text-align: center;
    }

    ul.pages li {
        display: inline-block;
        margin: 0px 2px;
        background-color: #d2d4d6;
    }

    ul.pages li a {
        width: 44px;
        height: 44px;
        display: inline-block;
        line-height: 42px;
        border: 1px solid #eee;
        font-size: 15px;
        font-weight: 700;
        color: #121212;
        transition: all .3s;
    }

    ul.pages li a:hover,
    ul.pages li.active a {
        background-color: #f33f3f;
        border-color: #f33f3f;
        color: #fff;
    }

      </style>
  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="<?php echo base_url('assets/images/author-image.jpg') ?>" alt="" /></a>
            </div>
            <div class="author-content">
              <h4>Hai, <?php echo $this->session->userdata("nama"); ?></h4>
              <span>Web Designer</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Database</a></li>
                <li><a href="#section2">Tambah Data</a></li>
              </ul>
            </nav>
            <div class="copyright-text">
              <p>Copyright 2019 Reflux Design</p>
            </div>
          </div>
        </div>
      </div>
      <section class="section my-work" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <div class=" d-flex flex-row-reverse">
                <button onclick="window.location.href='<?php echo base_url('login/logout') ?>'" class="btn-danger" style="font-size:20px;">Logout</button>
            </div>
            <h2>Database</h2>
            <div class="line-dec"></div>
          </div>
          <div class="row">
            <div class="isotope-wrapper">
                <?php
                        $i = 0;
                        foreach($result as $resep){
                            echo "<div  class='row' style='border:solid; padding:10px; border-radius:10px; border-color:#ff4d4d; margin-bottom:20px;'>";
                            echo "<div class='column' style='width:40%;'>
                                  <a href='#'><h4>".$resep['idResep'].". ".$resep['namaResep']."</h4></a>
                                    <a href='#'><img src='data:image/jpeg;base64,".base64_encode( $resep['foto'] )."' style='width:100%;'></a>
                                    Rating : ".$resep['rating']."&emsp;  Kategori : ".$resep['kategori']."
                                    </div>
                                    <div class='column' style='margin-left:20px;'>
                                        <div class = 'row'>
                                            <div class='column'  style='margin-left:20px;'>
                                            <br/><h5>Bahan</h5>
                                            <div style='width:150px; height:150px; overflow:auto;'>
                                          <p>".$resep['bahan']."</p> </div></div>
                                            <div class='column'  style='margin-left:20px;'>
                                            <br/><h5>Prosedur</h5>
                                            <div style='width:150px; height:150px; overflow:auto;'>
                                          <p>".$resep['prosedur']."</p></div></div>
                                            <div class='column'  style='margin-left:20px;'>
                                            <br/><h5>Deskripsi</h5>
                                            <div style='width:150px; height:150px; overflow:auto;'>
                                          <p>".$resep['description']."</p></div></div>
                                        </div>
                                        <div class=row>
                                            <button class='btn btn-success' onclick='window.location.href = \"".base_url('admin/update/').$resep['idResep']."\"' style='width:40%; margin: 5%;'>EDIT</button>
                                            <button class='btn btn-danger' onclick='window.location.href = \"".base_url('admin/delete_data/').$resep['idResep']."/".$list."\"' style='width:40%; margin: 5%;'>DELETE</button>
                                        </div>
                                    </div>
                                  </div>";
                        }
                    ?>
          <div class="col-md-12 d-flex justify-content-center">
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
                                    echo "<li><a href='".base_url('admin/index/'.$x2)."'><img src=".base_url('images/prev.png')."></a></li>";
                                if($list > $count-4){
                                    for($i = 3; $i <= $count; $i++){
                                        $x = $i-1;
                                        if($i == $list+1)
                                            echo "<li class='active'><a href='".base_url('admin/index/'.$x)."'>".$i."</a></li>";
                                        else
                                            echo "<li><a href='".base_url('admin/index/'.$x)."'>".$i."</a></li>";
                                    }

                                }
                                else{
                                    for($i = $list+1; $i < $list+5; $i++){
                                        $x = $i-1;
                                        if($i == $list+1)
                                            echo "<li class='active'><a href='".base_url('admin/index/'.$x)."'>".$i."</a></li>";
                                        else
                                            echo "<li><a href='".base_url('admin/index/'.$x)."'>".$i."</a></li>";
                                    }
                                }
                                    if($list < $count-1)
                                        echo "<li><a href='".base_url('admin/index/'.$x1)."'><img src=".base_url('images/next.png')."></a></li>";
                            }
                            else{
                                $x1 = $list+1;
                                $x2 = $list-1;
                                if($list > 0)
                                    echo "<li><a href='".base_url('admin/index/'.$x2)."'><img src=".base_url('images/prev.png')."></a></li>";
                                for($i = $list+1; $i < $list+5; $i++){
                                    $x = $i-1;
                                    if($i == $list+1)
                                        echo "<li class='active'><a href='".base_url('admin/index/'.$x)."'>".$i."</a></li>";
                                    else
                                        echo "<li><a href='".base_url('admin/index/'.$x)."'>".$i."</a></li>";
                                }
                                    if($list <= $count-1)
                                        echo "<li><a href='".base_url('admin/index/'.$x1)."'><img src=".base_url('images/next.png')."></a></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section about-me" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2>Tambah Data</h2>
            <div class="line-dec"></div>
          </div>
          <div class="left-image-post"  style="border:solid; border-color:white; padding-left:65px;">
            <div class="row">
                <form action="<?php echo base_url('admin/insert') ?>" method="post" enctype="multipart/form-data" id="usrform">
                    <h4>Nama Resep</h4><br/>
                    <input type="text" name="NamaResep" placeholder="Nama Resep"  id="usrform"style="width:500px;" required><br/><br/>
                    <label for="rating"><h5>Rating</h5></label>
                        <select id="rating" name="Rating" style="margin-left:30px;">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select><br/>
                    <label for="kategori"><h5>Kategori</h5></label>
                        <select id="kategori" name="Kategori"  style="margin-left:10px;">
                          <option value="utama">Utama</option>
                          <option value="penutup">Penutup</option>
                          <option value="pembuka">Pembuka</option>
                        </select><br/> <br/>          

                    <input type="file" name="userfile"/ required>
                <div class="row" >
                    <div class="column" style="margin:30px;">
                        <h4>Bahan</h4><br/>
                        <textarea name="Bahan" form="usrform" style="width:200px; height:300px;" required>Enter text here...</textarea>
                    </div>
                    <div class="column" style="padding:30px;">
                        <h4>Prosedur</h4><br/>
                        <textarea name="Prosedur" form="usrform" style="width:200px; height:300px;" required>Enter text here...</textarea>
                    </div>
                    <div class="column" style="padding:30px;">
                        <h4>Deskripsi</h4><br/>
                        <textarea name="Deskripsi" form="usrform" style="width:200px; height:300px;" required>Enter text here...</textarea>
                    </div>
                </div>
                    <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary rounded-pill" style="width:100%;" />
                </form>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url('assets/jquery/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <script src="<?php echo base_url('assets/js/isotope.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/owl-carousel.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/lightbox.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>