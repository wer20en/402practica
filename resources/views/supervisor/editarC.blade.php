@extends('layout.superv')

@section('title', 'crear')


@section('content')

@if(session('categoriaModificado'))
<div class="alert alert-success">
{{ session('categoriaModificado') }}
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

    <form action="{{ route('editC', $categorias->id)}}" method="POST"> 
    @csrf @method('PATCH')
<input  name="categorias" type="text" placeholder="categoria" value="{{ $categorias->categorias}}">

<input name="descripcion" type="text" placeholder="descripcion"value="{{ $categorias->descripcion}}">


<button type="submit"  class="btn btn-outline-success">Modificar</button>
</form>
<a  class="btn btn-outline-success" href="{{ url('categorias')}}">regresar</button>
@endsection