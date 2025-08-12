<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuários</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #dff9f0; /* Verde bem clarinho no fundo */
        }
        .card {
            background-color: #e9fff3; /* Verde claro para o card */
            border-radius: 15px;
            border: 2px solid #088654ff;
        }
        .card-header {
            background-color: #088654ff !important; /* Verde principal */
            border-top-left-radius: 13px;
            border-top-right-radius: 13px;
        }
        .form-control {
            border-color: #088654ff;
            background-color: #f3fff8; /* Verde bem clarinho no campo */
        }
        .form-control:focus {
            border-color: #066e44;
            box-shadow: 0 0 5px #088654ff;
        }
        .btn-custom {
            background-color: #088654ff;
            border-color: #088654ff;
        }
        .btn-custom:hover {
            background-color: #066e44;
            border-color: #066e44;
        }
        .btn-outline-custom {
            border-color: #088654ff;
            color: #088654ff;
        }
        .btn-outline-custom:hover {
            background-color: #088654ff;
            color: white;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<div class="card shadow-lg" style="width: 100%; max-width: 450px;">
    <div class="card-header text-white text-center">
        <h1 class="h4 mb-0">Cadastrar Usuários</h1>
    </div>
    <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-semibold">Nome:</label>
                <input type="text" name="name" id="name" 
                       class="form-control" 
                       placeholder="Digite o seu nome" 
                       value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-semibold">Email:</label>
                <input type="email" name="email" id="email" 
                       class="form-control" 
                       placeholder="Digite o seu email" 
                       value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label fw-semibold">Senha:</label>
                <input type="password" name="password" id="password" 
                       class="form-control" 
                       placeholder="Digite a sua senha" 
                       value="{{ old('password') }}" required>
            </div>

            <button type="submit" class="btn btn-custom w-100 text-white fw-semibold">Cadastrar</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('welcome') }}" class="btn btn-outline-custom w-100">Voltar</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>