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
                                <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://localhost-uw21qaigap.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            
                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    
    
  
@endsection