<?PHP

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos'; // Nome da tabela no banco de dados

    protected $fillable = [
        'nome',
        'validade', 
        'codigo_de_barra', 
        'estoque'
    ]; 

}