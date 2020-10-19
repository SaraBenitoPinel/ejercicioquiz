@extends('layouts.ejemplolayout')

@section('titulo','Página 02 del proyecto')

@section('barralateral')

<p>Esta parte esta en la barra lateral</p>

@endsection

@section('contenido')

<h1>Este es el body de la pagina 02</h1>
<a href="{{url('/pagina01')}}" class="btn btn-xs btn-info pull-right">pagina 01</a>
@endsection