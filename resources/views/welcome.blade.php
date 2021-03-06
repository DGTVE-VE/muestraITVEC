<!DOCTYPE html>
<html>
    <head>
        <title>Muestra Iberoamericana</title>
        <title>@yield('titleMuestraIberoamericana','Muestra Iberoamericana de Televisión Educativa y Cultural')</title>
        <!--  App Descripción  -->
        <meta name="description" content="Muestra Iberoamericana de Televisión Educativa y Cultural"/>
        <meta charset="utf-8">
        <meta name="author" content="Ecosistema Digital de Aprendizaje (DGTVE)">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

        <!--facebook metas-->

        <meta property="og:url"                content="http://muestraiberoamericana.tv/" />
        <meta property="og:type"               content="article" />
        <meta property="og:title"              content="Muestra Iberoamericana de Televisión Educativa y cultural" />
        <meta property="og:description"        content="La Muestra Iberoamericana de Televisión Educativa y Cultural 2016 
                                                        es un evento organizado por la DGTVE de México en coordinación con 
                                                        la Asociación de Televisión Educativa Iberoamericana, Dicho evento tiene como objetivo
                                                        otorgar un reconocimiento a la mejor producción televisiva educativa o cultural iberoamericana,
                                                        por lo que se convoca a participar a los medios públicos y privados interesados en presentar
                                                        sus mejores contenidos." />
        <meta property="og:image"              content="http://muestraiberoamericana.tv/imagenes/imgIndex/logoMitec.jpg" />
        
        <!--twitter metas-->

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@CanalIbe">
        <meta name="twitter:creator" content="@SarahMaslinNir">
        <meta name="twitter:title" content="Muestra Iberoamericana de Televisión Educativa y cultural">
        <meta name="twitter:description" content="La Muestra Iberoamericana de Televisión Educativa y Cultural 2016 
                                                        es un evento organizado por la DGTVE de México en coordinación con 
                                                        la Asociación de Televisión Educativa Iberoamericana, Dicho evento tiene como objetivo
                                                        otorgar un reconocimiento a la mejor producción televisiva educativa o cultural iberoamericana,
                                                        por lo que se convoca a participar a los medios públicos y privados interesados en presentar
                                                        sus mejores contenidos.">
        <meta name="twitter:image" content="http://muestraiberoamericana.tv/imagenes/imgIndex/logoMitec.jpg">

        <link rel="shortcut icon" href="{{ asset('mitec.ico') }}" >

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/ihover.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/reset.css') }}" > <!-- Timeline -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" > <!-- Timeline -->
        <link rel="stylesheet" href="{{ asset('css/estilos3.css') }}" > <!-- Redes Sociales -->

        <!--CDN FormHelpers-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css" rel="stylesheet"/>
        <!--fin FormHelpers -->

        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js" type="text/javascript"></script>

        <script src="{{asset('js/parallax.js')}}"></script>
        <script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizr -->
        <script src="{{asset('js/main.js')}}"></script> <!-- Timeline -->
    </head>
    <body>
        <div class="container-fluid parallax-window container-fluid-back"  data-parallax="scroll" style="background-image:url('{{asset('imagenes/imgIndex/back.jpg')}}');">
            <!--<div class="container-fluid parallax-window" data-parallax="scroll" style="background-image:url('http://placehold.it/1200x800');"></div>-->
            @include('viewMuestra.bannerMuestra')
        </div>
        <div class="container-fluid">
            <!--<hr class="hrDivide">-->
            @include('viewMuestra.fasesMuestra')
        </div>
        @include('viewMuestra.widgetMuestra')        
        @include('viewMuestra.innteduMuestra')

        @include('viewMuestra.pieMuestra')
    </body>
</html>
<script>
</script>
