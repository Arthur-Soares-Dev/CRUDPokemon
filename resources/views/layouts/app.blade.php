<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemons</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        * {
            font-family: "Inter", sans-serif;
            padding: 0;
            box-sizing: border-box;
        }
        
        .header-header{
            display: flex;
            align-items: center;
            justify-content: start;
            position: absolute;
            top: 0%;
            left: 0%;
            padding: 0px 60px 0px 10px;
            color: white;
            background-color: #1f3f42;
            width: 100%;
            height: 4vh;
        }

        .header-header ul{
            display: flex;
            align-items: center;
        }

        .header-header ul li{
            list-style: none;
            margin-left: 20%;
            transition: .5s;
            text-decoration: none;
            color: white;
        }

        .header-header ul li a{
            transition: .5s;
            text-decoration: none;
            color: white;
        }

        .header-header ul li a:hover{
            border-bottom: 1px solid #798985;
            color: #798985;
            cursor: pointer;
            transition: .5s;
        }

        .formContainer{
            width: 80%;
            margin: 0 auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 50px
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #1f3f42;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .form-group select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #1f3f42;
            border-radius: 4px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group select:focus {
            border-color: #798985;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(31, 63, 66, 0.25);
        }

        .divTitle{
            display: grid;
            align-items: center;
            justify-content: center;
        }

        .title{
            font-size:3rem;

            /*coisa nova*/
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #7b6f53;
            text-align: center;
        }

        .buttonSalvar {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            color: #ffffff;
            background-color: #1f3f42;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            width: 99.3%;
        }

        .buttonSalvar:hover {
            background-color: #798985;
            border: none;
        }

        .table-container{
            overflow-x: auto;
        }

        footer{
            width: 100%;
            height: 5vh;
            right: 0%;
            bottom: 0;
            text-align: center;
            border-top: 1px solid #1f3f42;
            color: #1f3f42;
            padding: 10px 0px 10px 0px;
        }

    </style>
</head>
<body>
    <header class="header-header">
        <span>CRUDPOKEMON</span>
        <ul>
            <li><a href="/">INÍCIO</a></li>
            <li><a href="/create">CRIAR</a></li>
        </ul>
    </header>
    @yield('conteudo')
</body>
</html>