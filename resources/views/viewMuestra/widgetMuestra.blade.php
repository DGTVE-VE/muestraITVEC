<hr class="hrorganizan">
<div class="row" style="background-color: white;">
    <div class="col-md-8">
        <div class="col-md-12 text-center">
            <br><br>
            <hr class="hrmuestra">
            <h1 class="titulofases">ORGANIZAN</h1>
            <br><br>
            <hr class="hrmuestra">
            <div class="col-md-4"><a href="http://www.ibe.tv/es/canal/iberoamericano">{{ HTML::image('imagenes/imgIndex/logocanal.png','Logo Canal Iberoamericano', array('class'=>'img-responsive center-block', 'height'=>'250'))}}</a></div>
            <div class="col-md-4"><a href="http://www.gob.mx/sep">{{ HTML::image('imagenes/imgIndex/logosep.png','SEP', array('class'=>'img-responsive','width'=>'280', 'height'=>'250'))}}</a></div>
            <div class="col-md-4"><a href="http://www.televisioneducativa.gob.mx/">{{ HTML::image('imagenes/imgIndex/logodgtve.png','DGTVE', array('class'=>'img-responsive','width'=>'280', 'height'=>'250'))}}</a></div>
        </div>        
        <div class="col-md-12 text-center">
            <hr class="hrmuestra">
            <br><br><br>
            <h1 class="titulofases">SOCIOS</h1>
            <br><br>
            <hr class="hrmuestra">
            <div class="col-md-6"><a href="http://segib.org/">{{ HTML::image('imagenes/imgIndex/logosigib.png','Secretaria General Iberomaricana', array('class'=>'img-responsive  center-block'))}}</a></div>
            <div class="col-md-6"><a href="http://www.nci.tv/">{{ HTML::image('imagenes/imgIndex/logotei.png','TEIB', array('class'=>'img-responsive center-block'))}}</a></div>        
        </div>        
    </div>
    <div class="col-md-4">
        <hr class="hrmuestra">
        <div class="col-md-12">
            <img src="{{asset('imagenes/imgIndex/facebook.png')}}" width="30%" height="30%">
            <!-- Facebook Badge START -->
            <br />
            <div class="fb-page" data-href="https://www.facebook.com/CanaI.iberoamericano/" data-tabs="timeline" data-width="474" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/CanaI.iberoamericano/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CanaI.iberoamericano/">Canal Iberoamericano</a></blockquote></div>
            <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.6";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
            <!-- Facebook Badge END -->
        </div> 
        
        <div class="col-md-12">
            <hr>
            <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/CanalIbe" data-widget-id="738498110033272833">Tweets por el @CanalIbe.</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>          
        </div>
    </div>
</div>