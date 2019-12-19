<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

$router->get('/', function () use ($router) {
    return view('sudoku', [
        'params' => [
            'id' => strval(rand(1, 1000000)),
            'variant' => strval(rand(0, 1218998108159)),
        ],
    ]);
});

$router->get('/sudoku[/{id}[/{variant}]]', function ($id=null, $variant=null) use ($router) {
    if ($id === null) {
        $id = strval(rand(1, 1000000));
    }
    if ($variant == null) {
        $variant = strval(rand(0, 1218998108159));
    }
    $data = [
        'params' => [
            'id' => $id,
            'variant' => $variant,
        ],
    ];
    return view('sudoku', $data);
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('sudoku', ['uses' => 'SudokuController@showOneSudoku']);
});
