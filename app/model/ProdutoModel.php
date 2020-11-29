<?php

namespace app\model;

use app\core\Model;

class ProdutoModel
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new Model();
    }

    public function insert(Object $params)
    {
        $sql = '';

        $params = [
            '' => ''
        ];
    }

    public function update(Object $params)
    {
        $sql = '';

        $params = [
            '' => ''
        ];
    }

    public function getAll()
    {
    }

    public function getById(int $id)
    {
    }
}
