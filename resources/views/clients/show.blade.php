@extends('app')

@section('titulo', 'Detalhes de Cliente')

@section('conteudo')
    <div class="card">
        <div class="card-header">
            Detalhes do Cliente {{ $client->nome }}
        </div>
        <div class="card-body">
            <p> <strong> ID: </strong> {{ $client->id }} </p>
            <p> <strong> Nome: </strong> {{ $client->nome }} </p>
            <p> <strong> Endereço: </strong> {{ $client->endereco }} </p> <hr>
            <p> <strong> Observações: </strong> {{ $client->observacoes }} </p>
            <br>
            <a class="btn btn-success" href="{{ route('clients.index') }}"> Voltar </a>
        </div>
    </div>
@endsection
