<?php

namespace app\controller;

use app\core\Controller;
use app\classes\Input;

class PesquisaController extends Controller
{
    public function pesquisar()
    {

        $param = Input::get('pes');

        $this->load('pesquisa/main', [
            'termo' => $param
        ]);
    }
}
