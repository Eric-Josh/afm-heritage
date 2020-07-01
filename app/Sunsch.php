<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kyslik\ColumnSortable\Sortable;

class Sunsch extends Model
{
    use SoftDeletes;
    use Sortable;

    public $table = 'sunsch';
    public $sortable = ['id', 'title'];
    protected $fillable = ['title', 'bref', 'lessno', 'classv', 'mverse', 'cref', 'notes', 'ques', 'classv2', 'lang', 'bk'];
}
