<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class portalcontrol extends Controller
{
    //
    public function signup() {
        return view("signup");
    }

    public function loginpage(Request $request) {
        if ($request->session()->exists('username') != null) {
            if ($request->session()->get("typeofaccount") == 1) {
                // employer
                return redirect("/employer");
            } else {
                // worker 
                return redirect("/worker");
            }
        }

        return view("login");
    }

    public function dashboardselect() {

    }

    public function logout(Request $request) {
        $request->session()->flush();
        return redirect("/");
    }
}
