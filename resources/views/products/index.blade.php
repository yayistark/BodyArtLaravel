@extends('layouts.navbar');
@section('cuerpo');

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12 fondo-imagen">
       
            <h2 class="text-center">Tabla de productos</h2>
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                    </tr>
                </thead>
                    <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td>{{ $product->id}}</td>
                        <td>
                        <img src="uploads/product/{{$product->image}}" width="20%">
                        </td>
                        <td>{{ $product->name}}</td>
                        <td>${{ $product->price }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger btn-sm">Borrar</button>
                            </form>
                        </td>
                        </tr>
                        @empty
                        <td>No hay producto en la base de datos</td>
                    @endforelse
                        
                    </tbody>
                </table>
         </div>
        </div>
    </div>
</div>
@endsection