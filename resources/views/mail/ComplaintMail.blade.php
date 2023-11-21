<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red {
            color: red;
        }
    </style>
</head>
<body>
    <h1 class="red">Grazie per il feedback {{$name}}</h1>
    <p>Analizzeremo il tuo reclamo al più presto.</p>
    <strong>Ecco il messaggio che ci hai inviato:</strong>  
    <p>{{$text}}</p>
</body>
</html>