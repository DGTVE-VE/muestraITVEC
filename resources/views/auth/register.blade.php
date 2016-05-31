@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Registrarse</div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <label for="name" class="col-md-4 control-label">Nombre</label>

              <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>

                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('genero') ? ' has-error' : '' }}">
              <label for="genero" class="col-md-4 control-label">Género</label>

              <div class="col-md-6">
                <input id="genero" type="radio"  name="genero" value="mujer" required>Mujer
                <br>
                <input id="genero" type="radio"  name="genero" value="hombre" required>Hombre

              </div>
            </div>

            <div class="form-group{{ $errors->has('nacimiento') ? ' has-error' : '' }}">
              <label for="nacimiento" class="col-md-4 control-label">Fecha de nacimiento</label>

              <div class="col-md-6">
                <input id="nacimiento" type="date" class="form-control" name="nacimiento" value="{{ old('nacimiento') }}" required>

                @if ($errors->has('nacimiento'))
                <span class="help-block">
                  <strong>{{ $errors->first('nacimiento') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
              <label for="ciudad" class="col-md-4 control-label">Ciudad</label>

              <div class="col-md-6">
                <input id="ciudad" type="text" class="form-control" name="ciudad" value="{{ old('ciudad') }}" required>

                @if ($errors->has('ciudad'))
                <span class="help-block">
                  <strong>{{ $errors->first('ciudad') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('pais') ? ' has-error' : '' }}">
              <label for="pais" class="col-md-4 control-label">Pais</label>

              <div class="col-md-6">
                <input id="pais" type="text" class="form-control" name="pais" value="{{ old('pais') }}" required>

                @if ($errors->has('pais'))
                <span class="help-block">
                  <strong>{{ $errors->first('pais') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('intereses_edu') ? ' has-error' : '' }}">
              <label for="intereses_edu" class="col-md-4 control-label">Intereses Educativos</label>

              <div class="col-md-6">
                <input id="intereses_edu" type="text" class="form-control" name="intereses_edu" value="{{ old('intereses_edu') }}" required>

                @if ($errors->has('intereses_edu'))
                <span class="help-block">
                  <strong>{{ $errors->first('intereses_edu') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('is_researcher') ? ' has-error' : '' }}">
              <label for="is_researcher" class="col-md-4 control-label">Investigador</label>
              <div class="col-md-6">
                <input id="is_researcher" type="radio"  name="is_researcher" value="1" required>Si
                <input id="is_researcher" type="radio"  name="is_researcher" value="0" checked required>No
              </div>
            </div>

            <div class="form-group{{ $errors->has('is_parent') ? ' has-error' : '' }}">
              <label for="is_parent" class="col-md-4 control-label">Padre de familia</label>
              <div class="col-md-6">
                <input id="is_parent" type="radio"  name="is_parent" value="1" required>Si
                <input id="is_parent" type="radio"  name="is_parent" value="0" checked required>No
              </div>

            </div>
            <div class="form-group{{ $errors->has('is_teacher') ? ' has-error' : '' }}">
              <label for="is_teacher" class="col-md-4 control-label">Profesor</label>

              <div class="col-md-6">
                <input id="is_teacher" type="radio"  name="is_teacher" value="1" required>Si
                <input id="is_teacher" type="radio"  name="is_teacher" value="0" checked required>No

              </div>

            </div>
            <div class="form-group{{ $errors->has('is_student') ? ' has-error' : '' }}">
              <label for="is_student" class="col-md-4 control-label">Estudiante</label>

              <div class="col-md-6">
                <input id="is_student" type="radio"  name="is_student" value="1" required>Si
                <input id="is_student" type="radio"  name="is_student" value="0" checked required>No

              </div>
            </div>



            <div class="form-group{{ $errors->has('nickname') ? ' has-error' : '' }}">
              <label for="nickname" class="col-md-4 control-label">Nickname</label>

              <div class="col-md-6">
                <input id="nickname" type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" required>

                @if ($errors->has('nickname'))
                <span class="help-block">
                  <strong>{{ $errors->first('nickname') }}</strong>
                </span>
                @endif
              </div>
            </div>


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <label for="email" class="col-md-4 control-label">Correo electrónico</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Contraseña</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
              <label for="password-confirm" class="col-md-4 control-label">Confirma tu contraseña</label>

              <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-user"></i> Registrarme
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
