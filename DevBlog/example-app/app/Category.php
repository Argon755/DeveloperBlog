<?php

namespace App;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    // use HasFactory;
    use SoftDeletes;

    protected $table = 'categories';
    protected $guarded = false;
}
