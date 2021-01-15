@extends('layout.superv')

@section('title', 'crear')

@section('content')


    @if($errors->any())
<div class="alert alert-danger">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
    @endif
    <div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">
    <table class="table table-bordered table-striped text-center">
    <form action="{{ route('mostrar', $usuario->id)}}" method="POST"> 
    @csrf @method('PATCH')
    <tr>
    <th>USUARIO</th>
    <th>CORREO</th>
    </tr>
    <tr>
<td> {{ $usuario->usuario}}</td>

<td>{{ $usuario->correo}}</td>
</tr>
</table>

</form>
</div>
<button   href="{{ url('usuariosS')}}">regresar</button>
@endsection