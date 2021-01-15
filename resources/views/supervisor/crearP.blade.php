@extends('layout.superv')

@section('title', 'crear')


@section('content')

@if(session('productoGuardado'))
<div class="alert alert-success">
{{ session('productoGuardado') }}
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

    <form action="{{ route('saveP')}}" method="POST"> 
    @csrf
<input  name="Nom_Producto" type="text" placeholder="producto">
<input name="cantidad" type="text" placeholder="cantidad">
<input name="precioU" type="text" placeholder="P/u">


<button type="submit"  class="btn btn-outline-success">Enviar</button>
</form>
<a  class="btn btn-outline-success" href="{{ url('productoS')}}">regresar</button>
@endsection