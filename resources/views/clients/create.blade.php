@extends('app')

@section('titulo', 'Novo Cliente')

@section('conteudo')
    <h1> Novo Cliente</h1>
    <form action="{{ route('clients.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="endereco" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço"
                required>
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" rows="3" placeholder="Digite a observacão"></textarea>
        </div>

        <button class="btn btn-success" type="submit"> Enviar </button>
        <a class="btn btn-danger" href="{{ route('clients.index') }}"> Voltar </a>
    </form>
@endsection
