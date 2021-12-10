<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Trabajocontrol extends Controller
{
    //
    public function signup() {
        return view("signup");
    }  

    public function loginpage() {
        return view("login");
    }

    public function search() {
        return view("worker.search");
    }

    public function openedjob() {
        return view("worker.openedjobs");
    }

    public function bidtojob() {
        return view("worker.bidtojob");
    }

    public function workerprofile($id) {
        //        echo "hello world: ".$id;
        return view('worker.profile');
    }

    public function mainpage() {
        return view("worker.workermainpage");
    }

    public function applications() {
        return view("worker.jobapplications");
    }

    public function jobprofile() {
        return view("worker.jobprofile");
    }
}
