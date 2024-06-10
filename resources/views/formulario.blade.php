<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Metainformações -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons</title>

    <!-- Links para fontes externas -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Fonte Inter do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Link para o arquivo de estilo CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Estilos embutidos -->
    <style>
        /* Estilos CSS */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .formContainer {
            width: 80%;
            margin: 0 auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        .title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #343a40;
            text-align: center;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ced4da;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .buttonSalvar {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: #ffffff;
            background-color: #333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            width: 100%;
        }

        .buttonSalvar:hover {
            background-color: #292929;
        }
    </style>
</head>
<body>
    <!-- Contêiner do formulário -->
    <div class="formContainer">
        <!-- Título do formulário -->
        <h1 class="title">Salvar Pokemon</h1>

        <!-- Exibição de mensagens de erro -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    <!-- Listagem de erros -->
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Formulário de cadastro -->
        <form action="/store" method="post" onsubmit="return validarForm()">
            @csrf <!-- Proteção CSRF -->

            <!-- Campos do formulário -->
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <select id="tipo" name="tipo" required>
                    <option value="">Selecione</option>
                    <!-- Opções de tipos -->
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
            </div>

            <div class="form-group">
                <label for="fraqueza">Fraqueza:</label>
                <select id="fraqueza" name="fraqueza" required>
                    <option value="">Selecione</option>
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
            </div>

            <div class="form-group">
                <label for="regiao">Região:</label>
                <select id="regiao" name="regiao" required>
                    <option value="">Selecione</option>
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
            </div>

            <div class="form-group">
                <label for="geracao">Geração:</label>
                <select id="geracao" name="geracao" required>
                    <option value="">Selecione</option>
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
            </div>

            <!-- Botão de salvar -->
            <button class="buttonSalvar" type="submit">Salvar</button>
        </form>
    </div>

    <!-- Script de validação em JavaScript -->
    <script>
        function validarForm() {
            // Obtenção dos valores dos campos
            var nome = document.getElementById("nome").value;
            var tipo = document.getElementById("tipo").value;
            var fraqueza = document.getElementById("fraqueza").value;
            var regiao = document.getElementById("regiao").value;
            var geracao = document.getElementById("geracao").value;

            var msgAlerta = "";

            // Validação dos campos
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

            // Exibição de mensagens de alerta
            if (msgAlerta != "") {
                alert(msgAlerta);
                return false;
            }
            return true;
        }
    </script>
</body>
</html>

