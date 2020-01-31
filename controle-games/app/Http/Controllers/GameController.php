<?php

namespace App\Http\Controllers;


use App\Game;
use App\Http\Requests\GameFormRequest;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index(Request $request) {
        $games = Game::query()
            ->orderBy('name')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('games.index', compact('games', 'mensagem'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(GameFormRequest $request)
    {
        $game = Game::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Série {$game->id} criada com sucesso {$game->name}"
            );

        return redirect()->route('listar_games');
    }

    public function destroy(Request $request)
    {
        Game::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Série removida com sucesso"
            );
        return redirect()->route('listar_games');
    }
}