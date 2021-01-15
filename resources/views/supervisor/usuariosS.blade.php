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
    @if(session('usuarioEliminado'))
    <div class="alert alert-seccess">
    {{ session('usuarioEliminado')}}
    @endif
    <table class="table table-bordered table-striped text-center">
  <thead>
      
    <tr>
      <th scope="col">#No.</th>
      <th scope="col">Nombre</th>
      <th scope="col">correo</th>
      <th scope="col">contraseña</th>
      <th scope="col">Acciones</th>
      <th><a href="{{ url('/crear')}}" class="btn btn-outline-dark">Agregar</a></th>

    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
  <tr>
      <td>{{ $user->id}}</td>
      <td>{{ $user->usuario}}</td>
      <td>{{ $user->correo}}</td>
      <td>{{ $user->contraseña}}</td>
    <td>
      <a href="{{route('editar', $user->id)}}" class="btn btn-outline-success">Editar</a>
      <a href="{{route('mostrar', $user->id)}}" class="btn btn-outline-success">mostrar</a>
      <form action="{{route('delete', $user->id)}}" method="POST">
        @csrf @method('DELETE')
        <button type="submit" class="btn btn-outline-danger" onclick="return ConfirmDelete()">Borrar</button>
      </form>
      
      </td>
 </tr>
      @endforeach
      
  </tbody>
</table>
{{ $users->links() }} 
</div>





@endsection
