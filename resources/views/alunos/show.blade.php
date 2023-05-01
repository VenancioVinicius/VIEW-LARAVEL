<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
</head>
<body>
    <a href="{{route('alunos.index')}}">Voltar</a>
    <br>
    <label>ID: </label>{{$alunos['id']}}
    <br>
    <label>Nome: </label>{{$alunos['nome']}}
    <br>
    <label>E-mail: </label>{{$alunos['email']}}
</body>
</html>