<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar</title>
</head>
<body>
    <h1>Dados da duvida de {{$support->id}}</h1> 

    <ul>
        <li>Status: {{$support->status}}</li>
        <li>Assunto: {{$support->subject}}</li>
        <li>Descricao: {{$support->body}}</li>
    </ul>

    <form action="{{ route('supports.destroy', $support->id)}}" method="POST">
        @csrf()
        @method('delete')
        <button type="submit"> Apagar </button>
    </form>
    
</body>
</html>