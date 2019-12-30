<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sudoku extends Model {

    static function swap(&$array, $i, $j) {
        $t = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $t;
    }

    static function shuffle(&$array, &$index) {
        $n = count($array);
        for ($i = 0; $i < $n - 1; $i++) {
            Sudoku::swap($array, $i, $i + ($index % ($n - $i)));
            $index = intdiv($index, $n - $i);
        }
    }

    static function permute(&$sudoku, $index) {
        $values = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        Sudoku::shuffle($values, $index);
        array_unshift($values, 0);
        $x = $y = [[0, 1, 2], [3, 4, 5], [6, 7, 8]];
        Sudoku::shuffle($x, $index);
        Sudoku::shuffle($x[0], $index);
        Sudoku::shuffle($x[1], $index);
        Sudoku::shuffle($x[2], $index);
        Sudoku::shuffle($y, $index);
        Sudoku::shuffle($y[0], $index);
        Sudoku::shuffle($y[1], $index);
        Sudoku::shuffle($y[2], $index);
        $rows = array_merge($x[0], $x[1], $x[2]);
        $cols = array_merge($y[0], $y[1], $y[2]);
        $i = 0;
        $puzzle = $sudoku['puzzle'];
        $solution = $sudoku['solution'];
        for ($i = 0; $i < 81; $i++) {
            $x = $i % 9;
            $y = intdiv($i, 9);
            if ($index) {
                $z = 9 * $rows[$x] + $cols[$y];
            }
            else {
                $z = 9 * $cols[$y] + $rows[$x];
            }
            $puzzle[$i] = $values[$sudoku['puzzle'][$z]];
            $solution[$i] = $values[$sudoku['solution'][$z]];
        }
        $sudoku['puzzle'] = $puzzle;
        $sudoku['solution'] = $solution;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'puzzle', 'solution', 'clues',
    ];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
