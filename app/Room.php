<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $table = 'rooms';
    protected $primaryKey = 'id';
    public $timestamps = true;
}
