<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Fornecedores extends Controller
{
    public function fornecedores(){
        $fornecedores = ['Fornecedor 1'];
        $fornecedores2 = [
            0 => ['nome'=>'Fornecedor 2','status'=>'S','cnpj'=>'123123112'],
            1 => ['nome'=>'Fornecedor 3','status'=>'N']
        ];
        return view('app.fornecedor.index',compact('fornecedores','fornecedores2'));
    }
}
