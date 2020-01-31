@extends('layout')

@section('head')
Meus jogos
@endsection

@section('cont')

@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif

<a href="{{ route('form_criar_game') }}" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($games as $game)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        {{ $game->name }}
        <form method="post" action="/games/{{ $game->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($game->name) }}?')">
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