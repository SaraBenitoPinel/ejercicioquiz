@extends('layouts.ejemplolayout')

@section('titulo','Página 01 del proyecto')

@section('barralateral')

<p>Esta parte esta en la barra lateral</p>

@endsection

@section('contenido')

<p>Este es el body</p>
<a href="{{url('/pagina02/Historia')}}" class="btn btn-xs btn-info pull-right">HISTORIA</a>
<a href="{{url('/pagina02/Economia')}}" class="btn btn-xs btn-info pull-right">ECONOMIA</a>
<a href="{{url('/pagina02/Ingles')}}" class="btn btn-xs btn-info pull-right">INGLES</a>
@endsection