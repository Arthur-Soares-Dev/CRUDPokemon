@extends('layouts.app')
@section('conteudo')
<div class="formContainer">
    <h1>
        <!-- Pokémon, juntos teremos que... -->
        Editar Pokemon
    </h1>
    <form class="form" action="/update" method="post" onsubmit="return validarForm()">
        @csrf
        <input type="hidden" name="id" value="{{ $reg->id }}">
        @method('PUT')
        <!--<p>-->
            <label class="labelForm" for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $reg->nome }}">
        <!--</p>
        <p>-->
            <label class="labelForm" for="tipo">Tipo:</label>
            <select class="select" id="tipo" name="tipo">
                <option value="normal" {{ $reg->tipo == "normal" ? "selected" : "" }}>Normal</option>
                <option value="fogo" {{ $reg->tipo == "fogo" ? "selected" : "" }}>Fogo</option>
                <option value="agua" {{ $reg->tipo == "agua" ? "selected" : "" }}>Água</option>
                <option value="grama" {{ $reg->tipo == "grama" ? "selected" : "" }}>Grama</option>
                <option value="voador" {{ $reg->tipo == "voador" ? "selected" : "" }}>Voador</option>
                <option value="lutador" {{ $reg->tipo == "lutador" ? "selected" : "" }}>Lutador</option>
                <option value="veneno" {{ $reg->tipo == "veneno" ? "selected" : "" }}>Veneno</option>
                <option value="eletrico" {{ $reg->tipo == "eletrico" ? "selected" : "" }}>Elétrico</option>
                <option value="terra" {{ $reg->tipo == "terra" ? "selected" : "" }}>Terra</option>
                <option value="pedra" {{ $reg->tipo == "pedra" ? "selected" : "" }}>Pedra</option>
                <option value="psiquico" {{ $reg->tipo == "psiquico" ? "selected" : "" }}>Psíquico</option>
                <option value="gelo" {{ $reg->tipo == "gelo" ? "selected" : "" }}>Gelo</option>
                <option value="inseto" {{ $reg->tipo == "inseto" ? "selected" : "" }}>Inseto</option>
                <option value="fantasma" {{ $reg->tipo == "fantasma" ? "selected" : "" }}>Fantasma</option>
                <option value="ferro" {{ $reg->tipo == "ferro" ? "selected" : "" }}>Ferro</option>
                <option value="dragao" {{ $reg->tipo == "dragao" ? "selected" : "" }}>Dragão</option>
                <option value="sombrio" {{ $reg->tipo == "sombrio" ? "selected" : "" }}>Sombrio</option>
                <option value="fada" {{ $reg->tipo == "fada" ? "selected" : "" }}>Fada</option>
            </select>
        <!--</p>
        <p>-->
            <label class="labelForm" for="fraqueza">Fraqueza:</label>
            <select class="select" id="fraqueza" name="fraqueza">
                <option value="normal" {{ $reg->fraqueza == "normal" ? "selected" : "" }}>Normal</option>
                <option value="fogo" {{ $reg->fraqueza == "fogo" ? "selected" : "" }}>Fogo</option>
                <option value="agua" {{ $reg->fraqueza == "agua" ? "selected" : "" }}>Água</option>
                <option value="grama" {{ $reg->fraqueza == "grama" ? "selected" : "" }}>Grama</option>
                <option value="voador" {{ $reg->fraqueza == "voador" ? "selected" : "" }}>Voador</option>
                <option value="lutador" {{ $reg->fraqueza == "lutador" ? "selected" : "" }}>Lutador</option>
                <option value="veneno" {{ $reg->fraqueza == "veneno" ? "selected" : "" }}>Veneno</option>
                <option value="eletrico" {{ $reg->fraqueza == "eletrico" ? "selected" : "" }}>Elétrico</option>
                <option value="terra" {{ $reg->fraqueza == "terra" ? "selected" : "" }}>Terra</option>
                <option value="pedra" {{ $reg->fraqueza == "pedra" ? "selected" : "" }}>Pedra</option>
                <option value="psiquico" {{ $reg->fraqueza == "psiquico" ? "selected" : "" }}>Psíquico</option>
                <option value="gelo" {{ $reg->fraqueza == "gelo" ? "selected" : "" }}>Gelo</option>
                <option value="inseto" {{ $reg->fraqueza == "inseto" ? "selected" : "" }}>Inseto</option>
                <option value="fantasma" {{ $reg->fraqueza == "fantasma" ? "selected" : "" }}>Fantasma</option>
                <option value="ferro" {{ $reg->fraqueza == "ferro" ? "selected" : "" }}>Ferro</option>
                <option value="dragao" {{ $reg->fraqueza == "dragao" ? "selected" : "" }}>Dragão</option>
                <option value="sombrio" {{ $reg->fraqueza == "sombrio" ? "selected" : "" }}>Sombrio</option>
                <option value="fada" {{ $reg->fraqueza == "fada" ? "selected" : "" }}>Fada</option>
            </select>
        <!--</p>
        <p>-->
            <label class="labelForm" for="regiao">Região:</label>
            <select class="select" id="regiao" name="regiao">
                <option value="kanto" {{ $reg->regiao == "kanto" ? "selected" : "" }}>Kanto</option>
                <option value="johto" {{ $reg->regiao == "johto" ? "selected" : "" }}>Johto</option>
                <option value="hoenn" {{ $reg->regiao == "hoenn" ? "selected" : "" }}>Hoenn</option>
                <option value="sinnoh" {{ $reg->regiao == "sinnoh" ? "selected" : "" }}>Sinnoh</option>
                <option value="unova" {{ $reg->regiao == "unova" ? "selected" : "" }}>Unova</option>
                <option value="kalos" {{ $reg->regiao == "kalos" ? "selected" : "" }}>Kalos</option>
                <option value="alola" {{ $reg->regiao == "alola" ? "selected" : "" }}>Alola</option>
                <option value="galar" {{ $reg->regiao == "galar" ? "selected" : "" }}>Galar</option>
                <option value="paldea" {{ $reg->regiao == "paldea" ? "selected" : "" }}>Paldea</option>
            </select>
        <!--</p>
        <p>-->
            <label class="labelForm" for="geracao">Geração:</label>
            <select class="select" id="geracao" name="geracao">
                <option value="1" {{ $reg->geracao == "1" ? "selected" : "" }}>Primeira</option>
                <option value="2" {{ $reg->geracao == "2" ? "selected" : "" }}>Segunda</option>
                <option value="3" {{ $reg->geracao == "3" ? "selected" : "" }}>Terceira</option>
                <option value="4" {{ $reg->geracao == "4" ? "selected" : "" }}>Quarta</option>
                <option value="5" {{ $reg->geracao == "5" ? "selected" : "" }}>Quinta</option>
                <option value="6" {{ $reg->geracao == "6" ? "selected" : "" }}>Sexta</option>
                <option value="7" {{ $reg->geracao == "7" ? "selected" : "" }}>Sétima</option>
                <option value="8" {{ $reg->geracao == "8" ? "selected" : "" }}>Oitava</option>
                <option value="9" {{ $reg->geracao == "9" ? "selected" : "" }}>Nona</option>
            </select>
        <!--</p>
        <p>-->
            <button class="buttonSalvar" type="submit">Editar</button>
        <!--</p>-->
    </form>
</div>

<script>
        function validarForm(){
            var nome = document.getElementById("nome").value;
            var tipo = document.getElementById("tipo").value;
            var fraqueza = document.getElementById("fraqueza").value;
            var regiao = document.getElementById("regiao").value;
            var geracao = document.getElementById("geracao").value;

            var msgAlerta = "";

            if (nome == "") {
                msgAlerta += "Por favor, preencha o nome.\n";
            }
            if (tipo == "") {
                msgAlerta += "Por favor, selecione um tipo.\n";
            }
            if (fraqueza == "") {
                msgAlerta += "Por favor, selecione uma fraqueza.\n";
            }
            if (regiao == "") {
                msgAlerta += "Por favor, selecione uma região.\n";
            }
            if (geracao == "") {
                msgAlerta += "Por favor, selecione uma geração.\n";
            }

            if (msgAlerta != "") {
                alert(msgAlerta);
                return false;
        }
        return true;
    </script>
@endsection