<div class="row">
    
</div>
<div class="row" style="background-color: #edecec;">
    <div class="col-md-12">
        <center>
            <br>
            {{ HTML::image('imagenes/imgIndex/logoinntedu.png','Logo Muestra Iberoamericana', array('class'=>'cd-date'))}}
            <br><br>
        </center>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <h4 class="text-uppercase text-center">Descripción</h4>
        <p class="text-justify">El Primer Encuentro Internacional de Innovación y Tecnología para la Educación se realizará los próximos 11, 12 y 13 de octubre, en las instalaciones de Centro Nacional de la Artes de la Ciudad de México. </p>
        <p class="text-justify">Este evento tiene como objetivo dar a conocer la importancia del uso de las Tecnologías de la Información y Comunicación en la labor docente, como formas de potencializar el proceso de enseñanza y aprendizaje, a partir de nuevos modelos pedagógicos, así como metodologías que orienten hacia una educación de calidad. </p>
        <br><br>
    </div>
    <div class="col-md-3">
        <h4 class="text-uppercase text-center">Programa</h4>
        <ul>
            <li>Conferencias Magistrales</li>
            <li>Conversatorios con expertos en la educación</li>
            <li>Talleres de habilidades digitales para el docente</li>
            <li>TED Talk Docentes de México</li>
            <li>Expo Innovación y Tecnología para la Educación </li>
        </ul>
    </div>
    <div class="col-md-3">
        <h4 class="text-uppercase text-center">Contáctanos</h4>
        <table>
            <tr>
                <td><span class="fa fa-map-marker text-center"></span></td>
                <td style="padding-left:3%;" class="text-justify">Av. Circunvalación s/n, esquina Tabiqueros,
                    Col. Morelos, Del. Venustiano Carranza.
                    C.P. 15270, Ciudad de México.</td>
            </tr>
            <tr>
                <td><span class="fa fa-phone text-center"></span></td>
                <td style="padding-left:3%;">
                    <p>(55) 3601 8100 <br>
                        01 800 2284 883 <br>
                        01 866 5729 837
                    </p>							
                </td>
            </tr>
            <tr>
                <td><span class="fa fa-envelope text-center"></span></td>
                <td style="padding-left:3%;">mitec@televisioneducativa.gob.mx</td>
            </tr>
        </table>
    </div>  
    <div class="col-md-1"></div>   
</div>
 <div class="row" style="background-color: #f1f1f1;">
     <div class="col-md-6">
         <div>Organiza</div>
         <div>Socios</div>
     </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding-right:8%;">
        <h3>Redes Sociales</h3>
        {{ HTML::image('imagenes/red/Logotipos/facebook.png','facebook', array('class'=>'img-responsive img-rounded', 'style'=>'width:150px; height:48px;'))}}
        <!--<div>Contenido Facebook.</div>-->
        <div><div class="fb-page" data-href="{{url('https://www.facebook.com/Red-Mesoamericana-de-Investigaci&#xf3;n-y-Tecnolog&#xed;a-Educat&#xed;va-930360840393101/')}}" data-tabs="timeline" data-width="450" data-height="230" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div></div>      
        <!--<div>Contenido Twitter.</div>-->
        <br>
        <div><a class="twitter-timeline" href="https://twitter.com/Red_Mesoamerica" data-widget-id="702586618901757952">Tweets por el @Red_Mesoamerica.</a>
            <script>!function(d, s, id){var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location)?'http':'https'; if (!d.getElementById(id)){js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); }}(document, "script", "twitter-wjs");</script></div>
    </div>
</div>
<div class="row" style="background-color: #818181;">
    <div class="col-md-1"></div>
    <div class="col-md-6" >
        <center>
            <br>
            {{ HTML::image('imagenes/imgIndex/logotexto.png','Logo Muestra Iberoamericana', array('class'=>'cd-date'))}}
            <br><br>
        </center>
    </div>
    <div class="col-md-4">
        <center>            
           <div id="googleMap" style="width:500px;height:380px;"></div>
        </center>
    </div>
    <div class="col-md-1"></div>
</div>



<div class="row" style="background-color: black; color: white;">
    <br>
    <div class="col-md-6"><p class="footertext text-center">DGTVE Copyright 2016</p></p></div>
    <div class="col-md-6"><p class="footertext text-center">Terminos y condiciones</p></div>                        
</div>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(,),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>