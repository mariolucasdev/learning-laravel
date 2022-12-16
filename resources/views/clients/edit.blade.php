@extends('app')

@section('titulo', 'Editar Cliente')

@section('conteudo')
    <h1> Editar Cliente</h1>
    <form action="{{ route('clients.update', $client->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" value="{{ $client->nome }}" class="form-control" id="nome" name="nome"
                placeholder="Digite o nome" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="endereco" value="{{ $client->endereco }}" class="form-control" id="endereco" name="endereco"
                placeholder="Digite o Endereço" required>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a observacão"> {{ $client->observacao }} </textarea>
        </div>

        <button class="btn btn-success" type="submit"> Enviar </button>
        <a class="btn btn-danger" href="{{ route('clients.index') }}"> Voltar </a>
    </form>
@endsection
