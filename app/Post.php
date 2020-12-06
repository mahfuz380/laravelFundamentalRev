<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //

    use SoftDeletes;
   // protected $table = 'posts'; // if table name and class name is not same then we have to define it
    //protected $primaryKey = 'postID'; // if primary key of the table is not 'id' then we have to define it

    protected $dates = ['deleted_at'];

    protected $fillable = [

        'title','content'
    ];



}
