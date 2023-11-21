<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titolo del Documento</title>

    <!-- CDN FONTS -->

    <!-- FAVICON -->

    {{-- VITE APPS LINK  --}}
    @vite (['resources/css/app.css', 'resources/js/app.js'])


</head>

<body>


{{-- Comunica al componente che deve mettere il codice che ha all'interno qui  --}}
{{$slot}}


</body>
</html>