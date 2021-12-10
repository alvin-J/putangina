<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employercontrol extends Controller
{
    //  
    public function employerprofile($id) {
        return view("employer.profileemployer");
    }

    public function listofapplicants() {
        return view("employer.listofapplicants");
    }

    public function openajob() {
        return view("employer.openajob");   
    }

    public function mainpage() {
        return view("employer.mainpage");
    }
}
