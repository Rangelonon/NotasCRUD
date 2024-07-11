@extends('layout.layout')

@section('content')

    <div class="container formulario ">
        <form action="{{ route('notas.update', $nota->id)}}" method="POST">
            @csrf
            @method('PUT')

            <!--Cuadro titulo-->
            <div class="mb-3">
                <label for="txtTitulo" class="form-label"><strong>Titulo:</strong></label>
                <input type="text" name="titulo" id="form-control @error('titulo') is-invalid @enderror"
                        id="txtTitulo" value="{{ old('titulo',$nota->titulo)}}"> 
            </div>
    
            <!--Cuadro contenido-->
            <div class="mb-3"  style="margin-left: 3px">
                <label for="txtContenido" class="form-label" ><strong>Contenido:</strong></label>
                <textarea class= "mx-auto" rows="10" cols="26" type="textarea" name="contenido" id="form-control @error('contenido') is-invalid @enderror" 
                        id="txtContenido" placeholder="Ingresa Contenido" >{{old('contenido', $nota->contenido)}}</textarea>
            </div>

            <button type="submit" class="btn btn-light" style="box-shadow: 5px 5px 10px rgb(156, 156, 156);"><i class="fa-solid fa-file" style="margin-right: 5px; " ></i>Editar</button>
        </form>
    </div>
    

@endsection

