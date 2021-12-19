<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class signupmodel extends Model
{
    //
    protected $table = "userstbl";

    // username :: accepts email address
    protected $fillable = [
        'userid','username','password','emailaddress','typeofaccount','status'
    ]; 
}
