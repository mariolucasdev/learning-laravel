@extends('app')

@section('titulo', 'Lista de Clientes')

@section('conteudo')
    <h1> Lista de Clientes </h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td><a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a></td>
                    <td>{{ $client->endereco }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Editar</a>
                        <form method="POST" action="{{ route('clients.destroy', $client) }}" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Deseja realmente excluir esse clientes?')"> Apagar </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a class="btn btn-success" href="{{ route('clients.create') }}"> Cadastrar Cliente </a>
@endsection
