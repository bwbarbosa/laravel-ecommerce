<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>

    <h2>{{ $product->name }}</h2>

    <h4>{{ $product->description }}</h4>

    <p>R${{ $product->price }}</p>

    <a href="/products/edit/{{ $product->id}}">Editar</a>

</body>
</html>