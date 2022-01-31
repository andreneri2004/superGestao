<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $titulo = 'Fornecedores';
        $numero = 20;
        $variavelVazia = '';
        $alunos = [];
        $fornecedores = [

            0 => ['nome' => 'Compaq', 'status' => 'N', 'cnpj' => '1111.1111.1111'],
            1 => ['nome' => 'Samsung', 'status' => 'S', 'cnpj' => '1111.1111.1111'],
            2 => ['nome' => 'Dell', 'status' => 'N', 'cnpj' => '1111.2222.1111'],
            3 => ['nome' => 'Positivo', 'status' => 'S', 'cnpj' => '1111.1111.3333'],
            4 => ['nome' => 'Acer', 'status' => 'N', ],

        ];
      
        return view('app.fornecedores', compact('fornecedores', 'titulo', 'numero', 'variavelVazia', 'alunos'));
    }
}
