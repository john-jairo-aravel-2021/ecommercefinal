@extends('layouts.default')
@section('content')
<form method="POST" action="{{ route('producto.store')}}">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input required name="nombre" required type="text" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input required name="precio" required type="text" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="descriction" class="form-label">Descripcion</label>
        <input required name="descriction" required type="text" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="disponibilidad" class="form-label">Disponible</label>
        <input required name="disponibilidad" required type="number" class="form-control" >
    </div>
    <div class="mb-3">
        <label for="puntuacion" class="form-label">Calificacion</label>
        <input required name="puntuacion" required type="number" class="form-control" >
    </div>

    
    <!--
    <div class="mb-3">
        <label for="imagen_id" class="form-label">Imagen</label>
        <section name="imagen_id">
           

        </section>
        <input required name="trading" required type="number" class="form-control" >
    </div>
    falata agragar los enlaces de envia 
    agregar lineas para fotos
-->
    
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop
