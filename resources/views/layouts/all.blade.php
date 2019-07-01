<!DOCTYPE HTML>
<html lang="en">
<head>
<meta  charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Пригласительный сайт</title> 

<!-- Favicons -->
<link rel="shortcut icon" href="img/mouse.png">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
{{-- <link rel="stylesheet" href="css/wishes-grid.css"> --}}
<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Montserrat:400,500,700|Playfair+Display:400,400i,700,700i&amp;subset=cyrillic" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" media="screen">
<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
</head>
<body>

        <div class="animsition"> 

                <!-- Header -->
            
                <header class="navbar navbar-mobile md-hide">
                  <a href="/" class="brand js-target-scroll">
                    Askar&Altynai
                  </a>
            
                  <!-- Navbar Collapse -->
            
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  
                  
            
                  <!-- Navigation Mobile -->
            
                  <nav class="nav-mobile">
                    <div class="collapse navbar-collapse" id="nav-collapse"> 
                      <ul class="nav-mobile-list">
                        <li class="active menu-item">
                          <a href="/">Домой</a>
                        </li>
                        <li class="menu-item">
                          <a href="/gallery">Галерея</a>
                        </li>
                        <li class="menu-item">
                                <a href="/wishes">Пожелания молодоженам</a>
                        </li>
                      </ul>
                    </div>
                  </nav> 
                </header>
            
                <header class="visible-md visible-lg navbar-left">
                  <div class="brand-panel">
                    <a href="/" class="brand js-target-scroll">
                      Askar&Altynai
                    </a>
                  </div>
            
                  <!-- Navigation left -->
            
                  <nav class="nav-left hidden-xs hidden-sm">
                    <ul class="nav-left-list">
                        <li class="menu-item">
                            <a href="/">Домой</a>
                        </li>
                        <li class="menu-item">
                            <a href="/gallery">Галерея</a>
                        </li>
                        <li class="menu-item">
                            <a href="/wishes">Пожелания молодоженам</a>
                        </li>
                    </ul>
                  </nav>
                  
                  
                  
                </header>

    @yield('content')

    <section class="section">
            <div class=" container-fluid" >
                  <div id="map" style="width:100%; height:400px">
                          <script type="text/javascript">
                              var map;
                  
                              DG.then(function () {
                                  map = DG.map('map', {
                                      center: [51.131646256713196, 71.42922163009645],
                                      zoom: 13
                                  });
                  
                                  DG.marker(
                                      [51.131646256713196, 71.42922163009645],
                                      {label : 'Нажми на меня :D'}).addTo(map).bindPopup('Динмухамеда Кунаева, 29/1 <br> +7 (7172) 55‒00‒01 <br> <a id="white" href="https://2gis.kz/astana/rsType/bus/to/71.429225%2C51.131383%7C%D0%94%D0%B8%D0%BF%D0%BB%D0%BE%D0%BC%D0%B0%D1%82%2C%20%D0%BE%D1%82%D0%B5%D0%BB%D1%8C?utm_medium=widget&utm_campaign=firmsonmap&utm_source=route&queryState=center%2F71.429225%2C51.131383%2Fzoom%2F16%2FrouteTab">Чтобы узнать как проехать нажми на меня <3</a>');
                              });
                          </script>
                      </div>
             </div>
          </section>

<footer id="footer" class="footer">     
        <div class="container-fluid">
            <div class="row-base row">
            <div class="brand-info col-base col-md-6 col-lg-4">
                <a href="#top" class="brand js-target-scroll">
                Askar&Altynai
                </a>
                <p>Ждем вас на свадьбе</p>
            </div>
            <div class="col-contacts col-base col-md-6 col-lg-3 col-lg-offset-1">
                <address><a href="tel:87783530008" class="phone">8 778 353 000 8</a></address>
                <address> <a href="mailto:aldiyar.yerzhanuli@gmail.com" class="email">aldiyar.yerzhanuli@gmail.com</a></address>
            </div>
            
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="copyrights">
                © Copyright 2019 <a href="http://instagram.com/aldoniq">aldoniq</a>. All Rights Reserved
                </div> 
            </div>
        </div>
</footer>
</div>
    
    
<!-- SCRIPTS -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jarallax.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.js"></script>
<script src="js/interface.js"></script> 

</body>
</html>