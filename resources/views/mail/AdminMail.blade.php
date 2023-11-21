<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red {
            color: rgb(0, 47, 255);
        }
    </style>
</head>
<body>
    <h1 class="red">L'utente{{$name}}</h1>
    <p>ci ha scritto:</p>
    <p>{{$text}}</p>
</body>
</html>