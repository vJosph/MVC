@extends('layouts.prod')
@section('title', 'Produtos')
@section('navbar')
<p>Produtos a venda</p>
@parent
@endsection

@section('content')
    <p>Nessa loja vendemos {{$produto}}</p>
    @if($visivel)
        @foreach($instrumentos as $instrumento)
            <p>Nome: {{$instrumento['id']}}:{{$instrumento['nome']}}</p>
            <p>Preço: {{$instrumento['id']}}:{{$instrumento['valor']}}</p>
        @endforeach
    @else
        escondidinho
    @endif
@endsection
