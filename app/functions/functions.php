<?php

/**
 * Exeibe um parâmetro de forma estruturada e finaliza a aplicação
 *
 * @param  mixed $params
 * @param  bool $die true se deseja encerrar a aplicação e false para o contrário
 * @return void
 */
function dd($params = [], $die = true)
{
    echo '<pre>';
    print_r($params);
    echo '</pre>';

    if ($die) die();
}

/**
 * Redireciona um usuário para a URL informada e finaliza a aplicação
 *
 * @param  string $url URL a ser redirecionada
 * @return void
 */
function redirect(string $url)
{
    header('Location: ' . $url);
    exit;
}
