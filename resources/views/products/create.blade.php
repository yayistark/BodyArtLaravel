@extends('layouts.navbar')

@section('cuerpo')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 fondo-imagen">
            <!-- ============================================ -->
            <h2 class="text-center">Crear nuevo producto</h2>
            <form action="{{ route('products.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" value="{{ old('name')}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Precio</label>
                    <input type="text" name="price" class="form-control" id="exampleFormControlInput1" value="{{ old('price') }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Imagen</label>
                    <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ old('description') }}</textarea>
                </div>
                <div class="form-group text-center">
                <button class=" btn btn-success">Guardar</button>
                </div>
                </form>
            <!-- ============================================ -->
        </div>
    </div>
</div>
@endsection