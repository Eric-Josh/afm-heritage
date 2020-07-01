<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class language extends Model
{
    public $table = 'language';
    protected $fillable = ['id', 'type', 'options'];
}
