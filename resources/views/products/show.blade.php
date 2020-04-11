@extends('layouts.navbar')

@section('cuerpo')
<div class="container-fluid ">	
    <div class="container  py-3">	
      <div>	
       <nav aria-label="breadcrumb border">	
            <ol class="breadcrumb">	
              <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>	
              <li class="breadcrumb-item active" aria-current="page">Productos</li>	
            </ol>	
          </nav>	
         </div>	
        <ul class="nav nav-pills px-3 py-3 border fondo-compra" id="pills-tab" role="tablist">	
            <li class="nav-item">	
              <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tatto</a>	
            </li>	


            <li class="nav-item">	
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Comentario</a>	
              </li>	
          </ul>	
          <!---Tatto-->	
          <div class="tab-content border mt-4 fondo-compra " id="pills-tabContent">	
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">	
              <div class="row">	
                <div class="col-lg-6 col-md-6 text-center mt-4 my-3">	
                  <div class="border-right">	
                  <img src="{{ asset('uploads/products/'.$products->image }}" alt="" width="70%" class="img-thumbnail mx-3">	
                  </div>	
              </div>	

                <div class="col-lg-6 col-md-6">	
                  <div class="border-bottom  mx-3">	
                  <h1 class="text-center mt-1"><strong>{{$products->name}}</strong></h1>	
                  <P class="font-italic text-secondary">Usuario:Tatum</P>	
                  </div>	
                   <p class="display-4 my-4"><strong>${{$products->price}}</strong></p>	
                   <bottom class="btn btn-primary my-3 mx-3 ">Comprar</bottom>	
                </div>	
              </div>	
            </div>	





             <!---COMENTARIOS--->	
             <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">	
                  <div class="">	
                    <form>	
                        <div class="form-group my-3 mx-3">	
                            <label for="exampleFormControlTextarea1">Deja tu comentario</label>	
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>	
                            <button class="btn btn-primary my-2">Enviar</button>	
                          </div>	
</form>	
                  </div>	
                </div>	
          </div>	


            </div>	

</div>	



