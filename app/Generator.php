<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generator extends Model
{
    public $table = 'Generator';
    protected $fillable = ['uniq_code', 'name'];
}
