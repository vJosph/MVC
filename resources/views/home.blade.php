@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1 style="text-align: center"> LOGOU AMEM</h1>
                <hr>
                    <br>
                        <a href="/produtos/adicionar">Adicionar produto</a> <br>
                        <hr>
                        <a href="/produtos/listar">Lista de produtos</a> <br>
                        <hr>
                        <a href="/categorias/adicionar">Adicionar categoria</a> <br>
                        <hr>
                        <a href="/categorias/listar">Categorias</a> <br>
                        <hr>
                        <a href="/users">Usuarios</a> <br>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
