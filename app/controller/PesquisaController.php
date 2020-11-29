<?php

namespace app\controller;

use app\core\Controller;
use app\classes\Input;

class PesquisaController extends Controller
{
    public function pesquisar(){
    
        dd(Input::get('pes'));
    }
}
