@extends('layouts.navbar')

@section('cuerpo')
<div class="container px-5 my-5">
            <div class="row">
                <div class="card col-4">
                    <img class="card-img-top" src="{{ asset('uploads/avatars/'.Auth::user()->avatar) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Bienvenido {{Auth::user()->username}} </h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, adipisci.</p>
                    </div>
                </div>
                <div class="col-8 ">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item text-white">
                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">info</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                   <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Proximamente...</div>
                  </div>
                </div>
              </div>
           </div>
@endsection
