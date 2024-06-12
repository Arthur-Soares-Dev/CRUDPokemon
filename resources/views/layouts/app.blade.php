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
        }

        .formBody{
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .formContainer{
            width: 80%;
            margin: 0 auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
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
            color: #343a40;
            text-align: center;
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

        .table-container{
            overflow-x: auto;
        }

        .form{
            display:grid;
            justify-content:center;
        }

        .select{
            font-size:1.2rem;
            margin-bottom:5px;
            cursor: pointer;
            transition: .3s;
            padding-left: 5px;
        }

        .select:hover{
            background-color:#1f3f42;
            color:#c8cdc6;
            transition: .3s;
            appearance: none;
            padding-left: 5px;
        }

        .select:active{
            border: 0px;
        }

        .labelForm{
            margin-bottom:5px;
            font-size:1.3rem;
        }

    </style>
</head>
<body>
    @yield('conteudo')
</body>
</html>