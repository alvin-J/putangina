<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobcategory extends Model
{
    //

    protected $table = "jobcategory";

    protected $fillable = [
        "thejob"
    ];
}
