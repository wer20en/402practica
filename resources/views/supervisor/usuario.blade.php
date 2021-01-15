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

      </form>
      
      </td>
 </tr>
      @endforeach
      
  </tbody>
</table>
{{ $users->links() }} 
</div>





@endsection