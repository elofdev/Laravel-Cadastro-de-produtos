<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Produto</title>
</head>

<body>
<div class="container">
    <div class="Title display-5">Editar Tag</div>
    <div>
        <form action="{{ route('tag.update', ['tag' => $tag->id]) }}" method="POST">
            @csrf
            @method('put')
            <label for="">Nome Tag:</label>
            <input class="form-control" type="text" name="name" value="{{ $tag->name }}">
            <input class="form-control btn-primary"type="submit" value="Editar Tag">
            </form>

    </div>
    
</div>
</body>

</html>
