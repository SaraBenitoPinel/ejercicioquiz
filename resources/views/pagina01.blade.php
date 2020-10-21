@extends('layouts.ejemplolayout')

@section('titulo','Página 01 del proyecto')

@section('barralateral')

<p>Esta parte esta en la barra lateral</p>

@endsection

@section('contenido')

<p>Este es el body</p>

<a href="{{url('pregunta', ['Historia'])}}" class="btn btn-xs btn-info pull-right">HISTORIA</a>
<a href="{{url('pregunta', ['Economia'])}}" class="btn btn-xs btn-info pull-right">ECONOMIA</a>
<a href="{{url('pregunta', ['Ingles'])}}" class="btn btn-xs btn-info pull-right">INGLES</a>
<a href="{{url('api/pregunta', ['Historia'])}}" class="btn btn-xs btn-info pull-right">HISTORIA PERO UN JSON SOLO</a>

@endsection