<!DOCTYPE html>
<html>
    <head>
        <title>Muestra Iberoamericana</title>
        <title>@yield('titleMuestraITVEC','Muestra Iberoamericana de Televisión Educativa y Cultural')</title>
        <!--  App Descripción  -->
        <meta name="description" content="Muestra Iberoamericana de Televisión Educativa y Cultural"/>
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

        <link rel="shortcut icon" href="#" >

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <!--	-------------------------- Fuentes de google fonts ------------------------------------		-->
        <link href="https://fonts.googleapis.com/css?family=Modak:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/ihover.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" >        
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}" > <!-- Timeline -->       
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" > <!-- Timeline -->       

        <!--CDN FormHelpers-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css" rel="stylesheet"/>
        <!--fin FormHelpers -->



        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js" type="text/javascript"></script>

        <script src="{{asset('js/parallax.js')}}"></script>
        <script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizr -->
        <script src="{{asset('js/main.js')}}"></script> <!-- Timeline -->
        <style>
            .container-fluid{
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                height: 800px;
            }

            .title {
                font-size: 96px;
            }
            .tituloMuestra{
                color: white;
                font-size: 3em;
            }
            .divTrans{
                background: rgba(0,0,0,.5);
                padding: 5%;
            }
            .parrafoMuestra{
                font-size: 20px;
                color: white;
            }
            .btn_concurso{
                background: rgba(0,0,0,.7);
                height: 130px;
                color: white;
                margin-top: 10%;
                padding: 10%;
                font-size: 2em;
            }
            .btn_concurso:hover{
                background-color: rgba(255,255,255,.7);
                color: black;
                z-index: 15;
            }   
            .flechaBtn{
                font-size: 1em;    
            }
            .menuCompatir{
                color: white;
                font-size: 2em;
                padding: 50%;
            }
            .hrDivide{
                border: 2px solid grey;
            }
            #map-row {}
