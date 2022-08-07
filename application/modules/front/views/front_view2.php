<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");
?>
 
 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <!-- BASICS -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="icon" href="<?php echo base_url('assets/images/rp_logo.png'); ?>" type="image/x-icon">
  <title><?php echo $judul; ?></title>
  <meta name="description" 
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/bootstrap-theme.css">
  <link href="<?php echo base_url(); ?>assets/frontend/css/responsive-slider.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/animate.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/style.css">
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
   <!-- <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">  -->

  <!-- skin -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/skin/default.css">
  <!-- =======================================================
    Theme Name: Green
    Theme URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
 <style>
 /*body{
  font-family: 'Charmonman', cursive;
 }*/
.social {
    position: fixed;
    top: 550px;
    right:20px;
	
}

.social ul {
  padding: 0px;
  -webkit-transform: translate(270px, 0);
  -moz-transform: translate(270px, 0);
  -ms-transform: translate(270px, 0);
  -o-transform: translate(270px, 0);
  transform: translate(270px, 0);
}

.social ul li {
    display: block;
    margin: 3px;
    background: rgba(171, 219, 209, 0.36);
    width: 300px;
    text-align: left;
    padding: 5px;
    -webkit-border-radius: 30px 0 0 30px;
    -moz-border-radius: 30px 0 0 30px;
    border-radius: 30px 0 0 30px;
    -webkit-transition: all 1s;
    -moz-transition: all 1s;
    -ms-transition: all 1s;
    -o-transition: all 1s;
    transition: all 1s;
}

.social ul li:hover {
  -webkit-transform: translate(-110px, 0);
  -moz-transform: translate(-110px, 0);
  -ms-transform: translate(-110px, 0);
  -o-transform: translate(-110px, 0);
  transform: translate(-240px, 0);
  background: rgba(173, 178, 177, 0.4);
}

.social ul li:hover a {
  color: #000;
}

.social ul li:hover i {
  color: #fff;
  background: #16a085;
}

.social ul li i {
  margin-right: 10px;
  color: #000;
  background: #fff;
  padding: 10px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  width: 40px;
  height: 40px; 
  font-size: 20px;
  background: #ffffff;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);

}
 </style>
</head>

