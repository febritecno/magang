<!DOCTYPE html>
<html lang="en" id=home>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="materialize is a material design based mutipurpose responsive template">
  <meta name="keywords" content="material design, card style, material template, portfolio, corporate, business, creative, agency">
  <meta name="author" content="trendytheme.net">

  <title>Garuda Informatics</title>

  <!--  favicon -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/home/img/ico/favicon.png">
  <!--  apple-touch-icon -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/home/img/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/home/img/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/home/img/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/home/img/ico/apple-touch-icon-57-precomposed.png">

  <!-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900' rel='stylesheet' type='text/css'> -->

  <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Exo:500,600,600i,700" rel="stylesheet">   -->
  <!-- FontAwesome CSS -->
  <link href="<?php echo base_url(); ?>assets/home/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/dist/css/lightbox.min.css" rel="stylesheet">
  <!-- Material Icons CSS -->
  <link href="<?php echo base_url(); ?>assets/home/fonts/iconfont/material-icons.css" rel="stylesheet">
  <!-- magnific-popup -->
  <link href="<?php echo base_url(); ?>assets/home/magnific-popup/magnific-popup.css" rel="stylesheet">
  <!-- materialize -->
  <link href="<?php echo base_url(); ?>assets/home/materialize/css/materialize.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>assets/home/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- shortcodes -->
  <link href="<?php echo base_url(); ?>assets/home/css/shortcodes/shortcodes.css" rel="stylesheet">
  <!-- Style CSS -->
  <link href="<?php echo base_url(); ?>assets/home/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/home/style2.css" rel="stylesheet">

  <!-- Google Maps Location -->
  
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCdW_jLhEZY0VDeMsaQmel9yFGx38b_sf4&"></script>
  
  <style type="text/css">
  .draw-border {
    box-shadow: inset 0 0 0 4px #ffff;
    color: #ffff;
    transition: color 0.25s 0.0833333333s;
    position: relative;
  }
  .draw-border::before, .draw-border::after {
    border: 0 solid transparent;
    box-sizing: border-box;
    content: '';
    pointer-events: none;
    position: absolute;
    width: 0;
    height: 0;
    bottom: 0;
    right: 0;
  }
  .draw-border::before {
    border-bottom-width: 4px;
    border-left-width: 4px;
  }
  .draw-border::after {
    border-top-width: 4px;
    border-right-width: 4px;
  }
  .draw-border:hover {
    color: #ffe593;
  }
  .draw-border:hover::before, .draw-border:hover::after {
    border-color: #ffe593;
    transition: border-color 0s, width 0.25s, height 0.25s;
    width: 100%;
    height: 100%;
  }
  .draw-border:hover::before {
    transition-delay: 0s, 0s, 0.25s;
  }
  .draw-border:hover::after {
    transition-delay: 0s, 0.25s, 0s;
  }

  .btn {
    margin-top: 2%;
    background: none;
    border: none;
    cursor: pointer;
    line-height: 1.5;
    font: 700 1.2rem 'Roboto Slab', sans-serif;
    padding: 18px 50px;
    letter-spacing: 0.05rem;
  }
  .btn:focus {
    outline: 2px dotted #55d7dc;
  }

