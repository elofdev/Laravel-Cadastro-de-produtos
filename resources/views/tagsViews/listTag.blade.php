<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Detalhes da tag</title>
</head>
<body>
<div class="container">
<h1>Dtalhes da Tag</h1>
<form class="row gx-3 gy-2 align-items-center">
    <div class="col-sm-3">
      <label class="visually-hidden" for="specificSizeInputName">ID</label>
      <label class="visually-hidden" for="specificSizeInputName">{{ $tag->id }}</label>
      
      <input type="text" readonly class="form-control-plaintext" id="specificSizeInputName" placeholder="{{ $tag->id }}">
      {{ $tag->id }}
    </div>
    <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">{{ $tag->name }}</label>

        <input type="text" readonly class="form-control-plaintext" id="specificSizeInputName" placeholder="Jane Doe">
        {{ $tag->name }}
      </div>
      <div class="col-sm-3">
        <label class="visually-hidden" for="specificSizeInputName">Criada em :</label>
        <input type="text" readonly class="form-control-plaintext" id="specificSizeInputName" placeholder="Jane Doe">
        <p>{{ date('d/m/y H:i', strtotime($tag->created_at)) }}
      </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</body>
</html>