@extends('layouts.estilos')
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de Tag</title>
</head>

<body>
    <div class="container">
    <div class="titulo-pagina">
        <p>Formulário de cadastro de Tag</p>  </div>
    <div class="row justify-content-around">
    <form action="{{ route('tag.store') }}" method="POST">
        @csrf
        <div class="col-5 form-floating mb-3">
            <input class="form-control" name="name" id="floatingInput" placeholder="Nome da Tag">
            <label class="floating-input ms-2">Nome da Tag:</label>
        </div>
        <input type="submit" value="Cadastrar tag" class="btn btn-primary">
</form>
    </div>
    </div>
</body>
</html>