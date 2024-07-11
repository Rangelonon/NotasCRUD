@extends('layout.layout')

@section('content')

    <div class="container container-bg formulario d-flex flex-column ">
       
        <h1>Titulo: {{$nota->titulo}}</h1>
        
       <div>
        <p>{{$nota->contenido}}</p>

       
        </form>
    </div>
    

@endsection

