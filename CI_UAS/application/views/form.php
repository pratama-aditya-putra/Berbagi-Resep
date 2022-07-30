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

    <title>Admin - Edit</title>
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
  </head>

  <body>
    <div id="page-wraper">
        <div class="d-flex justify-content-start">
            <button onclick="window.location.href='<?php echo base_url('admin/index/0') ?>'" class="btn-danger" style="font-size:20px; margin:20px;">Home</button>
        </div>
        <div class="container">
          <div class="section-heading">
            <h2>Edit Data</h2>
            <div class="line-dec"></div>
          </div>
          <div class="left-image-post"  style="border:solid; border-color:white; margin-left:10%; margin-right:10%;">
            <div class="row" style="margin-left:8%;">
                <form action="<?php echo base_url('admin/update_data') ?>" method="post" enctype="multipart/form-data" id="usrform">
                    <h4>ID Resep : <?php echo $idResep; ?></h4>
                    <h4>Nama Resep</h4><br/>
                    <input type="text" name="NamaResep" placeholder="Nama Resep"  id="usrform"style="width:500px;" value=" <?php echo $namaResep; ?>">
                    <input type="text" name="idResep" id="usrform" style="width:500px;" value="<?php echo $idResep; ?>" hidden>
                    <br/><br/>
                    <label for="rating"><h5 style="color:white;">Rating</h5></label>
                        <select id="rating" name="Rating" style="margin-left:30px;">
                        <?php 
                            for($i = 1; $i <= 5; $i++){
                                echo "<option value='$i'";
                                if($i == $rating)
                                    echo "selected";
                                echo ">$i</option>";
                            }    
                        ?>
                        </select><br/>
                    <label for="kategori"><h5  style="color:white;">Kategori</h5></label>
                        <select id="kategori" name="Kategori"  style="margin-left:10px;">
                            
                        <?php 
                            if($kategori == "utama")
                                 echo "<option value='utama' selected>Utama</option>";
                            else if($kategori == "penutup")
                                echo "<option value='penutup' selected>Penutup</option>";
                            else
                                echo "<option value='pembuka' selected>Pembuka</option>";
                        ?>
                        </select><br/> <br/>          
                    <?php echo "<img src='data:image/jpeg;base64,".base64_encode( $foto )."' style='height:250px; width:350px;'>"; ?><br/><br/>
                    <input type="file" name="userfile"/>
                <div class="row" >
                    <div class="column" style="margin:30px;">
                        <h4>Bahan</h4><br/>
                        <textarea name="Bahan" form="usrform" style="width:200px; height:300px;"><?php echo $bahan; ?></textarea>
                    </div>
                    <div class="column" style="padding:30px;">
                        <h4>Prosedur</h4><br/>
                        <textarea name="Prosedur" form="usrform" style="width:200px; height:300px;"><?php echo $prosedur; ?></textarea>
                    </div>
                    <div class="column" style="padding:30px;">
                        <h4>Deskripsi</h4><br/>
                        <textarea name="Deskripsi" form="usrform" style="width:200px; height:300px;"><?php echo $description; ?></textarea>
                    </div>
                </div>
                    <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary rounded-pill" style="width:100%;" />
                </form>
            </div>
          </div>
        </div>
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