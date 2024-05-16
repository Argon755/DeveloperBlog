<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{

    use softDeletes;
    
    protected $table = 'tags';
    protected $guarded = false;
}
