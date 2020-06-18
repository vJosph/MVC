<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Http\Controllers\VendedoresController;
use Tests\TestCase;

class VendedoresControllerTest extends TestCase
{   
    private $vendedores;
    public function __construct(){
        parent::__construct();
        $this->vendedores = new VendedoresController;
    }

    
    public function CheckVendedor()
    {
        $this->assertTrue($this->vendedores->checkVendedor(1));
        $this->assertFalse($this->vendedores->checkVendedor(0));
    }

    public function getVendedor(int $idVendedor):?string
    {
    $vendedores = [ 1 => 'Marcos',
    2 => 'Amanda',
    3 => 'Lucas',
    4=> 'Regina'];  
    return $vendedores[$idVendedor] ?? null;
    }
  
    public function Index()
    {
    $this->assertJSON($this->vendedores->getJSON());
    }

    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    
}
