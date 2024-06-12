@extends('layouts.app')

@section('conteudo')
<div class="container">
    <div class="header">
        <h2 class="title">P O K E M O N </h2>
        <a href="/create" class="active-members-link">Criar Novo</a>
    </div>
    <div class="search-sort">
        <form method="GET" action="{{ route('pokemons.index') }}">
            <input type="text" name="search" class="search-input" placeholder="Search Name" value="{{ request('search') }}">
            <select name="sort" class="sort-select">
                <option value="">Filter</option>
                <option value="tipo" {{ request('sort') == 'tipo' ? 'selected' : '' }}>Tipo</option>
                <option value="regiao" {{ request('sort') == 'regiao' ? 'selected' : '' }}>Região</option>
            </select>
            <button type="submit" class="sort-button">Filter</button>
        </form>
    </div>
    <div class="table-container">
        <table class="customers-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Fraqueza</th>
                    <th>Região</th>
                    <th>Geração</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pokemons as $pokemon)
                <tr>
                    <td>{{ $pokemon->nome }}</td>
                    <td>{{ $pokemon->tipo }}</td>
                    <td>{{ $pokemon->fraqueza }}</td>
                    <td>{{ $pokemon->regiao }}</td>
                    <td>{{ $pokemon->geracao }}</td>
                    <td>
                        <a href="/edit/{{ $pokemon->id }}" class="edit-link">Editar</a>
                    </td>
                    <td>
                        <form action="/delete" method="post" id="form-delete-{{ $pokemon->id }}">
                            @csrf                
                            <input type="hidden" name="id" value="{{ $pokemon->id }}">
                            @method('DELETE')
                            <input type="submit" value="Excluir" class="delete-button" onclick="return confirm('Deseja excluir o registro?')">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination">
        {{ $pokemons->links() }}
    </div>
</div>
@endsection
