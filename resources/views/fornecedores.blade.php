
@extends('app')

@section('content')
<div class="container">
    <h1>Cadastrar Fornecedor</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('fornecedores') }}">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome do Fornecedor</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>

                <div class="form-group">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" name="cnpj" class="form-control" id="cnpj" required>
                </div>

                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" class="form-control" id="endereco">
                </div>

                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" class="form-control" id="cep">
                </div>

                <!-- Outros campos do formulário -->

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
