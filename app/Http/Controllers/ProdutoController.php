<?PHP

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
     // Exibe o formulário de cadastro de produtos
     public function create()
     {
         return view('produtos');
     }

     // Processa o formulário de cadastro de produtos
     public function store(Request $request)
     {
         $request->validate([
             'nome' => 'required',
             'validade' => 'required|date',
             'codigo_barra' => 'required|unique:produtos,codigo_barra',
             'estoque' => 'required|integer',
             // Outras regras de validação para os campos do produto
         ]);

         $produto = new Produto; // Cria uma nova instância do modelo Produto
         $produto->nome = $request->input('nome');
         $produto->validade = $request->input('validade');
         $produto->codigo_barra = $request->input('codigo_barra');
         $produto->estoque = $request->input('estoque');
         // Defina os outros campos do produto da mesma maneira

         $produto->save(); // Salva o novo produto no banco de dados

         return redirect()->route('produtos.criar')->with('success', 'Produto cadastrado com sucesso.');
     }
}
