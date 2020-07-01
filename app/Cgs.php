<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Cgs extends Model
{
    use SoftDeletes;
    use Sortable;
    protected $fillable = ['cgs_no', 'title', 'lyrics', 'lang'];
    public $sortable = ['id', 'title'];
}
