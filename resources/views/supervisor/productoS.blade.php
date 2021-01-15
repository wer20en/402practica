@extends('layout.superv')

@section('title', 'categorias')


@section('content')



<div class="container mt-5"style="background-color: rgba(255, 255, 255, 0.80)">

<script type="text/javascript">
      function ConfirmDelete()
      {
        var respuesta = confirm("estas seguro de eliminar este producto");
        if (respuesta == true)
        {
          return true;
        }
        else
        {
          return false;
        }
      }
    </script>
    @if(session('productoEliminado'))
    <div class="alert alert-seccess">
    {{ session('productoEliminado')}}
    @endif
    <form action="{{route('buscar')}}">
    <input class="form-control mr-sm-2" id="texto" name="search" type="search" placeholder="Buscar" aria-label="Search" autocomplete="on">

</form>

    <table class="table table-bordered table-striped text-center">
  <thead>
      
    <tr>
      <th scope="col">#No.</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio/U</th>
      <th><a href="{{ url('/crearP')}}" class="btn btn-outline-dark">Agregar</a></th>

    </tr>
  </thead>
  <tbody>
  @foreach($productos as $producto)
  <tr>
      <td>{{ $producto->id}}</td>
      <td>{{ $producto->Nom_Producto}}</td>
      <td>{{ $producto->cantidad}}</td>
      <td>{{ $producto->precioU}}</td>
    <td>
      <a href="{{route('editarP', $producto->id)}}" class="btn btn-outline-success">Editar</a>
      <form action="{{route('delete', $producto->id)}}" method="POST">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-outline-danger" onclick="return ConfirmDelete()">Borrar</button>
      </form>
      
      </td>
 </tr>
      @endforeach
      
  </tbody>
</table>
 
</div>

@endsection