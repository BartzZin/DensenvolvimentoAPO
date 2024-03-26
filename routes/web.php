<?php

/** @var \Laravel\Lumen\Routing\Router $router */
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('produtos', 'ProdutoController@index');
    $router->get('produtos/{id}', 'ProdutoController@show');
    $router->post('produtos', 'ProdutoController@store');
    $router->put('produtos/{id}', 'ProdutoController@update');
    $router->delete('produtos/{id}', 'ProdutoController@destroy');

    $router->get('fornecedores', 'FornecedorController@index');
    $router->get('fornecedores/{id}', 'FornecedorController@show');
    $router->post('fornecedores', 'FornecedorController@store');
    $router->put('fornecedores/{id}', 'FornecedorController@update');
    $router->delete('fornecedores/{id}', 'FornecedorController@destroy');

    $router->get('ProdutoFornecedor', 'ProdutoFornecedorController@index');
    $router->get('ProdutoFornecedor/{id}', 'ProdutoFornecedorController@show');
    $router->post('ProdutoFornecedor', 'ProdutoFornecedorController@store');
    $router->put('ProdutoFornecedor/{id}', 'ProdutoFornecedorController@update');
    $router->delete('ProdutoFornecedor/{id}', 'ProdutoFornecedorController@destroy');
});
$router->get('/', function () use ($router) {
    return $router->app->version();
});
