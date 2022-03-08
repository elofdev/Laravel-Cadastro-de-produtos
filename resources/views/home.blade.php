@extends('layouts.app')
@extends('layouts.inicial')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (Auth::check() === true)
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            {{ __('Você esta logado!') }}
                        </div>
                    @else
                    {{ __('Você Não esta logado!') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
