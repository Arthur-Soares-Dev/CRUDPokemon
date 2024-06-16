@extends('layouts.app')

@section('conteudo')
<div class="container">
    <div class="header">
        <h2 class="title">P O K E M O N </h2>
        <a href="/create" class="active-members-link"><span>Criar</span> <span class="active-members-link-new">Novo</span></a>
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
                        <a href="/edit/{{ $pokemon->id }}" class="edit-link">Editar
                        <svg xmlns="http://www.w3.org/2000/svg" class="edit-svg" width="15" height="15" viewBox="0 0 24 24">
                            <path d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z"></path>
                        </svg>
                        </a>
                        
                        
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

    <footer> 
        <span>
            Arthur Soares - Davi Bonfim - Gregory Rodrigues - Karen Luísa - Lucas Wilson
        </span> 
    </footer>
</div>
@endsection
