@extends('layouts.navbar')

@section('cuerpo')
<div class="container mb-5 my-5">
<div class="row">
  <div class="col-lg-6 mx-auto py-3 px-3 fondo-imagen">
    <div class="signup-form">
      <div class="form-header">
        <h3 class="form-title text-center text-white mb-3"><i class="icon ion-md-contact"></i> Registro</h3>
          <form role="form" id="register-form" action="{{ route('register') }}" autocomplete="off" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
          @csrf
            <div class="form-group">
              <div class="input-group mb-3">
              <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="name" autofocus placeholder="Nombre">
                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            
              <div class="input-group mb-3 ">
              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Usuario">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="input-group mb-3 ">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>                    
              <div class="input-group mb-3">
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contrase;a">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
              <div class="input-group mb-3">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repetir Contrase;a">
              </div>  
                                   
             
              
               
              <div class="input-group mb-3">
                  <input type="file" name="avatar" id="avatarFile"  class="custom-file-input @error('avatar') is-invalid @enderror"  lang="es">
                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                    @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror     
                </div>

              <div class="form-check mb-1">
                  <input class="form-check-input" type="checkbox"   name="confirm" id="defaultCheck1" value="">
                  <?php //!isset($errores['confirm']) ? old('confirm') : "" ?>
                    <label class="form-check-label" for="defaultCheck1">
                     Acepto los terminos de uso y politicas de seguridad
                    </label>
               </div>
               
                <button type="submit" class="btn btn-primary btn-lg btn-block mt-3 ">
                  <span class="glyphicon glyphicon-log-in"></span> Registrate!
                </button>  
            </div> 
       </div>
   </div>          
</div>

</div>
</div>
@endsection
