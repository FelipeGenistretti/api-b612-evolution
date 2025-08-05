<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
class carroController extends Controller
{
    public function consultaID($id)
    {
        //REALIZA A BUSCA NO BANCO COM ID QUE FOI RECEBIDO
        
        return response()->json(Carro::find($id));
    }
}
