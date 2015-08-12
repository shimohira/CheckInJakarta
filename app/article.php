<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $table = 'article';
    protected $fillable = ['id_category','title','desc','content','tag'];
}
