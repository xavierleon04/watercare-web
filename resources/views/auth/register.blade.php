@extends('layouts.main', ['class' => 'off-canvas-sidebar', 'activePage' => 'register', 'title' => __('Material Dashboard')])

@section('content')
<div class="container" style="height: auto;">
  <div class="row align-items-center">
    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                    <div class="card card-login card-hidden mb-3">
                    <div class="card-header card-header-primary text-center">
                        <h4 class="card-title"><strong>{{ __('Registrate') }}</strong></h4>
                        <div class="social-line">
                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                            <i class="fa fa-facebook-square"></i>
                        </a>
                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        </div>
                    </div>
                        {{ csrf_field() }}
                        <div class="card-body ">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            
                            <div class="input-group">
                            <div class="col-md-6">
                            <div class="input-group-prepend">   
                                    <i class="material-icons">face</i>
                            </div>
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}  mt-3">
                            
                        <div class="input-group">
                            <div class="col-md-6">
                            <div class="input-group-prepend">   
                                    <i class="material-icons">email</i>
                            </div>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Correo electronico" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}  mt-3">
                        <div class="input-group">
                            <div class="col-md-6">
                            <div class="input-group-prepend">   
                                    <i class="material-icons">lock_outline</i>
                            </div>
                                <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>

                                @if ($errors->has('password'))
                                <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
                                    <span class="input-group-text">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                </div>
                                @endif
                            </div>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                        <div class="input-group">
                            <div class="col-md-6">
                            <div class="input-group-prepend">   
                                    <i class="material-icons">lock_outline</i>
                            </div>
                                <input id="password-confirm" type="password" class="form-control" placeholder="Confirma contraseña" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        </div>
                        </div>
                        <div class="form-group">
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-primary btn-link btn-lg">Registrate</button>
                        </div>
                        </div>
                    </div> 
                    </form>
    </div>
  </div>
</div>
@endsection
