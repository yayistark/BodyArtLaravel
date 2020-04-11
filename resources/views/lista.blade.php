@extends('layouts.navbar');

@section('cuerpo')
<div class="container-fluid">
<div class="row">
<div class="col-3 py-2 position-fixed fixed-top" style="
    margin-top: 83px;
">
<nav aria-label="breadcrumb ">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/inicio')}}">Inicio</a></li>
    <li class="breadcrumb-item"><a href="{{url('/lista')}}">Productos</a></li>
  </ol>
</nav>
</div>

<div class="col-9 py-2 ml-auto">
@foreach($products as $product)

<div class="card my-3 py-3" style="max-width: 100%;">


  <div class="row no-gutters">
    <div class="col-md-4">
   
     <a href="{{ route('products.show',$product->id) }}"> <img class="card-img mx-1 my-1 border" width="100%" height="225" src="uploads/product/{{$product->image}}" style="max-width=225px"></a>
    </div>
    <div class="col-md-8">
      <div class="card-body">
      
        <h5 class="card-title">{{$product->name}}</h5>
    
        
        <p class="card-text">${{$product->price}}</p>
        

        <p class="card-text"><small class="text-muted">Publicado el {{$product->created_at}}</small></p>
      </div>
    </div>
</div>

</div>


   
    @endforeach
    {{$products->links()}}
  </div>
  
</div>

</div>



@endsection

