<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Listagem de Produtos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container shadow-lg p-3 mb-5 bg-body rounded">
    <div class="display-5 text-center border border-3 border-primary text-primary rounded">
        Lista de Tags
    </div>
    <div class="jumbotron">
    <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">
                #ID
            </th>
            <th scope="col">
                Nome:
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach ($tags as $tag)
        <tr>
            <th scope="row">{{ $tag->id }}</th>
            <td>{{ $tag->name }}</td>
            <td>
                <button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="link:<a href='{{ route('tag.show',['tag' => $tag->id]) }}''></a>" data-html="true">
                    Detalhes
                </button>
            </td>
            <td>
                <form action="{{ route('tag.destroy', ['tag'=> $tag->id]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Remover" />
                </form>
            </td>
        </tr>
    </tbody>
@endforeach
</table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>