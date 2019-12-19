<?php


namespace App\Http\Controllers;

use App\Sudoku;
use Illuminate\Http\Request;

class SudokuController extends Controller {
    public function showOneSudoku(Request $request) {
        $size = $request->get('size', 9);
        if ($size != '9') {
            return response()->json(['error' => 'The value of \'size\' must be 9. Other values are not supported yet.']);
        }

        if ($request->has('id')) {
            $id = (int) $request->get('id');
            if ($id < 1 || $id > 1000000) {
                return response()->json(['error' => 'The value of \'id\' must be an integer between 1 and 1000000 inclusive.']);
            }
        } else {
            $id = rand(1, 1000000);
        }

        $show_puzzle = $request->get('puzzle', '1');
        $show_solution = $request->get('solution', '1');
        $sparse = $request->get('sparse', '0');
        if ($request->has('variant')) {
            $variant = (int) $request->get('variant');
        } else {
            $variant = rand(0, 1218998108159);
        }

        $sudoku = Sudoku::find($id);
        $sudoku['url'] = "http://radcliffe.cc/api/sudoku?size=9&id=$id&variant=$variant&sparse=$sparse";
        $sudoku['variant'] = $variant;
        Sudoku::permute($sudoku, $variant);
        if ($sparse == '1') {
            $puzzle = [];
            $solution = [];
            $strlen = strlen($sudoku['solution']);
            for ($i = 0; $i < $strlen; $i++) {
                $cell = [
                    'x' => $i % $size,
                    'y' => (int) ($i / $size),
                    'value' => (int) $sudoku['solution'][$i],
                ];
                $solution[] = $cell;
                if ($sudoku['puzzle'][$i] != 0) {
                    $puzzle[] = $cell;
                }
            }
            $sudoku['puzzle'] = $puzzle;
            $sudoku['solution'] = $solution;
        }
        if ($show_puzzle == '0') {
            unset($sudoku['puzzle']);
        }
        if ($show_solution == '0') {
            unset($sudoku['solution']);
        }
        return response()->json($sudoku);
    }
}
