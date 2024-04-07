<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    public $timestamps = false;
    protected $fillable = ['type_id', 'value'];
}
