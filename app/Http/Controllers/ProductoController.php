<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // if(Auth::cheak() == false) {
          //  return redirect()->route('producto');
       // }
       // $user = Auth::user();
        return view('components/productos.index', ['productos' => producto::all()]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $productos = Producto::all();
        return view ('components.productos.create',compact('productos'));
    }
       

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $request->user();
        $dataProductoFrom = $request->validate([
            'nombre'=>['string','required'],
            'precio'=>['required'],
            'descripcion'=>['required'],
            'disponibilidad'=>['required'],
            'puntuacion'=>['required'],
        ]);
        $producto = new producto();
        $producto->nombre = $dataProductoForm['nombre'];
        $producto->precio = $dataProductoForm['precio'];
        $producto->description = $dataProductoForm['descripcion'];
        $producto->disponible = $dataProductoForm['disponibilidad'];
        $producto->trading = $dataProductoForm['puntuacion'];
        $producto->save();

        session()->flash("status","success");
        session()->flash("message","Producto se creo corretamente ");

        return redirect()->route('register');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
       return view('components/productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
