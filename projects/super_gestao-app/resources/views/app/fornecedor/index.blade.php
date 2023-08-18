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

@isset($fornecedores) {{-- retorna true se a variável estiver definida --}}
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    Status: {{ $fornecedores[0]['status'] }}
    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj'] }}
        @empty($fornecedores[0]['cnpj'])
            - Vazio 
        @endempty
    @endisset
@endisset
</body>
</html>
