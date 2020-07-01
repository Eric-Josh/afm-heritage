<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Tracts extends Model
{
    use SoftDeletes;
    use Sortable;

    public $sortable = ['id', 'title'];
    protected $fillable = ['no', 'lang', 'title', 'content', 'durl'];
}
