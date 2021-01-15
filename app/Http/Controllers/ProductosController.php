<?php

namespace App\Http\Controllers;
use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ProductosController extends Controller
{
    public function crear(){
        return view('supervisor.crearP');
    
    }
    //buscador
    public function buscador(Request $request){
    $query = trim($request->get('search'));
    $productos = Productos::where('Nom_Producto','LIKE','%'. $query .'%')
    ->orderBy('id','asc')
    ->get();
    return view('supervisor.productoS', compact('productos'));
    
    }
    // listado
    public function list(){
        $data['productos'] = Productos::simplePaginate(5);
        return view('supervisor.productoS', $data);
    }
    // guardar
    public function save(Request $request){
        $validator = $this->validate($request,
        [
            'Nom_Producto'=> 'required|string|max:255',
            'cantidad' => 'required|string|max:255',
            'precioU' =>  'required'
    
    
        ] );
        $prodata = request()->except('_token');
        Productos::insert($prodata);
        return back()->with('productoGuardado','producto guardado');
    
    }
    //eliminar
    public function delete($id){
        Productos::destroy($id);
        return back()->with('productoEliminado','Producto Eliminado');
    }
    //editar
    public function editar($id){
        $productos = Productos::findOrFail($id);
        return view('supervisor.editarP', compact('productos'));
    }
    public function edit(Request $request, $id){
        $datosProducto = request()->except((['_token', '_method']));
       Productos::where('id', '=', $id)->update($datosProducto);
        return back()->with('productoModificado','producto Modificado');
    }
}
