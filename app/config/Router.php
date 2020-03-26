<?php

$this->get('/', function () {
    echo 'HOME!!! :D';
});

$this->get('/home', function () {
    echo 'Estou na HOME!!! :D';
});


$this->get('/about/test', function () {
    echo 'Estou na about test!!! :D';
});

$this->get('/categoria', 'MyController@method');