#map-overlay {
    height:400px;
    margin-top:-405px;
    background-color:#669de5;
    padding:40px;
}
        </style>
    </head>
    <body>
        <div class="container-fluid parallax-window"  data-parallax="scroll" style="background-image:url('{{asset('imagenes/imgIndex/muestraback.jpg')}}');">
            <nav class="navbar"></nav>
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <ul class="nav navbar-nav pull-right">
                        <i id="compartirMuestra" class="fa fa-share-alt-square menuCompatir" aria-hidden="true"></i>
                    </ul>
                </div>
            </nav>
            <!--Inicia Index-->
            <div class="container">
                <div class="row">
                    <!--MuestraITVEC-->
                    <div class="col-md-12 divTrans">
                        <div class="col-md-1"></div>
                        <!--<div class="col-md-10 tituloMuestra">-->
                        <label class="text-center tituloMuestra">Muestra Iberoamericana de Televisión Educativa y Cultural</label>
                        <p class="parrafoMuestra text-justify">
                            <span class="text-capitaliz" style="font-weight: bold;">L</span>a Muestra Iberoamericana de Televisión Educativa y Cultural 2016 es un evento organizado por la DGTVE de México en coordinación con la Asociación de Televisión Educativa Iberoamericana, que se realizará los próximos 12 y 13 de octubre en el Auditorio “Blas Galindo” del Centro Nacional de las Artes, Ciudad de México, en el marco del Primer Encuentro Internacional de Innovación y Tecnología para la Educación, 2016 (INNTEDU).                             
                        </p>
                        <br>
                        <p class="parrafoMuestra text-justify">
                            <span class="text-capitaliz" style="font-weight: bold;">D</span>icho evento tiene como objetivo otorgar la Presea José Vasconcelos a la mejor producción televisiva educativa o cultural de la región iberoamericana, por lo que se convoca a participar a los medios públicos y privados interesados en presentar sus mejores contenidos.  
                        </p>

                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <a href="#fases" >
                            <div class="text-center btn_concurso animated bounceInLeft">
                                <p>Consulta las bases</p>
                                <i class="fa fa-angle-double-down flechaBtn" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <a href="#registro" class="nounderline">                        
                            <div class="text-center btn_concurso animated bounceInRight">
                                <h2>Registro</h2>
                                <i class="fa fa-angle-double-down flechaBtn" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-1"></div>                    
                </div>
            </div>
        </div>
        <!--Fin de index-->
        <!--Muestra Convocatoria-->
        <hr class="hrDivide">
        <div class="divider text-center">
            <h1>FASES DEL CONCURSO</h1>
        </div>
        <section id="cd-timeline" class="cd-container">
            <div class="cd-timeline-block" id="fases">
                <div class="cd-timeline-img cd-picture">
                        <img src="http://lorempixel.com/image_output/animals-q-c-50-50-7.jpg" alt="Picture">

                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content text-justify">
                    <h2 class="text-center">Registro y envío de contenidos</h2>
                    <hr>
                    <p>Se deberá llenar un formulario con los datos de la institución participante y subir la producción participante a través del canal de youtube</p>                   
                    <p>El formato a emplear de las producciones es libre y los ejes temáticos a los que se deben vincular son:
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Niños y educación</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Formación en jóvenes </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Familia y valores</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Arte y cultura</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Desarrollo sustentable</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Sociedad</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Humanidades</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i>Ciencia y Tecnología</li>
                    </ul>
                    </p>

                    <a href="#0" class="cd-read-more pull-right">Leer más</a>
                    <span class="cd-date">Del 20 de junio al 01 de agosto del 2016</span>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->

            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-movie">
                        <img src="http://lorempixel.com/image_output/business-q-c-50-50-2.jpg" alt="Movie">
                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content text-justify">
                    <h2 class="text-center">Votación</h2>
                    <hr>
                    <p>se abrirá un espacio en la página del evento y las redes sociales del evento con las producciones que hayan concluido su registro, por lo que el público podrá votar por su favorita. Las producciones con más votos serán finalistas que se presentarán durante el Primer Encuentro Internacional de Innovación y Tecnología para la Educación, 2016 (INNTEDU), en la Ciudad de México. </p>                    
                    <p>El <strong>resultado</strong> de los finalistas será publicado por el mismo medio a partir del <strong>09 de septiembre</strong>.</p>
                    <a href="#0" class="cd-read-more">Leer más</a>
                    <span class="cd-date">Del 08 de agosto al 08 de septiembre del 2016</span>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->

            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-location">
                        <img src="http://lorempixel.com/image_output/food-q-c-50-50-10.jpg" alt="Location">
                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content">
                    <h2 class="text-center">Presentación  </h2>
                    <hr>
                    <p>Las instituciones finalistas tendrán que presentar su producción en una versión resumida con una duración máxima de 15 minutos. El evento contará con un jurado especialista, quien evaluará los materiales presentados y cuál será la producción galardonada con la Presea José Vasconcelos.</p>
                    <span class="cd-date">La presentación de las producciones finalistas se realizará el día 12 de octubre de 12:00 a 17:00 hrs. en el Auditorio Blas Galindo, del Centro Nacional de las Artes, Ciudad de México.</span>
                    <p>Los criterios de evaluación a considerar en las evaluaciones son: 
                    <ul>
                        <li>Creatividad, entretenimiento, interactividad y alineación al eje temático en el que se encuentre inscrita la producción. </li>
                        <li>La producción que se presentará durante el evento debe enviarse como fecha máxima el 03 de octubre a:  (definir vía)</li>
                    </ul>
                    </p>                                
                    <a href="#0" class="cd-read-more pull-right">Leer más</a>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->
            <div class="cd-timeline-block">
                <div class="cd-timeline-img cd-picture">
                        <img src="http://lorempixel.com/image_output/sports-q-c-50-50-6.jpg" alt="Picture">
                </div> <!-- cd-timeline-img -->

                <div class="cd-timeline-content text-justify">
                    <h2 class="text-center">Entrega de la Presea José Vasconcelos </h2>
                    <hr>
                    <h3>Beneficios de participación  </h3>
                    <br>
                    <ul>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i>     Las producciones finalistas serán transmitidas del 10 al 14 de octubre en las principales salas de cine de la Ciudad de México para su difusión, durante la Semana de la Televisión Iberoamericana Educativa y Cultural.</li>
                        <br>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i>     La producción ganadora será galardonada con la Presea José Vasconcelos, la cual va a ser instaurada por el Comité Editorial del Canal de Televisión Satelital Iberoamericano.</li>
                        <br>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i>     Tendrá una programación especial dentro del Canal de Televisión Satelital Iberoamericano. </li>
                        <br>
                        <li><i class="fa fa-angle-right" aria-hidden="true"></i>     La producción ganadora será retransmitida en los distintos Canales de Televisión pertenecientes a la Asociación de Televisión Educativa Iberoamericana (ATEI).</li>
                    </ul>
                    </p>

                    <a href="#0" class="cd-read-more pull-right">Leer más</a>
                    <span class="cd-date">La entrega de la Presea José Vasconcelos a la producción ganadora se realizará el día 13 de octubre a las 11:00 hrs. en el Auditorio Blas Galindo, del Centro Nacional de las Artes, Ciudad de México, a cargo de las autoridades correspondientes. </span>
                </div> <!-- cd-timeline-content -->
            </div> <!-- cd-timeline-block -->                
        </section> <!-- cd-timeline -->
        <!--Muestra Convocatoria-->
        <!--Registro de Convocatoria-->
        <hr class="hrDivide">
        <div class="divider text-center">
            <h1>Registro</h1>
        </div>
        <br><br>
        <div class="container">
            <div class="col-md-2"></div>
            <div class="form-group col-md-10">
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Nombre de la Institución</label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">País</label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Domicilio de la Institución</label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Representante (Nombre completo)</label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Representante (Cargo)</label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Teléfono</label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Correo Electrónico</label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Nombre de la producción </label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>  
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Nombre del productor</label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Línea Temática </label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Breve sinopsis </label>
                    <div class="col-md-10">
                        <input type="text" name="" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <hr>
                    <h1 class="col-md-12">Archivos de Imagen</h1>
                    <br>
                    <hr>
                    <label for="" class="control-label col-md-2">Horizontal 1 (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Horizontal 2 (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Horizontal 2 (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Horizontal 2 (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>
                                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Horizontal 3 (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Vertical 1 (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Vertical 2 (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Vertical 3 (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>
                <div class="col-md-12">
                    <label for="" class="control-label col-md-2">Banner  (Medidas)</label>
                    <div class="col-md-10">
                        <input type="file" name="" class="form-control">
                    </div>            
                </div>                
            </div>
        </div>
        <!--Fin Registro de convocatoria--->
        <hr class="hrDivide">         
    
   <div id="footer">
    <div class="container">
        <div class="row">
            <h3 class="footertext">Acerca de:</h3>
            <br>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
                  <br>
                  <h4 class="footertext">DGTVE</h4>
                  <p class="footertext">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">Otro</h4>
                  <p class="footertext">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">Otro</h4>
                  <p class="footertext">"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."<br>
                </center>
              </div>
            </div>
            <div class="row">
            <p><center><a href="#">DGTVE</a> <p class="footertext">Copyright 2016</p></center></p>
        </div>
    </div>
</div>
</div>
</body>
</html>
<script>

</script>