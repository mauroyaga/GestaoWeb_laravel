<?PHP

// app/Fornecedor.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores'; //Nome da tabela do banco de dados

    protected $fillable = [
        'nome',
        'cnpj',
        'endereco',
        'cep',
    ];
}
