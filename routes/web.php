<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trabajocontrol;
use App\Http\Controllers\Employercontrol;
use App\Http\Controllers\portalcontrol;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//main
Route::get("/",function(){
	return redirect("/login");
});

// portal 
// sign up
Route::get("/signup",[portalcontrol::class,"signup"]);
Route::post("/signup/proceed",[portalcontrol::class,"signup"])->name("signupform")->middleware('signinup');

// login
Route::get('/login', [portalcontrol::class,"loginpage"]);
Route::post("/login/postlogin",[portalcontrol::class,"dashboardselect"])->name("signinform")->middleware("signincheck");
Route::get("/logout",[portalcontrol::class,"logout"]);

// worker
Route::get("/worker/search",[Trabajocontrol::class,"search"]);
Route::get("worker/openedjobs",[Trabajocontrol::class,"openedjob"]);
Route::get("worker/application",[Trabajocontrol::class,"bidtojob"]);
Route::get("worker/profile/{workerid}",[Trabajocontrol::class,"workerprofile"]);
Route::get("/worker",[Trabajocontrol::class,"mainpage"]);
Route::get("/worker/applications",[Trabajocontrol::class,"applications"]);
Route::get("/worker/job/{jobid}",[Trabajocontrol::class,"jobprofile"]);

// Route::get("/employer/list",[Trabajocontrol::class,"listofworkers"]);

// employer
Route::get("employer/profile/{empid}",[Employercontrol::class,"employerprofile"]);
Route::get("employer/listofapplicants",[Employercontrol::class,"listofapplicants"]);
Route::get("employer/openajob",[Employercontrol::class,"openajob"]);
Route::get("/employer",[Employercontrol::class,"mainpage"]);


// openjob
Route::post("/employer/openajob",[Employercontrol::class,"openajob"])->name("postopenjob");