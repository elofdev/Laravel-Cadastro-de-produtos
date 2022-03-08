@include('layouts.estilos')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Produtos</title>
</head>

<body>
    <div class="container">
        <div class="titulo-pagina">
            <p>Listagem de Produtos</p>
        </div>
        <div id="tabela">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">
                            #ID
                        </th>
                        <th scope="col">
                            Nome:
                        </th>
                        <th scope="col">
                            Tag:
                        </th>
                        <th scope="col" class="text-end">
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        @foreach ($product->tags as $tag)
                        <td class="row"> 
                            <div>
                                {{-- {{ $tag->id }} --}} {{ $tag->name }} 
                            </div>  
                        </td>
                        @endforeach
                        <td colspan="2" class="bg-white text-end" style="border-width:0px;">
                            <a class="btn btn-outline-success" href="{{ route('product.show', ['product' => $product->id]) }}">Ver detalhes</a>
                        </td>
                        <td class="bg-white text-end">
                            <form action="{{ route('product.destroy', ['product' => $product->id]) }}"
                                method="POST">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-outline-danger"  type="submit" value="Remover" />
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
    </div>
</body>

</html>
