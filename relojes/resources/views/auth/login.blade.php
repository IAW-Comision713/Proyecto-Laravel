@extends('layouts.layout')

@section('title')

    Login - Oh!Clock

@endsection

@section('css')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@endsection

@section('content')
<div class="card-panel row">
    <h4>Login</h4>
        <div class="col s6 offset-s3">
            <div class="panel panel-default">
                
                <div class="panel-body">
                    <form class="fform" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            <div class="input-field">
                            <label for="email" class="col-md-4 control-label">e-mail</label>

                            
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    
                                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                        <label for="remember">Recordarme</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="center">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidé mi contraseña
                                </a>
                            </div>
                        </div>
                        <!--Other form fields above the button-->
                       <br><br>
                        <div class="center">
                            <h5>O logueate usando</h5>
                            <br>
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
</div>
@endsection
