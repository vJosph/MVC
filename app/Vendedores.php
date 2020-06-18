<?php

namespace App;
use App\Http\Controllers\VendedoresController;
use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    protected $fillable = ['id', 'nome'];

    protected $table = 'Vendedores';

    public function checkVendedor( int $idVendedor ): bool
    {
        $vendedores = [ 1 => 'Marcos',
        2 => 'Amanda',
        3 => 'Lucas',
        4 => 'Regina'];
        return array_key_exists( $idVendedor, $vendedores);
        
    }

    public function getVendedor( int $idVendedor ): ?string
    {
    return null;
    }

    

    public function getJSON(): string
    {
    return json_encode(['nome' => 'luiz']);
    }


    

}


