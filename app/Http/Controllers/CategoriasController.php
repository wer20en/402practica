<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class CategoriasController extends Controller
{
    public function crear(){
        return view('supervisor.crearC');
    
    }
    // listado
    public function list(){
        $data['categorias'] = Categorias::simplePaginate(5);
        return view('supervisor.categorias', $data);
    }
    // guardar
    public function save(Request $request){
        $validator = $this->validate($request,
        [
            'categorias'=> 'required|string|max:255',
            'descripcion' => 'required|string|max:255'
    
    
        ] );
        $catdata = request()->except('_token');
        Categorias::insert($catdata);
        return back()->with('categoriaGuardado','categoria guardado');
    
    }
    //eliminar
    public function delete($id){
        Categorias::destroy($id);
        return back()->with('categoriaEliminado','categoria Eliminado');
    }
    //editar
    public function editar($id){
        $categorias = Categorias::findOrFail($id);
        return view('supervisor.editarC', compact('categorias'));
    }
    public function edit(Request $request, $id){
        $datosCategoria = request()->except((['_token', '_method']));
        Categorias::where('id', '=', $id)->update($datosCategoria);
        return back()->with('categoriaModificado','Categoria Modificado');
    }
}