<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//formulario del usuario
class UserController extends Controller
{
    public function crear(){
    return view('crear');

}
// listado
public function list(){
    $data['users'] = Usuario::simplePaginate(5);
    return view('supervisor.usuariosS', $data);
}
// listadoU
public function listU(){
    $data['users'] = Usuario::simplePaginate(5);
    return view('supervisor.usuario', $data);
}
// guardar
public function save(Request $request){
    $validator = $this->validate($request,
    [
        'usuario'=> 'required|string|max:255',
        'correo' => 'required|string|max:255|email|unique:usuarios'


    ] );
    $userdata = request()->except('_token');
    Usuario::insert($userdata);
    return back()->with('usuarioGuardado','Usuario guardado');

}
//eliminar
public function delete($id){
    Usuario::destroy($id);
    return back()->with('usuarioEliminado','Usuario Eliminado');
}
//editar
public function editar($id){
    $usuario = Usuario::findOrFail($id);
    return view('editar', compact('usuario'));
}
public function edit(Request $request, $id){
    $datosUsuario = request()->except((['_token', '_method']));
    Usuario::where('id', '=', $id)->update($datosUsuario);
    return back()->with('usuarioModificado','Usuario Modificado');
}
//edit usuario online
/*public function editarOn($id){
    $productos = Productos::findOrFail($id);
    return view('supervisor.editarU', compact('users'));
}
public function editOn(Request $request, $id){
    $datosProducto = request()->except((['_token', '_method']));
    users::where('id', '=', $id)->update($datosProducto);
    return back()->with('usuarioModificado','Usuario Modificado');
}*/
public function mostrar($id){
    $usuario = Usuario::findOrFail($id);
    return view('mostrar', compact('usuario'));
}

}

