<!DOCTYPE HTML>
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">

<!--<![endif]-->

<head>

    <!-- START META SECTION -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>Ranty News</title>
    <meta name="keywords" content="Berita keuangan, riset keuangan, saham, obligasi, reksadana, perencanaan keuangan" />
    <meta name="author" content="PT INDO PREMIER SECURITIES" />
    <meta name="robots" content="index follow" />
    <meta name="description" content="Informasi dan riset meliputi, berita umum nasional dan internasional, investasi, saham, obligasi, reksadana, perencanaan keuangan serta riset IndoPremier" />

    
<!-- Mandatory Base Config -->
<!-- / Mandatory Base Config -->

<!--Mobile -->
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="GOOGLEBOT" content="index follow"/>
<meta name="apple-mobile-web-app-capable" content="yes" />

 
<meta name="theme-color" content="#172e56">
<!--/ END META SECTION -->

<!-- Google Tag Manager -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT6MG8M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NT6MG8M');</script>
<!-- End Google Tag Manager -->

<!-- CSS mandatory -->
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>importfont.css">
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>min-jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>min-framework.css">
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>min-layout.css">
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>min-uielement.css">
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>min-responsive.css">
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>jquery.scrollbar.css">
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>glyphicons.css">
<link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>min-added.css">
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>font-awesome.min.css" /> -->


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

<!-- END STYLESHEETS -->

<!-- modernizr script -->
<script type="text/javascript" src="<?php echo base_url('assets/f_news/js/'); ?>modernizr.js"></script>
<!--/ modernizr script -->

<!-- Mandatory JS --> 
<script type="text/javascript" src="<?php echo base_url('assets/f_news/js/'); ?>framework.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/f_news/js/'); ?>jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/f_news/js/'); ?>allwebpages.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/f_news/js/'); ?>jquery.eventsource.js"></script>
<!--/ Mandatory JS -->




<!--POP DETAIL ITEM-->
<div id="login_modal" class="modal fade" tabindex="-1" role="dialog">
<div id="login_modal_container" class="container">
    
    <div class="clearfix mt20 mb20"></div>
    <div class="">
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <div class="panel">
                <div class="panel-body pa20">
                    <div class="text-warning text-center fsize20"><i class="ico-warning2 fa-3x"></i></div>
                    <h3 class="text-center mb10">Member Only</h3>
                    <h5 class="text-center mt0">Silahkan Login Atau Register</h5>
                    <div class="clearfix mt20"></div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="clearfix">
                                <div class="form-stack has-icon pull-left">
                                    <input name="username" id="username" class="form-control input-lg" placeholder="Login ID" type="text" onkeypress="if(event.keyCode == 13){$( '#password' ).focus();}" maxlength="16">
                                    <i class="ico-user2 form-control-icon"></i>
                                </div>
                                <div class="clearfix mb15"></div>
                                <div class="form-stack has-icon pull-left">
                                    <input name="password" id="password" class="form-control input-lg" placeholder="Password" type="password" onkeypress="if(event.keyCode == 13){procesLogin('stay');}">
                                    <i class="ico-lock2 form-control-icon"></i>
                                </div>
                            </div>

                            <div id="error-container" class="text-danger mb15"></div>

                            <div id="mainLoginShowCaptcha" style="display:none" class="panel widget pa5 pb10">
                                <p class="text-default text-center mb5">Image Verification</p>
                                <div class="table-layout nm">
                                    <div class="col-xs-6 pr5">
                                        <input id="frmCaptchaRandomId" name="frmCaptchaRandomId" value="15" type="hidden">
                                        <span id="spanImageCaptchaLoginMain" ><img src="../allwebcore/include/image_captcha.php?seqcaptcha=15" class="img-responsive" style="height:80px;"></span>
                                    </div>
                                    <div class="col-xs-6 pl5">
                                        <input class="form-control mb10" id="frmCaptchaLogin" main="frmCaptchaLogin" value="" type="text">
                                        <button class="btn btn-default btn-block" type="button" onClick="reloadImageCaptchaLogin('mainlogin');">Reload Image</button>
                                    </div>
                                </div>
                            </div>
                            <button type="button" onclick="procesLogin('stay');" class="btn btn-primary btn-block btn-lg"><span class="semibold">LOGIN</span></button>
                        </div>
                    </div>                  
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="clearfix"></div>
                    <div class="table-layout nm">
                        <div class="col-xs-9">
                            <p class="nm"><a class="text-default" href="../ipotmember/forgetpassword.php">Forget Password</a></p>
                            <p class="nm semibold"><a class="" href="../ipotmember/register_new.php">Register Here</a></p>
                        </div>
                        <div class="col-xs-3 text-right">
                            <a class="text-danger" href="javascript:void(0)" data-dismiss="modal" onClick="removeLoginModal()"><i class="ico-remove"></i> close</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    

