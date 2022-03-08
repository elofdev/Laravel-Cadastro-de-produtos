@include('layouts.estilos')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Produto</title>
</head>

<body>
    <div class="container">
        <div class="titulo-pagina">
            <p>Formulário de atualização de produto</p>
        </div>
        <div class="form">
            <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="row justify-content-between">
                    <div class="col-5 form-floating mb-3">
                        <input class="form-control" name="name" id="floatingInput"
                            placeholder="{{ $product->name }}">
                        <label class="floating-input ms-2">{{ $product->name }}</label>
                    </div>
                    <div class="col-5 ">
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="tags_info">Tags</label>
                            <select class="form-select py-3" multiple="multiple" size="10" aria-label="tags_info"
                                id="tags_info" name="tags_info[]">
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}" class="fs-5"
                                        @foreach ($product->tags as $tags_1)
                                        @if ($tag->id == $tags_1->id) @selected(true) @class(['p-5', 'font-bold' => true, 'bg-green']) @endif @endforeach>{{ $tag->name }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                </div>
                <div class="row text-end">
                    <input type="submit" value="Salvar" class="btn btn-primary btn-lg">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
