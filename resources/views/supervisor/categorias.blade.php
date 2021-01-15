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
    @if(session('categoriaEliminado'))
    <div class="alert alert-seccess">
    {{ session('categoriaEliminado')}}
    @endif
    <table class="table table-bordered table-striped text-center">
  <thead>   
    <tr>
      <th scope="col">#No.</th>
      <th scope="col">Nombre</th>
      <th scope="col">Productos</th>
      <th scope="col">Acciones</th>
      <th><a href="{{ url('/crearC')}}" class="btn btn-outline-dark">Agregar</a></th>

    </tr>
  </thead>
  <tbody>
  @foreach($categorias as $categoria)
  <tr>
      <td>{{ $categoria->id}}</td>
      <td>{{ $categoria->categorias}}</td>
      <td>{{ $categoria->descripcion}}</td>
    <td>
      <a href="{{route('editarC', $categoria->id)}}" class="btn btn-outline-success">Editar</a>
      <form action="{{route('deleteC', $categoria->id)}}" method="POST">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-outline-danger" onclick="return ConfirmDelete()">Borrar</button>
      </form>
      
      </td>
 </tr>
      @endforeach
      
  </tbody>
</table>
{{ $categorias->links() }} 
</div>





@endsection
