<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supports</title>
</head>
<body>
    <h1>Bem Vindo mundo!</h1>
    <h4>lista de duvidas</h4>

    <a href="{{ route('supports.create')}}">postar duvida</a><br><br>

    <table border="solid">          
        <thead>
            <th>Status</th>
            <th>Assunto</th>
            <th>Descricao</th>
        </thead>
        <tbody>

            @foreach ($supports as $support)
                <tr>
                    <td>{{ $support->status }}</td>
                    <td>{{ $support->subject }}</td>
                    <td>{{ $support->body }}</td>
                    <td>
                        >
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>