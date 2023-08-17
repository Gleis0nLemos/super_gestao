<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>
<body>
    <h1>Teste</h1>
 
    <ul>
        <li><a href="{{ route('site.index') }}">Principal</a></li>
        <li><a href="{{ route('site.contato') }}">Contato</a></li>
        <li><a href="{{ route('site.sobre-nos') }}">Sobre nós</a></li>
    </ul>   

    <div>
        <h3>Soma: {{ $p1 + $p2 }}</h3>
    </div>
</body>
</html>