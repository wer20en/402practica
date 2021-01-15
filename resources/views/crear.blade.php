@extends('layout.superv')

@section('title', 'crear usuarios')


@section('content')

@if(session('usuarioGuardado'))
<div class="alert alert-success">
{{ session('usuarioGuardado') }}
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

    <form action="{{ route('save')}}" method="POST"> 
    @csrf
<input  name="usuario" type="text" placeholder="usuario">
<input name="correo" type="text" placeholder="correo">
<input name="contraseña" type="password" placeholder="contraseña">

<button type="submit" >Enviar</button>
</form>
<button href="{{ url('usuariosS')}}">regresar</button>
@endsection



