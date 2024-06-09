<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: "Inter", sans-serif;
        }

        .formContainer{
            display: grid;
            align-items: center;
            justify-content: center;
        }

        .buttonSalvar{
            cursor: pointer;
            width: 50%;
            height: 5vh;
            font-size: 1rem;
            border-radius: 5px;
            background-color: white;
            border: .5px solid #000;
            transition: .3s;
            margin-top:5px;
        }

        .buttonSalvar:hover {
            background-color:#1f3f42;
            color:#c8cdc6;
            transition: .3s;
        }

        .form{
            display:grid;
        }

        .select{
            font-size:1.2rem;
            margin-bottom:5px;
        }

        .labelForm{
            margin-bottom:5px;
            font-size:1.3rem;
        }

        #nome{
            margin-bottom:5px;
            font-size:1.2rem;
        }
    </style>
</head>
<body>
    @yield('conteudo')
</body>
</html>