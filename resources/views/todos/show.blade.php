@extends('app')

@section('content')

<div class="container w-25 border p-4 mt-4">

<form action="{{ route('todos.update', ['id' => $todo->id ]) }}" method="POST">
  @method('PATCH')  
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Titulo tarea</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $todo ->title }}">
  </div> 
  <button type="submit" class="btn btn-primary">Editar tarea</button>
</form>
</div>

@endsection
