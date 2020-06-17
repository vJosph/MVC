<!DOCTYPE html>
<html lang="pt-br">

<body>
    @foreach($data as $datas)
    <p>{{$datas['id']}}:{{$datas['nome']}}</p>
    @endforeach
</body>

</html>
