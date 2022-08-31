<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index () {
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 'status' => 'N', 'cnpj' => 'a']
    ];

        // Operador Ternario example
        $msg = isset($fornecedores[0]['cnpj']) ? 'CNPJ informado' : 'CNPJ nao informado';


        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