<body>


  <div class="header">
    <section id="header" class="appear">

      <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(0,0,0,1);">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars color-white"></span>
                    </button>
          <h1><a class="navbar-brand" href="<?php echo base_url(); ?>" data-0="line-height:90px;" data-300="line-height:50px;"> <img src="<?php echo base_url('assets/images/rp_logo.png'); ?>" style="width: 80px; height: 60px;"> Ranty Pesta
                    </a></h1>
        <!-- <link rel="icon" href="<?php echo base_url('assets/images/rp_logo.png'); ?>" type="image/x-icon"> -->
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
            <li><a href="#index">Home</a></li>
            <li><a href="#section-about">About</a></li>
            <li><a href="#services">Service</a></li>
            <li><a href="#client">Klien</a></li>
            <li><a href="#section-price_list">Price List Item</a></li>
            <li><a href="#line-pricing">Price Package</a></li>
            <li><a href="#section-works">Foto Gallery</a></li>
            <li><a href="#section-contact">Hubungi Kami</a></li>
            <li><a href="<?php echo base_url('news_list'); ?>" target="_blank">News</a></li>
            <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
          </ul>
        </div>
        <!--/.navbar-collapse -->
      </div>


    </section>
  </div>


  <div class="slider">
    <div id="about-slider">
      <div id="carousel-slider" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
         <ol class="carousel-indicators visible-xs">
          <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
          <?php
          foreach($slideshow as $k => $v){
            echo '<li data-target="#carousel-slider" data-slide-to="'.$v->seq_no.'"></li>';
          }
          ?>
  
        </ol>

        <div class="carousel-inner">
          <?php
          foreach ($slideshow as $key => $value) {
              if($value->seq_no == '1'){
                //echo "active";
                echo '<div class="item active">
                       <img src="file_manager_dir/'.$value->foto_url.'" class="img-responsive" alt="">
                        <div class="carousel-caption">
                          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                            <h2><span>'.$value->caption_a.'</span></h2>
                          </div>
                          <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                              <p>'.$value->caption_b.'</p>
                            </div>
                          </div>
                          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">
                            
                          </div>
                        </div>
                      </div>';
              }else{
         
                echo '<div class="item">
                        <img src="file_manager_dir/'.$value->foto_url.'" class="img-responsive" alt="">
                        <div class="carousel-caption">
                          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">
                             <h2><span>'.$value->caption_a.'</span></h2>
                          </div>
                          <div class="col-md-10 col-md-offset-1">
                            <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                              <p>'.$value->caption_b.'</p>
                            </div>
                          </div>
                          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">
                            
                          </div>
                        </div>
                      </div>';
              }
          }
          ?>



        </div>
        <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>

        <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
      </div>
      <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
	
	<nav class="social">
          <ul>
             
              <li><a href="https://web.whatsapp.com/send?phone=6283892563770&text=Hallo..Ranty Pesta !" target="_blank"><i class="fa fa-whatsapp"></i><b>Whatsapp Langsung Disini !</b></a></li>
          </ul> 
      </nav>
	  
  </div>
  <!--/#slider-->

  <!--about-->
  <section id="section-about">
    <div class="container">
      <div class="about">
        <div class="row ">
          <div class="col-lg-12">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">About</h2>
                <br>
 
              </div>
            
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial  clearfix">
           <?php
           echo $about->deskripsi;
           ?>
              <br/>
              
            </div>

          </div>
        </div>
        
        </div>

      </div>

    </div>
  </section>
  <section id="section-price_list">
    <div class="container">
      <div class="about">
        <div class="row ">
          <div class="col-lg-12">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">Price List Per Item</h2>
                <br>
 
              </div>
            
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-lg-12">
          <div class="align-center">
            <div class="testimonial  clearfix">
          <div class="table-responsive">
           <table class="table table-bordered table-striped table-hover js-basic-example" id="price_list_item" >
                  <thead>
                    <tr>
                      <th style="width:5%;">No</th>
                      <th style="width:5%;">Kategori</th>  
                      <th style="width:15%;">Item</th>  
                      <th style="width:5%;">Satuan</th> 
                      <th style="width:5%;">Harga Satuan</th> 
                      <th style="width:5%;">Opsi</th> 
                    </tr>
                  </thead> 
                </table> 
          </div>
            </div>

          </div>
        </div>
        
        </div>

      </div>

    </div>
  </section>

  <!-- detail data customer -->
  <div class="modal fade" id="DetailModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detail Price List Item</h4>
                        </div>
                        <div class="modal-body">
            
            <table class="table table-responsive">
              <tr>
                <td style="font-weight:bold;"> Kategori</td>
                <td> : </td>
                <td> <p id="kategori_dtl"> </p> </td>
                
                <td style="font-weight:bold;"> Nama Item</td>
                <td> : </td>
                <td> <p id="item_dtl"> </p> </td> 
              </tr>
              <tr>
                <td style="font-weight:bold;"> Satuan</td>
                <td> : </td>
                <td> <p id="satuan_dtl"> </p> </td>
                
                <td style="font-weight:bold;"> Harga Satuan</td>
                <td> : </td>
                <td> <p id="harga_satuan_dtl"> </p> </td> 
              </tr>
               
               
              <tr>
                <td style="font-weight:bold;"> Foto price_list_item  </td> 
                <td colspan="4">  : </td> 
              </tr> 
              <tr>
                <td colspan="6" align="center">  
                <img src="" class="img responsive" style="width:50%; height: 50%;" id="foto_dtl">
                </td>
              </tr>
             
               <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"> X Tutup </button>
               </div>
            </table>
                           
             </div>
                     
                    </div>
                </div>
    </div>
      
 
   

  <!-- services -->
  <section id="services" class="section pad-bot5 bg-white">
    <div class="container">
      <div class="row mar-bot5">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn" data-animation-delay="7.8s">

              <h2 class="section-heading animated">Our Service</h2>
              <h4>Neque porro quisquam est, qui dolorem ipsum quia dolor.</h4>

            </div>
          </div>
        </div>
      </div>
      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="wow bounceIn">
            <div class="align-center">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-cog"></i></figure>
                  </div>
                  <h2><a href="#">Easy to Customize</a></h2>
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">

              <div class="wow rotateIn">
                <div class="service-col">
                  <div class="service-icon">
                    <figure><i class="fa fa-desktop"></i></figure>
                  </div>
                  <h2><a href="#">Responsive Layout</a></h2>
                  <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="align-center">
            <div class="wow bounceIn">
              <div class="service-col">
                <div class="service-icon">
                  <figure><i class="fa fa-dropbox"></i></figure>
                </div>
                <h2><a href="#">Ready to Use</a></h2>
                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
  <!--/services-->
 

  <!-- client --> <!--client-->
 
  <section id="client" class="client-section appear clearfix"> 
    <div class="container">
      <div class="about">
        <div class="row ">
          <div class="col-lg-12">
            <div class="title">
              <div class="wow bounceIn">

                <h2 class="section-heading animated" data-animation="bounceInUp">Klien</h2>
                <br>
 
              </div>
            
            </div>
          </div>
        </div>
        <div class="row">
         <div class="col-lg-12">
          <div align="justify">
            <div class="testimonial  clearfix">
            
            <?php
             echo $client->deskripsi;
            ?>
            
            </div>

          </div>
        </div>
        
        </div>

      </div>

    </div>
  </section>
 
  <!-- /client -->

  <!-- spacer section:stats -->
  
  <section id="line-pricing" class="line-section line-center">
    <div class="container pad-top50">
      <div class="row mar-bot10 ">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <div class="wow bounceIn">

              <h2 class="section-heading animated" data-animation="bounceInUp">Price Package</h2>
              
            </div>
          </div>
        </div>
      </div>
      <div class="line-wrap">
        <div class="line-pricing-table">
          <div class="pricing-table-wrap" data-scrollreveal="enter top over 0.5s after 0.3s">
        
