<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tags extends Model
{
    use SoftDeletes;
    Protected $table="watch_tbl_tags";
    protected $fillable = ['user_id','tag','descripcion'];
}
