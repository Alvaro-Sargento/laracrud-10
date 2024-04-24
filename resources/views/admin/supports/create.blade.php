<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>support - create</title>
</head>
<body>
    <h1>Nova Duvida</h1>

    <form action="{{ route('supports.store')}}" method="POST">

        {{-- este e um token de segurranra para confirmar a requisicao e evitar captacao de dados --}}
        {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
        @csrf
        
        <input type="text" placeholder="assunto" name="subject">
        <br> <br>
        <textarea name="body" id="" placeholder="descreva aqui..." cols="30" rows="10"></textarea><br> <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
