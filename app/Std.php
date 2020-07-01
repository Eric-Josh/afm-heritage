<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Std extends Model
{   
    use Sortable;
    use SoftDeletes;
    public $table = 'std';
    protected $fillable = ['title','content','lang'];
    public $sortable = ['id', 'title'];
}