<!-- =======================
======SCRIPT MODULE=========
============================-->
<script src="<?php echo base_url('assets/f_news/js/'); ?>login.js"></script>








    <!-- Optional Page CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>revslider.css">
    <!-- / Optional Page CSS -->

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/f_news/css/'); ?>theme-ip.css">
    <!-- / Theme CSS -->

</head>

<body>

    <!-- Google Tag Manager -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NT6MG8M"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NT6MG8M');</script>
<!-- End Google Tag Manager -->
<!-- PRINT ONLY -->
<div class="visible-print">
    <div class="container">
        <img src="../../allwebcore/img/logo/BW-IndoPremier.svg" width="140" height="auto" alt=""/>
    </div>
</div>

<!-- START Header Top -->
<header id="header" class="navbar">

    <!-- START navbar header -->
    <div class="navbar-header">
        <!-- Brand -->
        <a class="navbar-brand" href="/index.php">
            <span class="logo-text"></span>
        </a>
        <!--/ Brand -->
    </div>
    <!--/ END navbar header -->

    <!-- START Toolbar -->
    <div class="navbar-toolbar clearfix">
    
        <!-- START Left nav -->
        <ul class="nav navbar-nav visible-xs">
            <!-- Offcanvas left -->
            <li class="navbar-main ">
                <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                    <span class="meta">
                        <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                    </span>
                </a>
            </li>
            <!--/ Offcanvas left -->
        </ul>
        <!--/ END Left nav -->
                                    
        <!-- Login BTN -->
        
 
    </div>
        
</header>
<!--/ END Header Top -->
<div class="clearfix"></div>


<!-- START MENU (MOBILE) -->
<aside class="sidebar sidebar-left sidebar-menu visible-xs"> 
    
    <!-- START Sidebar Content -->
    <section class="content slimscroll" >
        
        <!-- START Navigation/Menu -->
        <ul class="topmenu topmenu-responsive" data-toggle="menu">
            <h5 class="heading">Main Menu</h5>
            <li> <a href="javascript:void(0);" data-target="#about" data-toggle="submenu" data-parent=".topmenu"> <span class="text">About</span> <span class="arrow"></span> </a>
                <ul id="about" class="submenu collapse ">
                    <li > <a href="about.php?page=background"> <span class="text">Background</span> </a> </li>
                    <li > <a href="about.php?page=timeline"> <span class="text">Timeline History</span> </a> </li>
                    <li > <a href="about.php?page=management"> <span class="text">Management</span> </a> </li>
                    <li > <a href="about.php?page=vision"> <span class="text">Vision & Mission</span> </a> </li>
                    <li > <a href="about.php?page=tombstone"> <span class="text">Our Tombstones</span> </a> </li>
                    <li > <a href="about.php?page=awards"> <span class="text">Awards & Achievement</span> </a> </li>
                </ul>
            </li>
            <li> <a href="javascript:void(0);" data-target="#solution" data-toggle="submenu" data-parent=".topmenu"> <span class="text">Solutions</span> <span class="arrow"></span> </a>
                <ul id="solution" class="submenu collapse ">
                    <li > <a href="solutions.php?page=individual"> <span class="text"><span class="semibold">Individual & Family</span></span> </a>
                        <ul class="submenu ">
                            <li> <a href="ipotstock/"> <span class="text">Investasi Saham</span> </a> </li>
                            <li> <a href="ipotfund/"> <span class="text">Investasi ReksaDana</span> </a> </li>
                            <li> <a href="ipotplan/"> <span class="text">Perencanaan Keuangan</span> </a> </li>
                        </ul>
                    </li>
                    <li class="mt15"> <a href="solutions.php?page=corporate"> <span class="text"><span class="semibold">Corporate Solutions</span></span> </a>
                        <ul class="submenu ">
                            <li > <a href="solutioncorp.php?page=solib1"> <span class="text">Investment Banking</span> </a> </li>
                            <li > <a href="solutioncorp.php?page=solequity"> <span class="text">Equity Sales & Trading</span> </a> </li>
                            <li class="mt10"> <a href="solutioncorp.php?page=solfixedincome"> <span class="text lheight120">Fixed Income Sales & Trading</span> </a> </li>
                            <li class="mb15"></li>
                        </ul>
                    </li>
                    
                </ul>
            </li>
            <li>
                <a href="news_list_detailList.php">
                    <span class="text">news_list_detail & Research</span>
                </a>
            </li>
            
            <li>
                <a href="contactus.php">
                    <span class="text">Contact us</span>
                </a>
            </li>
            
            
            
            <li class="mb30"></li>
        </ul>
        <!--/ END Navigation/Menu --> 
        
    </section>
    <!--/ END Sidebar Container --> 
