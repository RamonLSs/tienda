<?php

namespace App\Http\Controllers;

use App\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        //$nombres = Vendedor::name($request->get('nombre'));

        $vendedores = Vendedor::orderBy('nombre')
        ->paginate(4);

        return view('vendedors.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendedors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('imagen')){
            $request->validate([
                'imagen'=>['image']
            ]);

            $file=$request->file('imagen');
            $nombre = 'vendedores/'.time().'_'.$file->getClientOriginalName();
            \Storage::disk('public')->put($nombre, \File::get($file));
            $vendedores = Vendedor::create($request->all());
            $vendedores->update(['imagen'=>"img/$nombre"]);

        }else{
            Vendedor::create($request->all());
        }
        return redirect()->route('vendedors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendedor $vendedor)
    {
        return view('vendedors.detalle', compact('vendedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendedor $vendedor)
    {
        $vendedores = Vendedor::orderBy('nombre')->get();
        return view('vendedors.edit', compact('vendedor', 'vendedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendedor $vendedor)
    {
         if($request->has('imagen')){
            $request->validate([
                'imagen'=>['image']
            ]);
            //Todo bien hemos subido un archivo y es de imagen
            $file=$request->file('imagen');
            //Creo un nombre
            $nombre='vendedores/'.time().'_'.$file->getClientOriginalName();
            //Guardo el archivo de imagen
            \Storage::disk('public')->put($nombre, \File::get($file));
            //si he subido una foto nueva borro la vieja, SALVO que sea default.jpg
            if(basename($vendedor->imagen)!='default.jpg'){
                unlink($vendedor->imagen);
            }
            //ahora actualizo el coche
            $vendedor->update($request->all());
            $vendedor->update(['imagen'=>"img/$nombre"]);
        }
        else{
            $vendedor->update($request->all());
        }
        return redirect()->route('vendedors.index')->with("mensaje", "Vendedor Modificado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendedor $vendedor)
    {
        $imagen = $vendedor->imagen;
        if(basename($imagen)!= "default.jpg"){
            unlink($imagen);
        }
        $vendedor->delete();
        return redirect()->route('vendedors.index')->with('mensaje', 'Vendedor Eliminado');
    }
}
