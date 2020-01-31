@extends('layout')

@section('head')
    Adicionar Série
@endsection

@section('cont')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post">
    @csrf
    <div class="form-group">
        <label for="name" class="">Nome</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection