@extends('layouts.ejemplolayout')

@section('titulo','Página 02 del proyecto')

@section('barralateral')

<p>Esta parte esta en la barra lateral</p>

@endsection

@section('contenido')

<h1>El tema elegido es: {{$tema }}</h1>
<a href="{{url('/')}}" class="btn btn-xs btn-info pull-right">pagina 01</a>
@endsection