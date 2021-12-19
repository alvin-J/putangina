<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jobsmodel extends Model
{
    //
    protected $table = "jobs";

    protected $fillable = [
        "employerid","title","definition","price","range","workonlyfor","duration","jobstatus"
    ];
}