</aside>




    <!-- START Sidebar (right) -->
<aside class="sidebar sidebar-right">

    <div class="offcanvas-container" data-toggle="offcanvas" data-options='{"openerClass":"offcanvas-opener", "closerClass":"offcanvas-closer"}'>

        <div class="offcanvas-wrapper">
            
            <!-- Header -->
            <div class="header pl20 pr20 text-left" style="border-bottom: 1px solid; border-color: #5b6165 !important; background-color: #1D1D1D !important">
                                <h5 class="mb0 mt5 text-center text-muted">Quick Link</h5>
                            </div>
            <!--/ Header -->
                        
            <div class="content slimscroll bgcolor-inverse">
                            
                
        <div class="pa15 visible-xs">
            <a href="ipotmember" class="btn btn-primary btn-block mt10 mb10" rel="tooltip" title="Login">
                <i class="ico-lock"></i> LOGIN
            </a>
            <a href="ipotmember/register_new.php" class="btn btn-success btn-block mt10 mb10" rel="tooltip" title="Register" onClick="ga('send', 'event', { 'eventCategory': 'Opening Account', 'eventAction': 'Open An Account', 'eventLabel': 'Umum - Online'});">
                <i class="ico-signup"></i> OPEN AN ACCOUNT
            </a>
        </div>
    
<script>
    function registerpop () {
        $('#RegisterContainer').modal()
    }
    function upgradepop () {
        $('#upgradeFasilitas').modal()
    }
</script>               
                
                
                <div class="panel-body">
                    <div class="well well-small text-muted text-center" style="background-color: #404040 !important; border: none !important">
                        
                                                
                        <p class="lheight100 nm">
                            <a class="text-muted" href="/ipotgo">
                                INDOPREMIER<br><small class="fsize10">OUR COMPANY SITE</small>
                            </a>
                        </p>
                        <hr class="mt10 mb10" style="border-color: #5b6165 !important"> 
                        <p class="lheight100 nm">
                            <a class="text-muted" href="/ipotgo">
                                IPOTGO<br><small class="fsize10">WEB INVESTASI TERINTEGRASI</small>
                            </a>
                        </p>
                        <hr class="mt10 mb10" style="border-color: #5b6165 !important"> 
                        <p class="lheight100 nm">
                            <a class="text-muted" href="/ipotku">
                                IPOTKU<br><small class="fsize10">WEB CARA MODERN MENABUNG</small>
                            </a>
                        </p>
                        <hr class="mt10 mb10" style="border-color: #5b6165 !important">     
                        <p class="lheight100 nm">
                            <a class="text-muted" href="/ipotfund">
                                IPOTFUND<br><small class="fsize10">WEB INVESTASI REKSADANA</small>
                            </a>
                        </p>
                        <hr class="mt10 mb10" style="border-color: #5b6165 !important"> 
                        <p class="lheight100 nm">
                            <a class="text-muted" href="/ipotstock">
                                IPOTSTOCK<br><small class="fsize10">WEB INVESTASI SAHAM</small>
                            </a>
                        </p>
                        <hr class="mt10 mb10" style="border-color: #5b6165 !important"> 
                        <p class="lheight100 nm">
                            <a class="text-muted" href="/ipotnews_list_detail">
                                IPOTnews_list_detail<br><small class="fsize10">WEB BERITA INVESTASI</small>
                            </a>
                        </p>    
                                
                    </div>              
                </div>
                
                
            </div>
        </div>

    </div>

</aside>
<!--/ END Sidebar (right) -->

    <!-- START Main -->
    
    
    <section id="main" role="main">
            <div class="mb10 clearfix" style="background-color: black;">
    <div class="container" >
        <div class="row" >
            <div class="col-sm-7 col-md-8 col-lg-9">
                
                <h4><a href="<?php echo base_url('news_list'); ?>" style="color: white;">Ranty Pesta News </a></h4>
            </div>
        
        </div>
        <div class="clearfix"></div>
    </div>
</div>





<section class="section pt10 bgcolor-white">
    <div class="container ">
        <div class="row">
            <div class="col-sm-8">
                <div class="newsContent">
                    <div class="mb20">
                        <dl class="listNews">

                            <dt>
                               <?php echo $list->title; ?>
                            </dt>

                            <div class="clearfix mb20">
                                <small>
                                <?php
                                    echo tanggalan_hari(date("l",strtotime($list->published_date)));
                                    echo tanggalan($list->published_date)." ";
                                    echo date("H:i:s",strtotime($list->published_date))." WIB ";
                                echo "Oleh Adminisrator";
                                ?>  
                                </small>
                            </div>
                            
                            <article>
                                <img src="<?php echo base_url('upload/'.$list->foto); ?>" style="width: 100%; height: 100%;">
                                <br>
                                <?php
                                 echo $list->content;
                                ?>
                                <br>                                
 
                        </dl>
                       
                        <div class="clearfix">
                                            
                             
                        </div>

                        <div class="clearfix"></div>

                        

                    </div>
                </div>
            </div>


            <div class="col-sm-4">
                                <div class="listNewsRight">
                    <div class="listNewsRightContainer">
                        <div class="panel">
                            <div class="panel-heading">
                                <hr class="visible-xs">
                                <h4 class="title mt10 semibold">Berita Terbaru</h4>
                            </div>
                            <div class="panel-body pt0">
                                <div class="listnews_listRight">
                       
                            <?php
                            //var_dump($list);
                            foreach ($list_bar as $key => $value) {
                                echo '<dl class="listnews_list"><small> '. tanggalan_hari(date("l",strtotime($value->published_date))).", ";
                                echo tanggalan($value->published_date)." ";
                                echo date("H:i:s",strtotime($value->published_date))." WIB ";
                                echo "Oleh Adminisrator </small> <br> ";
 
                                echo '<dt><a href="'.base_url('news_list_detail/get_news/').$value->id.'"> '.$value->title.'</a></dt>'; 
                                echo '<article>'.limit_to_numwords($value->content,10).'"..."</article></dl>';
                            }
                            ?>
                        <div class="clearfix"></div>
                        </div>
                            </div>
                        </div>

                    </div>
                </div>
                            </div>
        </div>


        <div style="display:none;">
            <div id="stockNews_AKRA"></div>     </div>

    </div>
</section>



<script src="<?php echo base_url('assets/f_news/js/'); ?>newslistmodule.js"></script>




        <script>
    //showMainGeneralnews_list_detail('1');
    showMoreGeneralnews_list_detail('1');
    optionFundManager('fund');
    optionFundName('fund');
    $( "#btnnews_list_detailFilter" ).click();
    </script>
        

    </section>
    <!--/ END Main -->


    <!-- START Footer -->
    



<!-- START To Top Scroller -->
<a href="javascript:void(0);" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="60%"><i class="ico-angle-up"></i></a>
<!--/ END To Top Scroller -->



<!--POP INFO MODAL -->








<!-- =======================
======SCRIPT MODULE=========
============================-->

<script src="<?php echo base_url('assets/f_news/js/'); ?>searchBar.js"></script>

 

    <!-- END Footer -->


    <!-- (Load bottom to reduce load time) -->
    <!-- Page JS -->    
    <script src="<?php echo base_url('assets/f_news/js/'); ?>allindopremier.js"></script>
    <!--/ Page JS -->

</body>

</html>