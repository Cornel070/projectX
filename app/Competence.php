<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    protected $fillable = ['comp_name', 'comp_doc','exp_date', 'user_id'];
}
