<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;

class PokemonsController extends Controller
{
    public function index() {
        $pokemons = Pokemon::get();
        return view('index')->with('pokemons', $pokemons);
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
