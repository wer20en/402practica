@extends('layout.superv')

@section('title', 'crear')


@section('content')

@if(session('usuarioModificado'))
<div class="alert alert-success">
{{ session('usuarioModificado') }}
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

    <form action="{{ route('edit', $usuario->id)}}" method="POST"> 
    @csrf @method('PATCH')
<input  name="usuario" type="text" value="{{ $usuario->usuario}}">

<input name="correo" type="text" value="{{ $usuario->correo}}">

<input name="contraseña" type="text" value="{{ $usuario->contraseña}}">

<button type="submit"  >Modificar</button>
</form>
<button   href="{{ url('usuariosS')}}">regresar</button>
@endsection