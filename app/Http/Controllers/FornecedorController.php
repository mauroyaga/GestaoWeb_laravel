<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fornecedor; 

class FornecedorController extends Controller
{
    // Exibe o formulário de cadastro de fornecedores
    public function create()
    {
        return view('fornecedores');
    }

    // Processa o formulário de cadastro de fornecedores
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            // Outras regras de validação para os campos do fornecedor
        ]);

        $fornecedor = new Fornecedor; // Cria uma nova instância do modelo Fornecedor
        $fornecedor->nome = $request->input('nome');
        $fornecedor->cnpj = $request->input('cnpj');
        $fornecedor->endereco = $request->input('endereco');
        $fornecedor->cep = $request->input('cep');

        $fornecedor->save(); // Salva o novo fornecedor no banco de dados

        return redirect()->route('fornecedores.criar')->with('success', 'Fornecedor cadastrado com sucesso.');
    }
}
