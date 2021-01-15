@extends('layout.superv')

@section('title', 'crear')


@section('content')

@if(session('categoriaGuardado'))
<div class="alert alert-success">
{{ session('categoriaGuardado') }}
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

    <form action="{{ route('saveC')}}" method="POST"> 
    @csrf
<input  name="categorias" type="text" placeholder="categorias">
<input name="descripcion" type="text" placeholder="descripcion">


<button type="submit"  class="btn btn-outline-success">Enviar</button>
</form>
<a  class="btn btn-outline-success" href="{{ url('categorias')}}">regresar</button>
@endsection

