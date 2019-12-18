<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

$router->get('/', function () use ($router) {
    return view('sudoku');
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('sudoku', ['uses' => 'SudokuController@showOneSudoku']);
});
