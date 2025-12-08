<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['nama','deskripsi','logo','visi','misi','jadwal'];
}
