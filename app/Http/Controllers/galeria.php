<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Galeria extends Controller {

    public function acessarGaleria() {
        // O parametro que esse metodo recebe é a variavel passada na URL
        return view('galeria');
    }

}
