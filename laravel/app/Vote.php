<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    // use the votes table
    protected $table = 'votes';

    protected $fillable = ['votes'];
}
