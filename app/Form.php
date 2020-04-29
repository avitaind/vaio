<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $fillable = ["email", "q2_ans", "q3_ans", "q4_ans", "q5_ans"];
}
