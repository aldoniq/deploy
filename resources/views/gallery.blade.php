
@extends('layouts.app')

@section('content')

<div class="container gallery-container">
        <h1>Askar&Altynai Gallery</h1>
        <p class="page-description text-center">17.08.2019</p>
        <!-- correct -->
    <div class="col-md-12 text-center"> 
        <a href="/"><button id="singlebutton" name="singlebutton" class="btn btn-default">Домой</button></a>
    </div>
        <div class="tz-gallery">
            <div class="row">
                
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/2.jpg">
                            <img src="../images/2.jpg" alt="2">
                        </a>
                </div>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/1.jpg">
                            <img src="../images/1.jpg" alt="1">
                        </a>
                    </div>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/3.jpg">
                            <img src="../images/3.jpg" alt="3">
                        </a>
                </div>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/6.jpg">
                            <img src="../images/6.jpg" alt="6">
                        </a>
                </div>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/5.jpg">
                            <img src="../images/5.jpg" alt="5">
                        </a>
                </div>
                
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/7.jpg">
                            <img src="../images/7.jpg" alt="7">
                        </a>
                </div>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/4.jpg">
                            <img src="../images/4.jpg" alt="4">
                        </a>
                </div>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/8.jpg">
                            <img src="../images/8.jpg" alt="8">
                        </a>
                </div>
                <div class="col-sm-6 col-md-4">
                        <a class="lightbox" href="../images/10.jpg">
                            <img src="../images/10.jpg" alt="10">
                        </a>
                </div>
                <div class="col-sm-6 col-md-6">
                        <a class="lightbox" href="../images/9.jpg">
                            <img src="../images/9.jpg" alt="9">
                        </a>
                </div>
                <div class="col-sm-12 col-md-12">
                <div id="mc-container"></div>
                    <script type="text/javascript">
                    cackle_widget = window.cackle_widget || [];
                    cackle_widget.push({widget: 'Comment', id: 66957});
                    (function() {
                        var mc = document.createElement('script');
                        mc.type = 'text/javascript';
                        mc.async = true;
                        mc.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cackle.me/widget.js';
                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
                    })();
                    </script>
                <a id="mc-link" href="http://cackle.me">Комментарии для сайта <b style="color:#4FA3DA">Cackl</b><b style="color:#F65077">e</b></a>
            </div>
        </div>
    </div>

@endsection