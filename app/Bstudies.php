<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Bstudies extends Model
{
    use SoftDeletes;
    use Sortable;

    public $table = "bible_study";
    
    protected $fillable = ['lesson_no', 'class', 'title', 'text', 'mverse', 'intro', 'items', 'conclusion', 'lang'];
    public $sortable = ['id', 'title'];
}
