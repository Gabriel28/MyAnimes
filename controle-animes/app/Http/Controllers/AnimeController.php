<?php

namespace App\Http\Controllers;


use App\Anime;
use App\Http\Requests\AnimeFormRequest;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public function index(Request $request) {
        $animes = Anime::query()
            ->orderBy('name')
            ->get();
        $mensagem = $request->session()->get('mensagem');

        return view('animes.index', compact('animes', 'mensagem'));
    }

    public function create()
    {
        return view('animes.create');
    }

    public function store(AnimeFormRequest $request)
    {
        $anime = Anime::create($request->all());
        $request->session()
            ->flash(
                'mensagem',
                "Anime {$anime->id} criada com sucesso {$anime->name}"
            );

        return redirect()->route('listar_animes');
    }

    public function destroy(Request $request)
    {
        Anime::destroy($request->id);
        $request->session()
            ->flash(
                'mensagem',
                "Anime removidos com sucesso"
            );
        return redirect()->route('listar_animes');
    }
}