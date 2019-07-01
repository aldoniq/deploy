@extends('layouts.all')

@section('content')


    
    <!-- Home -->
    
    <main class="main main-full main-bg2 jarallax" data-jarallax='{"speed": 0.6}'>
      <div class="container-fluid">
        <div class="opener">
          <h1><i></i></h1>
          <div class="no-countdown">
            <script src="//megatimer.ru/get/2610ec64008de3ff76dad6b65f9d66a0.js"></script>
          </div>
        </div>
      </div>
    </main>

    <div class="content"> 
        <div class="gallery-container">
            <div class="tz-gallery">
                <div class="row">  
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
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    
    
  
@endsection