<style>
.parrafoMuestra{
    font-size: 20px;
    color: white;
}
.divTrans{
    background: rgba(0,0,0,.5);
    padding: 5%;
	font-family:Roboto, sans-serif;
	font-size: 20px;
}
.container-fluid-back{
    background-repeat: no-repeat;
    background-position: center center;
    background-attachment: fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	padding:0px; margin:0px;
	height:100%;
}
</style>

<div class="container-fluid container-fluid-back" style="background-image:url('{{asset('imagenes/imgIndex/back.jpg')}}');">
<div class="row" >
    <div class="col-md-3" >
	
        <center>
		<br><br><br>
		{{ HTML::image('imagenes/imgIndex/logo.png','Logo', array('class'=>'center-block'))}}
				@if($guardaDatos=='1')
					<p class="parrafoMuestra text-center divTrans">
						Recibimos sus comentarios. Los leeremos la brevedad.
					</p>
				@else
					<p class="parrafoMuestra text-center divTrans">
						Ocurrió un error al procesar su solicitud.
					</p>
				@endif
            <br><br>
        </center>
		<center>
            <br><br><br>
				<p class="parrafoMuestra text-center divTrans">
					<a href="{{url('/')}}" class="parrafoMuestra">Regresar</a>
				</p>
        </center>
    </div>
</div>
</div>