</style>
<script type="text/javascript">
  (function() {
    window.onload = function(){
            // Lintang = Latitude
            // Bujur = Longtitude
            <?php foreach ($kontak as $ko) {
              ?>
              var map;
              var Lintang = '<?php echo $ko->lat?>';
              var Bujur = '<?php echo $ko->long?>';
              <?php 
            }?>
            var options = {
              zoom: 16,
              center: new google.maps.LatLng(Lintang,Bujur),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById('Peta_Lokasi'), options);
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(Lintang,Bujur),
              map: map,
              title: 'Lokasi Garuda Informatics'
            });
          };
        })();
      </script>

      <style type="text/css">
      .banner-4{
        background: url(<?php echo base_url();?>assets/home/img/banner/banner-4.jpg);
      }
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>

      <body id="top" class="has-header-search">

        <!--header start-->
        <header id="header" class="tt-nav transparent-header nav-border-bottom">

          <div class="header-sticky light-header">

            <div class="container">

                    <!-- <div class="search-wrapper">
                        <div class="search-trigger pull-right">
                            <div class='search-btn'></div>
                            <i class="material-icons">&#xE8B6;</i>
                        </div>

                  
                        <i class="search-close material-icons">&#xE5CD;</i>
                        <div class="search-form-wrapper">
                            <form action="#" class="white-form">
                                <div class="input-field">
                                    <input type="text" name="search" id="search">
                                    <label for="search" class="">Search Here...</label>
                                </div>
                                <button class="btn pink search-button waves-effect waves-light" type="submit"><i class="material-icons">&#xE8B6;</i></button>
                                
                            </form>
                        </div>
                      </div> --> <!-- /.search-wrapper -->
                      
                      <div id="materialize-menu" class="menuzord">

                        <!--logo start-->
                        <a href="index.php" class="logo-brand">
                          <img src="<?php echo base_url(); ?>assets/home/assets/img/logo.png" alt=""/>
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul id="menu-nav" class="nav menuzord-menu pull-right light op-nav">
                          <li>
                            <a href="#home" class=page-scroll>Beranda</a>
                          </li>
                          <li>
                            <a href="#service" class=page-scroll>Layanan</a>
                          </li>
                          <li>
                            <a href="#about" class=page-scroll>Tentang</a>
                          </li>
                          <li>
                            <a href="#skills" class=page-scroll>Keahlian</a>
                          </li>
                          <li>
                            <a href="#product" class=page-scroll>Produk</a>
                          </li>
                          <li>
                            <a href="#contact" class=page-scroll>Lokasi</a>
                          </li>
                          <li>
                            <a href="#contact" class=page-scroll>Kontak</a>
                          </li>
                          <li>
                            <a href="<?php base_url()?>login" class=page-scroll>Log in</a>
                          </li>
                        </ul>
                        <!--mega menu end-->

                      </div>
                    </div>
                  </div>
                </header>
                <!--header end-->


                <!-- Hero Section -->
                <section id=banner class="banner-wrapper parallax-bg banner-4 valign-wrapper overlay dark-6" data-stellar-background-ratio="0.5">
                 <div class="valign-cell">
                  <div class="container padding-top-20">
                    <div class="row">
                      <div class="col-md-8">
                        <h1 class="intro-title text-uppercase white-text mb-30">Garuda Informatics</h1>
                        <p class="lead text-regular white-text">Spesialisasi dalam Pengembangan Perangkat Lunak pada Berbagai Platform baik Desktop, Website maupun Mobile</p>
                      </div><!-- col-md-6 -->
                    </div><!-- row -->
                  </div><!-- /.container -->
                </div><!-- /.valign-cell -->
              </section>
              <!-- Hero Section End -->

              <section id=service class="section-padding2">
                <div class="container">

                  <div class="text-center mb-30">
                    <h2 class="section-title">Layanan Kami</h2>
                  </div>
                  <div class="row no-gutter">
                    <div class="col-md-4 col-sm-6">
                      <div class="featured-box border-right text-center hover brand-hover">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                            <i class="material-icons brand-icon">&#xE30A;</i>
                            <h2>Desktop Apps</h2>
                            <a href ="<?php echo base_url(); ?>register" class="btn draw-border">Order Now</a>
                          </div>
                          <div class="content">
                            <p>Pembuatan software berbasis desktop</p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-4 col-sm-6">
                      <div class="featured-box border-right text-center hover brand-hover">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                            <i class="material-icons brand-icon">&#xE0DE;</i>
                            <h2>Mobile Apps</h2>
                            <a href ="<?php echo base_url(); ?>register" class="btn draw-border">Order Now</a>
                          </div>

                          <div class="content">
                            <p>Pembuatan software berbasis mobile.</p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                    </div><!-- /.col-md-3 -->

                    <div class="col-md-4 col-sm-6">
                      <div class="featured-box border-right text-center hover brand-hover">
                        <div class="featured-wrapper">
                          <div class="intro-header">
                            <i class="material-icons brand-icon">&#xE051;</i>
                            <h2>Website Apps</h2>
                            <a href ="<?php echo base_url(); ?>register" class="btn draw-border">Order Now</a>
                          </div>

                          <div class="content">
                            <p>Pembuatan software berbasis Website.</p>
                          </div>
                        </div><!-- /.featured-wrapper -->
                      </div><!-- /.featured-box  -->
                    </div><!-- /.col-md-3 -->                  


                  </div><!-- /.row -->
                </div><!-- /.container -->
              </section>


              <section id=about class="abouting banner-wrapper overlay overlay blue">
                <div class="container section-padding2">
                  <div class="col-md-8">
                    <h1 class="mb-30">Tentang Kami</h1>
                    <p>
                    Siapa Kami ? Garuda Informatics adalah sebuah software house yang berlokasi di Tambakberas Jombang Jawa Timur yang telah memiliki banyak pengalaman dibidang perangkat lunak Kami didukung pula oleh tenaga-tenaga ahli dibidangnya yang telah berpengalaman dalam pengembangan perangkat lunak dari berbagai bahasa pemrograman, platform pada berbagai macam project.</p>

                    <p>
                      Apa Yang Kami Kerjakan ? Seperti kebanyakan software house, kami mengembangkan perangkat lunak profesional yang telah digunakan oleh berbagai pihak baik Instansi Pemerintah maupun Swasta. Kami dapat menyediakan berbagai layanan dalam pengembangan perangkat lunak dari berbagai macam kebutuhan. Selain itu kami juga melayani berbagai layanan dibidang IT lainnya seperti networking, training, Project Management dan lain sebagainya.
                    </p> 
                  </div> <!-- col-md-8 -->

                </div> <!-- Container -->
              </section>

              <section id=skills class="section-padding2 grey lighten-3">
                <div class="container">
                  <div class="text-center mb-40">
                    <h1>Keahlian</h1>
                    <p>Kami memiliki tenaga ahli dibidang masing-masing. Berbagai layanan profesional yang dapat kami lakukan antara lain</p>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="progress-section">
                        <span class="progress-title">Web Design</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            <span>95%</span>
                          </div>
                        </div>
                      </div>

                      <div class="progress-section">
                        <span class="progress-title">Desktop Application</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">
                            <span>96%</span>
                          </div>
                        </div>
                      </div>

                      <div class="progress-section">
                        <span class="progress-title">Mobile Application</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                            <span>92%</span>
                          </div>
                        </div>
                      </div>

                      <div class="progress-section">
                        <span class="progress-title">Framework</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span>90%</span>
                          </div>
                        </div>
                      </div>

                      <div class="progress-section">
                        <span class="progress-title">Mobile Game</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100">
                            <span>94%</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="progress-section">
                        <span class="progress-title">System Architecture and Design</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100">
                            <span>91%</span>
                          </div>
                        </div>
                      </div>

                      <div class="progress-section">
                        <span class="progress-title">Project Management</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                            <span>90%</span>
                          </div>
                        </div>
                      </div>

                      <div class="progress-section">
                        <span class="progress-title">IT Support and Network Administration</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                            <span>95%</span>
                          </div>
                        </div>
                      </div>

                      <div class="progress-section">
                        <span class="progress-title">Testing and Quality Assurance</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100">
                            <span>93%</span>
                          </div>
                        </div>
                      </div>

                      <div class="progress-section">
                        <span class="progress-title">Technical Documentation and Training Service</span>
                        <div class="progress">
                          <div class="progress-bar brand-bg six-sec-ease-in-out" role="progressbar" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100">
                            <span>92%</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- /.row -->

                </div><!-- /.container -->
              </section>

              <section id="product" class="section-padding2 grey lighten-4">
                <div class="container">

                  <div class="text-center mb-30">
                    <h1 class="mb-30">Produk</h1>
                    <p class="section-sub">Beberapa produk perangkat lunak Garuda Informatics</p>
                  </div>

                  <div class="portfolio-container">
                    <ul class="portfolio-filter text-center brand-filter">
                      <li class="active waves-effect waves-light" data-group="all">All</li>
                      <li class="waves-effect waves-light" data-group="Websites">Websites</li>
                      <li class="waves-effect waves-light" data-group="Desktop App">Desktop App</li>
                      <li class="waves-effect waves-light" data-group="Mobile App">Mobile App</li>
                    </ul>


                    <div class="portfolio portfolio-with-title col-3 gutter mtb-50">

                      <?php foreach ($kolom as $k) {
                        ?>
                        
                        <div class="portfolio-item" id="item" data-groups='["all", "<?php echo $k->catagory;?>"]'>
                          <div class="card" id="card">
                            <div class="card-image waves-effect waves-block waves-light">
                              <a href="<?php echo base_url('storage/img_product/'.$k->img);?>" data-lightbox="<?php echo $k->img?>" data-title="<?php echo $k->name; ?>">
                               <img style="height: 200px!important;width: 350px!important;" class="activator" src="<?php echo base_url('storage/img_product/'.$k->img);?>" alt="garudainformatics">
                             </a>
                           </div>
                           <div class="card-content">
                            <span class="card-title activator" style="word-wrap: break-word;"><?php echo $k->name; ?> <i class="fa fa-ellipsis-v right"></i></span>
                            <p><a href="#"><?php echo $k->catagory;?></a></p>
                          </div>
                          <div class="card-reveal">
                            <span class="card-title" style="word-wrap: break-word;"><?php echo $k->name; ?> <i class="material-icons right">&#xE5CD;</i></span>
                            <p><a href="#"><?php echo $k->catagory; ?></a></p>
                            <p style="word-wrap: break-word;"><?php echo $k->desc; ?></p>
                            <!-- <a href="#" class="readmore">View full project</a> -->
                          </div>
                        </div>
                      </div>
                      <?php
                    }
                    ?>

                  </div>

           <!--        <div class="load-more-button text-center">
                    <a class="waves-effect waves-light btn btn-large pink" id="tombol"> <i class="fa fa-spinner left"></i> Load More</a>
                  </div>
                -->

              </div>
            </div>
          </section>

          <section id="contact" class="section-padding2 overlay blue2">

            <div class="container">
              <div class="text-center mb-30">
                <h2 class="section-title">Kontak dan Info</h2>
              </div>
              <div class="row">

                <div id="location" class="col-md-4 mt-30">
                  <div class="box-padding white z-depth-1">
                    <div class="box-body no-padding">
                      <div id="Peta_Lokasi" style="width: 100%; height: 360px;"></div>
                    </div>
                  </div>                   
                </div><!-- /.col-md-4 -->

                <div class="col-md-3 contact-info">

                  <address>
                    <i class="material-icons brand-color">&#xE8B4;</i>
                    <?php 
                    foreach ($kontak as $ko) {

                      ?>
                      
                      <div class="address">
                        <?php echo $ko->headline;?>

                        <hr>
                        
                        <p>
                         <?php echo $ko->address;?>
                       </p>
                     </div>

                     <i class="material-icons brand-color">&#xE61C;</i>
                     <div class="phone">
                      <p>
                        Phone: <br/><?php echo $ko->phone;?></p>
                      </div>

                      <i class="material-icons brand-color">&#xE0B7;</i>
                      <div class="mail">
                        <p>Mail To: <a href="mailto:<?php echo $ko->mail?>"><?php echo $ko->mail;?></a><br>
                        </p>
                      </div>
                    <?php } ?>
                  </address>
                </div><!-- /.col-md-4 -->

                <div class="col-md-5">
                  <?php $this->load->helper("form"); 
                  echo form_open('send');
                  ?>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-field">
                        <input type="text" name="name" class="validate" id="name">
                        <label for="name">Name</label>
                      </div>

                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                      <div class="input-field">
                        <label class="sr-only" for="email">Email</label>
                        <input id="email" type="email" name="email" class="validate" >
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                      </div>
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->

                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-field">
                        <input id="phone" type="number" name="phone" class="validate" >
                        <label for="phone">Phone Number</label>
                      </div>
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                      <div class="input-field">
                        <input id="website" type="text" name="website" class="validate" >
                        <label for="website">Your Website</label>
                      </div>
                    </div><!-- /.col-md-6 -->
                  </div><!-- /.row -->

                  <div class="input-field">
                    <textarea name="pesan" id="pesan" class="materialize-textarea" ></textarea>
                    <label for="pesan">Message</label>
                  </div>

                  <button type="submit" name="submit" class="waves-effect waves-light btn brand-bg pull-right mt-30">Send Message</button>
                </form>
              </div><!-- /.col-md-8 -->

            </div><!-- /.row -->
          </div>
        </section>


        <footer class="footer footer-four">
          <div class="primary-footer p1-bg text-center">
            <div class="container">

              <a href="#top" class="page-scroll btn-floating btn-large pink back-top waves-effect waves-light" data-section="#top">
                <i class="material-icons"></i>
              </a>


              <div class="row">
                <div class="col-md-12">
                  <div class="footer-logo">
                    <img src="assets/img/logo.png" alt="">
                  </div>



                </div><!-- /.col-md-12 -->
              </div><!-- /.row -->

              <hr class="mt-15">


              <ul class="social-link tt-animate ltr mt-20">
                <?php foreach ($link as $li) {
                  ?>
                  <li><a href="<?php echo $li->facebook;?>"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<?php echo $li->twitter;?>"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="<?php echo $li->instagram;?>"><i class="fa fa-instagram"></i></a></li>
                <?php }?>
              </ul>

            </div><!-- /.container -->
          </div><!-- /.primary-footer -->

          <div class="secondary-footer p2-bg">
            <div class="container text-center">
              <span class="copy-text">Copyright © <?php echo date("Y"); ?> <a href="#">Garuda Informatics</a> &nbsp;  | &nbsp;  All Rights Reserved &nbsp;  | &nbsp;  Designed By <a href="#">Garuda Informatics</a></span>
            </div><!-- /.container -->
          </div><!-- /.secondary-footer -->
        </footer>



        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader-position"> 
            <img src="<?php echo base_url(); ?>assets/home/img/logo-colored.png" alt="logo" >
            <div class="progress">
              <div class="indeterminate"></div>
            </div>
          </div>
        </div>
        <!-- End Preloader -->

      </body>

      <!-- jQuery -->

      <script src="<?php echo base_url(); ?>assets/dist/js/lightbox.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/jquery-2.1.3.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/materialize/js/materialize.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/jquery.easing.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/jquery.sticky.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/smoothscroll.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/imagesloaded.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/jquery.stellar.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/jquery.inview.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/jquery.shuffle.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/menuzord.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/bootstrap-tabcollapse.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/magnific-popup/jquery.magnific-popup.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/home/js/scripts.js"></script>


      </html>