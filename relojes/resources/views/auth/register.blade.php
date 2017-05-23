@extends('layouts.layout')

@section('title')

    Registrate - Oh!Clock

@endsection

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('content')
<div class="card-panel row">

    <h4>Registrate</h4>

        <div class="col s6 offset-s3">
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <form class="fform" role="form" method="POST" action="{{ route('register') }}">
                        
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            <div class="input-field">

                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="input-field">

                            <label for="email" class="col-md-4 control-label">e-mail</label>

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            

                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            
                            <div class="input-field">

                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            

                            </div>
                        </div>

                        <div class="form-group">

                            <div class="input-field">

                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="center">
                                <button type="submit" class="btn btn-primary">
                                    Registrame
                                </button>
                            </div>
                        </div>
                        <!--Other form fields above the button-->
                        <br>
                        <br>
                        <div class="center">
                        <h5>O registrate usando</h5>
                        <p>
                            <div>
                                <a href="{{ url('/auth/github') }}" class="btn btn-github"><i class="fa fa-github"></i> Github</a>
                                <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
