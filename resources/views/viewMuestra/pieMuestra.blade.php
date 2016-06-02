<div class="row" style="background-color: #818181;">
    <div class="col-md-3" >
        <center>
            <br><br><br>
            {{ HTML::image('imagenes/imgIndex/logomitec.png','Logo Muestra Iberoamericana', array('class'=>'img-responsive'))}}
            <br>
            <div class="col-md-12 text-center">
                <a data-original-title="Twitter" rel="tooltip"  href="#" class="btn btn-twitter over-logo">
                    <i class="fa fa-twitter fa-2x"></i>
                </a>
                <a data-original-title="Facebook" rel="tooltip"  href="#" class="btn btn-facebook">
                    <i class="fa fa-facebook fa-2x"></i>
                </a>

            </div>
        </center>
    </div>

    <div class="col-md-5">
        <br>
        <h3 class="text-center">PONTE EN CONTACTO</h3>
        <hr>    
        <div><h4>Envíanos tus dudas o comentarios.</h4></div>
        <form action="guardaContacto" method="post">
            {!!csrf_field()!!}
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" name="nombre_contacto" required placeholder="Nombre (requerido)" aria-describedby="basic-addon1">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="email" class="form-control" required name="correo" placeholder="Correo (requerido)" aria-describedby="basic-addon2">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="text" class="form-control" required name="asunto" placeholder="Asunto" aria-describedby="basic-addon3">
            </div>
            <br>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-align-justify"></span></span>
                <textarea class="form-control" rows="5" required name="mensaje" aria-describedby="basic-addon4"></textarea>
            </div>
            <br>
            <div><button class="btn btn-info" type="submit">Enviar</button></div>
            </br></br>
        </form>
    </div>
    <div class="col-md-4">
        <center> 
            <br><br><br>
            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:300px;width:500px;'><div id='gmap_canvas' style='height:300px;width:500px;'></div><div><small><a href="http://embedgooglemaps.com">									embed google maps							</a></small></div><div><small><a href="https://termsofusegenerator.net">terms of use generator</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:16, center:new google.maps.LatLng(19.35699452613836, - 99.1407719619018), mapTypeId: google.maps.MapTypeId.ROADMAP}; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(19.35699452613836, - 99.1407719619018)}); infowindow = new google.maps.InfoWindow({content:'<strong>Centro Nacional de las artes</strong><br>Avenida Río Churubusco 79, Coyoacán, Colonia Country Club, 04220 Ciudad de México<br>'}); google.maps.event.addListener(marker, 'click', function(){infowindow.open(map, marker); }); infowindow.open(map, marker); }google.maps.event.addDomListener(window, 'load', init_map);</script>
            <br>
        </center>
    </div>
</div>


<div class="row" style="background-color: black; color: white;">
    <br>
    <div class="col-md-6"><p class="footertext text-center">&#169; DGTVE  2016</p></p></div>
    <div class="col-md-6"><p class="footertext text-center">Terminos y condiciones</p></div>                        
</div>
