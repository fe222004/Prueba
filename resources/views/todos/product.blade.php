@extends('app')

@section('content')

<div class="container w-25 border p-4 mt-4">

<form action="{{ route('product.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre del Producto</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio del Producto</label>
        <input type="number" class="form-control" id="precio" name="precio">
    </div>

    <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</div>



@endsection
