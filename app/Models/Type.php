<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = false;

    public const TERMOMETER = 1;
    public const MANOMETER = 2;
    public const TACHOMETER = 3;
}
