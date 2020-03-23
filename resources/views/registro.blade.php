@extends('layouts.navbar');

@section('cuerpo')
<div class="container-fluid px-auto pb-5 ">
    <div class="container pt-5 pb-5 ">
<?php if(isset($errores)):?>
  <?php foreach($errores as $error):?>
<div class="alert alert-danger"><?=$error ?></div>
<?php endforeach;?>
<?php endif;?>
<div class="row">
  <div class="col-lg-6 mx-auto py-3 px-3 fondo-imagen">
    <div class="signup-form">
      <div class="form-header">
        <h3 class="form-title text-center text-white mb-3"><i class="icon ion-md-contact"></i> Registro</h3>
          <form role="form" id="register-form" action="{{ route('registro') }}" autocomplete="off" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
          @csrf
            <div class="form-group">
              <div class="input-group">
                <input name="name" type="text" class="form-control mb-3" placeholder="Nombre" value="<?=$name/*!isset($errores['name']) ? old('name') : "" */ ?>">
              </div>
                <span class="help-block" id="error"></span>
              <div class="input-group">
                  <input name="username" type="text" class="form-control mb-3" placeholder="Usuario" value="<?=$username/*!isset($errores['username']) ? old('username') : "" */?>">
                    <span class="help-block" id="error"></span>
              </div>
              <div class="input-group">
                  <input name="email" type="text" class="form-control mb-3" placeholder="Ejemplo@hotmail.com" value="<?=$email/*!isset($errores['email']) ? old('email') : "" */?>">
              </div> 
                  <span class="help-block" id="error"></span>                     
              <div class="input-group">
                  <input name="password" id="password" type="password" class="form-control" value="" placeholder="Contraseña">
              </div>  
                  <span class="help-block" id="error"></span>                    
              </div>
              <div class="input-group">
                  <input name="cpassword" type="password" class="form-control"  placeholder="Repetir contraseña">
              </div>  
                  <span class="help-block" id="error"></span>                    
              </div>
              </div>
                <br>
              <div class="input-group">
                  <input type="file" name="avatar" class="custom-file-input" id="customFileLang" lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
              </div>
                  <span class="help-block" id="error"></span>     
                      <br>

              <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox"   name="confirm" id="defaultCheck1" value="">
                  <?php //!isset($errores['confirm']) ? old('confirm') : "" ?>
                    <label class="form-check-label" for="defaultCheck1">
                     Acepto los terminos de uso y politicas de seguridad
                    </label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                     Recibe correos ocasionales de promociones
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 ">
                  <span class="glyphicon glyphicon-log-in"></span> Registrate!
                </button>  
            </div> 
       </div>
   </div>          
</div>








@extends('layouts.navbar')

@section('cuerpo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
