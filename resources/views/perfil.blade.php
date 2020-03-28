@extends('layouts.navbar')

@section('cuerpo')
<div class="container px-5 my-5">
            <div class="row">
                <div class="col-lg-4 col-12">
                  <div class="card">
                    <img class="card-img-top" src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido {{Auth::user()->username}} </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, adipisci.</p>
                    </div>
                </div>
                </div>

                <div class="col-lg-8 col-12 fondo-imagen">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item text-white">
                      <a class="nav-link letra-info active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">info</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link letra-info" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Vender</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Proximamente...</div>
                   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                   <p>Hola,estas listo para publicar tu primer modelo?</p>
                   <a class=" btn btn-secondary " href="{{ route('products.create') }}">Click Aqui</a>
                   <p>quieres ver tu lista de productos?</p>
                   <a class=" btn btn-secondary " href="{{ route('products.index') }}">Ver lista</a>
                   </div>

                   </div>
                  </div>
                </div>
              </div>
           </div>
@endsection
