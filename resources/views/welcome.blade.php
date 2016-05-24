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
            /*línea del tiempo*/
            .timeline {
    list-style: none;
    padding: 20px 0 20px;
    position: relative;
}

    .timeline:before {
        top: 0;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 3px;
        background-color: #eeeeee;
        left: 50%;
        margin-left: -1.5px;
    }

    .timeline > li {
        margin-bottom: 20px;
        position: relative;
    }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li:before,
        .timeline > li:after {
            content: " ";
            display: table;
        }

        .timeline > li:after {
            clear: both;
        }

        .timeline > li > .timeline-panel {
            width: 46%;
            float: left;
            border: 1px solid #d4d4d4;
            border-radius: 2px;
            padding: 20px;
            position: relative;
            -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
            box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
        }

            .timeline > li > .timeline-panel:before {
                position: absolute;
                top: 26px;
                right: -15px;
                display: inline-block;
                border-top: 15px solid transparent;
                border-left: 15px solid #ccc;
                border-right: 0 solid #ccc;
                border-bottom: 15px solid transparent;
                content: " ";
            }

            .timeline > li > .timeline-panel:after {
                position: absolute;
                top: 27px;
                right: -14px;
                display: inline-block;
                border-top: 14px solid transparent;
                border-left: 14px solid #fff;
                border-right: 0 solid #fff;
                border-bottom: 14px solid transparent;
                content: " ";
            }

        .timeline > li > .timeline-badge {
            color: #fff;
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 1.4em;
            text-align: center;
            position: absolute;
            top: 16px;
            left: 50%;
            margin-left: -25px;
            background-color: #999999;
            z-index: 100;
            border-top-right-radius: 50%;
            border-top-left-radius: 50%;
            border-bottom-right-radius: 50%;
            border-bottom-left-radius: 50%;
        }

        .timeline > li.timeline-inverted > .timeline-panel {
            float: right;
        }

            .timeline > li.timeline-inverted > .timeline-panel:before {
                border-left-width: 0;
                border-right-width: 15px;
                left: -15px;
                right: auto;
            }

            .timeline > li.timeline-inverted > .timeline-panel:after {
                border-left-width: 0;
                border-right-width: 14px;
                left: -14px;
                right: auto;
            }

.timeline-badge.primary {
    background-color: #2e6da4 !important;
}

.timeline-badge.success {
    background-color: #3f903f !important;
}

.timeline-badge.warning {
    background-color: #f0ad4e !important;
}

.timeline-badge.danger {
    background-color: #d9534f !important;
}

.timeline-badge.info {
    background-color: #5bc0de !important;
}

.timeline-title {
    margin-top: 0;
    color: inherit;
}

.timeline-body > p,
.timeline-body > ul {
    margin-bottom: 0;
}

    .timeline-body > p + p {
        margin-top: 5px;
    }

@media (max-width: 767px) {
    ul.timeline:before {
        left: 40px;
    }

    ul.timeline > li > .timeline-panel {
        width: calc(100% - 90px);
        width: -moz-calc(100% - 90px);
        width: -webkit-calc(100% - 90px);
    }

    ul.timeline > li > .timeline-badge {
        left: 15px;
        margin-left: 0;
        top: 16px;
    }

    ul.timeline > li > .timeline-panel {
        float: right;
    }

        ul.timeline > li > .timeline-panel:before {
            border-left-width: 0;
            border-right-width: 15px;
            left: -15px;
            right: auto;
        }

        ul.timeline > li > .timeline-panel:after {
            border-left-width: 0;
            border-right-width: 14px;
            left: -14px;
            right: auto;
        }
}
            /*fin línea del tiempo*/
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
            <div class="page-header">
                <h2 id="timeline" class="text-center">FASES DEL CONCURSO</h2>
            </div>
             <ul class="timeline">
                <li>
                    <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Registro y envío de contenidos </h4>
                            <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i>
                                    El registro se abrirá a partir de 20 de junio al 01 de agosto del presente año en la página del evento.
                                </small></p>
                        </div>
                        <div class="timeline-body">
                            <p> Se deberá llenar un formulario con los datos de la institución participante y subir la producción participante a través de: (definir vía).</p>
                            <ul>
                                <li>El formato a emplear de las producciones es libre y los ejes temáticos a los que se deben vincular son:</li>
                                <li>Niños y educación</li>
                                <li>Formación en jóvenes </li>
                                <li>Familia y valores</li>
                                <li>Arte y cultura</li>
                                <li>Desarrollo sustentable</li>
                                <li>Sociedad</li>
                                <li>Humanidades</li>
                                <li>Ciencia y Tecnología</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Votación</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                            <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                            <hr>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="timeline-title">Mussum ipsum cacilds</h4>
                        </div>
                        <div class="timeline-body">
                            <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!--Muestra Convocatoria-->

    </div>
</body>
</html>
<script>

</script>