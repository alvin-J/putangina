<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\jobcategory;
use App\jobsmodel;

class Employercontrol extends Controller
{
    //  
    public function employerprofile($id) {
        return view("employer.profileemployer");
    }

    public function listofapplicants() {
        return view("employer.listofapplicants");
    }

    public function openajob(Request $request) {
        $jobcats = jobcategory::all();

        $jcflds = [];
        foreach($jobcats as $jc) {
            array_push($jcflds,$jc->thejob);
        }

        if (isset($request->openthisjob)) {

            $duration     = null;
            if ($request->workonlyfor == 1) {
                $duration = $request->datefrom;
            } elseif ($request->workonlyfor == 0) {
                $duration = $request->datefrom."-".$request->dateto;
            }

            $jobs = jobsmodel::create([
                "employerid"  => $request->session()->get("userid"),
                "title"       => $request->jobcategory, 
                "definition"  => $request->jobdescription,
                "price"       => $request->jobprice,
                "range"       => $request->rangeinput,
                "workonlyfor" => $request->workonlyfor,
                "duration"    => $duration,
                "jobstatus"   => 0
            ]);

            if ($jobs->save()) {
                return redirect("/employer")->with("msg","You have successfuly opened a job");
            }
        }

        return view("employer.openajob")->with("data",$jcflds);   
    }

    public function mainpage(Request $request) {
        if ($request->session()->get("typeofaccount") != null && $request->session()->get("typeofaccount") == 1) {
            return view("employer.mainpage"); 
        }

        die("cannot access this page without permission");
    }

}
