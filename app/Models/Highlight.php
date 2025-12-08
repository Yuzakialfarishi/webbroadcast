<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    protected $fillable = ['title', 'description', 'photo'];

    public $timestamps = true;
}
