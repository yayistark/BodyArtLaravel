@extends('layouts.navbar')

@section('cuerpo')
<div class="container">
<div class="row">
         <div class="col-lg-6 mx-auto py-3 px-3 fondo-imagen">
            <div class="signup-form ">
               <form role="form" id="register-form" action="{{ route('login') }}" autocomplete="off" method="post">
               @csrf
                  <div class="form-header">
                     <h3 class="form-title text-center text-white mb-3"><i class="icon ion-md-contact"></i> Iniciar Sesion</h3>
                       <div class="pull-right">
                         <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                       </div>
                   </div>
                   <div class="form-body">
                     <div class="form-group">
                        <div class="input-group mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                         
                
                 
                        <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Contrase;a">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                         
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          <label class="form-check-label" for="defaultCheck1">
                              Recordar Contraseña
                           </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 ">
                          <span class="glyphicon glyphicon-log-in"></span> Iniciar Sesion!
                        </button>  
                        <p class="mt-1 d-flex justify-content-between">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                          <a class= "btn btn-link" href="{{ route('register') }}">¿No tienes una cuenta?Registrate!</a></p>                
                      </div>
                   </div>      
             </div>               
          </div>
       </div>         
   </div>
</div>
@endsection
