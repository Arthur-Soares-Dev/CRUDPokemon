<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonsController extends Controller
{
    public function index(Request $request) {
        $query = Pokemon::query();

        // Pesquisa por nome
        if ($request->has('search') && $request->search != '') {
            $query->where('nome', 'like', '%' . $request->search . '%');
        }

        // Ordenação
        if ($request->has('sort') && $request->sort != '') {
            $sortFields = [
                'tipo' => 'tipo',
                'regiao' => 'regiao',
            ];

            if (array_key_exists($request->sort, $sortFields)) {
                $query->orderBy($sortFields[$request->sort]);
            }
        } else {
            $query->orderBy('created_at', 'desc'); // Ordenação padrão
        }

        $pokemons = $query->simplePaginate(10);

        return view('index', compact('pokemons'));
    }

    public function create() {
        return view('formulario');
    }

    public function store(Request $req) {
        $pokemon = new Pokemon();
        $pokemon->nome = $req->nome;
        $pokemon->tipo = $req->tipo;
        $pokemon->fraqueza = $req->fraqueza;
        $pokemon->regiao = $req->regiao;
        $pokemon->geracao = $req->geracao;
        $pokemon->save();
        return redirect('/');
    }

    public function delete(Request $req) {
        $pokemon = Pokemon::find($req->id);
        $pokemon->delete();
        
        return redirect('/');
    }

    public function edit($id) {
        $reg = Pokemon::find($id);
        return view('formularioedit')->with('reg', $reg);
    }

    public function update(Request $req) {
        $pokemon = Pokemon::find($req->id);
        $pokemon->nome = $req->nome;
        $pokemon->tipo = $req->tipo;
        $pokemon->fraqueza = $req->fraqueza;
        $pokemon->regiao = $req->regiao;
        $pokemon->geracao = $req->geracao;
        $pokemon->save();

        return redirect('/');
    }
}
