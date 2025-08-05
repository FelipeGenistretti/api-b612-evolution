<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

use function PHPUnit\Framework\isString;

class carroController extends Controller
{
    public function consultaID($id)
    {
        $carro = Carro::find($id);

        if(empty($carro)){
            return response()->json(['erro' => 'Carro não encontrado'], 404);
        }
        return response()->json($carro);
    }
}
