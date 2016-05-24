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
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                /*width: 100%;*/
                /*display: table;*/
                /*font-weight: 100;*/
                /*font-family: 'Modak';*/
            }

            body{
                background-repeat: no-repeat;
                background-position: center center;
                background-attachment: fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;    
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
                padding: 4%; 
            }
            .btn_concurso:hover{
                background: rgba(255,255,255,.7);
                color: black;
            }   
            .flechaBtn{
                font-size: 40px;    
            }
            .menuCompatir{
                color: white;
                font-size: 2em;
                padding: 50%;
            }
            a.nounderline:link {
                text-decoration: none;
            }
        </style>
    </head>
    <body class="parallax-window"  data-parallax="scroll" style="background-image:url('{{asset('imagenes/imgIndex/muestraback.jpg')}}');">
        <div class="container">
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
                            <span class="text-capitaliz" style="font-weight: bold;">E</span>s un evento organizado por la DGTVE de México en coordinación con la Asociación de Televisión Educativa Iberoamericana, que se realizará los próximos 12 y 13 de octubre en el Auditorio “Blas Galindo” del Centro Nacional de las Artes, Ciudad de México, en el marco del Primer Encuentro Internacional de Innovación y Tecnología para la Educación, 2016 (INNTEDU). 
                            Dicho evento tiene como objetivo otorgar la Presea José Vasconcelos a la mejor producción televisiva educativa o cultural de la región iberoamericana, por lo que se convoca a participar a los medios públicos y privados interesados en presentar sus mejores contenidos
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <a href="#BaseRegistro" class="nounderline">
                        <div class="btn_concurso text-center animated bounceInLeft">
                            <h2>Consulta las bases</h2>
                            <i class="fa fa-angle-double-down flechaBtn" aria-hidden="true"></i>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <a href="#BaseRegistro" class="nounderline">                        
                        <div class="btn_concurso text-center animated bounceInRight">
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
        <div class="divider"></div>
        <div class="container">
            <div class="row">
                <ul>
                    <li id="FaseRegistro">
                        FASES DEL CONCURSO
                    </li>
                    <p>a) Registro y envío de contenidos 
                        El registro se abrirá a partir de 20 de junio al 01 de agosto del presente año en la página del evento.  Se deberá llenar un formulario con los datos de la institución participante y subir la producción participante a través de: (definir vía)
                    </p>
                </ul>                    
            </div>
            <!--Muestra Convocatoria-->
        </div>
    </div>
</body>
</html>
<script>

</script>