<div class="row">

    <div class="col-lg-12">
        
            <?php
             foreach ($price_package as $key => $value) {
           echo '<div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="&nbsp; &nbsp;" data-caption="'.$value->keterangan.'" data-image="'.base_url('upload/').$value->foto.'" data-target="#image-gallery">

             
            <img class="img-responsive" src="'.base_url('upload/').$value->foto.'" alt="Another alt text" style="width:440px; height:257px;" >
            </a>
            </div>';
            }
            ?>

</div>


<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>
 
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- spacer section:testimonial -->
     

  <!-- section works -->
  <section id="section-works" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Foto Gallery</h2>
          
          </div>
        </div>
      </div>

      <div class="row">
        <nav id="filter" class="col-md-12 text-center">
          <ul>
            <li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
            <?php
            foreach ($cat_foto as $keys => $values) {
              echo '<li><a href="#" class="btn-theme btn-small" data-filter=".'.$values->id.'">'.$values->deskripsi.'</a></li>';
            }
            ?>
            <!-- <li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Web Design</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".photography">Photography</a></li>
            <li><a href="#" class="btn-theme btn-small" data-filter=".print">Print</a></li> -->
          </ul>
        </nav>
        <div class="col-md-12">
          <div class="row">
            <div class="portfolio-items isotopeWrapper clearfix" id="3">
              <?php
              foreach ($list_foto as $keyz => $valuez) {
                echo '<article class="col-md-4 isotopeItem '.$valuez->id_kategori.'">
                <div class="portfolio-item">
                  <div class="wow rotateInUpLeft" data-animation-delay="4.8s">
                    <img src="'.base_url('upload/'.$valuez->foto).'" alt="'.$valuez->caption.'" />
                  </div>
                  <div class="portfolio-desc align-center">
                    <div class="folio-info">
                      <h5><a href="#">'.$valuez->caption.'</a></h5>
                      <a href="'.base_url('upload/'.$valuez->foto).'" class="fancybox"><i class="fa fa-external-link fa-2x"></i></a>
                    </div>
                  </div>
                </div>
              </article>';
              }
              ?>
              
            </div>

          </div>


        </div>
      </div>

    </div>
  </section>
 

  <!-- contact -->
  <section id="section-contact" class="section appear clearfix">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-md-offset-3 col-md-6">
          <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Hubungi Kami</h2>
            <p>Silahkan tinggalkan pesan anda di kolom pesan dibawah ini.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"  />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
			
			

            <div class="text-center"><button type="submit" class="line-btn green">Kirim Pesan</button></div>
          </form>
        </div>
        <!-- ./span12 -->
      </div>

    </div>
  </section>
   

  <!-- map -->
  <section id="section-map" class="clearfix">
    <div class="col-md-12"> 
        
     <?php
 
  echo str_replace('width="600" height="450"','width="100%" height="450"',$maps->url_map);
  ?>

     
      <br>
      <hr>
      </div> 
  </section>

  <section id="footer" class="section footer">
    <div class="container">
      <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
        <div class="col-sm-12 align-center">
          <ul class="social-network social-circle">
		      
            <li><a href="https://web.whatsapp.com/send?phone=6283892563770&text=Hallo..Ranty Pesta ! " target="_blank" class="icowa" title="wa"><i class="fa fa-whatsapp"></i></a></li>
		   
            <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="row align-center copyright">
        <div class="col-sm-12">
          <p>&copy; 2018 Ranty Pesta</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Green
            -->
        
          </div>
        </div>
      </div>
    </div>

  </section>
 
 
    <a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

  <script src="<?php echo base_url(); ?>assets/frontend/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
 
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.isotope.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/skrollr.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.scrollTo.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.localScroll.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/stellar.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/responsive-slider.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.appear.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/grid.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/main.js"></script>
  <script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.rowsGroup.js"></script>
  <script>
    
   function Show_Detail(id){ 
    $("#DetailModal").modal({backdrop: 'static', keyboard: false,show:true});
    $.ajax({
       url:"<?php echo base_url(); ?>front/get_detail_pricelist/"+id,
       type:"GET",
       dataType:"JSON", 
       success:function(result){  
                 var nf = new Intl.NumberFormat();
                 $("#id_kategori_dtl").html(result.id_kategori);
                 $("#kategori_dtl").html(result.kategori);
                 $("#item_dtl").html(result.item); 
         $("#satuan_dtl").html(result.satuan); 
         $("#harga_satuan_dtl").html('Rp. '+nf.format(result.harga_satuan));
          
         $("#foto_dtl").attr("src","upload/"+result.foto);
         
         
         
       }
     });
   }
       
    $(document).ready( function () {

       loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }

    
    $('#price_list_item').DataTable( {
      "ajax": "<?php echo base_url(); ?>front/fetch_price_list_item_front", 
       'rowsGroup': [1] 
    });
    

    });
    wow = new WOW({}).init();
  </script>
  <script src="<?php echo base_url(); ?>assets/frontend/contactform/contactform.js"></script>

</body>

</html>
