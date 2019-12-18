<?php


namespace App\Http\Controllers;

use App\Sudoku;
use Illuminate\Http\Request;

class SudokuController extends Controller {
    public function showOneSudoku(Request $request) {
        if ($request->has('id')) {
            $id = $request->get('id');
        } else {
            $id = rand(1, 1000000);
        }
        return response()->json(Sudoku::find($id));
    }
}
