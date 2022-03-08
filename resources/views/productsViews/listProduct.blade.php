@include('layouts.estilos')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes Produto</title>
</head>

<body>
    <div class="container">
        <div class="titulo-pagina">
            <p>
                Detalhes do Produto
            </p>
        </div>
        <div id="tabela">
            <table class="table table-striped">
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
                    </tr>
                </thead>
                <tbody>
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
                    </tr>
                </tbody>
            </table>
        </div>
        <p>{{ date('d/m/y H:i', strtotime($product->created_at)) }}

    </div>
</body>

</html>
