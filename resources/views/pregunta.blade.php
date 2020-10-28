@extends('layouts.ejemplolayout')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-3">
            <h1 id="marcador"></h1>
        </div>
        <div id="preguntas" class="col-6">

            <!-- <button class="btn btn-block btn-warning disabled">{{$pregunta[0]->enunciado}}</button>
            <br><br>
            <button class="btn btn-block btn-info">{{$pregunta[0]->r1}}</button>
            <br><br>
            <button class="btn btn-block btn-info">{{$pregunta[0]->r2}}</button>
            <br><br>
            <button class="btn btn-block btn-info">{{$pregunta[0]->r3}}</button>
            <br><br>
            <button class="btn btn-block btn-info">{{$pregunta[0]->r4}}</button>
            <br><br> -->
        </div>
        <div class="col-3">

        </div>
    </div>
</div>

<script>
    var pregunta = @json($pregunta)

    $('#marcador').html('{{$marcador}}');
    $('#preguntas').append('<button class="btn btn-block btn-warning disabled">' + pregunta[0].enunciado + '</button>');
    $('#preguntas').append('<button id="1" class="btn btn-block btn-primary" onclick="chequeaRespuesta(1)">' + pregunta[0].r1 + '</button>');
    $('#preguntas').append('<button id="2" class="btn btn-block btn-primary" onclick="chequeaRespuesta(2)">' + pregunta[0].r2 + '</button>');
    $('#preguntas').append('<button id="3" class="btn btn-block btn-primary" onclick="chequeaRespuesta(3)">' + pregunta[0].r3 + '</button>');
    $('#preguntas').append('<button id="4" class="btn btn-block btn-primary" onclick="chequeaRespuesta(4)">' + pregunta[0].r4 + '</button>');

    function chequeaRespuesta(_respuesta) {
        $('button').addClass('disabled').prop("onclick", null);
        if (_respuesta == pregunta[0].correcta) {
            $('#'+_respuesta).removeClass('btn-primary').addClass('btn-success');
        } else {
            $('#'+_respuesta).removeClass('btn-primary').addClass('btn-danger');
            $('#'+pregunta[0].correcta).removeClass('btn-primary').addClass('btn-success');
        }
        $('#preguntas').append('<button class="btn btn-block btn-dark" onclick="sigue()">Pregunta siguiente</button>');
    }
    
    function sigue() {
        window.location.replace(href = "{{url('pregunta',[$tema, $marcador])}}");
    }
</script>