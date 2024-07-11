@extends('layout.layout')


@section('content')


<div class = "mt-5 container d-flex flex-wrap justify-content-between ">

    @if (session('success'))
        <div class="alert alert-success" role="alert">{{session ('success')}}</div>
    @endif

    <table class = "table table-bordered content-table">
        <thead>
            <tr class="table-warning" style="">
                <th>ID</th>
                <th>Titulo</th>
                <th>Contenido</th>
                <th width="280px">Acciones</th>
            </tr>
        <tbody>
            @forelse ($notas as $nota)
                <tr>
                    <td>{{ $nota->id }}</td>
                    <td>{{ $nota->titulo }}</td>
                    <td>{{ $nota->contenido }}</td>
                    
                    <td>
                        <div class="btn-group" aria-label="Basic mixed styles">
                            <form action="{{route('notas.destroy', $nota->id)}}" method = "POST">
                                <a class="btn btn-info btn-sm" href="{{route('notas.show', $nota->id)}}"><i class="fa-solid fa-list"></i>Mostrar</a>
                                <a class ="btn btn-primary btn-sm" href="{{route('notas.edit', $nota->id)}}"><i class="fa-solid fa-pen-to-square"></i>Editar</a>
                                @csrf
                                @method ('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i>Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>No hay informacion</td>
                </tr>
            @endempty
        </tbody>
        </thead>
    </table>

    {{ $notas->links()}}

<!--Boton de crear-->
<a class="btn align-self-center" style="background-color: rgb(241, 216, 113)"  href="{{ route('notas.create')}}">Crear Nota</a>


    
</div>  
   

@endsection