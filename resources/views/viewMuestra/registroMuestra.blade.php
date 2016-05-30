<!--Registro de Convocatoria-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js" type="text/javascript"></script>

    <script src="{{asset('js/parallax.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script> <!-- Modernizr -->
    <script src="{{asset('js/main.js')}}"></script> <!-- Timeline -->
    <br>
    <br>
    <title>Registro</title>
  </head>
  <body>

<div class="divider text-center" id="registro">
    <h1>Registro</h1>
</div>
<br><br>
<div class="container">

  <form method="POST" action="{{url('save')}}" accept-charset="UTF-8" enctype="multipart/form-data">
          
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    {!! BootForm::open() !!}
    {!! BootForm::text('institucion', 'Nombre de la Institución') !!}
    {!! BootForm::text('pais', 'País') !!}
    {!! BootForm::text('direccion', 'Domicilio de la Institución') !!}
    {!! BootForm::text('representante', 'Representante (Nombre)') !!}
    {!! BootForm::text('cargo', 'Representante (Cargo)') !!}
    {!! BootForm::number('tel', 'Teléfono') !!}

    {!! BootForm::email('correo', 'Correo electrónico') !!}

    {!! BootForm::text('produccion', 'Nombre de la producción') !!}
    {!! BootForm::text('productor', 'Nombre del productor') !!}
    {!! BootForm::select('tematica', 'Línea Temática', ['Seleccione una linea temática', $tematica] ) !!}

    {!! BootForm::textarea('sinopsis', 'Breve sinopsis') !!}

    {!! BootForm::text('url', 'url video de youtube') !!}

    {!! BootForm::file('file1', 'Imagen 1') !!}
    {!! BootForm::file('file2', 'Imagen 2') !!}
    {!! BootForm::file('file3', 'Imagen 3') !!}

    <a href="#">Términos y condiciones</a>
    {!! BootForm::checkbox('condiciones', 'Acepto los términos y condiciones') !!}

    {!! BootForm::submit ( 'Enviar' ) !!}
    {!! BootForm::close() !!}

</form>

</div>
<!--Fin Registro de convocatoria--->

</body>
</html>
