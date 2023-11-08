
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Criar Novo Usuário</h2>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf <!-- Adicione o token CSRF para proteção contra ataques CSRF -->

        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection
