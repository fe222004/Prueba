@extends('app')

@section('content')

<div class="container w-25 border p-4 mt-4">

<form action="{{ route('cliente.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Correo</label>
        <input type="text" class="form-control" id="email" name="email">
    </div>

    <div class="mb-3">
        <label for="cedula" class="form-label">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula">
    </div>

    <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono">
    </div>

    <div class="mb-3">
        <label for="direccion" class="form-label">Direccion</label>
        <input type="text" class="form-control" id="direccion" name="direccion">
    </div>

    <button type="submit" class="btn btn-primary">Registrarme</button>
</form>
</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Cedula</th>
      <th scope="col">Telefono</th>
      <th scope="col">Direccion</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
    <tr>
      <td>{{ $cliente->id }}</td>
      <td>{{ $cliente->name }}</td>
    <td>{{ $cliente->correo }}</td>
      <td>{{ $cliente->cedula }}</td>
      <td>{{ $cliente->telefono }}</td>
      <td>{{ $cliente->direccion }}</td>
      <td>
</td>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection
