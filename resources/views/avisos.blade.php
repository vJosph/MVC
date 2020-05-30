@extends('layouts.externo')
@section('title','Quadro de Avisos da Empresa')
@section('sidebar')
@parent
<p></p>
@endsection
@section('content')
<p>Quadro de Avisos da Empresa</p>
<br>
<p>{{$nome}}! Veja os avisos de hoje:</p>
@if($mostrar)
    @foreach($avisos as $aviso)
        <p>Aviso {{$aviso['id']}}:{{$aviso['texto']}}</p>
    @endforeach
@else
    Escondendo aviso
@endif
@endsection
