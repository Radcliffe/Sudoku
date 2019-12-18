<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return view('sudoku');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('sudoku', ['uses' => 'SudokuController@showOneSudoku']);

    // $router->post('authors', ['uses' => 'AuthorController@create']);

    // $router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);

    // $router->put('authors/{id}', ['uses' => 'AuthorController@update']);
});
