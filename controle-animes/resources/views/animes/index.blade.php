@extends('layout')

@section('head')
Meus animes
@endsection

@section('cont')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a href="{{ route('form_create_anime') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($animes as $anime)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $anime->name }}
        <form method="post" action="/animes/{{ $anime->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($anime->name) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
    </li>
    @endforeach
</ul>
@endsection