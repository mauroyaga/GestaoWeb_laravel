@extends('app')


@section('content')
<div class="container">
    <h1>Cadastrar Produto</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('produtos') }}">
                @csrf

                <div class="form-group">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" name="nome" class="form-control" id="nome" required>
                </div>

                <div class="form-group">
                    <label for="validade">Validade</label>
                    <input type="date" name="validade" class="form-control" id="validade" required>
                </div>

                <div class="form-group">
                    <label for="codigo_barra">Código de Barra</label>
                    <input type="text" name="codigo_barra" class="form-control" id="codigo_barra" required>
                </div>

                <div class="form-group">
                    <label for="estoque">Estoque</label>
                    <input type="number" name="estoque" class="form-control" id="estoque" required>
                </div>

                <!-- Outros campos do formulário de produtos -->

                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
@endsection
