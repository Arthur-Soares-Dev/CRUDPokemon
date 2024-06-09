@extends('layouts.app')
@section('conteudo')

<div class="formContainer">
    <h1>
        Salvar Pokemon
    </h1>
    <form class="form" action="/store" method="post">
        @csrf
        <!--<p>-->
            <label class="labelForm" for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="">
        <!--</p>
        <p>-->
            <label class="labelForm" for="tipo">Tipo:</label>
            <select class="select" id="tipo" name="tipo">
                <option value="normal">Normal</option>
                <option value="fogo">Fogo</option>
                <option value="agua">Água</option>
                <option value="grama">Grama</option>
                <option value="voador">Voador</option>
                <option value="lutador">Lutador</option>
                <option value="veneno">Veneno</option>
                <option value="eletrico">Elétrico</option>
                <option value="terra">Terra</option>
                <option value="pedra">Pedra</option>
                <option value="psiquico">Psíquico</option>
                <option value="gelo">Gelo</option>
                <option value="inseto">Inseto</option>
                <option value="fantasma">Fantasma</option>
                <option value="ferro">Ferro</option>
                <option value="dragao">Dragão</option>
                <option value="sombrio">Sombrio</option>
                <option value="fada">Fada</option>
            </select>
        <!--</p>
        <p>-->
            <label class="labelForm" for="fraqueza">Fraqueza:</label>
            <select class="select" id="fraqueza" name="fraqueza">
                <option value="normal">Normal</option>
                <option value="fogo">Fogo</option>
                <option value="agua">Água</option>
                <option value="grama">Grama</option>
                <option value="voador">Voador</option>
                <option value="lutador">Lutador</option>
                <option value="veneno">Veneno</option>
                <option value="eletrico">Elétrico</option>
                <option value="terra">Terra</option>
                <option value="pedra">Pedra</option>
                <option value="psiquico">Psíquico</option>
                <option value="gelo">Gelo</option>
                <option value="inseto">Inseto</option>
                <option value="fantasma">Fantasma</option>
                <option value="ferro">Ferro</option>
                <option value="dragao">Dragão</option>
                <option value="sombrio">Sombrio</option>
                <option value="fada">Fada</option>
            </select>
        <!--</p>
        <p>-->
            <label class="labelForm" for="regiao">Região:</label>
            <select class="select" id="regiao" name="regiao">
                <option value="kanto">Kanto</option>
                <option value="johto">Johto</option>
                <option value="hoenn">Hoenn</option>
                <option value="sinnoh">Sinnoh</option>
                <option value="unova">Unova</option>
                <option value="kalos">Kalos</option>
                <option value="alola">Alola</option>
                <option value="galar">Galar</option>
                <option value="paldea">Paldea</option>
            </select>
        <!--</p>
        <p>-->
            <label class="labelForm" for="geracao">Geração:</label>
            <select class="select" id="geracao" name="geracao">
                <option value="1">Primeira</option>
                <option value="2">Segunda</option>
                <option value="3">Terceira</option>
                <option value="4">Quarta</option>
                <option value="5">Quinta</option>
                <option value="6">Sexta</option>
                <option value="7">Sétima</option>
                <option value="8">Oitava</option>
                <option value="9">Nona</option>
            </select>
        <!--</p>
        <p>-->
            <button class="buttonSalvar" type="submit">Salvar</button>
        <!--</p>-->
    </form>
</div>
@endsection