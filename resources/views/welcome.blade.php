<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

        <title>Aula de Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    </head>
    <body>
        <style>
         body {
            font-family: 'Instrument Sans', sans-serif;
            background-color: #f8f9fa;
            background-color: #d4f7e4; /* Verde bem claro */
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            color: #088654ff;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .btn-custom {
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 8px;
        }

        a {
            text-decoration: none;
        }
        </style>
    </head>
<body>
    <h1>Olá, Mundo!</h1>

    <a href="{{ route('users.create')}}" class="btn btn-success btn-custom"> Cadastrar </a>
</body>
</html>
