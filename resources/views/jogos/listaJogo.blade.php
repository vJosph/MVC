<html>

<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
        </tr>
        @foreach($jogos as $jogo)
        <tr>
        <td>{{$jogo->nome}}</td>
        <td>{{$jogo->descricao}}</td>
        <td>{{$jogo->preco}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
