<?php

$this->get('/', 'PagesController@home');
$this->get('/quem-somos', 'PagesController@quemSomos');
$this->get('/contato', 'PagesController@contato');

$this->get('/produto', 'ProdutoController@index');

$this->get('/novo-produto', 'ProdutoController@novo');
$this->post('/insert-produto', 'ProdutoController@insert');

$this->get('/pesquisa', 'ProdutoController@pesquisar');
