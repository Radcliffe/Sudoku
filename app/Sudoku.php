<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sudoku extends Model {


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
        'puzzle', 'solution'
    ];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
