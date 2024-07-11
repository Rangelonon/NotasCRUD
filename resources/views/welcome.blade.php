@extends('layout.layout')

@section('content')


<div class="container position-absolute top-50 start-50 translate-middle">
    <h1 class="text-center">Bienvenido</h1>

    <div class="d-grid col-4 mx-auto">
        <a class = "btn btn-sm border border-dark" style="background-color: rgb(255, 242, 141)" href="{{ route('notas.nota') }}">Ir a Notas</a>
    </div>
</div>

    
@endsection