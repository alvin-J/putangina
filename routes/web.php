<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Trabajocontrol;
use App\Http\Controllers\Employercontrol;
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
Route::get("/signup",[Trabajocontrol::class,"signup"]);

// worker
Route::get('/', [Trabajocontrol::class,"loginpage"]);
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
Route::get("/employer/",[Employercontrol::class,"mainpage"]);