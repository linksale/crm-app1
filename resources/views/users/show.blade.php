


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Visualização de Usuário') }}</div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID:</th>
                            <td>{{ $user->id }}</td>
                        </tr>
                        <tr>
                            <th>Nome:</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>E-mail:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Criado em:</th>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Atualizado em:</th>
                            <td>{{ $user->updated_at }}</td>
                        </tr>
                    </table>

                    <a href="{{ route('users.index') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
