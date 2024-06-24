<!DOCTYPE html>
<html lang="en">
<head>
<title>search result</title>
<meta charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<!--CSS-->
<link rel="stylesheet" href="css/bootstrap.css" >
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="fonts/font-awesome.css">
<!--JS-->
<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="search/search.js"></script>
<script src="js/jquery.mobilemenu.js"></script> 
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.equalheights.js"></script> 

<!--[if (gt IE 9)|!(IE)]><!-->
<script src="js/wow/wow.js"></script>
<script src="js/wow/device.min.js"></script>
<script>
    $(document).ready(function () {       
      if ($('html').hasClass('desktop')) {
        new WOW().init();
      }   
    });
</script>
<!--<![endif]-->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <div id="ie6-alert" style="width: 100%; text-align:center;">
    <img src="http://beatie6.frontcube.com/images/ie6.jpg" alt="Upgrade IE 6" width="640" height="344" border="0" usemap="#Map" longdesc="http://die6.frontcube.com" />
      <map name="Map" id="Map"><area shape="rect" coords="496,201,604,329" href="http://www.microsoft.com/windows/internet-explorer/default.aspx" target="_blank" alt="Download Interent Explorer" /><area shape="rect" coords="380,201,488,329" href="http://www.apple.com/safari/download/" target="_blank" alt="Download Apple Safari" /><area shape="rect" coords="268,202,376,330" href="http://www.opera.com/download/" target="_blank" alt="Download Opera" /><area shape="rect" coords="155,202,263,330" href="http://www.mozilla.com/" target="_blank" alt="Download Firefox" />
        <area shape="rect" coords="35,201,143,329" href="http://www.google.com/chrome" target="_blank" alt="Download Google Chrome" />
      </map>
  </div>
  <![endif]-->
</head>
<body>
<header>
    <div class="container">     
        <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
            <ul class="nav sf-menu clearfix">
                <li><a href="index.html">home</a><em></em></li>
                <li class="sub-menu"><a href="index-1.html">about us</a><em></em><span></span>
                    <ul class="submenu">
                        <li><a href="#">Columns 01</a></li>
                        <li><a href="#">Columns 02</a></li>
                        <li><a href="#">Columns 03</a><span class="fa fa-angle-down"></span>
                            <ul class="submenu">
                                <li><a href="#">Columns 04</a></li>
                                <li><a href="#">Columns 05</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="index-2.html">products</a><em></em></li>
                <li><a href="index-3.html">services</a><em></em></li>
                <li class="active"><a href="index-4.html">contacts</a></li>
            </ul>
        </nav> 
        <h1 class="navbar-brand navbar-brand_ indent"><a href="index.html"><img src="img/logo.png" alt="logo"></a></h1>  
    </div>
</header>
<div class="content indent">
    <!--content-->
    <div class="container2">
        <div class="thumb-box10">
            <em><i></i></em>
            <div class="container">
                <h2>Search result:</h2>
                <div id="search-results"></div>
            </div>
            <strong><i></i></strong>
        </div>
    </div>
</div>
<!--footer-->
<footer>
    <div class="container">
        <img src="img/element2.png" alt="" class="wow fadeInUp">
        <figure class="wow fadeInUp"><img src="img/foo_logo.png" alt=""></figure>
        <p class="wow fadeInUp">&copy; <em id="copyright-year"></em> <span>|</span> <a href="index-5.html">Privacy Policy</a></p>
    </div>
</footer>
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
</html>