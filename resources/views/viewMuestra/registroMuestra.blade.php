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
  <style>
  .centered{
    text-align:center;
  }
  </style>
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
    <h1>Registro a la Muestra Iberoamericana </h1>
  </div>
  <br><br>
  <div class="container">
    <div class="col-lg-12">
    <form method="POST"  class="form-signin" action="{{url('save')}}" accept-charset="UTF-8" enctype="multipart/form-data">

      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      {!! BootForm::open() !!}

      <div class="col-lg-7">
      {!! BootForm::text('institucion', 'Nombre de la Institución') !!}
      </div>

      <div class="col-lg-5">
        <label for="pais">País:</label>
        <select required id="countries_states1" name="pais"  class="form-control input-medium bfh-countries" data-country="MX"></select>
      </div>
      <br>

      <div class="col-lg-12">
        {!! BootForm::text('direccion', 'Domicilio de la Institución') !!}
      </div>

      <div class="col-lg-7">
        {!! BootForm::text('representante', 'Representante (Nombre)') !!}
      </div>

      <div class="col-lg-5">
        {!! BootForm::text('cargo', 'Representante (Cargo)') !!}
      </div>

      <div class="col-lg-7">
        {!! BootForm::text('contacto', 'Nombre del contacto directo') !!}
      </div>

      <div class="col-lg-5">
        {!! BootForm::number('tel', 'Teléfono') !!}
      </div>

      <div class="col-lg-6">
        {!! BootForm::email('correo', 'Correo electrónico') !!}
      </div>

      <div class="col-lg-6">
        {!! BootForm::email('correoalternativo', 'Correo electrónico alternativo') !!}
      </div>

      <div class="col-lg-5">
        {!! BootForm::text('produccion', 'Nombre de la producción') !!}
      </div>

      <div class="col-lg-3">
        {!! BootForm::date('fecha', 'Año de la producción') !!}
      </div>

      <div class="col-lg-4">
        {!! BootForm::select('tematica', 'Línea Temática', ['Seleccione una linea temática', $tematica] ) !!}
      </div>

      <div class="col-lg-12">
        {!! BootForm::textarea('sinopsis', 'Breve sinopsis') !!}
      </div>

      <div class="col-lg-6">
        {!! BootForm::text('director', 'Nombre del director') !!}
      </div>

      <div class="col-lg-6">
        {!! BootForm::text('perfildirector', 'Perfil del director') !!}
      </div>

      <div class="col-lg-6">
        {!! BootForm::text('productor', 'Nombre del productor') !!}
      </div>

      <div class="col-lg-6">
        {!! BootForm::text('perfilproductor', 'Perfil del productor') !!}
      </div>

      <div class="col-lg-4">
        {!! BootForm::file('imagen1', 'Banner (*.jpg)') !!}
      </div>

      <div class="col-lg-4">
        {!! BootForm::file('imagen2', 'Imagen Vertical (*.jpg)') !!}
      </div>

      <div class="col-lg-4">
        {!! BootForm::file('imagen3', 'Imagen Hortizontal (*.jpg)') !!}
      </div>

      <div class="col-lg-12">
        {!! BootForm::text('url', 'Enlace de video en la nube') !!}
        <br>
      </div>

      <div class="col-lg-6 centered">
        <a href="#">Términos y condiciones</a>
        {!! BootForm::checkbox('condiciones', 'Acepto los términos y condiciones') !!}
        <br>
      </div>
      <div class="col-lg-6 centered">
        <a href="#">Carta de cesión de derechos</a>
        {!! BootForm::checkbox('derechos', 'Acepto la carta de cesión de derechos') !!}
        <br>
      </div>
      <div class="col-lg-12 centered">
        <a href="{{url ('/')}}" class="btn btn-danger btn-lg">Regresar a la convocatoria</a>
        <button type="submit" class="btn btn-success btn-lg">Registrar la muestra</button>

      </div>

      <div class="col-lg-12 center">
        <br>
        <br>
      </div>

      {!! BootForm::close() !!}
    </form>
  </div>
  </div>
  <!--Fin Registro de convocatoria--->

</body>
</html>
