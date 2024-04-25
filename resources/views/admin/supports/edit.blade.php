<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supports</title>
</head>
<body>

    <h4>Duvida {{$support->id}}</h4>

    <form action="{{ route('supports.update', $support->id)}}" method="POST">

        {{-- este e um token de segurranra para confirmar a requisicao e evitar captacao de dados --}}
        {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
        @csrf

        {{-- serve para tratar os metodos pk nao existe requisicao do tipo put --}}
        @method('PUT')


        <input type="text" placeholder="assunto" name="subject" value="{{ $support->subject}}">
        <br> <br>
        <textarea name="body" id="" placeholder="descreva aqui..." cols="30" rows="10">{{ $support->body}}</textarea><br> <br>
        <button type="submit">Actualizar</button>
    </form>
    
</body>
</html>