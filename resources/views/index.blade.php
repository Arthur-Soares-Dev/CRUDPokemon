@extends('layouts.app')

@section('conteudo')
<div>
    <!-- Pokémon, temos que pegar eu sei... -->
    <h2>Pokemons</h2>
    <a href="/create">Criar Novo</a>
</div>
<table>
    <tr>
        <td>Nome</td>
        <td>Tipo</td>
        <td>Fraqueza</td>
        <td>Região</td>
        <td>Geração</td>
        <td><td>
        <td><td>
    </tr>
    @foreach($pokemons as $pokemon)
    <tr>
        <td>{{ $pokemon->nome }}</td>
        <td>{{ $pokemon->tipo }}</td>
        <td>{{ $pokemon->fraqueza }}</td>
        <td>{{ $pokemon->regiao }}</td>
        <td>{{ $pokemon->geracao }}</td>
        <td>
            <a href="/edit/{{ $pokemon->id }}">Editar</a>
        </td>
        <td>
            <form action="/delete" method="post" id="form-delete-{{ $pokemon->id }}">
                @csrf                
                <input type="hidden" name="id" value="{{ $pokemon->id }}">
                @method('DELETE')
                <a href="javascript:var c = confirm('Deseja excluir o registro?'); if (c) { document.getElementById('form-delete-{{ $pokemon->id }}').submit(); }">Excluir</a>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection