<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <a href="/products/destroy/{{ $product->id }}">Deletar</a><br><br>

    <form action="/products/update/{{ $product->id}}" method="POST">
    @csrf 
    <input name="name" placeholder="Nome" value="{{ $product->name}}"><br><br>

    <textarea name="description" placeholder="Descrição" rows="4"> {{$product->description }}</textarea><br><br>

    <input type="number" name="price" placeholder="Preço" value="{{ $product->price }}"><br><br>

    <button type="submit">Enviar</button>
    </form>
</body>
</html>