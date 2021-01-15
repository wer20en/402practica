@extends('layout.superv')

@section('title', 'crear')


@section('content')

@if(session('productoModificado'))
<div class="alert alert-success">
{{ session('productoModificado') }}
</div>

@endif
    @if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
    @endif

    <form action="{{ route('edit', $users->id)}}" method="POST"> 
    @csrf @method('PATCH')
<input  name="name" type="text" placeholder="categoria" value="{{ $users->name}}">
<input name="email" type="text" placeholder="descripcion"value="{{ $users->email}}">
<input name="password" type="text" placeholder="descripcion"value="{{ $users->password}}">


<button type="submit"  class="btn btn-outline-success">Modificar</button>
</form>
<a  class="btn btn-outline-success" href="{{ url('categorias')}}">regresar</button>
@endsection