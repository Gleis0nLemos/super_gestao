<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedor</title>
</head>
<body>
    <h3>Fornecedor</h3>
    {{--Fica o comentário que será ignorado pelo blade--}}
@php

@endphp

Fornecedor: {{ $fornecedores[0]['nome'] }}
Status: {{ $fornecedores[0]['status'] }}

<br>

@if(!($fornecedores[0]['status'] == 'S'))
    Fornecedor inativo
@endif

@unless($fornecedores[0]['status'] == 'S') {{-- se o retorno da condição for false --}}
    Fornecedor inativo
@endunless
</body>
</html>
